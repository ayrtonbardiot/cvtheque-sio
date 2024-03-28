<?php

namespace App\Http\Controllers;

use App\Models\Professionnel;
use Illuminate\Http\Request;

class CvthequeController extends Controller
{
    public function index() {
        $professionnels = Professionnel::all();
        return view('index', [
            'professionnels' => $professionnels
        ]);
    }
}
