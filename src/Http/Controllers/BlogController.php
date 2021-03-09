<?php

namespace shukaljasmin\blog\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use shukaljasmin\blog\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return Blog::where('status','active')->with('comment')->get();
    }

    public function getDetail($slg)
    {
        /*
        * slg
        * select * where slg='slg' limit 1
        */
        return Blog::where('slg',$slg)->with('comment')->firstOrFail();
    }
    
}
