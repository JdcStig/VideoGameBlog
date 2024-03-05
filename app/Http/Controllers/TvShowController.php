<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvShowController extends Controller
{
    public function index()
    {
        return view('tvshow.index');
    }
}
