<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notifications;

class NotificationsController extends Controller
{
    public function index(){
        $notifications=notifications::all();
        return $notifications;
    }
}
