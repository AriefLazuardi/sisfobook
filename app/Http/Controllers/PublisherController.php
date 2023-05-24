<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
      $publisher = Publisher::all();
      return view('publisher/index',['publisher'=>$publisher]);
    }
}
