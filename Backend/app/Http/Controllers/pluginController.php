<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use Sheets;
use App\Service\googleSheet;

class pluginController extends Controller
{
    public function getPluginInfo(){

        $response=new googleSheet();
        $response->saveDataToSheet();

        return "success";

    }
}
