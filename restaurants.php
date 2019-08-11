<?php
$page = 'restaurants';
?>
<?php include("includes/header.php"); ?>
<div class="hero" style="background-image: url('./assets/images/restaurants.jpg');">
</div>
<div class="row">
    <div id="restaurants">
        <h2>Restaurants</h2>
        <div class='row_desc'>
            <a href='https://le-mess.fr/' target='_blank'>
                <span>Le Mess, Perpignan</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='https://www.facebook.com/hallesvauban/' target='_blank'>
                <span>Les halles Vauban, 37 quai Sebastien Vauban, Perpignan</span>
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
    <div id="bars">
        <h2>Bars</h2>
        <div class='row_desc'>
            <a href='https://le-mess.fr/' target='_blank'>
                <span>Le Mess, Perpignan</span>
            </a>
        </div>
        <div class='row_desc'>
            <a href='http://backstage-perpignan.com/' target='_blank'>
                <span>Le Backstage</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div id="discos"></div>
</div>

<?php 
include ('includes/contactFluent.php');
?>

<script>
menuHandler = $("#restaurants a");

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