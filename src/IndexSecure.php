<?php

namespace danilocgsilva\dobackupphp;

class IndexSecure
{
    private $instace;

    private $allEmpty;

    private $getArray;

    private $postArray;

    public $api;

    const DEFAULT_MESSAGE = 'Hack tring? Does not worked.';

    public function __construct()
    {
        $this->getArray  = $_GET;
        $this->postArray = $_POST;
    }

    public function secure()
    {
        $this->allEmpty();
        $this->strangeParams();
        $this->checkAction();
    }

    private function allEmpty()
    {
        if (empty($this->getArray) && empty($this->postArray)) {
            $this->allEmpty = true;
            $this->api = false;
        }
    }

    private function strangeParams()
    {
        if ($this->allEmpty) {
            return;
        }

        if (!array_key_exists('action', $this->getArray)) {
            $this->diethis();
        }
    }

    private function checkAction()
    {
        if ($this->allEmpty) {
            return;
        }

        if ($this->getArray['action'] !== 'api') {
            $this->diethis();
        }

        $this->api = true;
    }

    private function diethis()
    {
        print static::DEFAULT_MESSAGE;
        die();
    }
}
