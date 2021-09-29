<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /** 
     * This function gets the blog
     */
    protected function getBlog(){
        return view('frontpages.blog');
    }
    /** 
     * This function gets the add blog form
     */
    protected function addBlogEntry(){
        return view('frontpages.add_blog');
    }
}
