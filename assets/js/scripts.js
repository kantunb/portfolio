window.onload = function () {

    // Smooth scroll
    $(document).ready(function () {
        $('.scrollTo').on('click', function () { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            console.log(page);
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate({
                scrollTop: $(page).offset().top
            }, speed); // Go
            return false;
        });
    });

    // Toggle Mobile menu
    // $('#menuToggleButton').on('click', () => {
    //     event.preventDefault();
    //     $('#menuToggle').animate({'left': 'toggle'}, {duration: 500, complete: function() { /* Animation complete */ }});
    // });

    $('#menuToggleButton').on('click', () => {
        const menuButton = $('#menuToggleButton')
        const menuBar = $('#menuBar');
        const menuBarPosition = menuBar.css('left');
        const intPosition = parseInt(menuBarPosition);
        event.preventDefault();
        if(intPosition > 0){
            left = '0%';
        }else{
            left = '100%';
        }
        menuBar.animate({'left': left}, {duration: 500, complete: function() { /* Animation complete */ }});
        menuButton.toggleClass('fa-bars').toggleClass('fa-times');
    });



    // Isotope

    $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'masonry'
    });

    // init Isotope
    var $grid = $('.grid').isotope({
        // options
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    // Leaflet

    var mymap = L.map('mapid').setView([45.7745, 4.8321], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia2FudGJ4dHMiLCJhIjoiY2tiNTVtMHRkMGwwNTJ4bXp1dGoyNG1xZyJ9.5Q5dHR2mRLZ0fYYOjZOGsA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/light-v10',
        tileSize: 512,
        zoomOffset: -1,
        // accessToken: 'pk.eyJ1Ijoia2FudGJ4dHMiLCJhIjoiY2tiNTVtMHRkMGwwNTJ4bXp1dGoyNG1xZyJ9.5Q5dHR2mRLZ0fYYOjZOGsA'
    }).addTo(mymap);

    var marker = L.marker([45.775562, 4.83452]).addTo(mymap);
    
};