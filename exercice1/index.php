<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer une variable age et l'initialiser avec une valeur.
            Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. 
            Dans le cas contraire, afficher Vous êtes mineur.-->
        <title>Exercice 1 de la partie 2 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de la variable age en lui donnant une valeur int
            $age = 12;
// Introduction de la condition
            if ($age <= 18) {
// Affichage de la variable
                echo 'Vous êtes mineur !';
            } else {
                echo 'Vous êtes majeur !';
            }
            ?> 
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

