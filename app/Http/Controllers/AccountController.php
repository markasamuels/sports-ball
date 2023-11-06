<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Show the user account info.
     */
    public function show(string $id): View
    {
		// @TODO find out how to specify the view file
        return view('greeting', ['name' => 'Bob']);
    }
}
