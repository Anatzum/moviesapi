<?php
declare(strict_types=1);

class CompaniesController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Companies::find());
    }

}

