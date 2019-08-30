<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Photo;
use App\Contact;
use App\Mail\SendMail;


class HomeController extends Controller
{
    public function index(){
        $projects = Project::all();
    	return view('user.index', compact('projects'));
    }

    public function project(project $project){
        $project = Project::where('id', $project->id)->first();
        return view('user.project', compact('project'));
    }

    public function about(){
    	return view('user.about');
    }

    public function contact(){
    	return view('user.contact');
    }

    public function contactInput(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response'=>'required|recaptcha',
        ]);



        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save(); 

        \Mail::to('imthecreativeartist@gmail.com')->queue(new SendMail($contact));

        return redirect()->back()->with(['message' => 'Thank you for connecting me.  Will contact ASAP!']);
    }
}
