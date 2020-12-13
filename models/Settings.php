<?php namespace Mohsin\Heroku\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'mohsin_heroku_settings';

    public $settingsFields = 'fields.yaml';
}
