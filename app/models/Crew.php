<?php

class Crew extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $department;

    /**
     *
     * @var string
     */
    public $nAME;

    /**
     *
     * @var string
     */
    public $job;

    /**
     *
     * @var integer
     */
    public $movie_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("crew");
        $this->belongsTo('movie_id', '\Movies', 'id', ['alias' => 'Movies']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Crew[]|Crew|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query a set of records that match the specified name
     *
     * @param string $name
     * @return Keywords[]|Keywords|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function findByName($name): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find([
                'conditions' => 'NAME like ?0',
                'bind' => [
                    0 => '%'.$name.'%',
                ]
        ]);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Crew|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
