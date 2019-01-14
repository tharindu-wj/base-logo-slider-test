/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Logo slider javascript scripts.
 */

(function($, window, document) {

    /**
        @attribute : data-eql-height
        @param: any string, same name for eql elements.
     */

    $(function() {

        var eqlHeight = {};
        var count = $("[data-eql-height]").length;

        $("[data-eql-height]").each(function(e){
            var _eh = $(this).attr("data-eql-height");
            var _h = $(this).height();
            if(eqlHeight[_eh]){
                eqlHeight[_eh] = eqlHeight[_eh] < _h ? _h : eqlHeight[_eh];
            } else {
                eqlHeight[_eh] = $(this).height();
            }
            count--;
            if(count < 1){
                asignHeight();
            }
        });

        function asignHeight(){
            for (var k in eqlHeight) {
                var _ele = "[data-eql-height='" + k + "']";
                $(_ele).height(eqlHeight[k]+"px");
            }
        }


        var logo_sliders = $('.base-sliders-logo-slider');


        logo_sliders.each(function( index ) {
            logo_slider = $(this).find('.base-sliders-logo-slider__inner');
            var settings =  $(this).data("settings");

            logo_slider.slick({
                autoplay: false,
                slidesToShow: settings.slides_to_display,
            });

            console.log(settings);
        });
    });

}(window.jQuery, window, document));