<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PonchoPay\createToken;
use PonchoPay\Client;
use Config;


class PonchoPayController extends Controller
{
    //

    function poncho_pay_init_single_invoice(){
        $metadata = 'any data or reference for this payment';
        $integrationKey = Config::get('app.PONCHOPAY_INTEGRATION_KEY');
        // dd($integrationKey);
        $token = createToken($integrationKey, $metadata);
        

        // dd($integrationKey,$token);

        $urn = '2505017';
        $amount = 1256; // £12.56
        $metadata = 'student invoice payment';
        $email = 'info@idealcentre.co.uk';

        // $integrationKey = '...';
        $client = new Client($integrationKey);
        $url = $client->initiatePayment([
        'metadata' => $metadata,
        'urn' => $urn,
        'amount' => $amount,
        'email' => $email,
        ]);
        // dd($integrationKey,$token,$url);

    }

}
