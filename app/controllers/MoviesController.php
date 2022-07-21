<?php
declare(strict_types=1);

class MoviesController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Movies::find());
    }

}

