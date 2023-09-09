<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    public function index(Recruitment $recruitment)
    {
        return view('posts.index')->with(['posts' => $post->get()]); 
    }
}
