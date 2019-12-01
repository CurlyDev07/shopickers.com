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

function allnumeric(inputtxt){
    var numbers = /^[0-9]+$/;
    if(inputtxt.value.match(numbers)){
        return true;
    }else{
        inputtxt.value = '';
        return false;
    }
}

function base64MimeType(encoded) {
    var result = null;

    if (typeof encoded !== 'string') {
      return result;
    }

    var mime = encoded.match(/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).*,.*/);

    if (mime && mime.length) {
        var splited = mime[1].split("/");
      result = splited[0];
    }

    return result;
}

function random_string_generator(){
    var date = new Date();
    var ssm = date.getSeconds()+date.getMilliseconds().toString();
    var random_str = Math.random().toString(36).substring(2, 35) + Math.random().toString(36).substring(2, 35)+ssm;
    var super_unique_id = random_str;

    return super_unique_id;
}