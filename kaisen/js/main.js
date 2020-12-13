/*
    Project Name : Business
    Author Company : SpecThemes
    Project Date: 5 Feb, 2017
    Template Developer: vsafaryan50@gmail.com
*/


/*
==============================================
TABLE OF CONTENT
==============================================

1. Owl Carousels
2. CountUp
3. Slider
4. Hover Drop Down
5. Youtube Video Section
6. Video Modal
7. Preloader
8. Scroll To Top
9. Isotop
10. WOW
11. Serach
12. Input Number, Shopping Cart
13. Tabs
14. Pie Chart
15. Charts.js

==============================================
[END] TABLE OF CONTENT
==============================================
*/


"use strict";


$('#preloader').fadeOut('normall', function () {
  $(this).remove();
});


$(document).ready(function () {


  /*------------------------------------
      1. Owl Carousel
  --------------------------------------*/


  /*---------------------
  Testmonials carousel
  -----------------------*/
  $('#testmonials-carousel').owlCarousel({
    loop: false,
    smartSpeed: 850,
    responsiveClass: true,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        margin: 10,
      },
      600: {
        items: 1,
        nav: false,
        dots: true,
        margin: 15,
      },
      1000: {
        items: 1,
        dots: false,
        margin: 40,
      }
    }
  })


  /*---------------------
  Testmonials carousel 2
  -----------------------*/
  $('#testmonials-carousel-2').owlCarousel({
    loop: false,
    smartSpeed: 850,
    responsiveClass: true,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        margin: 30,
      },
      600: {
        items: 2,
        nav: false,
        dots: true,
        margin: 0,
      },
      1000: {
        items: 3,
        dots: false,
        margin: 0,
      }
    }
  })


  /*---------------------
  Testmonials carousel 3
  -----------------------*/
  $('#testmonial-item').owlCarousel({
    loop: true,
    nav: false,
    responsiveClass: true,
    startPosition: 0,
    smartSpeed: 850,
    center: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        margin: 15,
        dots: false,
      },
      600: {
        items: 1,
        margin: 20,
        dots: false,
      },
      1000: {
        items: 3,
        margin: 30,
        dots: false,
      }
    }
  });

  /*---------------------
  Testmonials box 4
  -----------------------*/
  $('#testmonials-box-4').owlCarousel({
    loop: false,
    smartSpeed: 850,
    responsiveClass: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        margin: 30,
      },
      600: {
        items: 1,
        nav: false,
        dots: true,
        margin: 15,
      },
      1000: {
        items: 2,
        nav: false,
        dots: true,
        margin: 45,
      }
    }
  })


  /*---------------------
  Services carousel
  -----------------------*/
  $('#services-carousel').owlCarousel({
    loop: false,
    smartSpeed: 850,
    responsiveClass: true,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 2,
        margin: 30,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })


  /*---------------------
  Services carousel 2
  -----------------------*/
  $('#services-carousel-2').owlCarousel({
    loop: false,
    responsiveClass: true,
    dots: false,
    nav: true,
    smartSpeed: 850,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      767: {
        items: 2,
        margin: 30,
      },
      991: {
        items: 3,
        margin: 30,
      },
      1200: {
        items: 4,
        margin: 0,
      }
    }
  })


  /*---------------------
  Blog Grid carousel
  -----------------------*/
  $('#blog-grid').owlCarousel({
    loop: false,
    dots: true,
    nav: false,
    smartSpeed: 850,
    autoplay: true,
    autoplayTimeout: 2500,
    responsiveClass: true,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        margin: 0,
      },
      600: {
        items: 2,
        margin: 0,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })


  /*---------------------
  Clients carousel
  -----------------------*/

  $('#clients').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    smartSpeed: 850,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 2,
        margin: 50,
      },
      600: {
        items: 3,
        margin: 30,
      },
      1000: {
        items: 6,
        margin: 40,
      }
    }
  })


  /*---------------------
  Project Single carousel
  -----------------------*/
  $('#project-single').owlCarousel({
    loop: false,
    nav: false,
    smartSpeed: 850,
    responsiveClass: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 2,
        margin: 15,
      },
      1000: {
        items: 3,
        margin: 15
      }
    }
  })


  /*------------------------------------
      2. CountUp
  --------------------------------------*/

  $('.countup').counterUp({
    delay: 25,
    time: 2000
  });


  /*------------------------------------
      3. Slider
  --------------------------------------*/

  /*---------------------
  Main Slider
  -----------------------*/
  if ($(".swiper-main-slider").length !== 0) {
    //Slider Animated Caption
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
      pagination: '.swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 0,
      loop: true,
      simulateTouch: true,
      autoplay: 5000,
      speed: 1000,
      onSlideChangeEnd: function (swiper) {
        $('.swiper-slide').each(function () {
          if ($(this).index() === swiper.activeIndex) {
            // Fadein in active slide
            $(this).find('.slider-content').fadeIn(300);
          } else {
            // Fadeout in inactive slides
            $(this).find('.slider-content').fadeOut(300);
          }
        });
      }
    });
  }

  /*---------------------
  Main Slider Fade Effect
  -----------------------*/
  if ($(".swiper-main-slider-fade").length !== 0) {
    //Slider Animated Caption
    var swiper = new Swiper('.swiper-container', {
      effect: 'fade',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
      pagination: '.swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 0,
      loop: true,
      simulateTouch: true,
      autoplay: 5000,
      speed: 1000,
      onSlideChangeEnd: function (swiper) {
        $('.swiper-slide').each(function () {
          if ($(this).index() === swiper.activeIndex) {
            // Fadein in active slide
            $(this).find('.slider-content').fadeIn(300);
          } else {
            // Fadeout in inactive slides
            $(this).find('.slider-content').fadeOut(300);
          }
        });
      }
    });
  }

  /*---------------------
  Parallax Slider
  -----------------------*/
  if ($("#swiper-parallax").length !== 0) {
    var swiper = new Swiper('.swiper-container', {
      parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
      pagination: '.swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 0,
      loop: false,
      simulateTouch: true,
      autoplay: false,
      speed: 1000,
    });
  }

  /*---------------------
  Revolution Slider
  -----------------------*/
  if ($("#rev_slider_24_1").length !== 0) {
    var tpj = jQuery;
    var revapi24;
    tpj(document).ready(function () {
      if (tpj("#rev_slider_24_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_24_1");
      } else {
        revapi24 = tpj("#rev_slider_24_1").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revolution/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            bullets: {
              enable: true,
              hide_onmobile: false,
              style: "bullet-bar",
              hide_onleave: false,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 50,
              space: 5,
              tmp: ''
            }
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 960, 720],
          lazyType: "none",
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "60px",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }

      if (revapi24) revapi24.revSliderSlicey();
    }); /*ready*/
  }

  if (typeof $.fn.revolution !== 'undefined') {
    $("#rev_slider").revolution({
      sliderType: "standard",
      sliderLayout: "fullscreen",
      dottedOverlay: "none",
      delay: 7000,
      navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        onHoverStop: "off",
        touch: {
          touchenabled: "on",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
        }
      },
      viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "80%"
      },
      navigation: {
        arrows: {
          enable: true,
          style: 'hesperiden',
          tmp: '',
          rtl: false,
          hide_onleave: false,
          hide_onmobile: true,
          hide_under: 0,
          hide_over: 9999,
          hide_delay: 200,
          hide_delay_mobile: 1200,

          left: {
            container: 'slider',
            h_align: 'left',
            v_align: 'center',
            h_offset: 20,
            v_offset: 0
          },

          right: {
            container: 'slider',
            h_align: 'right',
            v_align: 'center',
            h_offset: 20,
            v_offset: 0
          }
        }
      },
      responsiveLevels: [2048, 1750, 1192],
      gridwidth: [1180, 1180, 980],
      gridheight: [550],
      lazyType: "none",
      shadow: 0,
      spinner: "off",
      stopLoop: "on",
      stopAfterLoops: 0,
      shuffle: "off",
      autoHeight: "on",
      fullScreenAlignForce: "off",
      fullScreenOffsetContainer: "",
      fullScreenOffset: "",
      disableProgressBar: "on",
      hideThumbsOnMobile: "off",
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      debugMode: false,
      fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
      }
    });
  }
  /*------------------------------------
      4. Navbar
  --------------------------------------*/

  /*---------------------
  Fixed Nav
  -----------------------*/
  $("#navigation1").navigation();
  $("#navigation1").fixed();

  /*---------------------
  Transparent Nav Options
  -----------------------*/
  if ($("#nav-transparent").length !== 0) {
    if ($(window).width() > 991) {
      $("#nav-transparent #main_logo").css("display", "none");
    } else {
      $("#nav-transparent #light_logo").css("display", "none");
    }
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if ($(window).width() > 991) {
        if (scroll > 30) {
          $(".navigation-fixed-wrapper").addClass("nav-white-bg");
          $("#nav-transparent #main_logo").css("display", "inline-block");
          $("#nav-transparent #light_logo").css("display", "none");
        } else {
          $(".navigation-fixed-wrapper").removeClass("nav-white-bg");
          $("#nav-transparent #light_logo").css("display", "inline-block");
          $("#nav-transparent #main_logo").css("display", "none");
        }
      }
    })
  }

  /*---------------------
  Nav Slide Effect
  -----------------------*/
  $("#navigation2").navigation({
    effect: "slide"
  });

  /*---------------------
  Nav Zoom Effect
  -----------------------*/
  $("#navigation3").navigation({
    animationOnShow: "zoom-in",
    animationOnHide: "zoom-out"
  });

  /*---------------------
  Overlay Nav
  -----------------------*/
  $("#navigation4").navigation({
    offset: 20,
    overlayColor: "rgba(0,0,0,0.6)",
    effect: "slide"
  });

  /*---------------------
  Affix Nav
  -----------------------*/
  $("#navigation4").fixed({
    offset: 20
  });

  /*---------------------
  Hidden Nav
  -----------------------*/
  $("#navigation5").navigation({
    hidden: true
  });

  if ($("#navigation-push").length !== 0) {
    if ($(window).width() > 991) {
      $("#navigation-push").find($(".nav-menus-wrapper").addClass("nav-menus-wrapper-open"));
      $("#navigation-push").find($(".nav-menus-wrapper-close-button").hide());
      $("#navigation-push").find($(".small-size-header").hide());
    } else {
      $("#navigation5 #main_logo").clone().appendTo(".small-size-header-logo");
      $("#main_logo").css("display", "none");
      $("#navigation-push").find($(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open"));
    }
  }

  /*---------------------
  Button Nav
  -----------------------*/
  $(".btn-show").on('click', function () {
    $("#navigation5").data("navigation").toggleOffcanvas();
  });

  $("#navigation6").navigation({
    offCanvasSide: "right"
  });

  /*---------------------
  Simple Nav
  -----------------------*/
  $("#navigation7").navigation();


  /*------------------------------------
      5. Youtube Video Section
  --------------------------------------*/
  if ($(".video-section").length !== 0) {
    $('.player').mb_YTPlayer();
  }

  if ($(".main-video-section").length !== 0) {
    $('#main-video-play').mb_YTPlayer();
  }


  /*------------------------------------
      6. Video Modal
  --------------------------------------*/

  $('.modal').on('hidden.bs.modal', function () {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });


  /*------------------------------------
      7. Preloader
  --------------------------------------*/


  /*------------------------------------
      8. Scroll To Top
  --------------------------------------*/

  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".scroll-to-top").fadeIn(400);

    } else {
      $(".scroll-to-top").fadeOut(400);
    }
  });

  $(".scroll-to-top").on('click', function (event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 600);
  });


  /*------------------------------------
      9. Isotop
  --------------------------------------*/

