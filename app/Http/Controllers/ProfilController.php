<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function my_profile() {
        return view('profile.my_profile');
    }

    public function setting() {
        return view('profile.profile_setting');
    }
}
