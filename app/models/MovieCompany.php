<?php

class MovieCompany extends \Phalcon\Mvc\Model
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
    public $company_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("movie_company");
        $this->belongsTo('movie_id', '\Movies', 'id', ['alias' => 'Movies']);
        $this->belongsTo('company_id', '\Companies', 'id', ['alias' => 'Companies']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovieCompany[]|MovieCompany|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MovieCompany|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
