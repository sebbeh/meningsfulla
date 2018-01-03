<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Payum\Core\Request\GetHumanStatus;
use Payum\LaravelPackage\Controller\PayumController;

class PaymentController extends PayumController
{
    public function done($payum_token)
    {
        /** @var Request $request */
        $request = \App::make('request');
        $request->attributes->set('payum_token', $payum_token);

        $token = $this->getPayum()->getHttpRequestVerifier()->verify($request);
        $gateway = $this->getPayum()->getGateway($token->getGatewayName());

        $gateway->execute($status = new GetHumanStatus($token));

        return \Response::json(array(
            'status' => $status->getValue(),
            'details' => iterator_to_array($status->getFirstModel())
        ));
    }
}
