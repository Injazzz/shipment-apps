<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DockingDataController extends Controller
{
    //

    public function index()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);
        return view('pages.dockingdata.index', compact('countries', 'user'));
    }

}
