<?php
declare(strict_types=1);

class CompaniesController extends \Phalcon\Mvc\Controller
{
    public function index()
    {
        return json_encode(Companies::find());
    }

    public function search($name)
    {
        return json_encode(
            Companies::find([
                'conditions' => 'NAME like ?0',
                'bind' => [
                    0 => '%'.$name.'%',
                ]
            ])
        );
    }

    public function show($id)
    {
        return json_encode(
            Companies::find([
                'conditions' => 'id = ?0',
                'bind' => [
                    0 => $id,
                ]
            ])
        );
    }
}
