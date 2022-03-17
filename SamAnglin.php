<?php

namespace App;

use Development\Preferred\Languages\PHP;
use Development\Preferred\Framework\Laravel;
use Development\Preferred\Skillset\GitHub;

class SamAnglin extends WebDeveloper
{
    use GitHub, PHP, Laravel;

    protected $fillable = [
        'email', 'twitter',
    ];

    public function honedSkill() {

        $skills = [
            $htmlCssJs,
            $dependanciesManagement,
            $mySQL,
            $linuxCLI,
            $versionControl
        ];

        return $this->hasMany(GitHub::exampleOf($skills), 'repositories')
                    ->latest('katas')
                    ->branch('get-some-tdd');
    }

    public function learning() {

        const php;

        if (!php) {
            $subject = new Knowledge;
        }

        return $this->improve(Knowledge::class)
                    ->where('applicable', $this->skill)
                    ->orWhereHas('useful', function ($query) {
                    $query->where('particular_skill', $this->required);
                    })->get();
    }
}