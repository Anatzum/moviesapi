<?php
declare(strict_types=1);

class RatingsController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        return json_encode(Ratings::find());
    }

}

