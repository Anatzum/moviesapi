<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Alpha as AlphaValidator;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\StringLength\Max;

class Languages extends \Phalcon\Mvc\Model
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
    public $iso;

    /**
     *
     * @var string
     */
    public $abbreviation;

    /**
     *
     * @var string
     */
    public $nAME;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("languages");
        $this->hasMany('id', 'MovieLanguage', 'language_id', ['alias' => 'MovieLanguage']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Languages[]|Languages|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Languages|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'iso',
            new Uniqueness(
                [
                    "message" => 'The iso must be unique'
                ]
            )
        );

        $validator->add(
            'abbreviation',
            new Max(
                [
                    "max" => 3,
                    "message" => "Its called abbreviation for a reason",
                    "included" => true
                ]
            )
        );

        return $this->validate($validator);
    }
}
