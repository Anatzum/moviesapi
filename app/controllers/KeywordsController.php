<?php
declare(strict_types=1);

class KeywordsController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Keywords::find());
    }

}

