<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        $phone = Phone::find(1);
        return $phone->user;
    }
}
