<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use Sheets;

class pluginController extends Controller
{
    public function getPluginInfo(){

        $data = Http::get('https://api.wordpress.org/plugins/info/1.0/simply-schedule-appointments.json');
        $data=json_decode($data);
        $version=$data->version;
        $downloaded=$data->downloaded;
        $ratings=$data->ratings;
        $five_stars_ratings=$ratings->{5};
        $other_ratings=$ratings->{4}+$ratings->{3}+$ratings->{2}+$ratings->{1};
        $date = date('Y-m-d');

        return response()->json([
            'date'=>$date,
            'version' => $version,
            'downloaded' => $downloaded,
            'five_stars_ratings'=>$five_stars_ratings,
            'other_ratings'=>$other_ratings
        ], 200);
    }
}
