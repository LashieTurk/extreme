
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/materials.css">

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}

    }
    .col-md-4{
        text-align: center;
    }
    .thumbnail{
        text-align: center;
        height: 300px;
    }
</style>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="displayr" src="img/displaysafe.jpg">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advertentie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="start-ups.php">Start-ups</a></li>
                        <li><a href="bestaande-bedrijven.php">Bestaande bedrijven</a></li>
                    </ul>
                </li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="aanmelden.php">Aanmelden</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<P><h2 class="hoofdtype1">Welkom op de Start-up pagina.</h2></P>
<p><h4 class="hoofdtype1">Hier staan de Start-ups die hulp nodig hebben om te beginnen. </h4></p>
<div class="tabs">
    <div class="tab" id="tab1" onclick=
    "document.getElementById('card1').style.display='block';
            document.getElementById('card2').style.display='none';
            document.getElementById('card3').style.display='none';">
        Just Carpets
    </div>
    <div class="tab" id="tab2" onclick=
    "document.getElementById('card1').style.display='none';
                document.getElementById('card2').style.display='block';
                document.getElementById('card3').style.display='none'">
        Thed
    </div>
    <div class="tab" id="tab3" onclick=
    "document.getElementById('card1').style.display='none';
                document.getElementById('card2').style.display='none';
                document.getElementById('card3').style.display='block'">
        Mixus studio
    </div>
</div>
<div class="cards" id="card1" style="display: none;">
    <div class="content-left">
        <img src="img/carpets.png" style="width= 70px; height: 50px;">
        <br>
        Just Carpets
        <div class="x-icon" onclick=
        "document.getElementById('card1').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Just Carpets is in 2017 opgericht door Martin Boone en Chris Simonse.
        <br>Een samenwerking die goed heeft uitgepakt!
        Martin had al veel expertise in de automattenbranche en Chris is als webdeveloper de drijvende kracht achter de online verkoop op de website.<br>
    Just Carpets heeft ongeveer 50 000 euro nodig om te starten.</div>

</div>
<div class="cards" id="card2" style="display: none;">
    <div class="content-left">
        <img src="img/download.png" style="width= 200px; height: 200px;">
        Thed
        <div class="x-icon" onclick=
        "document.getElementById('card2').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Thed is een bedrijfje die net gestart is. laat je video materiaal door iemand professioneel editen. Of laat een logo voor je maken. Ook ben ik goede in het gebied grafisch vormgeven. Per 1 min aan ruw film materiaal is het 5 euro. Per logo is het 20 euro en grafisch vorm geven moeten we even kijken. Mail 1threebuddies1@gmail.com voor meer informatie en als je wilt dat ik edit, fotoshop enz.
        Of bel 0651598947. Niet tevreden 50% van je geld terug. Maar dat gaat nooit gebeuren want ik ben past tot rust pas als iedereen er tevreden mee is.</div>
</div>
<div class="cards" id="card3" style="display: none;">
    <div class="content-left">
        <img src="img/mixus.jpeg" style="width= 40px; height: 40px;">
        <br>
        Mixus studio
        <div class="x-icon" onclick=
        "document.getElementById('card3').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Mixus studio is een grafisch ontwerpbureau uit Rotterdam. Bij ons kan je terecht voor alles op het gebied van visuele communicatie. Heb je bijvoorbeeld een nieuwe huisstijl, menukaarten of brochures nodig? Heeft jouw merk een boost nodig of wil je een beter design voor jouw website?
        Wij helpen je snel, persoonlijk en brengen een frisse wind in jouw visuele communicatie!</div>



</body>


