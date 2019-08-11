<?php
$page = 'index';
?>
<?php include("includes/header.php"); ?>
<div class="hero" style="background-image: url('./assets/images/plage.jpg');">
</div>
<div class="row">
<h1>Description de la région & Bompas :</h1>
<div class='row_desc'>
    <p>La commune de Bompas (<a href='http://www.bompas.ch/' target='_blank'>www.bompas.ch</a>) se situe à 5 minutes en voiture de Perpignan et à 30 minutes de l’Espagne. </p>
    <p>Le village offre un cadre de vie particulièrement agréable. Au cœur de la ville se trouve son exceptionnel parc des sports et des loisirs.
    Le parc renferme plusieurs terrains de sports, une aire de festivités, des aires de pique-nique, des aires de jeux pour enfants et même un parc animalier qui propose des ballades en poneys qui ravira vos petits.
    De belles plages de sable fin avec de nombreux clubs de plage se trouvent à 10 minutes en voiture de Bompas.
    La région est idéale avec ses paysages variés et magnifiques avec la mer et la montagne à proximité pour passer des vacances balnéaires, culturelles et découvrir la délicieuse cuisine catalane. 
    </p>
    <p>Vous n’aurez qu’une seule envie, y revenir une prochaine fois !</p>
</div>
</div>
<div class='section'>
    <div id="loft">
        <!-- <div class="row"> -->
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Le Loft</h2>
                </div>
                <img src="./assets/images/loft/27.jpg" onclick=showGallery("loft",27)>
                <div class="popup">
                    <h2>12 personnes</h2>
                </div>
            </div>
            <button><a
                    href="https://www.airbnb.fr/rooms/19741898?location=Bompas&adults=9&check_in=2019-08-24&check_out=2019-08-31&s=EPAGcnnc"
                    target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("loft")>Voir plus </button>
        </div>
    </div>
    <div id="bleuAzur">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Villa Bleu Azur</h2>
                </div>
                <img src="./assets/images/bleuAzur/19.jpg" alt="" onclick=showGallery("bleuAzur",19)>
                <div class="popup">
                    <h2>10 personnes</h2>
                </div>
            </div>
            <button><a href="https://fr.airbnb.ch/rooms/9132386?location=Bompas%2C%20France&adults=10"
                    target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("bleuAzur")>Voir plus </button>
        </div>

    </div>
    <div id="fiveStar">
        <!-- <div class="row"> -->
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Villa 5*</h2>
                </div>
                <img src="./assets/images/fiveStar/10.jpg" onclick=showGallery("fiveStar",10)>
                <div class="popup">
                    <h2>12 personnes</h2>
                </div>
            </div>
            <button><a
                    href="https://www.airbnb.fr/rooms/5517230?adults=9&children=0&infants=0&toddlers=0&check_in=2019-09-07&check_out=2019-09-14&s=PpHygjgx"
                    target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("fiveStar")>Voir plus </button>
            <!-- </div> -->
        </div>
    </div>
    <div id="palmiers">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Villa Palmiers</h2>
                </div>
                <img src="./assets/images/palmiers/40.jpg" onclick=showGallery("palmiers",40)>
                <div class="popup">
                    <h2>10 personnes</h2>
                </div>
            </div>
            <button><a href="https://fr.airbnb.ch/rooms/20354936?location=Bompas%2C%20France&adults=10"
                    target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("palmiers")>Voir plus </button>
        </div>
    </div>
    <div id="oliviers">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Villa Oliviers</h2>
                </div>
                <img src="./assets/images/oliviers/5.jpg"  onclick=showGallery("oliviers",5)>
                <div class="popup">
                    <h2>10 personnes</h2>
                </div>
            </div>
            <button><a
                    href="https://www.airbnb.fr/rooms/21750525?adults=9&check_in=2019-09-07&check_out=2019-09-14&s=cNfYOtIS"
                    target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("oliviers")>Voir plus </button>
        </div>
    </div>
    <div id="pavillon">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Le Pavillon</h2>
                </div>
                <img src="./assets/images/pavillon/12.jpg"  onclick=showGallery("pavillon",12)>
                <div class="popup">
                    <h2>6 personnes</h2>
                </div>
            </div>
            <button><a href="https://abnb.me/hN5pp0KxvQ" target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("pavillon")>Voir plus </button>
        </div>
    </div>
    <div id="theza">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Appartement Théza</h2>
                </div>
                <img src="./assets/images/theza/4.jpg" onclick=showGallery("theza",4)>
                <div class="popup">
                    <h2>6 personnes</h2>
                </div>
            </div>
            <button><a href="https://abnb.me/sOFfuvjXXX" target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("theza")>Voir plus </button>
        </div>
    </div>
    <div id="marsal">
        <div class="information_box">
            <div class="picture_wrapper">
                <div class="title">
                    <h2>Appartement Marsal</h2>
                </div>
                <img src="./assets/images/marsal/5.jpg" alt="" onclick=showGallery("marsal",5)>
                <div class="popup">
                    <h2>8 personnes</h2>
                </div>
            </div>
            <button><a href="https://www.airbnb.fr/rooms/14914462?s=51" target="_blank">Réservation
                    & Disponibilité</a></button>
            <button><a href="#">Télécharger</a></button>
            <button onclick=setContent("marsal")>Voir plus </button>
        </div>
    </div>
</div>
<?php 
include ('includes/contactFluent.php');
?>

<div id="morebox" class='hide'>
    <div class="close">
        <!-- <span></span> -->
        &times;
    </div>
    <div class="desc-address">
        <div class='wrapper-desc'>
            <div id="more-desc"></div>
        </div>
        <div id="address">
            <div class="pine"></div>
        </div>
    </div>
    <div id="mini-pictures">
        <div class="mini-gallery">
            <div class="gallery-nav prev"> <img src="./assets/images/arrow-left.png" alt="" srcset=""></div>
            <div id="gallery-content"></div>
            <div class="gallery-nav next"><img src="./assets/images/arrow-right.png" alt=""></div>

        </div>
        <div class="button-wrapper">
            <button>Plan</button>
            <button >Situation</button>
            <button>
                <a id='googleMap' target='_blank'>Réservation & Disponibilité</a>
            </button>
            <button><a>Télécharger</a></button>
        </div>
    </div>


</div>
<div id="gallery" class='hide'>
    <div class="close">
        &times;
    </div>
    <div class="gallery-nav prev"> <img src="./assets/images/arrow-left.png" alt="" srcset=""></div>
    <!-- <div id="bigGallery"></div> -->
    <div class="gallery-nav next"><img src="./assets/images/arrow-right.png" alt=""></div>
</div>
<script>
menuHandler = $("#proprietes a");
//scrolling function
menuHandler.on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 90
        }, 800);
    } // End if
});
</script>
<script src="assets/js/app.js"></script>
<?php include("includes/footer.php"); ?>