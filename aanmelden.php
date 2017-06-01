<?php include 'header.php'; ?>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
        height: 450px
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

        .row.content {
            height: auto;
        }

    }
</style>
<link rel="stylesheet" href="css/styles.css">
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
                <li ><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advertentie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="start-ups.php">Start-ups</a></li>
                        <li><a href="bestaande-bedrijven.php">Bestaande bedrijven</a></li>
                    </ul>
                </li>
                <li><a href="partners.php">Partners</a></li>
                <li class="active"><a href="aanmelden.php">Aanmelden</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <p class="hoofdtype1"> Meld hier uw bedrijf aan.</p>
<div class="formulier">
    <head>
        <title>Form submission</title>
    </head>
    <body>

    <form name="contactform" method="post" action="mail.php">
        <table width="450px">
            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="first_name">Voornaam *</label>
                </td>
                <td valign="top">
                    <input type="text" name="first_name" maxlength="50" size="30">
                </td>
            </tr>

            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="last_name">Achternaam *</label>
                </td>
                <td valign="top">
                    <input type="text" name="last_name" maxlength="50" size="30">
                </td>
            </tr>

            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="email">Email Address *</label>
                </td>
                <td valign="top">
                    <input type="text" name="email" maxlength="80" size="30">
                </td>
            </tr>

            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="telephone">Telefoon nummer</label>
                </td>
                <td valign="top">
                    <input type="text" name="telephone" maxlength="30" size="30">
                </td>
            </tr>
            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="concept">Het Concept</label>
                </td>
                <td valign="top">
                    <textarea required name="concept" maxlength="1000"></textarea>
                </td>
            </tr>

            <tr>
                <td valign="top" class="hoofdtype1">
                    <label for="comments">Uitleg over concept</label>
                </td>
                <td valign="top">
                    <textarea required name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center" style="background-color: #fff; color: #000">
                    <input type="submit" value="Verzenden">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include 'footer.php'; ?>
