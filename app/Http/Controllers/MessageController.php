<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessageController extends Controller
{
    

    public function envoimessage(Request $request){

        print_r($_POST);exit();
    }

}
