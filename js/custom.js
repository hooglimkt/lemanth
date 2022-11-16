// $(window).on("load", function () {
//   "use strict";
//   var e = $("#loader-wrapper");
//   e.find(".loader-inner").fadeOut(),
//     e.delay(400).fadeOut("slow"),
//     $(window).stellar({});
// }),
  $(document).ready(function () {
    "use strict";
    $(
      '.header a[href^="#"], .page a.btn[href^="#"], .page a.internal-link[href^="#"]'
    ).on("click", function (e) {
      e.preventDefault();
      var a = this.hash,
        e = jQuery(a);
      $("html, body")
        .stop()
        .animate(
          { scrollTop: e.offset().top - 60 },
          "slow",
          "easeInSine",
          function () {
            window.location.hash = "1" + a;
          }
        );
    }),
      $(".slider").slider({
        full_width: !1,
        interval: 5e3,
        transition: 700,
        draggable: !1,
      }),
      ($.scrollUp = function (e) {
        var a = $.extend(
            {},
            {
              scrollName: "scrollUp",
              topDistance: 600,
              topSpeed: 800,
              animation: "fade",
              animationInSpeed: 200,
              animationOutSpeed: 200,
              scrollText: "",
              scrollImg: !1,
              activeOverlay: !1,
            },
            e
          ),
          t = "#" + a.scrollName;
        $("<a/>", {
          id: a.scrollName,
          href: "#top",
          title: a.scrollText,
        }).appendTo("body"),
          a.scrollImg || $(t).text(a.scrollText),
          $(t).css({
            display: "none",
            position: "fixed",
            "z-index": "2147483647",
          }),
          a.activeOverlay &&
            ($("body").append("<div id='" + a.scrollName + "-active'></div>"),
            $(t + "-active").css({
              position: "absolute",
              top: a.topDistance + "px",
              width: "100%",
              "border-top": "1px dotted " + a.activeOverlay,
              "z-index": "2147483647",
            })),
          $(window).on("scroll", function () {
            switch (a.animation) {
              case "fade":
                $(
                  $(window).scrollTop() > a.topDistance
                    ? $(t).fadeIn(a.animationInSpeed)
                    : $(t).fadeOut(a.animationOutSpeed)
                );
                break;
              case "slide":
                $(
                  $(window).scrollTop() > a.topDistance
                    ? $(t).slideDown(a.animationInSpeed)
                    : $(t).slideUp(a.animationOutSpeed)
                );
                break;
              default:
                $(
                  $(window).scrollTop() > a.topDistance
                    ? $(t).show(0)
                    : $(t).hide(0)
                );
            }
          }),
          $(t).on("click", function (e) {
            $("html, body").animate({ scrollTop: 0 }, a.topSpeed),
              e.preventDefault();
          });
      }),
      $.scrollUp(),
      $(".services-holder").owlCarousel({
        items: 4,
        loop: !0,
        autoplay: !0,
        navBy: 1,
        autoplayTimeout: 4500,
        autoplayHoverPause: !1,
        smartSpeed: 1500,
        responsive: {
          0: { items: 1 },
          767: { items: 1 },
          768: { items: 2 },
          991: { items: 3 },
          1e3: { items: 4 },
        },
      }),
      $(".grid-loaded").imagesLoaded(function () {
        $(".gallery-filter").on("click", "button", function () {
          var e = $(this).attr("data-filter");
          a.isotope({ filter: e });
        }),
          $(".gallery-filter button").on("click", function () {
            $(".gallery-filter button").removeClass("is-checked"),
              $(this).addClass("is-checked");
            var e = $(this).attr("data-filter");
            return a.isotope({ filter: e }), !1;
          });
        var a = $(".masonry-wrap").isotope({
          itemSelector: ".gallery-item",
          percentPosition: !0,
          transitionDuration: "0.7s",
          masonry: { columnWidth: ".gallery-item" },
        });
      }),
      $(".image-link").magnificPopup({ type: "image" }),
      $(".video-popup1").magnificPopup({
        type: "iframe",
        iframe: {
          patterns: {
            youtube: {
              index: "youtube.com",
              src: "https://www.youtube.com/embed/SZEflIVnhH8",
            },
          },
        },
      }),
      $(".video-popup2").magnificPopup({
        type: "iframe",
        iframe: {
          patterns: {
            youtube: {
              index: "youtube.com",
              src: "https://www.youtube.com/embed/7e90gBu4pas",
            },
          },
        },
      }),
      $(".count-element").each(function () {
        $(this).appear(
          function () {
            $(this)
              .prop("Counter", 0)
              .animate(
                { Counter: $(this).text() },
                {
                  duration: 4e3,
                  easing: "swing",
                  step: function (e) {
                    $(this).text(Math.ceil(e));
                  },
                }
              );
          },
          { accX: 0, accY: 0 }
        );
      }),
      $(".reviews-holder").owlCarousel({
        items: 3,
        loop: !0,
        autoplay: !0,
        navBy: 1,
        autoplayTimeout: 4500,
        autoplayHoverPause: !1,
        smartSpeed: 1500,
        responsive: {
          0: { items: 1 },
          767: { items: 1 },
          768: { items: 2 },
          991: { items: 3 },
          1e3: { items: 3 },
        },
      });
  });
