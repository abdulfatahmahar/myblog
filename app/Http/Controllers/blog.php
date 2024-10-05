<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blog extends Controller
{
    public function view_index_page(){
        return view('index');
    }

    public function view_about_page(){
        return view('about');
    }

    public function view_contact_page(){
        return view('contact-us');
    }


public function insert_contact_data(Request $req){

    $req->validate([

'name'=>'required',
'email'=>'required',
'subject'=>'required',
'message'=>'required',

],[

    'name'=>'Name Field is Empty',
    'email'=>'Email Field is Empty',
    'subject'=>'Subject Field is Empty',
    'message'=>'Message Field is Empty',



]);
    $insert_contact_data = DB::table('contact')->insertOrIgnore([

'Your_ Name'=>$req->name,
'Email'=>$req->email,
'Sub_Title'=>$req->subject,
'Message'=>$req->message,


    ]);


}


    public function view_gallery_page(){
        return view('gallery-post');
    }

    public function view_magazine_page(){
        return view('magazine');
    }

    public function view_single_page(){
        return view('single-portfolio');
    }

    public function view_standard_page(){
        return view('standard-post');
    }

    public function view_video_page(){
        return view('video-post');
    }

    public function view_portfolio_page(){
        return view('portfolio');
    }

}
