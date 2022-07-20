<?php

class MovieGenere extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $movie_id;

    /**
     *
     * @var integer
     */
    public $genere_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("movie_genere");
        $this->belongsTo('movie_id', '\Movies', 'id', ['alias' => 'Movies']);
        $this->belongsTo('genere_id', '\Generes', 'id', ['alias' => 'Generes']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovieGenere[]|MovieGenere|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovieGenere|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
