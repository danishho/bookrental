<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $re= request('q');
        dd($re);
//        $jobs = Job::query()
//            ->with(['employer', 'tags'])
//            ->where('title', 'LIKE', '%'.request('q').'%')
//            ->get();
//
//        return view('results', ['jobs' => $jobs]);
    }
}
