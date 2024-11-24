<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller {
    function invoice(Request $request, $invoiceId) {
        if (request()->has('download')) {
            $type = $request->input('download');
            //color print or grayscale
            $printType = $request->input('print');
            if ($printType == 'color') {
                return response("Downloading Colored {$type} Invoice with ID: {$invoiceId}");
            } else if ($printType == 'grayscale') {
                return response("Downloading Grayscale {$type} Invoice with ID: {$invoiceId}");
            }
            return response("Downloading {$type} Invoice with ID: {$invoiceId}");
        }

        if ($request->has('email')) {
            $email = $request->input('email');
            if ($email == 1) {
                return response("Emailing Invoice with ID: {$invoiceId}");
            }
        }
        return response("Displaying Invoice with ID: {$invoiceId}");
    }

    function requestExample(Request $request){
        $greetings = $request->input('greetings',"Hello");
        return response("Greetings: {$greetings}");
    }
}
