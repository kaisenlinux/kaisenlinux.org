
;(function ( $, window, document, undefined ) {

	$.fixed = function(element, options) {

        var defaults = {
            topSpace: 0,
			placeholder: true,
            onFixed: function() {},
			onStatic: function() {}
        }

        var plugin = this;
        plugin.settings = {}
        var $element = $(element),
            element = element;
		var wrapper, placeholder, wrapperTop;

        plugin.init = function() {
            plugin.settings = $.extend({}, defaults, options);
			
			$(element).wrap("<div class='navigation-fixed-wrapper'></div>").each(function(){
				wrapper = $(element).parent();
				if(plugin.settings.placeholder){
					$("<div class='navigation-fixed-placeholder'></div>").insertBefore(wrapper);
					$(".navigation-fixed-placeholder").css("height", $(wrapper).outerHeight());
					placeholder = $(".navigation-fixed-placeholder");
				}
			});

			wrapperTop = $(wrapper).offset().top;	
			
			if(wrapperTop <= plugin.settings.topSpace){
				toFixed();
			}
			else{
				$(window).on("scroll", function(){						
					if($(window).scrollTop() >= wrapperTop - plugin.settings.topSpace){
						if(!$(wrapper).hasClass("fixed"))
							toFixed();
					}
					else{
						if($(wrapper).hasClass("fixed"))
							toStatic();
					}
				});
			}			
			
			$(window).resize(function(){
				resizeNav();
				if(plugin.settings.placeholder){
					$(placeholder).css("height", $(wrapper).outerHeight());
				}
			})
			
			$(element).on("click touchstart", function(){
				resizeNav();
			});
        }
		
		var toFixed = function() {			
			$(wrapper).addClass("fixed");
			if(plugin.settings.placeholder){
				$(placeholder).addClass("visible");
			}
			resizeNav();
			
			if(options !== undefined){
				plugin.callback("onFixed");
			}
        }
		
		var toStatic = function() {
			$(wrapper).removeClass("fixed");
			if(plugin.settings.placeholder){
				$(placeholder).removeClass("visible");
			}
			
			if(options !== undefined){
				plugin.callback("onStatic");
			}
        }
		
		var resizeNav = function() {
            $(element).css("width", $(wrapper).parent().width());
			$(wrapper).css("top", plugin.settings.topSpace);
        }
		
		var detectIOS = function() {
			var userAgent = navigator.userAgent || navigator.vendor || window.opera;
			if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
				return true;
			}
			else{
				return false;
			}
		}
		
		plugin.callback = function(func) {
			if (options[func] !== undefined) {
				options[func].call(element);
			}
		}

        plugin.init();

    }

    $.fn.fixed = function(options) {
        return this.each(function() {
            if (undefined == $(this).data('fixed')) {
                var plugin = new $.fixed(this, options);
                $(this).data('fixed', plugin);
            }
        });
    }

	
})( jQuery, window, document );