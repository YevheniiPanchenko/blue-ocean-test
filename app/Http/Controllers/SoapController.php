<?php

namespace App\Http\Controllers;

class SoapController extends Controller
{
    public function index()
    {
        $client= new \SoapClient('https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL');
        $data = $client->GetByName();
        $xml = simplexml_load_string($data->GetByNameResult->any);
        $names = [];
        foreach ($xml->children()->children() as $element) {
            $name = (string) $element->Name;
            if (preg_match('/.+,[a]/', strtolower($name), $matches)) {
                $names[] = $name;
            }
        }
        return view('soap', compact('names'));
    }
}
