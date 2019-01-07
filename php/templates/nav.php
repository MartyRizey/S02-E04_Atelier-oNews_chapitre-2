<?php

// tableau pour rendre le menu de navigation dynamique
/* Version simple :
	 Mon tableau est associatif :
			la clé correspond à l'url
			la valeur correspond au texte
*/	
/*
$nav = [
	'plan' => 'PLan du site',
	'mentions-legales' => 'Mentions Légales',
	'contact' => 'Contact'
];
*/

/* Version plus complexe mais plus souple
	 Mon tableau est multidirectionnel
			 je déclare un premier tableau non associatif
			 je viens ensuite ajouter dans mon tableau une nouvelle valeur
			 cette nouvelle valeur est un tableau associatif 
*/

// je déclare à php un tableau vide
// $nav = array();
// je déclare à php que j'ajoute une nouvelle entrée dans mon tableau.
// come je ne déclare pas d'index, celui-ci sera automatiquement incrémenté.
// autrement dit j'aurai $nav[0] puis $nav[1] puis $nav[2] etx ...
/*
$nav[] = [
	'link' => 'plan',
	'text' => 'Plan du site',
	'target' => '_blank' // ouvrir dans une autre fenetre
];
$nav[] = [
	'link' => 'mentions-legales',
	'text' => 'Mentions légales'
];
$nav[] = [
	'link' => 'contact',
	'text' => 'Contact'
];
*/

// Version complexe plus souple en une seule déclaration
$nav = array(
	[
		'link' => 'plan', // redirige vers la page plan.php du site
	 	'text' => 'Plan du site'
	],
	[
		'link' => 'mentions-legales', // redirige vers la page mentions-legales.php du site
	 	'text' => 'Mentions légales'
	],
	[
		'link' => 'contact', // redirige vers la page contact.php du site
	 	'text' => 'Contact'
	]
);

// j'ajoute une entrée ou un index supplémentaire dans le tableau
$nav[] = array(
	
 	 // selon la condition on redirige vers une page du site '.php' ou un site externe 'https://'
	'link'   => 'oclock.io', 
	'text'   => 'Visitez O\'clock',
	'target' => '_blank'
);

/*
	si j'écris mon foreach avec $var1 => $var2
	je vais obtenir une varaible qui ne me servira à rien
	car $var1 va contenir mes clé (0,1,2,3,....)
	foreach ($nav as $var1 => $var2)
*/
/*
	Du coup je ne donne pas l'argument => $var2
	Ainsi ma $avr1 va contenir directement la valeur
	et aucune variable ne contiendra la clé actuellement parcourue
	foreach ($nav as $var1)
*/

foreach($nav as $link_details) {

	// Mise en place du lien par défaut (lien relatif)
	// on reste dans notre site et on redirige vers une autre page. Ne pas oublier le '.php' du coup.	
	$link = $link_details['link'].'.php';

	$target = '';

	// Je demande à PHP si la clé 'target' existe dans mon tableau
	if(isset($link_details['target'])){

		// si oui, ou si il trouve la clé en parcourant le tableau
		$target = 'target="' . $link_details['target'] . '"';

		// si on a une target, on créé un lien absolue vers la page du site
		// c'est à dire que l'on sort de notre site
		$link = 'https://' . $link_details['link'];
	}

	/**
	 * Au final ma variable $target n'est pas vide uniquement dans 
	 * le cas où j'ai définie dans mon tableau la clé "target"
	 */	 

	echo '<li class="left__nav-item">';
	echo '<a href="'.$link.'"'. $target .'class="left__nav-link">';	
	echo $link_details['text'];
	echo '</a></li>';
}

/* --------------------------------------------------------------------------------- */
// autre version simplifiée du tableau et de son accès
    // $nav = [

    //     'plan'     => 'Plan du site',
    //     'mentions' => 'Mentions légales',
    //     'contact'  => 'Contact'

    // ]; 

    // foreach($nav as $link => $link_detail){

    //     echo '<li class="left__nav-item">';

    //     echo '<a href="' . $link . '" class="left__nav-link">';

    //     echo $link_detail;

    //     echo '</a></li>';
    // }

?>

<!-- Code de base dans le fichier -->
<!-- ---------------------------- -->
<!-- <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
<li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
<li class="left__nav-item"><a href="" class="left__nav-link">Contact</a></li> -->