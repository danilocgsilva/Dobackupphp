<?php

namespace danilocgsilva\dobackupphp;

class IndexSecure
{
    /**
     * Flags if no parameter was providade
     * 
     * @var bool
     */
    private $_allEmpty;

    /**
     * Array provided in the get parameter
     *
     * @var array
     */
    private $_getArray;

    /**
     * Array provided in the post parameter
     *
     * @var array
     */
    private $_postArray;

    /**
     * Flag to shortly tells that is an api
     *
     * @var bool
     */
    public $api;

    /**
     * Fancy message for strange parameters receiving...
     * 
     * @var string
     */
    const DEFAULT_MESSAGE = 'Hack tring? Does not worked.';

    /**
     * The constructor.
     * Initializes the parameter arrays.
     */
    public function __construct()
    {
        $this->_getArray  = $_GET;
        $this->_postArray = $_POST;
    }

    /**
     * Starts the security checkings
     *
     * @return void
     */
    public function secure()
    {
        $this->_allEmpty();
        $this->_strangeParams();
        $this->_checkAction();
        $this->_apiParameters();
    }

    /**
     * Checks if is all empty
     *
     * @return void
     */
    private function _allEmpty()
    {
        if (empty($this->_getArray) && empty($this->_postArray)) {
            $this->_allEmpty = true;
            $this->api = false;
        }
    }

    /**
     * Checks if that are strange vars in parameters
     *
     * @return void
     */
    private function _strangeParams()
    {
        if ($this->_allEmpty) {
            return;
        }

        if (!array_key_exists('action', $this->_getArray)) {
            $this->diethis();
        }
    }

    /**
     * Verifies if is an api request
     *
     * @return void
     */
    private function _checkAction()
    {
        if ($this->_allEmpty) {
            return;
        }

        if ($this->_getArray['action'] !== 'api') {
            $this->diethis();
        }

        $this->api = true;
    }

    private function diethis()
    {
        print static::DEFAULT_MESSAGE;
        die();
    }

    /**
     * Checks the parameters further than the action.
     * All halts if something strange on the way
     *
     * @return void
     */
    private function _apiParameters()
    {
        foreach ($this->_getArray as $key => $value) {
            switch ($key) {
            case 'action':
            case 'host':
            case 'user':
            case 'dbname':
            case 'pass':
            case 'prefix':
                continue;
            default:
                $this->diethis();
            }
        }
    }

    /**
     * Return an array containing just the databases values
     *
     * @return void
     */
    public function hostValues()
    {
        $hostValues = array();

        $hostValues['host']   = $this->_getArray['host'];
        $hostValues['user']   = $this->_getArray['user'];
        $hostValues['dbname'] = $this->_getArray['dbname'];
        $hostValues['pass']   = $this->_getArray['pass'];
        $hostValues['prefix'] = $this->_getArray['prefix'];

        return $hostValues;
    }
}
