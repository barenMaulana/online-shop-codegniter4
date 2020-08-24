window.onscroll = function () {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $(".navbar").fadeOut();
    } else {
        $(".navbar").fadeIn();
    }
};

new Typed('.lead', {
    strings: ["Menjual berbagai jenis tanaman hias berkualitas.", "Pembuatan dan pemeliharaan taman, dengan profesional."],
    typeSpeed: 50,
    backSpeed: 50,
    showCursor: false,
    backDelay: 4000,
    loop: true
});

