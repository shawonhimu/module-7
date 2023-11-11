<?php

namespace App\Http\Controllers;

class UserController extends Controller {
    function getMessage() {
        $msg = "Hello, Laravel!";
        return view("user", ["message" => $msg]);
    }
}
