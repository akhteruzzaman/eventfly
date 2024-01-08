<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{


    protected $discountCodesList = [];

    public function fetchDiscountCodes()
    {
        $shop = Auth::user();

        // Fetching all price rules
        $response = $shop->api()->rest('GET', '/admin/price_rules.json');

        // Check if the 'price_rules' key exists in the response
        if (isset($response['body']['price_rules'])) {
            $priceRules = $response['body']['price_rules'];

            // Iterate over each price rule
            foreach ($priceRules as $priceRule) {
                // Get the price rule ID
                $priceRuleId = $priceRule['id'];

                // Fetch the discount codes for the current price rule
                $discountCodesResponse = $shop->api()->rest('GET', "/admin/price_rules/{$priceRuleId}/discount_codes.json");

                // Check if the 'discount_codes' key exists in the response
                if (isset($discountCodesResponse['body']['discount_codes'])) {
                    // Extract the discount codes from the response body
                    $discountCodes = $discountCodesResponse['body']['discount_codes'];

                    // Iterate over each discount code and add it to the list
                    foreach ($discountCodes as $discountCode) {
                        $code = $discountCode['code'];
                        //$amount = $discountCode['amount'];

                        // Build an array with discount code details
                        $this->discountCodesList[] = [
                            'code' => $code,
                            //'amount' => $amount,
                        ];
                    }
                }
            }
        } else {
            // Handle the case when the 'price_rules' key is not present in the response
            dd($response);
        }
    }


    public function dashboard()
    {
        $this->fetchDiscountCodes();
        return view('pages.dashboard', ['discountCodesList' => $this->discountCodesList]);
    }
}
