<?php
$page = 'shopping';
?>
<?php include("includes/header.php"); ?>
<div class="hero" style="background-image: url('./assets/images/shop.jpg');">
</div>


<div class="row">
    <div id="boulangerie">
        <h2>Boulangerie</h2>
        <div class='row_desc'>
            <a href='https://www.l-epi-dor.fr/gateau-d-anniversaire' target='_blank'>
                <span>L’Epi d’or</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://www.marieblachere.com/' target='_blank'>
                <span>Marie Blachère</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://www.lemiramar66.com/' target='_blank'>
                <span>Le Miramar, Canet-en-Roussillon</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://www.domaine-de-rombeau.com/' target='_blank'>
                <span>Le domaine de Rambeau, Rivesaltes</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div id="supermarche">
        <h2>Supermarchés</h2>
        <div class='row_desc'>
            <a href='https://www.magasins-u.com/magasin/superu-bompas#xtor=CS2-21-[su]-[]-[]-[]' target='_blank'>
                <span>SUPER U</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://www.e-leclerc.com/espace-polygone' target='_blank'>
                <span>Leclerc, Perpignan</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='https://www.salanca.com/' target='_blank'>
                <span>Carrefour, Claira</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='https://www.auchan.fr/magasins/perpignan-porte-d-espagne/sl-20' target='_blank'>
                <span>Auchan, Perpignan</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div id="mall">
    <h2>Mall</h2>
    </div>
</div>
<div class="row">
    <div id="marche">
    <h2>Marche</h2>
    </div>
</div>
<div class="row">
    <div id="poissonnerie">
        <h2>Poissonnerie</h2>
        <div class='row_desc'>
            <span>Azeau Mireille</span>
            <ul>
                <li>
                    <p>Adresse : 5 Rue René Paratilla, 66000 Perpignan</p>
                    <p>Téléphone : 04 68 51 47 64</p>
                </li>
            </ul>
        </div>
        <div class='row_desc'>
            <span>Chez Fabienne, Bompas - Fruits et légumes </span>
            <ul>
                <li>
                    <p>Adresse : 7 Avenue Pasteur, 66430 Bompas</p>
                    <p>Téléphone : 04 68 63 37 66</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div id="rocaVilage">
        <h2>Shopping</h2>
        <div class='row_desc'>
            <a href='https://www.larocavillage.com/es/home/' target='_blank'>
                <span>La Roca Village, Espagne</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='https://www.granjonquera.com/ca/' target='_blank'>
                <span>La jonqueire, Espagne</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://www.espaigirones.com/' target='_blank'>
                <span>Espai, Gérone</span>
            </a>
        </div>
    </div>
</div>

<?php 
include ('includes/contactFluent.php');
?>

<script>
menuHandler = $("#shopping a");

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