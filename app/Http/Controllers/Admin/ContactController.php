<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
    	$messages = Contact::all();
    	return view('admin.contact', compact('messages'));
    }
}
