<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function greetings(Request $request)
    {

        $input = $request->query('input');

        if ($input === "hi") {
            $message = "welcome Hussain, you are genuis";
        } else {
            $message = "Please enter hello";
        }

        return view("test", compact('message'));
    }
}
