<?php
class Read{

    private $strJson;
    public function __construct($file)
    {
        $this->strJson = file_get_contents($file);
    }
    public function read()
    {
        return json_decode($this->strJson);
    }
}
