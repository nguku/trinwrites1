<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    public $userID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $Name;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $Email;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $Password;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $Orders;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
