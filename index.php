<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PHP</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar-fixed-side.css" rel="stylesheet" />
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|PT+Serif|Playfair+Display" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

	<div id="wrapper" class="active">  

		<!-- Navbar-->
		<div id="sidebar-wrapper">
			<br><br><br><br>
			<ul class="sidebar-nav" id="sidebar">
			    <li class="box_image" ><img class=".img-responsive" src="assets/images/gambatte.jpg"></li>
				<li><a href="#">Exercice 1</a></li>
				<li><a href="#exo2">Exercice 2</a></li>
				<li><a href="#exo3">Exercice 3</a></li>
				<li><a href="#exo4">Exercice 4</a></li>
				<li><a href="#exo5">Exercice 5</a></li>
				<li><a href="#exo6">Exercice 6</a></li>
				<li><a href="#exo7">Exercice 7</a></li>
			</ul>
		</div>
        <div id="page-content-wrapper">
			<div class="page-content">
				<div class="row">
						<p class="well lead">Alexandre Douard Challenge PHP</p>
                        <p class="well lead">Niveau 2</p>

				</div>
			</div>
		</div>


		<!-- Exercice 1-->
		<div id="page-content-wrapper">
			<div class="page-content">
				<div class="row">
						<p class="well lead">Exercice 1 : </p>
						<p class="well lead">Définir un algorithme afin de créer un tableau associatif à partir de deux autres tableaux : <br><br>$cuissons : ["à point", "saignant", "bleu", "bien cuit"]<br> $viandes : ["poulet", "boeuf", "mouton"];</p>      
						<pre class="fonction"><br>function menuDuJour($cuissons,$viandes) {<br>
   	//Pour chaque élément du tableau $viandes on associe chaque élément du tableau $cuissons
	for ( $viande = 0; $viande < count($viandes) ; $viande++ ) {  
	for ( $cuisson = 0; $cuisson < count($cuissons) ; $cuisson++ ) { <br>
        	//On concatène le tout dans un tableau vide
		$menu[] = $viandes[$viande]." ".$cuissons[$cuisson] ;

		}
		} 
		//On rassemble les éléments du tableau en une chaîne en supprimant la dernière virgule
		$menumanuscrit = "Au menu ce soir : ".rtrim(implode(', ',$menu)).".";
		return $menumanuscrit;   
		}
		echo menuDuJour($cuissons,$viandes);
				</pre>  
				
						<p class="well lead">Résultat : </p>          
				<pre class="resultat">
					<?php

                    $cuissons = ["à point", "saignant", "bleu", "bien cuit"];
					$viandes = ["poulet", "boeuf", "mouton"];
					function menuDuJour($cuissons,$viandes) {

						
                        //Pour chaque élément du tableau $viandes on associe chaque élément du tableau $cuissons
						for ( $viande = 0; $viande<count($viandes) ; $viande++ ) {
							for ( $cuisson = 0; $cuisson<count($cuissons) ; $cuisson++ ) {
                                //On concatène le tout dans un tableau vide
								$menu[] = $viandes[$viande]." ".$cuissons[$cuisson] ;
								
							}
						} 
						//On rassemble les éléments du tableau en une chaîne en supprimant la dernière virgule
						$menumanuscrit = "Au menu ce soir : ".rtrim(implode(', ',$menu)).".";
						return $menumanuscrit;
					}

					echo menuDuJour($cuissons,$viandes);
					?>
				</pre>

			</div>
		</div>
	</div>



	<!-- Exercice 2-->
	<div id="page-content-wrapper">
		<div class="page-content">
			<div class="row">
                <br><br><br><br>
					<p id="exo2" class="well lead">Exercice 2 : </p>
					<p class="well lead">Définir un algorithme afin de transformer une chaine de caractères en tableau :<br><br>
					$genres = "horreur fantastique action western thriller comédie drame romance historique";<br></p> 
					<pre class="fonction">function ceSoirAuCinema($genres) {<br>
    //On coupe la chaine en segments avec explode() qui retourne un tableau
	$film = explode(" ", $genres);<br>
	return "Qu'allons-nous regarder ce soir ? Au choix : ".rtrim(implode(', ',$films)).".";<br>
		         	}
								
				}
	echo ceSoirAuCinema($genres);


						</pre>
						<p class="well lead">Résultat :  </p>           
						<pre>
							<?php

                            $genres = "horreur fantastique action western thriller comédie drame romance historique";
							function ceSoirAuCinema($genres)  {
                                //On coupe la chaine en segments avec explode() qui retourne un tableau
								$films = explode(" ", $genres);
								return "Qu'allons-nous regarder ce soir ? Au choix : ".rtrim(implode(', ',$films)).".";
								
								
							}
							echo ceSoirAuCinema($genres);



							?>
						</pre>

					</div>
				</div>
			</div>





			<!-- Exercice 3-->
			<div id="page-content-wrapper">
				<div class="page-content">
					<div class="row">
                        <br><br><br><br>
							<p id="exo3" class="well lead">Exercice 3 : </p>
							<p class="well lead">Définir un algorithme qui extrait les deux derniers éléments d'un tableau dans un nouveau tableau :<br>
							$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];</p>
							<pre class="fonction">function PasFacileAOuvrir($fruits) {<br>
     //On extrait une portion de $tropical qui contient les deux derniers éléments du tableau						
     $tropical = array_slice($fruits, -2);<br>   
     $resultat = "Les deux derniers éléments du tableau sont ";<br>
     //On retourne les deux éléments de $tropical
     return $resultat.$tropical[0]." et ".$tropical[1]."."; <br>     
}<br>
echo PasFacileAOuvrir($fruits);

								</pre>
								
						<p class="well lead">Résultat : </p>           
								<pre>
									<?php

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

