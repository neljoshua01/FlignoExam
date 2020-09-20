<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    $users = User::where('id', '!=', Auth::id())->get();
    return view('chat', ['users' => $users]);
}
