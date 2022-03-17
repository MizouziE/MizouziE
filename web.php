<?php

Route::get('/about-me', 'SamAnglinController@aboutMe');

Route::get('/current-project', 'SamAnglinController@doing');

Route::get('/ideal', 'SamAnglinController@want')