<?php
include_once '../Model/ticket.php';
include_once '../Controller/ticketC.php';

$error = "";

// create ticket
$ticket = null;

// create an instance of the controller
$ticketC = new ticketC();
if (isset($_POST['id'])) { //non null
    $ticket = $ticketC->recupererticket($_POST['id']); //affiche tickets
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
          content="Réservez vos billets, ​childish gambino, $75, $90, $59, ​TYLER, THE CREATOR, $59, $70, $39, THE WEEKND, $99, $99, $99">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Ticket <?php echo $ticket['id']?></title>
    <link rel="stylesheet" href="./ticket/nicepage.css" media="screen">
    <link rel="stylesheet" href="./ticket/Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="./ticket/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./ticket/nicepage.js" defer=""></script>
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
</head>
<body class="u-body u-xl-mode">
<header class="u-clearfix u-header u-header" id="sec-5111">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
            <img src="../images/277826578_727709038594036_95418314771093071_n-removebg-preview.png"
                 class="u-logo-image u-logo-image-1">
        </a>
        <h3 class="u-text u-text-1">Insomiaque</h3>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Accueil.html" style="padding: 10px 40px;">Accueil</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-file-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="files/Events-1.html" style="padding: 10px 40px;">events</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Contact.html" style="padding: 10px 40px;">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Accueil</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="files/Events-1.html">events</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section class="u-align-center-xs u-clearfix u-white u-section-1" id="carousel_59c2">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-custom-font u-text u-title u-text-1">Concert<br>tickets
        </h1>
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
                <colgroup>
                    <col width="100%">
                </colgroup>
                <tbody class="u-table-body">
                <tr style="height: 46px;">
                    <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;User <?php echo $ticket['idUser']; ?>&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; <?php echo $ticket['nom'], ' ', $ticket['prenom']; ?><br>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="u-table u-table-responsive u-table-2">
            <table class="u-table-entity">
                <colgroup>
                    <col width="33.3%">
                    <col width="33.3%">
                    <col width="33.4%">
                </colgroup>
                <tbody class="u-table-body">
                <tr style="height: 46px;">
                    <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Date:<br><?php echo $ticket['dateConcert']; ?>
                    </td>
                    <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-3">Event Name</td>
                    <!--waiting for integration-->
                    <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                        <span style="font-weight: 700;">Ticket num</span>
                        <br><?php echo $ticket['id']; ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <a href = "mailto:<?php echo $ticket['email']; ?>?subject = Feedback&body = Message">
            Send in mail
        </a>
        <br>
        <button type="button" class=
        "btn btn-default" id="generate">
            Generate
        </button>
        <div class="container-fluid">
            <div class="text-center">

                <!-- Get a Placeholder image initially,
                 this will change according to the
                 data entered later -->
                <img src=
                     "https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                     class="qr-code img-thumbnail img-responsive" />
            </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-3d24"><!--position-->
    <div data-position="" class="u-position u-position-1"><!--block-->
        <div class="u-block">
            <div class="u-block-container u-clearfix"><!--block_header-->
                <h5 class="u-block-header u-text"><!--block_header_content-->Contactez-nous sur<br>Insomniaque@gmail.com
                    <!--/block_header_content-->
                </h5><!--/block_header--><!--block_content-->
                <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div>
                <!--/block_content-->
            </div>
        </div><!--/block-->
    </div><!--/position-->
    <img class="u-image u-image-1" src="../images/278069607_687825949226717_7532688245599912975_n.png"
         data-image-width="299" data-image-height="75">
</section>
<script src=
        "https://code.jquery.com/jquery-3.5.1.js">
</script>
<script>
    function htmlEncode(value) {
        return $('<div/>').text(value)
            .html();
    }

    $(function () {
        $('#generate').click(function () {
            let finalURL =
                'https://chart.googleapis.com/chart?cht=qr&chl=' +
                htmlEncode(document.URL) +
                '&chs=160x160&chld=L|0'
            $('.qr-code').attr('src', finalURL);
        });
    });
</script>


<footer class="u-clearfix u-footer u-grey-80 u-valign-middle u-footer" id="sec-72a5">
    <div class="u-clearfix u-gutter-100 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1"
                     data-image-width="1897" data-image-height="270">
                    <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
    </a>.
</section>
</body>
</html>

