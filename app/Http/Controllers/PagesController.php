<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 18/09/2016
 * Time: 21:35
 */

namespace App\Http\Controllers;

// dit om de Post Controller te kunnen gebruiken op de Page controller
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        /**
         * kan ook met pages/welcome ipv pages.welcome
         * iets meer Object oriented OOP
         */
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getKlas()
    {
        $klasgenoten = [
            'stefan',
            'danny',
            'davy',
            'pascal',
            'mohammet'
        ];

        return view('pages.klas')->with('klasgenoten', $klasgenoten);
    }

    /**
     * onderstaande is maar als oefening
     */
    public function getOldabout()
    {
        $first = 'Stefan';
        $last = 'Vandenborne';
        $fullname = $first . " " . $last;
        $email = 'stefanvandenborne@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        /**
         * De minder mooie versie
         * ->with("fullname" , $fullname)
         * De mooiere versie
         * ->withFullname($fullname)->withEmail($email)
         * De laatst gebruikte via een array $data
         */
        return view('pages.oldabout')->withData($data);
    }
}