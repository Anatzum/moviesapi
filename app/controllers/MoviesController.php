<?php
declare(strict_types=1);

class MoviesController extends \Phalcon\Mvc\Controller
{
    public function index()
    {
        return json_encode(Movies::find());
    }

    public function search($name)
    {
        return json_encode(
            Movies::find([
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
            Movies::find([
                'conditions' => 'id = ?0',
                'bind' => [
                    0 => $id,
                ]
            ])
        );
    }
}
