<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeGeneratorController extends Controller
{
     /**
         * Write code on Method
         *
         * @return response()
         */
        public function index()
        {
            return view('barcode');
        }
        /**
         * image generate barcode
         *
         * @return response()
         */
        public function imgbarcode()
        {
            return view('img-barcode');
        }
}
