var slideContact = $(".contactFluent");
var slideIn = $('.slide');

slideIn.click(function(e) {
    e.stopPropagation();
    slideContact.toggleClass("slideIn");

});
slideContact.click(function(e) {
    slideContact.removeClass("slideIn");

});
$(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $('.close').click();
        slideContact.click();
        $("#photo-big").click();
    }

});

var loadNewContent = function(mansion) {
    $.ajax("includes/" + mansion + ".html", {
        success: function(response) {
            // console.log(response);

            $("#more-desc").html(response);

        }
    });
};
// loadNewContent(destin);
var loftData = ["leLoft", 27, "https://www.google.com/maps/place/2+Rue+du+Carlit,+66430+Bompas,+Francja/@42.7272861,2.9273686,16.5z/data=!4m19!1m13!4m12!1m3!2m2!1d2.931253!2d42.7301003!1m6!1m2!1s0x12b06f5d92df4af7:0x488b07934f97e76f!2s2+Rue+du+Carlit,+66430+Bompas,+Francja!2m2!1d2.9312706!2d42.7295993!3e0!3m4!1s0x12b06f5d92df4af7:0x488b07934f97e76f!8m2!3d42.7295993!4d2.9312706", "Rue du Carlit 2bis", "66430 Bompas", "https://www.airbnb.fr/rooms/19741898?location=Bompas&adults=9&check_in=2019-08-24&check_out=2019-08-31&s=EPAGcnnc"];

var bleuAzurData = ["bleu_azur", 26, "https://www.google.com/maps/place/7+Rue+des+Rois+de+Majorque,+66430+Bompas,+Francja/@42.726848,2.9252583,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06f6878d9f603:0xfdcdd60f63d7eb3!8m2!3d42.7268441!4d2.927447", "Rue des Rois de Majorque 7", "66430 Bompas", "https://fr.airbnb.ch/rooms/9132386?location=Bompas%2C%20France&adults=10"];

var fiveStarData = ["fiveStar", 15, "https://www.google.com/maps/place/10+Rue+des+N%C3%A9fliers,+66430+Bompas,+Francja/@42.732549,2.943022,17z/data=!3m1!4b1!4m5!3m4!1s0x12b065f2330bd935:0xb5855dbce1795929!8m2!3d42.7325451!4d2.9452107", "Rue des Néfliers 10", "66430 Bompas", "https://www.airbnb.fr/rooms/5517230?adults=9&children=0&infants=0&toddlers=0&check_in=2019-09-07&check_out=2019-09-14&s=PpHygjgx"];

var palmiersData = ["palmiers", 40, "https://www.google.com/maps/place/27+Rue+de+la+Doulsoye,+66430+Bompas,+Francja/@42.7284226,2.9271422,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06f678fa8e0c9:0x682d83b5f7994604!8m2!3d42.7284187!4d2.9293309", "Rue de la Doulsoye 27", "66430 Bompas", "https://fr.airbnb.ch/rooms/20354936?location=Bompas%2C%20France&adults=10"];

var oliviersData = ["oliviers", 22, "https://www.google.com/maps/place/27+Rue+de+la+Doulsoye,+66430+Bompas,+Francja/@42.7284226,2.9271422,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06f678fa8e0c9:0x682d83b5f7994604!8m2!3d42.7284187!4d2.9293309", "Rue de la Doulsoye 27", "66430 Bompas", "https://www.airbnb.fr/rooms/21750525?adults=9&check_in=2019-09-07&check_out=2019-09-14&s=cNfYOtIS"];

var pavillonData = ["pavillon", 13, "https://www.google.com/maps/place/27+Rue+de+la+Doulsoye,+66430+Bompas,+Francja/@42.7284226,2.9271422,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06f678fa8e0c9:0x682d83b5f7994604!8m2!3d42.7284187!4d2.9293309", "Rue de la Doulsoye 27", "66430 Bompas", "https://abnb.me/hN5pp0KxvQ"];

var thezaData = ["theza", 4, "https://www.google.com/maps/place/5+Rue+de+Theza,+66100+Perpignan,+Francja/@42.6785174,2.9049137,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06fd07b65b9a5:0xae5797374c98c129!8m2!3d42.6785135!4d2.9071024", "Rue de Théza 5", "66000 Perpignan", "https://abnb.me/sOFfuvjXXX"];

