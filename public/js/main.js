let main_banner = $('.main-banner.owl-carousel').owlCarousel({
    items: 1,
    loop:true,
    center: true,
    margin:10,
    autoplay: false,
});

let side_promo_banner = $('.side_promo-banner.owl-carousel').owlCarousel({
    items: 1,
    loop:true,
    center: true,
    margin:10,
    autoplay: true,
});

let testimonial_side = $('.testimonial_side.owl-carousel').owlCarousel({
    items: 1,
    loop:true,
    center: true,
    margin:10,
    autoplay: true,
});

let items = $('.items.owl-carousel');
items.owlCarousel({
    loop:true,
    margin:15,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:4
        },
        1200:{
            items:4
        }
    }
});

items.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        items.trigger('next.owl');
    } else {
        items.trigger('prev.owl');
    }
    e.preventDefault();
});

function item_show(item_show_link){
    window.location.href = item_show_link;
}

