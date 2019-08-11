<?php
$page = 'FAQ';
?>
<?php include("includes/header.php"); ?>
<div class="hero" style="background-image: url('./assets/images/plage.jpg');">
</div>
<div class='row'>
    <div id="wifi">
        <h2>Code Wifi</h2>
        <div class='row_desc'>
            <span>1234567890 </span>

        </div>
    </div>
</div>
<div class='row'>
    <div id="poubelies">
        <h2>Poubelies</h2>
        <div class='row_desc'>
        <a href='#' target='_blank'>
            <span>Télécharger</span>
        </a>
    </div>
    </div>
</div>
<div class='row'>
    <div id="houres">
        <h2>Heures arrivée/départ<br>
            Arrivées dès <strong>16h00</strong><br>
            Sortie au plus tard à <strong>10h00</strong></h2>
        </h2>
    </div>
</div>
<div class='row'>
    <div id="checkOut">
        <h2>Check-out</h2>
        <div class='row_desc'>
        <a href='#' target='_blank'>
            <span>Télécharger</span>
        </a>
    </div>
    </div>
</div>

<?php 
include ('includes/contactFluent.php');
?>

<script>
menuHandler = $("#FAQ a");

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