<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData($link){
    $file = file_get_contents($link);
    $data = json_decode($file);
    foreach($data as $item => $value){
        echo $item . " => " . $value;
    }
}