!function(e){"use strict";e(".hamburger-menu").on("click",function(){e(this).toggleClass("open"),e(".site-navigation").toggleClass("show")});new Swiper(".testimonial-slider",{slidesPerView:1,spaceBetween:0,loop:!0,effect:"fade",speed:800,pagination:{el:".swiper-pagination",clickable:!0}});e(".gallery-wrap").masonry({itemSelector:".gallery-grid"}),e(".accordion-wrap.type-accordion").collapsible({accordion:!0,contentOpen:0,arrowRclass:"arrow-r",arrowDclass:"arrow-d"}),e(".accordion-wrap .entry-title").on("click",function(){e(".accordion-wrap .entry-title").removeClass("active"),e(this).addClass("active")})}(jQuery);