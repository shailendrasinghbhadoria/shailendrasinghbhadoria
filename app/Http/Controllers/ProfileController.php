<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use DB;
use Auth;
use Input;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Crypt;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Login.profile');
    }
    public function create(Request $request)
    {
        Profile::create($request->all());

        return redirect()->route('Login.display')
                        ->with('success','Information Created Successfully.');
    }

}
