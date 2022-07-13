<?php

require_once "Movie.php";

$movie1 = new Movie("Coach Carter", "136 min");
$movie1->poster = "https://www.google.com/imgres?imgurl=https%3A%2F%2Fpad.mymovies.it%2Ffilmclub%2F2005%2F04%2F013%2Flocandina.jpg&imgrefurl=https%3A%2F%2Fwww.mymovies.it%2Ffilm%2F2005%2Fcoachcarter%2F&tbnid=9U7T4KwVlrYdDM&vet=12ahUKEwjbwO_tgvb4AhW5nP0HHSS5BoAQMygAegUIARDRAQ..i&docid=0VhHq8YhjDbd5M&w=420&h=655&q=coach%20carter&client=firefox-b-d&ved=2ahUKEwjbwO_tgvb4AhW5nP0HHSS5BoAQMygAegUIARDRAQ";
$movie1->genere = "drammatico, sportivo";
$movie1->regista = "Thomas Carter";
$movie1->anno = "2005";


$movie2 = new Movie("Interstellar", "169 min");
$movie2->poster = "https://www.google.com/imgres?imgurl=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2FA1JVqNMI7UL._SL1500_.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.it%2FInterstellar-Edizione-Stati-Jessica-Chastain%2Fdp%2FB01MF78RLG&tbnid=GcdAYczcIZ615M&vet=12ahUKEwiBibjPhfb4AhVUlP0HHVXSAlIQMygAegUIARC6AQ..i&docid=N-I79CFFSRBlQM&w=1063&h=1500&q=interstellar&client=firefox-b-d&ved=2ahUKEwiBibjPhfb4AhVUlP0HHVXSAlIQMygAegUIARC6AQ";
$movie2->genere = "fantascienza, avventura, drammatico";
$movie2->regista = "Christopher Nolan";
$movie2->anno = "2014";


echo "Il film " . $movie1->titolo . " dura " . $movie1->durata . " è uscito " . $movie1->getAge() . " anni fa. Regista " . $movie1->regista . ". Genere " . $movie2->genere . ". <br>";
echo "Il film " . $movie2->titolo . " dura " . $movie2->durata . " è uscito " . $movie2->getAge() . " anni fa. Regista " . $movie2->regista . ". Genere " . $movie2->genere . ".";
