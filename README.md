`web.php`
```php
<?php

Route::get('/about-me', 'SamAnglinController@aboutMe');

Route::get('/current-project', 'SamAnglinController@doing');

Route::get('/ideal', 'SamAnglinController@want')
```
`SamAnglin.php`
```php
<?php

namespace App;

use Development\Preferred\Languages\PHP;
use Development\Preferred\Framework\Laravel;
use Development\Preferred\Skillset\GitHub;

class SamAnglin extends WebDeveloper
{
    use GitHub, PHP, Laravel;

    protected $fillable = [
        'email', 'twitter', 'website'
    ];

    public function honedSkill() {

        $skills = [
            $htmlCssJs,
            $dependanciesManagement,
            $MySQL,
            $linuxCLI,
            $versionControl
        ];

        return $this->hasMany(GitHub::exampleOf($skills), 'repositories')
                    ->latest('vue-crash-course')
                    ->branch('fake-server')
                    ->for('learning new Vue 3');
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
```
`SamAnglinController.php`
```php
<?php

namespace App\Http\Controllers;

use App\SamAnglin;

class SamAnglinController extends Controller
{
    public function aboutMe(SamAnglin $sam) {

        $details = [
            $sam->email, // s.anglin@live.co.uk
            $sam->twitter // @mizouzie
            $sam->website // https://mizouzie.github.io
        ]

        return view('samAnglin', compact('details'));
    }

    Public function doing() {

        $project = [
            'name' => 'energy-prices-api',
            'language' => 'JavaScript',
            'framework' => false,
            'purpose' => 'project to encourage beginners in Open Source and learn project management'
        ];

        return new Current::project($project);
    }

    public function want() {

        return $this->position('developer')
                    ->whereUsing('laravel')
                    ->plus('improve_skillset');
    }
}
```
`samAnglin.blade.php`
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>AboutMe:</h1>
    <h3>contact</h3>
    <p>Email: {{ $details->email }}</p>
    <p>Twitter: {{ $details->twitter }}</p>
    <p>Website: {{ $details->website }}</p>

    <h3>Goals</h3>
    <ul>
        <li>I came into web development with a few decent qualities "out of the box". I want to take those and build upon them.</li>
        <li>To quote the world famous song, "I wanna be the very best, like no-one ever was."</li>
        <li>Prove myself right that web development is a way to have a healthy work-life balance.</li>
    </ul>
</body>
</html>
```

### My current github-pages site :computer:
To see a live personal project where I am trying to be as transparent as possible while demonstrating what I am capable of, please follow [this link](https://mizouzie.github.io):octocat: . I am treating the page as a live CV to show examples of the skills I have in HTML, CSS and JavaScript as this is what github-pages is limited to. I believe that even as a PHP and Laravel focused developer, it is still important to have a firm understanding of these as they form a solid base on which to further explore and improve in web development.

Also, coding is coding. If I'm able to solve a problem in PHP then I should be able to solve a similar one in another language.

## Some stats :chart_with_upwards_trend:
### GitHub numbers:
  <br/>
    <a align="center" href="https://github.com/MizouziE/"><img alt="Sam Anglin's Github Stats" src="https://github-readme-stats.vercel.app/api?username=MizouziE&show_icons=true&count_private=true&theme=react&hide_border=true&bg_color=0D1117" /></a>

### Languages in my repository collection:
  <a align="center" href="https://github.com/MizouziE/"><img alt="Sam Anglin's Top Languages" src="https://github-readme-stats.vercel.app/api/top-langs/?username=MizouziE&langs_count=8&count_private=true&layout=compact&theme=react&hide_border=true&bg_color=0D1117" /></a>
  <br/>
  <br/>
  <br/>
  <br/>


### Languages and tech I am comfortable with:
<p align="center">
    <a href="https://laravel.com/" target="_blank"> <img src="https://img.icons8.com/fluency/48/000000/laravel.png"/> </a> 
    <a href="https://www.php.net/" target="_blank"> <img src="https://img.icons8.com/offices/40/000000/php-logo.png"/> </a> 
    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"> <img src="https://img.icons8.com/color/48/000000/javascript.png"/> </a> 
    <a href="https://www.w3schools.com/css/" target="_blank"> <img src="https://img.icons8.com/color/48/000000/css3.png"/> </a>
    <a href="https://getbootstrap.com" target="_blank"> <img src="https://img.icons8.com/color/48/000000/bootstrap.png"/> </a>
    <a href="https://tailwindcss.com/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" width="45" height="45"/> </a>
    <a href="https://www.docker.com/" target="_blank"> <img src="https://img.icons8.com/color/48/000000/docker.png"/> </a> 
    <a style="padding-right:8px;" href="https://nodejs.org" target="_blank"> <img src="https://img.icons8.com/color/48/000000/nodejs.png"/> </a> 
    <a href="https://www.mysql.com/" target="_blank"> <img src="https://img.icons8.com/color/48/000000/mysql-logo.png"/> </a> 
    <a href="https://www.mongodb.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mongodb/mongodb-original-wordmark.svg" alt="mongodb" width="40" height="40"/> </a> 
    <a href="https://vuejs.org/" target="_blank"> <img src="https://img.icons8.com/color/48/000000/vue-js.png"/></a>
    <a href="https://expressjs.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original-wordmark.svg" alt="express" width="40" height="40" /> </a>
</p>
