<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// use App\Post toevoegen dit omdat de Post class gebruikt wordt onderaan
// in de function getSingle
use App\Post;

class BlogController extends Controller
{
    //$slug = name given in de route file
    public function getSingle($slug){
        //enkel om te testen in de url blog/een-slug-opgeven
        // moet een page terug geven met de slug getoond
        // nu komt het erop aan de volledig content te tonen
        // return $slug;

        //fetch from the DB based on slug
            $post = Post::where('slug', '=', $slug)->first();

        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
