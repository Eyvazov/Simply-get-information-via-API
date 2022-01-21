<?php

class API
{
    public $url = "http://localhost/slimapp/api/courses";
    public $data;

    public function __construct()
    {
        $data = file_get_contents($this->url);
        $this->data = json_decode($data, true);
        return $this;
    }


    public function get()
    {
        foreach ($this->data as $data) {
           if ($data['id'] == $_GET['id']){
               return $data;
           }
        }
    }

}

$api = new API();
?>