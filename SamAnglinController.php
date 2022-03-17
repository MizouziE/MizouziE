<?php

namespace App\Http\Controllers;

use App\SamAnglin;

class SamAnglinController extends Controller
{
    public function aboutMe(SamAnglin $sam) {

        $details = [
            $sam->email,
            $sam->twitter
        ]

        return view('samAnglin', compact('details'));
    }

    Public function doing() {

        
    }
}