// external js: isotope.pkgd.js
// init Isotope
  var $grid = $('.isotope-grid').isotope({
    itemSelector: '.isotope-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function (itemElem) {
        var weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[\(\)]/g, ''));
      }
    }
  });

// filter functions
  var filterFns = {
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

// bind filter button click
  $('#filters').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({filter: filterValue});
  });


// change is-checked class on buttons
  $('.parent-isotope').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });


  /*------------------------------------
      10. WOW
  --------------------------------------*/
  new WOW().init();


});


/*------------------------------------
    11. Seacrh
--------------------------------------*/
function openNav() {
  document.getElementById("search_nav").style.width = "100%";
}

function closeNav() {
  document.getElementById("search_nav").style.width = "0%";
}


/*------------------------------------
    12. Input Number, Shopping Cart
--------------------------------------*/

/*---------------------
Input Number
-----------------------*/
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function () {
  var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.quantity-up'),
    btnDown = spinner.find('.quantity-down'),
    min = input.attr('min'),
    max = input.attr('max');

  btnUp.on("click", function () {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.on("click", function () {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

});


/*---------------------
Shopping Cart
-----------------------*/
$('.close-box').on("click", function () {
  $(this).parentsUntil('.row').slideToggle();
  return false;
});


/*------------------------------------
    13. Tabs
--------------------------------------*/

$('.tabs_animate').tabslet({
  mouseevent: 'click',
  attribute: 'href',
  animation: true
});


/*------------------------------------
    14. Pie Chart
--------------------------------------*/


/*------------------------------------
    9. Pie Chart
--------------------------------------*/
if ($('.chart').length > 0) {
  var $pieChart = $('.chart');
  $pieChart.each(function () {
    var $elem = $(this),
      pieChartSize = $elem.attr('data-size') || "120",
      pieChartAnimate = $elem.attr('data-animate') || "2100",
      pieChartWidth = $elem.attr('data-width') || "6",
      pieChartColor = $elem.attr('data-color') || "#2e52c2",
      pieChartTrackColor = $elem.attr('data-trackcolor') || "rgba(0,0,0,0.1)";
    $elem.find('span, i').css({
      'width': pieChartSize + 'px',
      'height': pieChartSize + 'px',
      'line-height': pieChartSize + 'px'
    });
    $elem.appear(function () {
      $elem.easyPieChart({
        size: Number(pieChartSize),
        animate: Number(pieChartAnimate),
        trackColor: pieChartTrackColor,
        lineWidth: Number(pieChartWidth),
        barColor: pieChartColor,
        scaleColor: false,
        lineCap: 'round',
        onStep: function (from, to, percent) {
          $elem.find('span.percent').text(Math.round(percent));
        }
      });
    });
  });
}
;


if ($(".chartjs-render-monitor").length !== 0) {
  var randomScalingFactor = function () {
    return Math.round(Math.random() * 100);
  };

  var config = {
    type: 'pie',
    data: {
      datasets: [{
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
        ],
        backgroundColor: [
          window.chartColors.red,
          window.chartColors.orange,
          window.chartColors.green,
          window.chartColors.blue,
        ],
        label: 'Dataset 1'
      }],
      labels: [
        "Red",
        "Orange",
        "Green",
        "Blue"
      ]
    },
    options: {
      responsive: true
    }
  };

  window.onload = function () {
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx, config);
  };

  document.getElementById('randomizeData').addEventListener('click', function () {
    config.data.datasets.forEach(function (dataset) {
      dataset.data = dataset.data.map(function () {
        return randomScalingFactor();
      });
    });

    window.myPie.update();
  });

  var colorNames = Object.keys(window.chartColors);
  document.getElementById('addDataset').addEventListener('click', function () {
    var newDataset = {
      backgroundColor: [],
      data: [],
      label: 'New dataset ' + config.data.datasets.length,
    };

    for (var index = 0; index < config.data.labels.length; ++index) {
      newDataset.data.push(randomScalingFactor());

      var colorName = colorNames[index % colorNames.length];
      ;
      var newColor = window.chartColors[colorName];
      newDataset.backgroundColor.push(newColor);
    }

    config.data.datasets.push(newDataset);
    window.myPie.update();
  });

  document.getElementById('removeDataset').addEventListener('click', function () {
    config.data.datasets.splice(0, 1);
    window.myPie.update();
  });
}


/*------------------------------------
    15. Charts.js
--------------------------------------*/
if ($(".chartjs").length !== 0) {
  /*----------------
  Chart style 1
  ------------------*/
  var presets = window.chartColors;
  var utils = Samples.utils;
  var inputs = {
    min: -100,
    max: 100,
    count: 8,
    decimals: 2,
    continuity: 1
  };

  function generateData(config) {
    return utils.numbers(Chart.helpers.merge(inputs, config || {}));
  }

  function generateLabels(config) {
    return utils.months(Chart.helpers.merge({
      count: inputs.count,
      section: 3
    }, config || {}));
  }

  var options = {
    maintainAspectRatio: false,
    spanGaps: false,
    elements: {
      line: {
        tension: 0.000001
      }
    },
    plugins: {
      filler: {
        propagate: false
      }
    },
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false,
          maxRotation: 0
        }
      }]
    }
  };

  [false, 'origin', 'start', 'end'].forEach(function (boundary, index) {

    // reset the random seed to generate the same data for all charts
    utils.srand(8);

    new Chart('chart-' + index, {
      type: 'line',
      data: {
        labels: generateLabels(),
        datasets: [{
          backgroundColor: utils.transparentize(presets.red),
          borderColor: presets.red,
          data: generateData(),
          label: 'Dataset',
          fill: boundary
        }]
      },
      options: Chart.helpers.merge(options, {
        title: {
          text: 'fill: ' + boundary,
          display: false
        }
      })
    });
  });

  // eslint-disable-next-line no-unused-vars
  function toggleSmooth(btn) {
    var value = btn.classList.toggle('btn-on');
    Chart.helpers.each(Chart.instances, function (chart) {
      chart.options.elements.line.tension = value ? 0.4 : 0.000001;
      chart.update();
    });
  }

  // eslint-disable-next-line no-unused-vars
  function randomize() {
    var seed = utils.rand();
    Chart.helpers.each(Chart.instances, function (chart) {
      utils.srand(seed);

      chart.data.datasets.forEach(function (dataset) {
        dataset.data = generateData();
      });

      chart.update();
    });
  }


  /*----------------
  Chart style 2
  ------------------*/
  var config = {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'My First dataset',
        borderColor: window.chartColors.red,
        backgroundColor: window.chartColors.red,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ],
        fill: false,
      }, {
        label: 'My Second dataset',
        borderColor: window.chartColors.black,
        backgroundColor: window.chartColors.black,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ],
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title: {
        display: false,
        text: 'Chart.js Line Chart - Custom Information in Tooltip'
      },
      tooltips: {
        mode: 'index',
        callbacks: {
          // Use the footer callback to display the sum of the items showing in the tooltip
          footer: function (tooltipItems, data) {
            var sum = 0;

            tooltipItems.forEach(function (tooltipItem) {
              sum += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
            });
            return 'Sum: ' + sum;
          },
        },
        footerFontStyle: 'normal'
      },
      hover: {
        mode: 'index',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            show: true,
            labelString: 'Month'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            show: true,
            labelString: 'Value'
          }
        }]
      }
    }
  };

  window.onload = function () {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = new Chart(ctx, config);
  };
}