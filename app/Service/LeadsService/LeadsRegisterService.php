<?php

namespace App\Service\LeadsService;

use App\Models\Lead;
use App\Service\NeswletterService\NewsletterService;
use App\Service\NeswletterService\NewsletterServiceInterface;
use Illuminate\Support\Facades\Log;

class LeadsRegisterService implements LeadsRegisterServiceInterface
{
    private Lead $lead;

    public function __construct(private NewsletterServiceInterface $newsletterService)
    {
        $this->lead = new Lead();
    }

    public function create(
        string $email,
        string  $name,
        ?string $lastname,
        ?string $source = Lead::SOURCE_WEB,
        ?array $tags = null,
        ?int $productId = null,
        ?int $episodeId = null,
        ?int $promotionId = null,
    ): array {

        try {
            $lead = $this->lead->create(
                [
                    'email' => $email,
                    'name' => $name,
                    'lastname' => $lastname,
                    'status' => Lead::STATUS_SUBSCRIBED,
                    'source' => $source,
                    'product_id' => $productId,
                    'episode_id' => $episodeId,
                    'promotion_id' => $promotionId,
                ]
            );

            if ($tags) {
                $tagIds = \App\Models\Tag::whereIn('name', $tags)->pluck('id')->toArray();
                $lead->tags()->attach($tagIds);
            }

            $response =  $this->newsletterService->addMemberToList($email, $name, $source, $tags);

        }catch (\Exception $e){
            if($e->getCode() == 23000){
                Log::info(printf('El email %s ya se encuentra registrado', $email));
            }
            throw new \Exception($e->getMessage());
        }
        return $response;
    }

    public function existInService(string $email): bool|object
    {
        return $this->newsletterService->existMember($email);

    }

    public function exist(string $email): bool
    {
        $member = $this->existInService($email);
        if (!is_bool($member)) {
            $existInDb = $this->lead::where('email', $email)->exists();
            if (!$existInDb) {
                $this->lead::create(
                    [
                        'email' => $email,
                        'name' => $member->full_name,
                        'status' => $member->status,
                        'source' => $member->source,
                    ]
                );
            }
            return true;
        }

        return $this->lead::where('email', $email)->exists();
    }
}
