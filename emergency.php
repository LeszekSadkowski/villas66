<?php
$page = 'emergency';
?>

<?php include("includes/header.php"); ?>
<div class="hero" style="background-image: url('./assets/images/plage.jpg');">
</div>

<div class='row'>
    <div id="hospital">
        <h2>Hôpital urgences</h2>
        <div class='row_desc'>
            <a href='http://www.ch-perpignan.fr/accueil-3.html' target='_blank'>
                <span>Hôpital urgences, Perpigan</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='https://www.lexpress.fr/palmares/hopitaux/languedoc-roussillon/pyrenees-orientales/cabestany_66/polyclinique-saint-roch_660842.html'
                target='_blank'>
                <span>Polycliniques urgences, Cabestany</span>
            </a>
            <p>Emergency : + 33  04 28 63 10 10</p>
        </div>
    </div>
</div>
<div class='row'>
    <div id="doctor">
        <h2>Docteurs</h2>
        <div class='row_desc'>
            <span>Médecins</span>
            <ul>
                <li>
                    <p>Boyer Jean-Louis, Bompas</p>
                    <p>Adresse : 9 Rue Christophe Colomb, 66430 Bompas</p>
                    <p>Téléphone : 04 68 63 16 79</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class='row'>
    <div id="dentist">
        <h2>Dentistes</h2>
        <div class='row_desc'>
            <span>Dentistes</span>
            <ul>
                <li>
                    <p>Bourrel Magali, Bompas</p>
                    <p>Adresse : 14 Avenue du Haut Vernet, 66430 Bompas</p>
                    <p>Téléphone : 04 68 63 23 19</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="emrg_numbers">
    <img src="./assets/images/n1.jpg" >
    <img src="./assets/images/n2.jpg" >
    <img src="./assets/images/n3.jpg" >
    <img src="./assets/images/n4.jpg" >
    <img src="./assets/images/n5.jpg" >
    <img src="./assets/images/n6.jpg" >
</div>
<?php 
include ('includes/contactFluent.php');
?>

<script>
menuHandler = $("#emergency a");


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