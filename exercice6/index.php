<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Traduire ce code avec des if et des else : traduire une ternaire
            <php echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';?> -->
        <title>Exercice 6 de la partie 2 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de la variable age
            $age = 15;
// Mise en place de la structure if...else avec utilisation du symbole Supérieur ou égal à            
            if ($age >= 18){
                echo 'Tu es majeur.';
            }
            else {
                echo 'Tu es mineur.';
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