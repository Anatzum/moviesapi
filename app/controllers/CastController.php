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
            Cast::find([
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
            Cast::find([
                'conditions' => 'id = ?0',
                'bind' => [
                    0 => $id,
                ]
            ])
        );
    }
}
