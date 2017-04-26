<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer deux variables age et genre. La variable genre peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.-->
        <title>Exercice 3 de la partie 2 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de deux variables age de type int et genre de type string
            $age = 13;
            $genre = 'femme';
// Introduction des conditions
            if ($age <= 18 && $genre == 'homme') {
// Alors ...
                echo 'Vous êtes un homme et vous êtes mineur';
            }
// Par contre si 
            elseif ($age <= 18 && $genre == 'femme') {
// Alors ...  
                echo 'Vous êtes une femme et vous êtes mineure';
            }
// Par contre si
            elseif ($age >= 18 && $genre == 'homme') {
//Alors ...
                echo 'Vous êtes un homme et vous êtes majeur';
            }
// Par contre si
            elseif ($age >= 18 && $genre == 'femme') {
//Alors ...
                echo 'Vous êtes un femme et vous êtes majeure';
            } else {
                echo 'C\'est problématique !!';
            }
            ?> 
<!-- Fait par Jonathan :
          // Déclaration de mes variables
          $gender = 'homme';
          $age = 26;
          // Déclaration de mes conditions sur le genre
          if ($gender == 'femme') {
              echo 'Vous êtes une femme et ';
          } else {
              echo 'Vous êtes un homme et ';
          }
          // Déclaration de mes condistions sur l'âge
          if (is_nan($age) || $age < 0) {
              echo 'Votre âge est incorrect ou negatif, merci de corriger.';
          } else {
              if ($age < 18) {
                  echo 'vous êtes mineur.';
              } else {
                  echo 'vous êtes majeur.';
              }
          }
-->            
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div class="buttons">
            <a href="http://partie2/exercice1"><button>Exercice 1</button></a>
            <a href="http://partie2/exercice2"><button>Exercice 2</button></a>
            <a href="http://partie2/exercice3"><button>Exercice 3</button></a>
            <a href="http://partie2/exercice4"><button>Exercice 4</button></a>
            <a href="http://partie2/exercice5"><button>Exercice 5</button></a>
            <a href="http://partie2/exercice6"><button>Exercice 6</button></a>
            <a href="http://partie2/exercice7"><button>Exercice 7</button></a>
            <a href="http://partie2/exercice8"><button>Exercice 8</button></a>
        </div>
    </body>
</html>