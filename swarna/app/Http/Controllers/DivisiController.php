<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display the public divisions page.
     */
    public function index()
    {
        $divisis = Divisi::all();
        return view('divisi', compact('divisis'));
    }
}
