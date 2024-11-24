<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller {
    function download() {
        return response("Downloading a File");
    }

    // function downloadInvoice($invoiceId) {
    //     return response("Downloading PDF Invoice with ID: {$invoiceId}");
    // }
    
    // function downloadInvoiceWithType($invoiceId, $fileType) {
    //     return response("Downloading {$fileType} Invoice with ID: {$invoiceId}");
    // }

    function downloadInvoice($invoiceId, $fileType="PDF") {
        return response("Downloading {$fileType} Invoice with ID: {$invoiceId}");
    }

    function error() {
        return response("Error! No Invoice ID provided", 404);
    }
}

