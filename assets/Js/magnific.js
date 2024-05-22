

//popupgallery
$('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    },
    zoom: {
        enabled: true,
        duration: 300
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    }
});





//popupgallery2
$('.popup-gallery2').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    },
    zoom: {
        enabled: true,
        duration: 300
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    }
});














