<?php
declare(strict_types=1);

class GeneresController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Generes::find());
    }

}

