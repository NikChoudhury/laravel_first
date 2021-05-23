<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index($id='') {
    	// Simple return
    	// echo "Hello Form User Controller!! " .$id;

    	// Return a veiw with parameter
    	// return view('user_index',array('id' => $id)); 

    	// Calling a view inside a folder
    	// return view('user.user_index',array('id' => $id));

    	// Calling Multiple Views
    	return view('user.header').view('user.nav').view('user.user_index',array('id' => $id)).view('user.footer');

    }

    function about() {
    
    	return view('user.header').view('user.nav').view('user.about').view('user.footer');
    }

      function survice() {
    
    	return view('user.header').view('user.nav').view('user.survice').view('user.footer');
    }
}
