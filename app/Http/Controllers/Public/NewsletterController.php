<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Public\CreateLeadRequest;
use App\Service\LeadsService\LeadsRegisterService;
use App\Service\LeadsService\LeadsRegisterServiceInterface;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class NewsletterController extends Controller
{
    private LoggerInterface $logger;
    public function __construct(private LeadsRegisterServiceInterface $leadsRegisterService)
    {
        $this->logger = app(LoggerInterface::class);
    }

    public function index(Request $request)
    {
        return view('public.subscriber');
    }

    public function create(CreateLeadRequest $request)
    {
         if (! $this->leadsRegisterService->exists($request->get('email')))
         {
            $tags = null;
             if ($request->get('tags')) {
                $tags = explode(',', $request->get('tags'));
                $tags = array_map('trim', $tags);
            }


            try {
                $this->leadsRegisterService->create(
                    $request->get('email'),
                    $request->get('name'),
                    null,
                    $request->get('source'),
                    $tags,
                    $request->get('product_id') ? intval($request->get('product_id')) : null,
                    $request->get('episode_id') ? intval($request->get('episode_id')) : null
                );

            }catch (\Exception $e){
                $this->logger->error($e->getMessage());

                return redirect()->back()->with('error', 'Hubo un problema con la suscripción. Por favor, inténtalo nuevamente.');

            }
         }
        return view('public.newsletter-success');
    }

    public function thanks()
    {
        return view('public.newsletter-success');
    }
}
