<?php
include '../Controller/ticketC.php';
$ticketC = new ticketC();
$listeticket = $ticketC->afficherticket(); //init ticket
?>
<html style="font-size: 16px;">
<head>
    <title>Liste des tickets</title>
    <link rel="stylesheet" href="./Affiche/nicepage.css" media="screen">
    <link rel="stylesheet" href="./Affiche/Accueil2.css" media="screen">
    <script class="u-script" type="text/javascript" src="./Affiche/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./Affiche/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/277826578_727709038594036_95418314771093071_n-removebg-preview.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    <style>
        th:hover {
            cursor: pointer;
            background: #AAA;

        }
    </style>
</head>
<body class="u-body u-xl-mode">
<header class="u-clearfix u-grey-70 u-header u-header" id="sec-ab0a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png"
                 class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-10.png"
                 class="u-logo-image u-logo-image-2">
        </a>
        <a class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-6.png"
                 class="u-logo-image u-logo-image-3">
        </a>
        <a class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-11.png"
                 class="u-logo-image u-logo-image-4">
        </a>
        <a class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-13.png"
                 class="u-logo-image u-logo-image-5">
        </a>
        <a class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-12.png"
                 class="u-logo-image u-logo-image-6">
        </a>
    </div>
</header>
<section class="u-align-center u-clearfix u-section-1" id="sec-38e4">
    <button><a class="u-border-2 u-border-black u-button-style u-hover-black u-none u-text-hover-white u-btn-1"
               href="afficherRec.php">Liste des réclamations</a></button>
    <hr>
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">GESTION tickets</h1>
        <div>
            <label for="ticket-search">Vérifier ticket:</label>
            <input type="number" id="ticket-search" name="ticket-search">
            <button onclick="search_ticket()">Vérifier</button>
            <p>Résultat de la recherche: <span id="search-result"></span></p>
        </div>
        <div>
            <label for="criteres">Critéres de recherhce:</label>
            <select name="criteres" id="criteres">
                <option value="-1">None</option> <!-- option de recherche si aucune renvoie -1 -->
                <option value="0">ID</option>
                <option value="1">Nom</option>
            </select>
            <label for="search">Expression à rechercher:</label>
            <input type="text" id="search" name="search" onkeyup="search()">  <!-- a chaque changement de la valeur au sein del'input -->
        </div>
        <a href="ajouterticket.php"
           class="u-border-black u-button-style u-hover-black u-text-hover-white u-btn-1">AJOUTER</a>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table id="mytable" class="u-table-entity">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead class="u-black u-table-header u-table-header-1">
                <tr style="height: 21px;">
                    <th onclick="trier_id()" class="u-border-1 u-border-black u-table-cell">Identifiant</th>
                    <th onclick="trier_nom()" class="u-border-1 u-border-black u-table-cell">Nom</th>
                    <th onclick="trier_prenom()" class="u-border-1 u-border-black u-table-cell">Prenom</th>
                    <th onclick="trier_email()" class="u-border-1 u-border-black u-table-cell">Email</th>
                    <th onclick="trier_date()" class="u-border-1 u-border-black u-table-cell">Date</th>
                    <th onclick="trier_user()" class="u-border-1 u-border-black u-table-cell">User</th>
                    <th onclick="trier_etat()" class="u-border-1 u-border-black u-table-cell">Etat</th>
                    <th class="u-border-1 u-border-black u-table-cell"></th>
                    <th class="u-border-1 u-border-black u-table-cell"></th>

                </tr>
                </thead>

                <tbody class="u-table-body">
                <?php
                foreach ($listeticket as $ticket) {
                    if (
                        isset($ticket['id']) &&
                        isset($ticket["nom"]) &&
                        isset($ticket["prenom"]) &&
                        isset($ticket["email"]) &&
                        isset($ticket["dateConcert"]) &&
                        isset($ticket["idUser"])
                    ) {
                        if (
                            !empty($ticket["id"]) &&
                            !empty($ticket['nom']) &&
                            !empty($ticket["prenom"]) &&
                            !empty($ticket["email"]) &&
                            !empty($ticket["dateConcert"]) &&
                            !empty($ticket["idUser"])
                        ) {
                            ?>
                            <tr style="height: 75px;">

                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['id']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['nom']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['prenom']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['email']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['dateConcert']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $ticket['idUser']; ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php
                                    if ($ticket['paye'])
                                    echo "Ticket payée";
                                    else echo "Ticket non payée";
                                    ?></td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    <form method="POST" action="modifierticket.php">
                                        <input type="submit" name="Modifier" value="Modifier">
                                        <input type="hidden" value=<?PHP echo $ticket['id']; ?> name="id">
                                    </form>
                                    <form method="POST" action="showticket.php">
                                        <input type="submit" name="Print" value="Imprimer">
                                        <input type="hidden" value=<?PHP echo $ticket['id']; ?> name="id">
                                    </form>
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-table-cell">
                                    <form method="POST" action="supprimerticket.php">
                                        <input type="submit" name="Modifier" value="Supprimer">
                                        <input type="hidden" value=<?PHP echo $ticket['id']; ?> name="id">
                                    </form>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3a6b">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-14.png"
                 class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-15.png"
                 class="u-logo-image u-logo-image-2">
        </a>
        <a class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-5.png"
                 class="u-logo-image u-logo-image-3">
        </a>
        <a class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-7.png"
                 class="u-logo-image u-logo-image-4">
        </a>
        <a class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-9.png"
                 class="u-logo-image u-logo-image-5">
        </a>
        <a class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
            <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-8.png"
                 class="u-logo-image u-logo-image-6">
        </a>
    </div>
</footer>
</body>
<script>
    function search_ticket() {
        let input = document.getElementById('ticket-search').value;
        /*let data = <php echo json_encode($listeticket); ?>;
        if (data.find(t => t.id === parseInt(input)))
            document.getElementById('search-result').textContent = "Ticket existe";
        else
            document.getElementById('search-result').textContent = "Ticket n'existe pas";*/
        $.each($("#mytable tbody tr"), function () { //$("#mytable tbody tr") renvoie la liste des lignes du tableau dont l'id mytable
                if ($(this).find('td').eq(0).text().toLowerCase().indexOf(input) === -1)
                    document.getElementById('search-result').textContent = "Ticket n'existe pas"
                else
                    document.getElementById('search-result').textContent = "Ticket existe"
        });
    }

    function tri_Tableau(f, n) {
        var rows = $('#mytable tbody  tr').get();

        rows.sort(function (a, b) {

            var A = getVal(a);
            var B = getVal(b);

            if (A < B) {
                return -1 * f;
            }
            if (A > B) {
                return 1 * f;
            }
            return 0;
        });

        function getVal(elm) {
            var v = $(elm).children('td').eq(n).text().toUpperCase();
            if ($.isNumeric(v)) {
                v = parseInt(v, 10);
            }
            return v;
        }

        $.each(rows, function (index, row) {
            $('#mytable').children('tbody').append(rows);
        });
    }

    var f_sl = 1; //flag to toggle the sorting order

    function trier_id() {
        f_sl *= -1;
        tri_Tableau(f_sl, 0);
    }

    function trier_nom() {
        f_sl *= -1;
        tri_Tableau(f_sl, 1);
    }

    function trier_prenom() {
        f_sl *= -1;
        tri_Tableau(f_sl, 2);
    }

    function trier_email() {
        f_sl *= -1;
        tri_Tableau(f_sl, 3);
    }

    function trier_date() {
        f_sl *= -1;
        tri_Tableau(f_sl, 4);
    }

    function trier_user() {
        f_sl *= -1;
        tri_Tableau(f_sl, 5);
    }

    function trier_etat() {
        f_sl *= -1;
        tri_Tableau(f_sl, 5);
    }

    function search() {
        let search_text = document.getElementById('search').value.toLowerCase();
        let crit = document.getElementById('criteres').value;
        $.each($("#mytable tbody tr"), function () { //$("#mytable tbody tr") renvoie la liste des lignes du tableau dont l'id mytable
            if (crit == 0) {
                if ($(this).find('td').eq(0).text().toLowerCase().indexOf(search_text) === -1)
                    $(this).hide();
                else
                    $(this).show();
            } else if (crit == 1) {
                if ($(this).find('td').eq(1).text().toLowerCase().indexOf(search_text) === -1)
                    $(this).hide();
                else
                    $(this).show();
            } else {
                if ($(this).text().toLowerCase().indexOf(search_text) === -1)
                    $(this).hide();
                else
                    $(this).show();
            }
        });
    };
</script>
</html>
