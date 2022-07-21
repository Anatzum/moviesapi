<?php
declare(strict_types=1);

class CastController extends \Phalcon\Mvc\Controller
{
    public function index()
    {
        return json_encode(Cast::find());
    }

    public function search($name)
    {
        return json_encode(
            Cast::findByName($name)
        );
    }
}
