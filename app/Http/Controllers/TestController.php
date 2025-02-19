<?php

namespace App\Http\Controllers;

use App\Events\PrivateWebSocket;
use App\Events\testWebSocket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        event(new testWebSocket);
    }

    public function private(){
        event(new PrivateWebSocket);
    }
}
