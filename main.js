(function ($){
    $(function () {

        /* Scroll to sections */
        $(".jq_scroll_to_pizzas").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_pizzas").offset().top - 60 }, 600);
        });

        $(".jq_scroll_to_burgers").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_burgers").offset().top - 60 }, 600);
        });

        $(".jq_scroll_to_sides").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_sides").offset().top - 60 }, 550);
        });

        $(".jq_scroll_to_drinks").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_drinks").offset().top - 60 }, 500);
        });

        $(".jq_scroll_to_aboutus").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_aboutus").offset().top - 60 }, 500);
        });

        $(".jq_scroll_to_feedback").click(function () {
            $("html, body").animate({ scrollTop: $(".jq_to_feedback").offset().top - 60 }, 450);
        });

        /* Mobile navigation */
        $(".menu-btn").click(function () {
            $("nav ul").toggle("slow");   
        });

        const menuBtn = document.querySelector('.menu-btn');
        let menuOpen = false;
        menuBtn.addEventListener('click', () => {
            if (!menuOpen) {
                menuBtn.classList.add('open');
                menuOpen = true;
            } else {
                menuBtn.classList.remove('open');
                menuOpen = false;
            }
        });

    });
})(jQuery);

