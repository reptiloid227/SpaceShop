<?php

namespace App\controllers;

use App\models\AppModel;
use App\widjets\Language\Language;
use CORE\App;
use CORE\Controller;

class AppController extends Controller
{

    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('languages', Language::getLanguageList());
        App::$app->setProperty('language', Language::getActiveLanguage(App::$app->getProperty('languages')));
        $lang = App::$app->getProperty('language');
        \CORE\Language::load($lang['code'], $this->route);
    }

}