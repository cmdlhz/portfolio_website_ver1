var controller = new ScrollMagic.Controller();

var project_left = document.querySelectorAll('.project_left');

project_left.forEach((element) =>{
    var pic_overlay = element.children[0].children[1],
        project_info = element.children[1],
        small_title = element.children[1].children[0],
        h4_test = element.children[1].children[1],
        project_link = element.children[1].children[2];

    var animate_in = new TimelineMax();

    animate_in
        .fromTo(pic_overlay, 2, 
            {skewX: 10, scale: 1.5}, 
            {skewX: 0, xPercent: 100, transformOrigin: "0% 100%", ease: Power2.easeOut})
        .from(project_info, 1, {scaleY: 0, transformOrigin: 'bottom left'}, '-=1.5')
        .from(small_title, 0.3, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8')
        .from(project_link, 0.2, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8')
        .from(h4_test, 0.2, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8');

    // Make a ScrollMagic scene
    var scene = new ScrollMagic.Scene({
        triggerElement: element
    })
    .addIndicators()
    .setTween(animate_in).addTo(controller);
});

var project_right = document.querySelectorAll('.project_right');

project_right.forEach((element) =>{
    var pic_overlay = element.children[0].children[1],
        project_info = element.children[1],
        small_title = element.children[1].children[0],
        h4_test = element.children[1].children[1],
        project_link = element.children[1].children[2];

    var animate_in = new TimelineMax();

    animate_in
        .fromTo(pic_overlay, 2, 
        {skewX: 10, scale: 1.5}, 
        {skewX: 0, xPercent: 100, transformOrigin: "0% 100%", ease: Power2.easeOut})
        .from(project_info, 1, {scaleY: 0, transformOrigin: 'bottom left'}, '-=1.5')
        .from(small_title, 0.3, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8')
        .from(project_link, 0.2, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8')
        .from(h4_test, 0.2, {autoAlpha: 0, y: 30, ease:Power4.easeOut}, '-=0.8');

    // Make a ScrollMagic scene
    var scene = new ScrollMagic.Scene({
        triggerElement: element
    })
    .addIndicators()
    .setTween(animate_in).addTo(controller);
});