<?php

namespace App\Http\Controllers;

use App\SamAnglin;

class SamAnglinController extends Controller
{
    public function aboutMe(SamAnglin $sam) {

        $details = [
            $sam->email, // s.anglin@live.co.uk
            $sam->twitter // @mizouzie
        ]

        return view('samAnglin', compact('details'));
    }

    Public function doing() {

        $project = [
            'name' => 'minerals',
            'language' => 'php',
            'framework' => true,
            'purpose' => 'app tp track micro-nutrient intake'
        ];

        return new Current::project($project);
    }

    public function want() {

        return $this->position('junior_dev')
                    ->whereUsing('laravel')
                    ->plus('new_challenges');
    }
}