<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Alpha as AlphaValidator;
use Phalcon\Validation\Validator\Uniqueness;

class Keywords extends \Phalcon\Mvc\Model
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
    public $nAME;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("moviesdb");
        $this->setSource("keywords");
        $this->hasMany('id', 'MovieKeyword', 'keyword_id', ['alias' => 'MovieKeyword']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Keywords[]|Keywords|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Keywords|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'NAME',
            new AlphaValidator(
                [
                    "message" => ":field must contain only letters"
                ]
            )
        );

        $validator->add(
            'NAME',
            new Uniqueness(
                [
                    "message" => 'The name must be unique'
                ]
            )
        );

        return $this->validate($validator);
    }
}
