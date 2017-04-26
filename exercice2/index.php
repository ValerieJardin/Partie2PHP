<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
            Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
            Bonus : L'écrire de deux manières différentes.-->
        <title>Exercice 2 de la partie 2 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de la variable IsEasy de type booléan
            $IsEasy = true;
// Introduction de la condition
            if ($IsEasy == true) {
// Affichage de la variable si c'est vrai
                echo 'C\'est facile !';            
            }
            else {
                echo 'C\'est difficile !!!';
            }
            ?>
 <!--Bonus : echo ($IsEasy == true) ? 'c\'est facile !' : 'c\'est difficile !!!'; -->           
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