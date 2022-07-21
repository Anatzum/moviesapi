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
            Keywords::find([
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
            Keywords::find([
                'conditions' => 'id = ?0',
                'bind' => [
                    0 => $id,
                ]
            ])
        );
    }

    public function store()
    {
        $keyword = new Keywords();
        $keyword->NAME = $this->request->getPost('name', 'string');
        $keyword->save();

        return json_encode($keyword);
    }
}
