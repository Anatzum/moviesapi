<?php

class Movies extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $rating_id;

    /**
     *
     * @var integer
     */
    public $budget;

    /**
     *
     * @var string
     */
    public $homepage;

    /**
     *
     * @var string
     */
    public $original_language;

    /**
     *
     * @var string
     */
    public $original_title;

    /**
     *
     * @var string
     */
    public $overview;

    /**
     *
     * @var double
     */
    public $popularity;

    /**
     *
     * @var string
     */
    public $release_date;

    /**
     *
     * @var double
     */
    public $revenue;

    /**
     *
     * @var double
     */
    public $runtime;

    /**
     *
     * @var string
     */
    public $sTATUS;

    /**
     *
     * @var string
     */
    public $tagline;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var double
     */
    public $vote_average;

    /**
     *
     * @var integer
     */
    public $vote_count;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("movies");
        $this->hasMany('id', 'Cast', 'movie_id', ['alias' => 'Cast']);
        $this->hasMany('id', 'Crew', 'movie_id', ['alias' => 'Crew']);
        $this->hasMany('id', 'MovieCompany', 'movie_id', ['alias' => 'MovieCompany']);
        $this->hasMany('id', 'MovieGenere', 'movie_id', ['alias' => 'MovieGenere']);
        $this->hasMany('id', 'MovieKeyword', 'movie_id', ['alias' => 'MovieKeyword']);
        $this->hasMany('id', 'MovieLanguage', 'movie_id', ['alias' => 'MovieLanguage']);
        $this->belongsTo('rating_id', '\Ratings', 'id', ['alias' => 'Ratings']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Movies[]|Movies|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Movies|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
