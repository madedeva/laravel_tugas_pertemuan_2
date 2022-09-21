<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function show()
    {
      $data = User::all();
      return view('tugasdua', [
        'title' => 'Tugas Dua',
        'users' => $data]);
    }
}
