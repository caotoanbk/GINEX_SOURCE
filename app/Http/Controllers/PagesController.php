<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function surveyIndex ()
    {
        return view('pages.survey_home');
    }
}
