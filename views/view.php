<?php

/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Logo slider frontend html structure.
 * @param :
    * $atts : backend option array
 */

if (!defined('FW')) die('Forbidden');

/*
 * Variables for unique logo slider
 */

//Unique id for slider
$slider_id = uniqid('base-sliders-logo-slider-');

//Base Variables
$package_name = 'base';
$extension_name = 'sliders';
$shortcode_name = 'logo-slider';
$shortcode_base_class = $package_name . '-' . $extension_name . '-' . $shortcode_name;

//Desktop View Variable
$slide_auto_rotate = fw_akg('slider_auto/true', $atts);
$slide_auto_rotate_status = fw_akg('slider_auto/slides_auto_choice', $atts);
$slide_border = fw_akg('slide_border/true', $atts);
$slide_border_status = fw_akg('slide_border/slide_border_choice', $atts);

//Mobile View Variable
$mobile_view = fw_akg('mobile_phones', $atts);
$mobile_auto_rotate = fw_akg('mobile_phones/slider_auto_mobile/true', $atts);
$mobile_auto_rotate_status = fw_akg('mobile_phones/slider_auto_mobile/slides_auto_choice', $atts);

//Tablet View Variable
$tablet_view = fw_akg('tablets', $atts);
$tablet_auto_rotate = fw_akg('tablets/slider_auto_tab/true', $atts);
$tablet_auto_rotate_status = fw_akg('tablets/slider_auto_tab/slides_auto_choice', $atts);

