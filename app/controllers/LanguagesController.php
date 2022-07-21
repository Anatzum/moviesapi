<?php
declare(strict_types=1);

class LanguagesController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Languages::find());
    }

}

