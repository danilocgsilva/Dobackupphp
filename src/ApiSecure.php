<?php

namespace danilocgsilva\dobackupphp;

class ApiSecure
{
    private $getArray;

    public function __construct()
    {
        $this->getArray = $_GET;
    }

    public function secure()
    {
        // If no get provided, return nothing.
        if (empty($this->getArray)) {
            return;
        }

        // Keys validity
        if (!$this->checkKeys()) {
            
        }

    }

    private function checkKeys()
    {
        foreach ($this->getArray as $key => $value) {
            switch ($key) {
                case 'user':
                case 'host':
                case 'dbname':
                case 'pass':
                    continue;
                default:
                    return false;
            }

            return true;
        }
    }


}