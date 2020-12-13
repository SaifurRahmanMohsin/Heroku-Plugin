<?php namespace Mohsin\Heroku;

use Backend;
use System\Classes\PluginBase;

/**
 * Heroku Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Heroku',
            'description' => 'Provides Heroku Proxy Middleware',
            'author'      => 'Saifur Rahman Mohsin',
            'icon'        => 'icon-server'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $this->app['Illuminate\Contracts\Http\Kernel']
            ->pushMiddleware('Mohsin\Heroku\Classes\TrustProxies');
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Heroku Settings',
                'description' => 'Settings for Heroku Setup',
                'icon'        => 'icon-server',
                'class'       => 'Mohsin\Heroku\Models\Settings',
                'keywords'    => 'heroku server'
            ]
        ];
    }
}
