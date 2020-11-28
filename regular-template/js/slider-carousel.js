$(document).on('ready', function() {

    $(".slider, .slider-3").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 3000,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        autoPlay: true,
        navigationText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"]
         
        

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});



$(document).on('ready', function() {

    $(".slider-2").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 3000,
        paginationSpeed: 400,
         
        pagination: true,
        autoPlay: true,
        navigationText: false,
       // navigationText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"],
        items : 3
         
        

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});