function PasFacileAOuvrir($fruits) {
    //On extrait une portion de $tropical qui contient les deux derniers éléments du tableau
    $tropical = array_slice($fruits, -2);
    $resultat = "Les deux derniers éléments du tableau sont ";
        //On retourne les deux éléments de $tropical
        return $resultat.$tropical[0]." et ".$tropical[1].".";
    	
         
    
    
}

echo PasFacileAOuvrir($fruits);


									?>
								</pre>

							</div>
						</div>
					</div>


             <!-- Exercice 4-->
			<div id="page-content-wrapper">
				<div class="page-content">
					<div class="row">
                        <br><br><br><br>
							<p id="exo4" class="well lead">Exercice 4 : </p>
							<p class="well lead">Définir un algorithme qui supprime la valeur "milieu" d'un tableau :<br><br>
							$prenoms : ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];</p><br>
							<pre class="fonction"> 
function outOfHarrington($prenoms) { <br>
  //On retire le premier et le dernier élément à chaque itération jusqu'a ce que count($prenoms)= 1
    for($i=count($prenoms); $i != 1 ; $i=$i-2 ){ 
	    $noMiddle = [];
	    $premiers[] = array_shift($prenoms);
	    $derniers[] = array_pop($prenoms);
	    //On fusionne les deux tableaux
	    $noMiddle = array_merge($premiers,$derniers) ;
	    }
	    echo "Les H qui restent sont : ".rtrim(implode(', ',$noMiddle)).".";
		
		       			     }
				      }
outOfHarrington($prenoms);<br>
								</pre> 
							
						<p class="well lead">Résultat :  </p>          
								<pre class="reponse">
									<?php
									$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

									function outOfHarrington($prenoms) { 
                                        //On retire le premier et le dernier élément à chaque itération jusqu'a ce que count($prenoms)= 1
										for($i=count($prenoms); $i != 1 ; $i=$i-2 ){ 
											$noMiddle = [];
											$premiers[] = array_shift($prenoms);
											$derniers[] = array_pop($prenoms);
											//On fusionne les deux tableaux
											$noMiddle = array_merge($premiers,$derniers) ;
										}
										echo "Les H qui restent sont : ".rtrim(implode(', ',$noMiddle)).".";
										
									}

									outOfHarrington($prenoms);
									?>
								</pre>

							</div>
						</div>
					</div>


					<!-- Exercice 5-->
					<div id="page-content-wrapper">
						<div class="page-content">
							<div class="row">
								<br><br><br><br>
								<p id="exo5" class="well lead">Exercice 5 : </p>
								<p class="well lead">Définir un algorithme pour trouver la chaine de caractères la plus longue d'un tableau :<br><br>
									$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];</p><br>
							    <pre class="fonction">
