<?php
declare(strict_types=1);

class CrewController extends \Phalcon\Mvc\Controller
{
    public function index()
    {
        return json_encode(Crew::find());
    }

    public function search($name)
    {
        return json_encode(
            Crew::findByName($name)
        );
    }
}
