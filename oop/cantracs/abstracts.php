<?php

abstract class onlinGateWay
{

    protected $option;


    public function __construct()
    {
        $this->option = array(
            'Mellat' => array(
                'Merchant' => '12345678',
                'username' => 'sdsdfds5',
                'passwordd' => 'dd4ad98a'
            ),
            'Saman' => array(
                'api_key' => 'd65g7d5g4dg657dg5dd6d4fd6f5d4f6f7'
            ),
            'Parsian' => array('username' => 'sdf4s5f4s9',
                'password' => 'sd6fs4s46sf4')
        );
    }

    abstract public function sendrequest();

    abstract public function verifyrequest();

}

class Mellat extends onlinGateWay
{

    private $Mellat__option;
    private $Getawayname;

    /**
     * Mellat constructor.
     * @param $Mellat__option
     */
    public function __construct()
    {
        $this->Getawayname = "Mellat";
        parent::__construct();
        $this->Mellat__option = $this->option[$this->Getawayname];
    }


    public function sendrequest()
    {
        var_dump($this->Mellat__option);
    }

    public function verifyrequest()
    {
        // TODO: Implement verifyrequest() method.
    }
}


class Factory
{


    public static function make($class)
    {
        $className = ucfirst($class);
        if (!class_exists($className)) {
            echo "input is Invalid";
            return false;
        }
        return new $className();
    }

}

$getway = Factory::make("mellat");
$getway->sendrequest();