<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'The Office'
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
