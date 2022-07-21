<?php
declare(strict_types=1);

class KeywordsController extends \Phalcon\Mvc\Controller
{
    public function index()
    {
        return json_encode(Keywords::find());
    }

    public function search($name)
    {
        return json_encode(
            Keywords::findByName($name)
        );
    }

    public function show($id)
    {

    }
}
