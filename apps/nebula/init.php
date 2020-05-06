<?php namespace stuffsdk\apps\auth;


use App;
use AppConfig;
use manifest;
use URLController;

class init extends AppConfig
{

    function init(App $app)
    {
        $app->debug(true);
    }

    function registry(manifest $manifest)
    {
        // TODO: Implement registry() method.
    }

    function urls(URLController $controller)
    {
        // TODO: Implement urls() method.
    }


}