<?php

namespace App\Service\NeswletterService;

use Illuminate\Support\Facades\Log;
use MailchimpMarketing\ApiClient;
class NewsletterService implements NewsletterServiceInterface
{
   private ApiClient $client;
   private string $listId;
    public function __construct()
    {
        $this->client = new ApiClient();
        $this->client->setConfig([
                'apiKey' => env('NEWSLETTER_API_KEY'),
                'server' => env('MAILCHIMP_SERVER_PREFIX'),
                ]);
        $this->listId = env('NEWSLETTER_LIST_ID');
    }
    public function addMemberToList(string $email, string $name, string $source, ?array $tags = []): array
    {
        try {
            $response = $this->client->lists->addListMember($this->listId, [
                'email_address' => $email,
                'status' => "pending",
                'merge_fields' => [
                    'FNAME' => $name,
                    'SOURCE' => $source,
                ],
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
             if (str_contains($e->getMessage(), 'is already a list member')) {
                 return ['status' => 'exists', 'response' => null];
            }

            throw new \Exception('Error al agregar al listado de correo');
        }
        return ['status' => 'success', 'response' => $response];
    }
}
