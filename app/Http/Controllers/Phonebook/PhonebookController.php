<?php

namespace App\Http\Controllers\Phonebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function index(){
        return view('phonebook.phone');
    }
}
