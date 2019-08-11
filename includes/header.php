<?php 
    session_start();
    $defaultLang = 'fr';

    if (!empty($_GET["lng"])) { 
        switch (strtolower($_GET["lng"])) {
            case "fr":
                $_SESSION['lang'] = 'fr';
                break;
            case "en":
                $_SESSION['lang'] = 'en';
                break;
            default:
                $_SESSION['lang'] = $defaultLang;
                break;
        }
    }
    if(empty($_SESSION['lang'])){
        $_SESSION['lang'] = $defaultLang;
    }
    
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'];?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villas66</title>
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="./assets/js/app.js"></script> -->
    <script>

    </script>
</head>

<body>
    <div id="header">
        <div class="wrapper">
            <ul id='proprietes'>
                <li><?php echo(($_SESSION['lang'] == 'en')?'Our Properties':'Nos Propriétés');?>
                 <!-- if($_SESSION['lang'] == 'en'){echo 'Our Properties';}else{echo 'Nos Propriétés';}  ?> -->
                    <ul class='dropDown'>
                        <li><a href="index.php#loft">Le Loft</a></li>
                        <li><a href="index.php#bleuAzur">Villa Bleu Azur</a></li>
                        <li><a href="index.php#fiveStar">Villa 5*</a></li>
                        <li><a href="index.php#palmmiers">Villa Palmiers</a></li>
                        <li><a href="index.php#oliviers">Villa Oliviers</a></li>
                        <li><a href="index.php#pavillon">Le Pavillon</a></li>
                        <li><a href="index.php#theza">Appartement Theza</a></li>
                        <li><a href="index.php#marsal">Appartement Marsal</a></li>
                    </ul>
                </li>

            </ul>
            <ul id="navbar">
                <li <?php echo ($page=='index' ? 'class="active"': '') ?>>
                    <a href="index.php">Region</a>
                </li>
                <li id='activites' <?php echo ($page=='activites' ? 'class="active"': '') ?>>
                    <a href="activites.php">Activites</a>
                    <ul class='dropDown'>
                        <li><a href="activites.php#plages">Plages</a></li>
                        <li><a href="activites.php#beach">Beach Club</a></li>
                        <li><a href="activites.php#nature">Nature</a></li>
                        <li><a href="activites.php#sports">Sports</a></li>
                        <li><a href="activites.php#divertis">Divertissements</a></li>
                        <li><a href="activites.php#culture">Culture</a></li>
                        <li><a href="activites.php#villes">Villes</a></li>
                        <li><a href="activites.php#events">Events</a></li>
                    </ul>
                </li>
                <li id='restaurants' <?php echo ($page=='restaurants' ? 'class="active"': '') ?>>
                    <a href="restaurants.php">Restaurants</a>
                    <ul class='dropDown'>
                        <li><a href="restaurants.php#restaurants">Restaurants</a></li>
                        <li><a href="restaurants.php#bars">Bars</a></li>
                        <li><a href="restaurants.php#discos">Discos</a></li>
                    </ul>
                </li>
                <li id='shopping' <?php echo ($page=='shopping' ? 'class="active"': '') ?>>
                    <a href="shopping.php">Shopping</a>
                    <ul class='dropDown'>
                        <li><a href="shopping.php#boulangerie">Boulangerie</a></li>
                        <li><a href="shopping.php#supermarche">Supermarche</a></li>
                        <li><a href="shopping.php#mall">Mall</a></li>
                        <li><a href="shopping.php#marche">Marche</a></li>
                        <li style="line-height:30px;"><a href="shopping.php#poissonnerie">Poissonnerie + fruits &<br>
                                legumes</a></li>
                        <li style="line-height:30px;"><a href="shopping.php#rocaVilage">Shopping<br>(rocca village)</a>
                        </li>
                    </ul>
                </li>
                <li id='emergency' <?php echo ($page=='emergency' ? 'class="active"': '') ?>>
                    <a href="emergency.php">Emergency</a>
                    <ul class='dropDown'>
                        <li><a href="emergency.php#hospital">Hospital - Urgences</a></li>
                        <li><a href="emergency.php#doctor">Docteurs</a></li>
                        <li><a href="emergency.php#dentist">Dentistes</a></li>
                    </ul>
                </li>
                <li id='FAQ' <?php echo ($page=='FAQ' ? 'class="active"': '') ?>>
                    <a href="FAQ.php">FAQ</a>
                    <ul class='dropDown'>
                        <li><a href="FAQ.php#wifi">Wifi Code</a></li>
                        <li><a href="FAQ.php#poubelies">Poubelles</a></li>
                        <li><a href="FAQ.php#houres">Heure Arrivve/Depart</a></li>
                        <li><a href="FAQ.php#checkOut">Check-out</a></li>
                    </ul>
                </li>
                <li>
                    <?php 
                    if($_SESSION['lang'] == 'en'){echo "<a href='?lng=fr'>FR/<b><u>EN</u></b></a>";}
                    if($_SESSION['lang'] == 'fr'){echo "<a href='?lng=en'><b><u>FR</u></b>/EN</a>";}
                   ?>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>

            </ul>
        </div>
    </div>
    <div class='small-screen' display='none'>
        <div class="burger" onclick="showMenu()">
            <span class='cl1'></span>
            <span class='cl2'></span>
            <span class='vanish'></span>
        </div>
        <ul id="mobile-menu">
            <li <?php echo ($page=='index' ? 'class="active"': '') ?>>
                <a href="index.php">Region</a>
            </li>
            <li id='activites' <?php echo ($page=='activites' ? 'class="active"': '') ?>>
                <a href="activites.php">Activites</a>
            </li>
            <!-- <li id='activites' <?php echo ($page=='activites' ? 'class="active"': '') ?>>
                <a href="activites.php">Activites</a>
            </li> -->
            <li id='restaurants' <?php echo ($page=='restaurants' ? 'class="active"': '') ?>>
                <a href="restaurants.php">Restaurants</a>
            </li>
            <li id='shopping' <?php echo ($page=='shopping' ? 'class="active"': '') ?>>
                <a href="shopping.php">Shopping</a>
            </li>
            <li id='emergency' <?php echo ($page=='emergency' ? 'class="active"': '') ?>>
                <a href="emergency.php">Emergency</a>
            </li>
            <li id='FAQ' <?php echo ($page=='FAQ' ? 'class="active"': '') ?>>
                <a href="FAQ.php">FAQ</a>
            </li>
            <li>
                <?php 
                    if($_SESSION['lang'] == 'en'){echo "<a href='?lng=fr'>FR/<b><u>EN</u></b></a>";}
                    if($_SESSION['lang'] == 'fr'){echo "<a href='?lng=en'><b><u>FR</u></b>/EN</a>";}
                ?>
            </li>

            <li>
                <a href="login.php">Login</a>
            </li>
        </ul>
    </div>
    <div class="wrapper page">