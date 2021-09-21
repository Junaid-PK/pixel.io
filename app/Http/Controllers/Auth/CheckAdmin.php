<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CheckAdmin extends Controller
{
    public function index()
    {
        if(Gate::allows('admin-only',auth()->user())){
            return view('admin-app');
        }
        return abort('403');
    }
}
