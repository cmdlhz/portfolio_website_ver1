var main_hi = document.getElementById('main_h1'),
    main_p = document.getElementById('main_p'),
    main_h2 = document.getElementById('main_h2'),
    main_img = document.getElementById('clouds'),
    first_li = document.getElementById('main_list').firstElementChild,
    second_li = document.getElementById('main_list').children[1],
    third_li = document.getElementById('main_list').children[2],
    fourth_li = document.getElementById('main_list').children[3],
    fifth_li = document.getElementById('main_list').children[4],
    sixth_li = document.getElementById('main_list').children[5],
    seventh_li = document.getElementById('main_list').children[6],
    eighth_li = document.getElementById('main_list').children[7],
    last_li = document.getElementById('main_list').lastElementChild,
    aside_buttons = document.querySelectorAll('.subtitle_buttons'),
    tl = new TimelineMax();

tl
    .add('aside_buttons')
    .staggerFrom(aside_buttons, 0.2, {cycle: {
        x: [50, -50],
        scale: [2, 0.5]
    }, autoAlpha: 0, ease:Power1.easeOut}, 0.1)
    .from(main_img, 1, {x: -200, autoAlpha: 0, ease:Power2.easeOut}, 'aside_buttons')
    .from(main_h2, 1, {autoAlpha: 0}, '-=0.15')
    .add('first_li')
    .from(first_li, 2, {x: -200, autoAlpha: 0, ease:Back.easeOut.config(3)}, '-=0.15')
    .from(second_li, 2, {x: -200, autoAlpha: 0, ease:Elastic.easeOut.config(2,3)}, '-=0.15')
    .from(third_li, 2, {x: -200, autoAlpha: 0, ease:Bounce.easeOut}, '-=0.15')
    .from(fourth_li, 2, {x: -200, autoAlpha: 0, ease:RoughEase.ease.config({ 
        template:  Power0.easeNone, 
        strength: 1, 
        points: 10, 
        taper: "in", 
        randomize: true, 
        clamp: false})}, '-=0.15'
    )
    .from(fifth_li, 2, {x: -200, autoAlpha: 0, ease:SlowMo.ease.config(0.5, 0.4, false)}, 'first_li')
    .from(sixth_li, 2, {x: -200, autoAlpha: 0, ease:SteppedEase.config(6)}, '-=0.15')
    .from(seventh_li, 2, {x: -200, autoAlpha: 0, ease:Circ.easeOut}, '-=0.15')
    .from(eighth_li, 2, {x: -200, autoAlpha: 0, ease:Expo.easeOut}, '-=0.15')
    .from(last_li, 2, {x: -200, autoAlpha: 0, ease:Sine.easeOut}, '-=0.15');