<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team_member;

class AboutUsController extends Controller
{
    function index(Request $request) {
        $team_members = Team_member::get();

        $data = [
            'team_members'=>$team_members,
        ];
        
        return view('pages/about_us')->with($data);
    }
}
