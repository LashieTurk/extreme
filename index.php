<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/styles.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px;
            float: left;
            text-align: center;
            margin-left: 27.5%;
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
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advertentie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="start-ups.php">Start-ups</a></li>
                        <li><a href="bestaande-bedrijven.php">Bestaande bedrijven</a></li>
                    </ul>
                </li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="aanmelden.php">Aanmelden</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

<div class="container-fluid text-center">
    <div class="row content">
        <h1 class="hoofdtype1">Welkom bij safebusiness.</h1>
        <p class="hoofdtype1">Wij zijn een bedrijf dat kleine en bestaande bedrijven helpen om financieel te ondersteunen.
            <br>
            Als je een bedrijf wilt beginnen of al een bedrijf hebt en je hebt hulp nodig.
            <br>
            kunt u bij ons uw advertentie plaatsen. Ook hebben wij een paar grote bedrijven die u misschien kunt aanspreken.
            <br>
            In hoop dat grote bedrijven interesse tonen om bedrijven te helpen.
            <hr>
    <p>
    </div>
</div>
<?php include 'footer.php'; ?>