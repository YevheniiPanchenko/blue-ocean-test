<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class XmlController extends Controller
{
    public function index()
    {
        $xml = simplexml_load_file(Storage::disk('public')->path('file.xml'));
        $sum = array_sum((array) $xml->Param->BetInfo->BetAmount);
        return view('xml', compact('sum'));
    }
}
