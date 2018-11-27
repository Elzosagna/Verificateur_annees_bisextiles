Calcul années bissextiles-------------------------
Url     : http://codes-sources.commentcamarche.net/source/40733-calcul-annees-bissextilesAuteur  : pilou92Date    : 03/08/2013
Licence :
=========

Ce document intitulé « Calcul années bissextiles » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

fonction simple permettant de calculer les ann&eacute;es bissextiles et facile &
agrave; int&eacute;grer dans un script !
<br /><a name='source-exemple'></a><h2
> Source / Exemple : </h2>
<br /><pre class='code' data-mode='basic'>
&lt;?ph
p
/*
Une année est bissextile si :
	1. l'année est divisible par 4 mais non d
ivisible par 100
	2. l'années divisible par 400

Ce calcul est exacte à compt
er du 15 octobre 1582, date de la réforme grégorienne
(passage du calendier jul
ien au calendrier grégorien).
réf : <a href='http://www.imcce.fr/fr/actualites/
archive.php?id=38' target='_blank'>http://www.imcce.fr/fr/actualites/archive.php
?id=38</a>

A partir de ces conditions on a juste à vérifier si les conditions
 1 &amp; 2
renvoient un entier (integer).
/*

/*
fonction : bissextile

<
ul><li>/</li></ul>
function bissextile($annee) {
	if( (is_int($annee/4) &amp;&
amp; !is_int($annee/100)) || is_int($annee/400)) {
		// Année bissextile
		// 
vous remplacez le retour par ce que vou voulez
		return TRUE;
	} else {
		// 
Année NON bissextile
		// vous remplacez le retour par ce que vou voulez
		ret
urn FALSE;
	}
}

/******************************************************
Ex
emple 1 : Tableau des années depuis 1582

<ul><li>/</li></ul>

$aa = 1582;


echo '&lt;font color=&quot;#CC0000&quot;&gt;Tableau des années bissextiles dep
uis ' . $aa . '&lt;/font&gt;&lt;br&gt;';

for($aa; $aa&lt;=date('Y'); $aa++) {

	if(bissextile($aa)) {
		echo '&lt;strong&gt;' . $aa . ' : Bissextile&lt;/str
ong&gt;&lt;br&gt;';
	} else {
		echo $aa . ' : Non bissextile&lt;br&gt;';
	}

}

/******************************************************
Exemple 2 : somme
 nous dans une année bissextile ?

<ul><li>/</li></ul>

echo '&lt;hr/&gt;&lt
;font color=&quot;#CC0000&quot;&gt;' . date('Y') . ' ';
echo bissextile(date('Y
')) ? 'est' : 'n\'est pas';
echo ' bissextile.';

?&gt;
</pre>
