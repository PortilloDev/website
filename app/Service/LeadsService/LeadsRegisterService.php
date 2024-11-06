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
        ?int $episodeId = null
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
                    'episode_id' => $episodeId
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

    public function exists(string $email)
    {
        return $this->lead::where('email', $email)->exists();
    }
}
