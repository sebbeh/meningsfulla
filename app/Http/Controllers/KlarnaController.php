<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Payum\LaravelPackage\Controller\PayumController;
use Payum\Core\Model\ArrayObject;

class KlarnaController extends PayumController
{
    public function prepareExpressCheckout()
    {
        $storage = $this->getPayum()->getStorage(ArrayObject::class);

        $details = $storage->create();
        $details['purchase_country'] = 'SE';
        $details['purchase_currency'] = 'SEK';
        $details['locale'] = 'sv-se';
        $storage->update($details);

        $captureToken = $this->getPayum()->getTokenFactory()->createCaptureToken('klarna', $details, 'payment_done');

        return \Redirect::to($captureToken->getTargetUrl());
    }
}
