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
    .row.content {height: 450px;
    }

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
                        <li><a href="start-ups.php">Start-ups</a></li>
                        <li class="active"><a href="bestaande-bedrijven.php">Bestaande bedrijven</a></li>
                    </ul>
                </li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="aanmelden.php">Aanmelden</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<P><h2 class="hoofdtype1">Welkom op de pagina van bestaande bedrijven.</h2></P>
<p><h4 class="hoofdtype1">Hier staan bestaande bedrijven die willen uitbreiden, maar op de korte duur niet genoeg geld hebben. </h4></p>
<div class="tabs">
    <div class="tab" id="tab1" onclick=
    "document.getElementById('card1').style.display='block';
            document.getElementById('card2').style.display='none';
            document.getElementById('card3').style.display='none';">
        TCN Data Hotels
    </div>
    <div class="tab" id="tab2" onclick=
    "document.getElementById('card1').style.display='none';
                document.getElementById('card2').style.display='block';
                document.getElementById('card3').style.display='none'">
        De Eendracht
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
        <img src="img/tcn.png" style="width= 150px; height: 90px;">
        <br>TCN Data Hotels
        <div class="x-icon" onclick=
        "document.getElementById('card1').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> In de afgelopen jaren is de vraag naar hoogwaardige datacenters meer dan 500% toegenomen en de markt is nog niet uitgegroeid. TCNs kennis van datacenter design en operatie resulteert in uiterst betrouwbare datacenters tegen de beste prijs.
        TCN Data Hotels hebben als enige in Nederland zes negens beschikbaarheid gemeten over de afgelopen tien jaar.<br> Het bedrijf heeft ongeveer 25 miljoen euro nodig om uit te breiden in data hotels.  </div>

</div>
<div class="cards" id="card2" style="display: none;">
    <div class="content-left">
        <img src="img/eendracht_logo.gif" style="width= 50px; height: 80px;">
        De Eendracht
        <div class="x-icon" onclick=
        "document.getElementById('card2').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> De Eendracht in Rouveen wil uitbreiden van 35.000 ton productiecapaciteit nu naar 60.000 ton in de nabije toekomst.
        Het is de kleinste coöperatieve producent van gangbaar en biologisch rundvee- en pluimveevoer van Nederland. De Eendracht in Rouveen wil uitbreiden van 35.000 ton productiecapaciteit nu naar 60.000 ton in de nabije toekomst. Een woning moet wijken om het goed rondrijden van vrachtwagens mogelijk te maken, een nieuw siloblok tot 25 meter hoog is broodnodig en een nieuwe loods van 1.500 vierkante meter moet er ook komen.</div>
     <br>
    De Eendracht heeft ongeveer 450 000 euro nodig om zijn uitbreidingen tot stand te laten komen.
</div>
<div class="cards" id="card3" style="display: none;">
    <div class="content-left">
        <img src="mixus.jpeg" style="width= 40px; height: 40px;">
        Mixus studio
        <div class="x-icon" onclick=
        "document.getElementById('card3').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Mixus studio is een grafisch ontwerpbureau uit Rotterdam. Bij ons kan je terecht voor alles op het gebied van visuele communicatie. Heb je bijvoorbeeld een nieuwe huisstijl, menukaarten of brochures nodig? Heeft jouw merk een boost nodig of wil je een beter design voor jouw website?
        Wij helpen je snel, persoonlijk en brengen een frisse wind in jouw visuele communicatie!</div>


</body>