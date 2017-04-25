<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un 
            tremblement de terre. Cette échelle va de 1 à 9.
            Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.-->
        <title>Exercice 4 de la partie 2 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de la variable magnitude
            $magnitude = 12;
// On indique la variable sur laquelle nous travaillons
            switch ($magnitude) {
// Introduction des conditions

                case 0: // dans le cas où $magnitude vaut 1
                    echo 'Micro-séisme impossible à ressentir.';
                    break;

                case 1: // dans le cas où $magnitude vaut 2
                    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                    break;

                case 2: // dans le cas où $magnitude vaut 3
                    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                    break;

                case 3: // etc. etc.
                    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                    break;

                case 4:
                    echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                    break;

                case 5:
                    echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                    break;

                case 6:
                    echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                    break;

                case 7:
                    echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                    break;

                case 8:
                    echo 'Séisme capable de tout détruire sur une très vaste zone.';
                    break;

                default:
                    echo 'Désolée, je n\'ai pas de message à afficher pour cette magnitude.';
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