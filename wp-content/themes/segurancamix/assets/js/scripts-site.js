{
  let x = 0;
  $(".header-nav__btn").on("click", function () {
    if (x === 0) {
      $(".header-nav__icon, .header-nav").addClass("opened");
      x = 1;
    } else {
      $(".header-nav__icon, .header-nav").removeClass("opened");
      x = 0;
    }
  });
}

// Padding Left Adjustment

const paddingLeftAdjustment = () => {
  let containerWidth = $(".container").outerWidth();
  let bodyWidth = $("body").outerWidth();
  $(".padding-left-adj").css(
    "padding-left",
    `${(bodyWidth - containerWidth) / 2}px`
  );
};

paddingLeftAdjustment();

$(window).on("resize", function () {
  paddingLeftAdjustment();
});

// Owl Carousel

$(function () {
  $(".owl-carousel.banner__carousel").owlCarousel({
    dots: true,
    nav: false,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
    loop: true,
    items: 1,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    touchDrag: false,
    mouseDrag: false,
    responsive: {
      768: {
        nav: true,
      },
    },
  });

  $(".home-products__carousel .owl-carousel").owlCarousel({
    dots: false,
    nav: true,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
    loop: true,
    margin: 40,
    autoplay: false,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 1.5,
      },
      992: {
        items: 2.5,
      },
    },
  });

  $(".products-categories .owl-carousel").owlCarousel({
    dots: false,
    nav: true,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
    loop: false,
    rewind: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoWidth: true,
  });

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: false,
      autoplay: true,
      // rewind: true,
      dots: false,
      loop: false,
      slideSpeed: 1000,
      responsiveRefreshRate: 200,
    })
    .on("changed.owl.carousel", syncPosition);

  sync2
    .on("initialized.owl.carousel", function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      items: slidesPerPage,
      dots: false,
      nav: false,
      margin: 10,
      loop: false,
      // rewind: true,
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
      responsiveRefreshRate: 100,
      autoplay: false,
    })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    var current = el.item.index;

    // if you disable loop you have to comment this block
    // var count = el.item.count - 1;
    // var current = Math.round(el.item.index - (el.item.count / 2) - .5);

    // if (current < 0) {
    //     current = count;
    // }
    // if (current > count) {
    //     current = 0;
    // }

    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find(".owl-item.active").length - 1;
    var start = sync2.find(".owl-item.active").first().index();
    var end = sync2.find(".owl-item.active").last().index();

    if (current > end) {
      sync2.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      sync2.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      sync1.data("owl.carousel").to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    sync1.data("owl.carousel").to(number, 300, true);
  });

  //Banner Sticky Adjustment

  function bannerStickyAdjustment(bannerClass) {
    let banner = document.querySelector(bannerClass);
    if (banner != null) {
      const bannerPos = banner.getBoundingClientRect();
      let bannerPosBottom = bannerPos.bottom;
      let footer = document.querySelector(".footer");

      function isOnPageInitAdjustment() {
        if (window.scrollY <= bannerPosBottom) {
          footer.style.zIndex = "-1";
        } else {
          footer.style.zIndex = "0";
        }
      }

      isOnPageInitAdjustment();
      $(window).on("scroll", function () {
        isOnPageInitAdjustment();
      });
    }
  }

  bannerStickyAdjustment(".banner");
  bannerStickyAdjustment(".about-banner");

  //AOS
  AOS.init({
    duration: 1000,
  });

  // Header Nav Link padding adjustment

  const headerNavLinks = document.querySelectorAll(".header-nav__list li a");
  $(window).on("scroll", function () {
    if (window.matchMedia("min-width: 992px")) {
      if (window.scrollY > 0) {
        headerNavLinks.forEach((item) => {
          item.style.padding = "2.4rem 1.2rem";
        });
      } else {
        headerNavLinks.forEach((item) => {
          item.style.padding = "";
        });
      }
    } else {
      headerNavLinks.forEach((item) => {
        item.style.padding = "";
      });
    }
  });

  // Send Product Name to quote form from request button

  const requestQuoteButton = document.getElementById("request-quote-button");

  if (requestQuoteButton != null) {
    requestQuoteButton.addEventListener("click", function (e) {
      localStorage.setItem("product-name", this.dataset.productName);
    });
  }

  const productInput = document.getElementById("request-quote-input-product");

  if (productInput != null) {
    productInput.value = localStorage.getItem("product-name");
  }

  // Lighthouse Adjustments

  $(".owl-dot").each(function () {
    $(this).attr({ title: "Botão" });
  });
  $(".owl-next").each(function () {
    $(this).attr({ title: "Próximo" });
  });
  $(".owl-prev").each(function () {
    $(this).attr({ title: "Anterior" });
  });

  $(".lb-prev, .lb-next, .lb-close, .lb-cancel").attr({ href: "#" });
});
