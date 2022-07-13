<?php 

class Movie 
{
    public $poster;
    public $genere;
    public $regista;
    public $anno;


    function __construct($_titolo, $_durata)
    {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
    }

    public function getAge() 
    {
        $currentYear = date("Y");
        return $currentYear - $this->anno;
    }
}