var marsalData = ["marsal", 9, "https://www.google.com/maps/place/2+Square+Saint-Marsal,+66100+Perpignan,+Francja/@42.6845604,2.9021882,17z/data=!3m1!4b1!4m5!3m4!1s0x12b06fcec311f539:0xa9e38a481ed9b8b6!8m2!3d42.6845565!4d2.9043769", "Square Saint Marsal 2", "66100 Perpignan", "https://www.airbnb.fr/rooms/14914462?s=51"];

var morebox = $('#morebox');
var close = $('.close');
var address = $('#address');
var linkGoogle = $('#googleMap');
var rue, city, mansData, howMany;
var googleHref;
var descWrapper;
var descText;
var next = $('.next');
var prev = $('.prev');
var miniGallery = $('#gallery-content');
var bigGallery = $('#gallery');
close.click(function() {
    $(this).parent().addClass('hide');
    $("body").removeClass("modal-open");
});


var setContent = function(mansion) {
    loadNewContent(mansion);
    setTimeout(function() {
        descWrapper = document.querySelector('.wrapper-desc').offsetHeight;
        var descText = document.querySelector('#more-desc').scrollHeight;
    }, 60);
    noScroll();
    morebox.toggleClass('hide');
    mansData = eval(mansion + "Data");
    googleHref = mansData[2];
    // googleHref = eval(mansion + "Data")[2];
    rue = mansData[3];
    city = mansData[4];
    address.html("<a href='" + googleHref + "' target='_blank'><h3>" + rue + "</h3> <p>" + city + "</p></a><div class='pine'></div></div>");
    // console.log(googleHref);
    miniGallery.css("background-image", "url('./assets/images/" + mansion + "/1.jpg')");
    linkGoogle.attr('href', mansData[5]);
    howMany = mansData[1];
    var currentPict = 1;
    next.click(function(e) {
        e.stopPropagation();
        (currentPict >= howMany) ? currentPict = 1: currentPict++;
        miniGallery.css("background-image", "url('./assets/images/" + mansion + "/" + currentPict + ".jpg')");
    });
    prev.click(function(e) {
        e.stopPropagation();
        (currentPict <= 1) ? currentPict = howMany: currentPict--;
        miniGallery.css("background-image", "url('./assets/images/" + mansion + "/" + currentPict + ".jpg')");
    });
    // miniGallery.on("click", (showGallery(mansion, currentPict)));
    miniGallery.on("click", function() {
        showGallery(mansion, currentPict);
    });
};

var showGallery = function(mansion, curr) {

    mansData = eval(mansion + "Data");
    howMany = mansData[1];
    var currentPict = curr;
    bigGallery.css("background-image", "url('./assets/images/" + mansion + "/" + currentPict + ".jpg')");
    bigGallery.removeClass('hide');
    next.click(function(e) {
        e.stopPropagation();
        (currentPict >= howMany) ? currentPict = 1: currentPict++;
        bigGallery.css("background-image", "url('./assets/images/" + mansion + "/" + currentPict + ".jpg')");
    });
    prev.click(function(e) {
        e.stopPropagation();
        (currentPict <= 1) ? currentPict = howMany: currentPict--;
        bigGallery.css("background-image", "url('./assets/images/" + mansion + "/" + currentPict + ".jpg')");
    });
    //function adding class to body
    noScroll();
    //bind csroll to big gallery
    $("#gallery").bind('mousewheel DOMMouseScroll', function(event) {
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            // scroll up
            prev.click();
        } else {
            // scroll down
            next.click();

        }
    });
    $(document).keydown(function(e) {
        if (e.keyCode == 39) {
            next.click();
        }
        if (e.keyCode == 37) {
            prev.click();
        }
    });
};

var mobileMenu = $('.small-screen');
var vanish = $('.vanish');
var cl1 = $('.cl1');
var cl2 = $('.cl2');

var showMenu = function(e) {
    mobileMenu.toggleClass('showMobile');
    cl1.toggleClass('showMobile');
    cl2.toggleClass('showMobile');
    vanish.toggleClass('showMobile');
};

var noScroll = function() {
    $("body").addClass("modal-open");
};