function plusLongMot($phrase) {<br>
    //On compare la longueur de chaque élément de $phrase à la longueur de $longest
	$longest = 0;
	for($i = 0; $i < count($phrase); $i++) {
             if(strlen($phrase[$i]) > strlen($phrase[$longest])) 
                  //Si la longueur du mot à l'index $i est plus grande que la longueur du mot stocké dans $longest , $i devient $longest
                  $longest = $i;
                 }
                 }
                  $resultat = "La plus longue chaîne de caractère dans ce tableau est : ";
                  return $resultat.'"'.$phrase[$longest].'"';
		 } 
   echo plusLongMot($phrase);<br>


								</pre> 
								
								<p class="well lead">Résultat :  </p>          
								<pre>
									<?php
									$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];
									function plusLongMot($phrase) {
                                        //On compare la longueur de chaque élément de $phrase à la longueur de $longest
										$longest = 0;
										for($i = 0; $i < count($phrase); $i++) {
											if(strlen($phrase[$i]) > strlen($phrase[$longest])) {
												//Si la longueur du mot à l'index $i est plus grande que la longueur du mot stocké dans $longest , $i devient $longest
												$longest = $i;

											}
										}
										$resultat = "La plus longue chaîne de caractère dans ce tableau est : ";
										return $resultat.'"'.$phrase[$longest].'"';
									} 
									echo plusLongMot($phrase);





									?>
								</pre>
                               <div class="white_footer"></div>
							</div>
						</div>
					</div>

                    <!-- Exercice 6-->
                    <div id="page-content-wrapper">
                    	<div class="page-content">
                    		<div class="row">
                    			<br><br><br><br>
                    			<p id="exo6" class="well lead">Exercice 6 : </p>
                    			<p class="well lead">Définir un algorithme qui modifie les valeurs d'un tableau de façon systématique :<br><br>
                    				$portables : ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];</p><br>
							<pre class="fonction">
function indicatifTelephonique($portables) { <br>
	//Pour chaque numéro, on retire le premier caractère
	foreach($portables as $numero ){ 
		$numerosCourt[] = substr($numero, 1);
		}
	//Pour chaque numéro, on ajoute la chaîne de caractère "+33",on commence (start) à l'index 0  ( length = 0 permet d'inserer "+33" au début de chaque numéro)  
	$plusTrenteTrois = "+33";                               
	foreach($numerosCourt as $numero ){
		$indicatif = substr_replace( $numerosCourt , $plusTrenteTrois , 0, 0 );
		}
	return "Les numéros avec le bon indicatif sont : ".rtrim(implode(', ',$indicatif)).".";	
		}

echo indicatifTelephonique($portables);<br>
								</pre> 
								
									<p class="well lead">Résultat :  </p>         
										<pre>
										<?php
									 $portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];

					function indicatifTelephonique($portables) { 
					   //Pour chaque numéro, on retire le premier caractère
	                   foreach($portables as $numero ){ 
	                       $numerosCourt[] = substr($numero, 1);
	                       
		                                              }
		              //Pour chaque numéro, on ajoute la chaîne de caractère "+33",on commence (start) à l'index 0  ( length = 0 permet d'inserer "+33" au début de chaque numéro)                              
		              $plusTrenteTrois = "+33";                                
		              foreach($numerosCourt as $numero ){ 
	                    $indicatif = substr_replace( $numerosCourt , $plusTrenteTrois , 0, 0 );
	  
		                                              }
		                  return "Les numéros avec le bon indicatif sont : ".rtrim(implode(', ',$indicatif)).".";		            
						                                    	}
			
					echo indicatifTelephonique($portables);




											?>
										</pre>
										
									</div>
								</div>
							</div>

                             <!-- Exercice 7-->
                    <div id="page-content-wrapper">
                    	<div class="page-content">
                    		<div class="row">
                    			<br><br><br><br>
                    			<p id="exo7" class="well lead">Exercice 7 : </p>
                    			<p class="well lead">Définir un algorithme qui trouve le nombre d'occurrences d'une lettre dans un tableau :<br><br>
                    				$sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];</p><br>
							<pre class="fonction">
function occurence($sadisme) {
	//Implode assemble les éléments du tableau en une chaîne				   
	$joieEtBonheur = implode( " ", $sadisme);
	//Needle précise l'occurence recherchée dans la chaîne de caractère
	$bigNeedle = "h";
	$resultat = substr_count( $joieEtBonheur , $bigNeedle );
	return "Il y a ".$resultat." occurences de la lettre 'h' dans ce tableau .";
	}


echo occurence($sadisme);
								</pre> 
								
									<p class="well lead">Résultat : </p>            
										<pre>
										<?php
									 $sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];

					function occurence($sadisme) {
					   //Implode assemble les éléments du tableau en une chaîne 
					   $joieEtBonheur = implode( " ", $sadisme);
					   //Needle précise l'occurence recherchée dans la chaîne de caractère
	                   $bigNeedle = "h";
	                   $resultat = substr_count( $joieEtBonheur , $bigNeedle );
	                   return "Il y a ".$resultat." occurences de la lettre 'h' dans ce tableau .";
	                
		                  }
						                                    
			
					echo occurence($sadisme);
											?>
										</pre>
										<div class="white_footer"></div>
									</div>
								</div>
							</div>




						</div>

					</div>



				</body>
