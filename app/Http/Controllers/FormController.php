<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;

class FormController extends Controller
{

    public function welcome()
    {
    	return view('forms.welcome');
    }

    public function generic()
    {
    	return view('forms.generic');
    }

    public function elements()
    {
    	return view('forms.elements');
    }

    public function store()
    {
    	// $form = new Form;

    	// $form->name = request('name');
    	// $form->email = request('email');
    	// $form->message = request('message');

    	// $form->save();

    	Form::create(request(['name', 'email', 'message']));

    	return redirect('/');
    }

}
