<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend.service');
    }

    public function premium_matrimony_service()
    {
        return view('frontend.premium-matrimony-service');
    }

    public function fastrack_matrimony_service()
    {
        return view('frontend.fastrack-matrimony-service');
    }

    public function personalized_matrimony_service()
    {
        return view('frontend.personalized-matrimony-service');
    }

    public function gold_matrimony_service()
    {
        return view('frontend.gold-matrimony-service');
    }

}
