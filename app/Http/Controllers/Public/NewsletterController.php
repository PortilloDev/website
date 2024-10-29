<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Service\SubscriberService\SubscriberRegisterService;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class NewsletterController extends Controller
{
    private SubscriberRegisterService $subscriberRegisterService;
    private LoggerInterface $logger;
    public function __construct()
    {
        $this->subscriberRegisterService = new SubscriberRegisterService();
        $this->logger = app(LoggerInterface::class);
    }

    public function index(Request $request)
    {
        return view('public.subscriber');
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
        ]);

         if ($this->subscriberRegisterService->exists($request->get('email')))
         {
                return redirect()->back()->with('email', 'El email ya se encuentra registrado');
         }

        try {
            $this->subscriberRegisterService->save(
                $request->get('email'),
                $request->get('name'),
                null,
            );

        }catch (\Exception $e){
            $this->logger->error($e->getMessage());

            return redirect()->back()->with('error', 'Hubo un problema con la suscripción. Por favor, inténtalo nuevamente.');

        }

        return view('public.newsletter-success');
    }
}