$atts_settings = $atts;
unset($atts_settings['add_slide']);
fw_print($atts_settings);
?>

    <div class="<?php echo $shortcode_base_class; ?>" data-settings="<?php echo htmlspecialchars(json_encode($atts_settings)); ?>">
        <h2 class="<?php echo $shortcode_base_class; ?>__heading"><?php echo $atts['slider_heading'] ?></h2>
        <div class="<?php echo $shortcode_base_class; ?>__inner <?php echo $atts['css_class'] ?>"
             id="<?php echo $slider_id; ?>">
            <?php $slide_id = 1; ?>
            <?php foreach (fw_akg('add_slide', $atts, array()) as $slide) : ?>
                <?php
                $slide_img = $slide['slide_image'];
                $slide_hover_img = $slide['slide_image_hover'];

                $slide_img_url = wp_get_attachment_url(fw_akg('attachment_id', $slide_img));
                $slide_hover_img_url = wp_get_attachment_url(fw_akg('attachment_id', $slide_hover_img));
                ?>
                <div id="slide-link-wrapper">
                    <a>
                        <div class="<?php echo $shortcode_base_class; ?>__inner__slide">
                            <?php if(isset($slide['slide_front_title']) && !empty($slide['slide_front_title'])) : ?>
                            <h3 class="<?php echo $shortcode_base_class; ?>__inner__slide__title">
                                <?php echo $slide['slide_front_title']; ?>
                            </h3>
                            <?php endif; ?>
                            <?php if ($slide_img != "") : ?>
                                <?php if ($slide['image_type'] == "logo") : ?>
                                    <img src="<?php echo $slide_img_url; ?>"
                                        <?php if ($slide['slide_hover_effect'] == 'image') : ?>
                                            data-hover-src="<?php echo $slide_hover_img_url; ?>"
                                        <?php endif; ?>
                                         data-default-src="<?php echo $slide_img_url; ?>"
                                         class="<?php echo $shortcode_base_class; ?>__inner__slide__image"/>
                                <?php endif; ?>
                                <?php if ($slide['image_type'] == "thumb") : ?>
                                    <div style="background-image: url('<?php echo $slide_img_url; ?>')"
                                         class="<?php echo $shortcode_base_class; ?>__inner__slide__thumnail">
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(isset($slide['slide_short_description']) && !empty($slide['slide_short_description'])) : ?>
                                <h3 class="<?php echo $shortcode_base_class; ?>__inner__slide__title">
                                    <?php echo do_shortcode($slide['slide_short_description']); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if(isset($slide['slide_des_wrapper']) && !empty($slide['slide_des_wrapper'])) : ?>
                            <div class="<?php echo $shortcode_base_class; ?>__inner__slide__caption">
                                <?php foreach ($slide['slide_des_wrapper'] as $slide_content): ?>
                                    <div class="<?php echo $shortcode_base_class; ?>__inner__slide__caption__row <?php
                                    echo $slide_content['des_row_class']
                                    ?>">
                                        <?php foreach ($slide_content['slide_des'] as $slide_row): ?>
                                            <?php $content_background = '';
                                            if ($slide_row['slide_background']) {
                                                $content_background = wp_get_attachment_url(fw_akg('attachment_id', $slide_row['slide_background']));
                                            }
                                            ?>
                                            <div class="<?php echo $shortcode_base_class; ?>__inner__slide__caption__column <?php
                                            echo $slide_row['des_class']
                                            ?>" style="background-image: url('<?php echo $content_background; ?>')">
                                                <?php echo do_shortcode($slide_row['slide_caption']); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <?php if ($slide['slide_hover_effect'] == 'popup') : ?>
                                <div class="<?php echo $shortcode_base_class; ?>__inner__slide__popup">
                                    <?php echo do_shortcode($slide['slide_hover_popup']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
                <?php $slide_id++; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <style>
        <?php echo '#'.$slider_id; ?>
        .base-sliders-logo-slider__inner__slide {

        }
    </style>

    <script>
        (function ($, window, document) {
            'use strict';
            $(function () {

                function baseAppendDots(wrapper) {
                    if ($(window).width() > 767) {
                        var active_slide = $(wrapper).find('div.slick-active');
                        var slick_dots = $(wrapper).find('.slick-dots');
                        slick_dots.appendTo($(active_slide).find('<?php echo $atts['dots_append']; ?>'));
                    }
                }

                <?php if(isset($atts['dots_append']) && !empty($atts['dots_append'])) : ?>

                var dot_append_wrapper = $('<?php echo $atts['dots_append']; ?>');
                if (dot_append_wrapper === undefined || dot_append_wrapper.length === 0) {

                } else {
                    $("#<?php echo $slider_id; ?>").on('init', function(event, slick){
                        baseAppendDots($(this));
                    });

                    $("#<?php echo $slider_id; ?>").on("beforeChange", function () {

                    });

                    $("#<?php echo $slider_id; ?>").on("afterChange", function () {
                        baseAppendDots($(this));
                    });
                }
                <?php endif; ?>


                //Slick Slider
                $('#<?php echo $slider_id; ?>').slick({
                    mobileFirst: true,
                    slidesToShow: <?php echo $mobile_view ['slides_to_display']; ?>,
                    slidesToScroll: <?php echo $mobile_view['slides_to_display']; ?>,
                    autoplay: <?php echo $mobile_auto_rotate_status; ?>,
                    <?php if($mobile_auto_rotate != "" && $mobile_auto_rotate_status == 'true') :?>
                    autoplaySpeed: <?php echo $mobile_auto_rotate['slides_time_duration']; ?>,
                    <?php endif; ?>
                    arrows: <?php echo $mobile_view ['slider_arrows_mobile']; ?>,
                    dots: <?php echo $mobile_view ['slider_dots_mobile'] ?>,
                    swipe:  <?php echo $mobile_view ['slider_swipe']; ?>,
                    touchMove: <?php echo $mobile_view ['slider_touchMove']; ?>,
                    fade: <?php echo $atts['slider_fade']; ?>,

                    responsive: [
                        <?php if($mobile_view['unslick'] == 'true') { ?>
                        {
                            breakpoint: 2,
                            settings: 'unslick'
                        },
                        <?php }
                        ?>
                        {
                            breakpoint: 767,
                            settings: <?php
                                if($tablet_view['unslick'] == 'true') {
                                echo "'unslick'";
                            } else {?> {
                                slidesToShow: <?php echo $tablet_view['slides_to_display']; ?>,
                                slidesToScroll: <?php echo $tablet_view['slides_to_display']; ?>,
                                autoplay: <?php echo $tablet_auto_rotate_status; ?>,
                                <?php if($tablet_auto_rotate != "" && $tablet_auto_rotate_status == 'true') :?>
                                autoplaySpeed: <?php echo $tablet_auto_rotate['slides_time_duration']; ?>,
                                <?php endif; ?>
                                arrows: <?php echo $tablet_view ['slider_arrows_tab']; ?>,
                                dots: <?php echo $tablet_view ['slider_dots_tab'] ?>,
                                swipe:  <?php echo $tablet_view ['slider_swipe']; ?>,
                                touchMove: <?php echo $tablet_view ['slider_touchMove']; ?>,
                            }
                            <?php } ?>
                        },
                        {
                            breakpoint: 1024,
                            settings: <?php
                                if($atts['desktop_unslick'] == 'true') {
                                echo "'unslick'";
                            } else {?>
                                {
                                    autoplay: <?php echo $slide_auto_rotate_status; ?>,
                                    <?php if($slide_auto_rotate != "" && $slide_auto_rotate_status == 'true') :?>
                                    autoplaySpeed: <?php echo $slide_auto_rotate['slides_time_duration']; ?>,
                                    <?php endif; ?>
                                    centerMode: false,
                                    slidesToShow: <?php echo $atts['slides_to_display']; ?>,
                                    slidesToScroll: <?php echo $atts['slides_to_scroll']; ?>,
                                    arrows: <?php echo $atts['slider_arrows']; ?>,
                                    dots: <?php echo $atts['slider_dots'] ?>,
                                    draggable: <?php echo $atts['slider_draggable']; ?>,
                                    <?php if($atts['slider_draggable'] == 'true') :?>
                                    swipe: true,
                                    touchMove: true,
                                    <?php endif; ?>
                                    pauseOnHover: <?php echo $atts['slider_pause_on_hover']; ?>,
                                    variableWidth: <?php echo $atts['var_width']; ?>,
                                    infinite:  <?php echo $atts['infinite']; ?>,

                                }
                            <?php } ?>
                        }
                    ]
                });

                //Image Hover
                $("[data-hover-src]").each(function () {
                    var _selftImgElement = $(this);
                    _selftImgElement.parents('#slide-link-wrapper').hover(function () {
                        _selftImgElement.attr('src', _selftImgElement.attr('data-hover-src'));
                    }, function () {
                        _selftImgElement.attr('src', _selftImgElement.attr('data-default-src'));

                    })
                });
            });
        })(window.jQuery, window, document);
    </script>

<?php
//fw_print($atts);