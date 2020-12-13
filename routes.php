<?php

use Mohsin\Heroku\Models\Settings;

Route::get('/.well-known/acme-challenge/{challenge}', function ($challenge) {
    $challenges = Settings::get('challenges');
    $challengeKey = array_first($challenges, function ($value) use ($challenge) {
        return $value['slug'] == $challenge;
    })['key'];
    return Response::make($challengeKey, 200, array('Content-Type' => 'text/plain'));
});
