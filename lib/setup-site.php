<?php

date_default_timezone_set('America/Sao_Paulo');

class Site
{
    private $nome = "Mercantiba";

    private $data = NULL;
    private $hora = NULL;

    function Site()
    {
    }

    public function setData()
    {
        $this->data = date("m/d/y");
        $this->hora = date("H:i");
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getData()
    {
        return $this->data;
    }
    public function getHora()
    {
        return $this->hora;
    }
}

$mercantiba = new Site();
