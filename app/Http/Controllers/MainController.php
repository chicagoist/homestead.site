<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

      // $users = Phonebook::all();
      //dd($users);

      $users = Phonebook::orderBy('name')->paginate(10);
      return view('home', compact('users'));

    }

    public function search(Request $request)
    {
        $s = $request->s;
        //dd($s);
        $users = Phonebook::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }
}
