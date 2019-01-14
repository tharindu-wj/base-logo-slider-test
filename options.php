<?php if (!defined('FW')) die('Forbidden');

/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Logo slider backend options implemented in array.
 */

$options = array(

    /*
     * Slides tab
     * Options in add new slide
     */
    'tab_slides' => array(
        'type' => 'tab',
        'title' => __('Slides', '{domain}'),
        'options' => array(
            'add_slide' => array( // Add new slide
                'type' => 'addable-popup',
                'label' => __('Add slide', '{domain}'),
                'desc' => __('Add a additional slide to slider.', '{domain}'),
                'size' => 'large',
                'template' => '{{- slide_title }}',
                'add-button-text' => __('Add Slide', '{domain}'),
                'sortable' => true,
                'popup-options' => array( // Options for slide adding box
                    'slide_title' => array(
                        'type' => 'text',
                        'label' => __('Slide Backend Title', '{domain}'),
                        'desc' => __('Add slide title for backend. *Only backend', '{domain}'),
                    ),
                    'slide_front_title' => array(
                        'type' => 'text',
                        'label' => __('Slide Frontend Title', '{domain}'),
                        'desc' => __('Add slide title for frontend.', '{domain}'),
                    ),
                    'slide_image' => array(
                        'type' => 'upload',
                        'label' => __('Slide Image', '{domain}'),
                        'desc' => __('Add slide image from here', '{domain}'),
                    ),
                    'image_type' => array(
                        'type' => 'switch',
                        'label' => __('Image Type', '{domain}'),
                        'value' => 'logo',
                        'desc' => __('Select image type thumbnail or logo.', '{domain}'),
                        'left-choice' => array(
                            'value' => 'logo',
                            'label' => __('Logo', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'thumb',
                            'label' => __('Thumbnail', '{domain}'),
                        ),
                    ),
                    'slide_short_description' => array(
                        'type' => 'wp-editor',
                        'label' => __('Slide Short Description', '{domain}'),
                        'desc' => __('Add slide short description from here. *This suit for simple logo slider mode', '{domain}'),
                        'shortcodes' => true,
                        'size' => 'large'
                    ),
                    'slide_des_wrapper' =>  array(
                        'type' => 'addable-popup',
                        'label' => __('Slide Content Row', '{domain}'),
                        'desc' => __('Add slide content rows. *This suit for advanced layout slider mode', '{domain}'),
                        'size' => 'large',
                        'template' => '{{- slide_title }}',
                        'add-button-text' => __('Add Row', '{domain}'),
                        'sortable' => true,
                        'popup-options' => array(
                            'slide_title' => array(
                                'type' => 'text',
                                'label' => __('Description Title', '{domain}'),
                                'desc' => __('Add description title from here *Only backend', '{domain}'),
                            ),
                            'slide_des' =>  array(
                                'type' => 'addable-popup',
                                'label' => __('Slide Content Column', '{domain}'),
                                'desc' => __('Add slide content columns.', '{domain}'),
                                'size' => 'large',
                                'template' => '{{- slide_title }}',
                                'add-button-text' => __('Add Row', '{domain}'),
                                'sortable' => true,
                                'popup-options' => array(
                                    'slide_title' => array(
                                        'type' => 'text',
                                        'label' => __('Description Title', '{domain}'),
                                        'desc' => __('Add description title from here *Only backend', '{domain}'),
                                    ),
                                    'slide_caption' => array(
                                        'type' => 'wp-editor',
                                        'label' => __('Slide Description', '{domain}'),
                                        'desc' => __('Add slide description from here', '{domain}'),
                                        'shortcodes' => true,
                                        'size' => 'large'
                                    ),
                                    'slide_background' => array(
                                        'type' => 'upload',
                                        'label' => __('Content Background', '{domain}'),
                                        'desc' => __('Add content background from here', '{domain}'),
                                    ),
                                    'des_class' => array(
                                        'type' => 'text',
                                        'label' => __('CSS Class', 'fw'),
                                        'desc' => __('Add custom class description column.', 'fw')
                                    ),
                                ),
                            ),
                            'des_row_class' => array(
                                'type' => 'text',
                                'label' => __('CSS Class', 'fw'),
                                'desc' => __('Add custom class description row.', 'fw')
                            ),
                        ),
                    ),
                    'slide_image_hover' => array(
                        'type' => 'upload',
                        'label' => __('Slide Hover Image', '{domain}'),
                        'desc' => __('Add image for hover from here', '{domain}'),
                        'help'  => __('Select hover effect to "Change Image" for activate this', '{domain}'),
                    ),
                    'slide_hover_popup' => array(
                        'type' => 'wp-editor',
                        'label' => __('Slider Hover Popup', '{domain}'),
                        'desc' => __('Add slider popup when on mouse hover', '{domain}'),
                        'help'  => __('Select hover effect to "Popup" for activate this', '{domain}'),
                        'shortcodes' => true
                    ),
                    'slide_hover_effect' => array(
                        'type' => 'select',
                        'label' => __('Slider Hover Effect', '{domain}'),
                        'desc' => __('Select hover effect to activate', '{domain}'),
                        'choices' => array(
                            'null' => __('No Effect', '{domain}'),
                            'image' => __('Change Image', '{domain}'),
                            'popup' => __('Popup', '{domain}'),
                        ),
                        'value' => 'null'
                    )
                )
            ),

            'css_class' => array(
                'type' => 'text',
                'label' => __('CSS Class', 'fw'),
                'desc' => __('Add custom class to logo slider', 'fw')
            ),
        )
    ),


    /*
     * Slider Settings tab
     * Apply for desktop view
     */
    'tab_slide_settings' => array(
        'type' => 'tab',
        'title' => __('Settings', '{domain}'),
        'options' => array(
            'slider_heading' => array(
                'type' => 'text',
                'label' => __('Slider heading', '{domain}'),
                'desc' => __('Add slider heading from here', '{domain}'),
            ),
            'slides_to_display' => array(
                'type' => 'slider',
                'value' =>  4,
                'properties' => array(
                    'min' => 1,
                    'max' => 10
                ),
                'label' => __('Slide to Display', '{domain}'),
                'desc' => __(' Select how many slides should be displayed', '{domain}')
            ),
            'slides_to_scroll' => array(
                'type' => 'slider',
                'value' =>  1,
                'properties' => array(
                    'min' => 1,
                    'max' => 10
                ),
                'label' => __('Slide to Scroll', '{domain}'),
                'desc' => __(' Select how many slides should be scrolled', '{domain}')
            ),
            'slider_auto' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'picker' => array(
                    'slides_auto_choice' => array(
                        'label' => __('Auto Sliding', '{domain}'),
                        'type' => 'switch',
                        'desc' => __('Enable auto slide feature', '{domain}'),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}')
                        ),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}')
                        ),
                    )
                ),
                'choices' => array(
                    'true' => array(
                        'slides_time_duration' => array(
                            'type' => 'slider',
                            'properties' => array(
                                'min' => 1000,
                                'max' => 10000
                            ),
                            'label' => __('Sliding Duration', '{domain}'),
                            'desc' => __(' Select time duration between slides', '{domain}')
                        ),
                    ),
                ),
            ),
            'slider_arrows' => array(
                'type' => 'switch',
                'label' => __('Slider Arrows', '{domain}'),
                'desc' => __('Enable slider arrows from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_dots' => array(
                'type' => 'switch',
                'label' => __('Slider Dots', '{domain}'),
                'desc' => __('Enable slider dots from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'var_width' => array(
                'type' => 'switch',
                'label' => __('Variable Width', '{domain}'),
                'desc' => __('Enable variable Width', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'infinite' => array(
                'type' => 'switch',
                'label' => __('Infinite', '{domain}'),
                'desc' => __('Enable infinite', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_draggable' => array(
                'type' => 'switch',
                'label' => __('Slider Draggable', '{domain}'),
                'desc' => __('Enable slider mouse dragging feature', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
          
            'slider_pause_on_hover' => array(
                'type' => 'switch',
                'value' => 'true',
                'label' => __('Pause on Hover', '{domain}'),
                'desc' => __('Pause autoplay on hover', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_fade' => array(
                'type' => 'switch',
                'label' => __('Slider Fade', '{domain}'),
                'desc' => __('Enable slider fade from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'dots_append' => array(
                'type' => 'text',
                'label' => __('Dots Append To', '{domain}'),
                'desc' => __('Select element to append dots. *Use this only special designs with dots needed to append into slides.', '{domain}'),
            ),
            'desktop_unslick' => array(
                'type' => 'switch',
                'label' => __('Unslick Slider', '{domain}'),
                'value' =>  'false',
                'desc' => __('Remove slider mode in desktop. *All above settings will not effect if this enabled and content will display as stack.', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
        )
    ),


    /*
     * Slider Responsive Settings tab
     * Apply for tablets and mobile view
     */
    'tab_slide_responsive' => array(
        'type' => 'tab',
        'title' => __('Responsive', '{domain}'),
        'options' => array(
            'mobile_phones' =>  array( // Options for mobile view
                'type'  => 'popup',
                'label' => __('Mobile View', '{domain}'),
                'add-button-text' => __('Edit', '{domain}'),
                'desc'  =>  'Change slider settings in mobile devices. (screens less than 767px wide)',
                'popup-options' =>  array(
                    'slides_to_display' => array(
                        'type' => 'slider',
                        'value' =>  1,
                        'properties' => array(
                            'min' => 1,
                            'max' => 10
                        ),
                        'label' => __('Slide to Display', '{domain}'),
                        'desc' => __(' Select how many slides should be displayed on mobile view', '{domain}')
                    ),
                    'slider_auto_mobile' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'value' => true,
                        'picker' => array(
                            'slides_auto_choice' => array(
                                'label' => __('Auto Sliding', '{domain}'),
                                'type' => 'switch',
                                'desc' => __('Enable auto slide feature', '{domain}'),
                                'right-choice' => array(
                                    'value' => 'true',
                                    'label' => __('Enable', '{domain}')
                                ),
                                'left-choice' => array(
                                    'value' => 'false',
                                    'label' => __('Disable', '{domain}')
                                ),
                            )
                        ),
                        'choices' => array(
                            'true' => array(
                                'slides_time_duration' => array(
                                    'type' => 'slider',
                                    'properties' => array(
                                        'min' => 1000,
                                        'max' => 10000
                                    ),
                                    'label' => __('Sliding Duration', '{domain}'),
                                    'desc' => __(' Select time duration between slides', '{domain}')
                                ),
                            ),
                        ),
                    ),
                    'slider_arrows_mobile' => array(
                        'type' => 'switch',
                        'label' => __('Slider Arrows', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider arrows from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_dots_mobile' => array(
                        'type' => 'switch',
                        'label' => __('Slider Dots', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider dots from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_swipe' => array(
                        'type' => 'switch',
                        'label' => __('Slider Swipe', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider swipe feature in mobile', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_touchMove' => array(
                        'type' => 'switch',
                        'label' => __('Slider Touch Move', '{domain}'),
                        'desc' => __('Enable slide motion with touch feature in mobile', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'unslick' => array(
                        'type' => 'switch',
                        'label' => __('Unslick Slider', '{domain}'),
                        'value' =>  'false',
                        'desc' => __('Remove slider mode in mobile. *All above settings will not effect if this enabled and content will display as stack.', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                )
            ),

            'tablets' =>  array( // Options for tablet view
                'type'  => 'popup',
                'label' => __('Tablet View', '{domain}'),
                'add-button-text' => __('Edit', '{domain}'),
                'desc'  =>  'Change slider settings in tablet devices. (screens equal to or greater than 991px wide)',
                'popup-options' =>  array(
                    'slides_to_display' => array(
                        'type' => 'slider',
                        'value' =>  2,
                        'properties' => array(
                            'min' => 1,
                            'max' => 10
                        ),
                        'label' => __('Slide to Display', '{domain}'),
                        'desc' => __(' Select how many slides should be displayed on tablet view', '{domain}')
                    ),
                    'slider_auto_tab' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'value' => true,
                        'picker' => array(
                            'slides_auto_choice' => array(
                                'label' => __('Auto Sliding', '{domain}'),
                                'type' => 'switch',
                                'desc' => __('Enable auto slide feature', '{domain}'),
                                'right-choice' => array(
                                    'value' => 'true',
                                    'label' => __('Enable', '{domain}')
                                ),
                                'left-choice' => array(
                                    'value' => 'false',
                                    'label' => __('Disable', '{domain}')
                                ),
                            )
                        ),
                        'choices' => array(
                            'true' => array(
                                'slides_time_duration' => array(
                                    'type' => 'slider',
                                    'properties' => array(
                                        'min' => 1000,
                                        'max' => 10000
                                    ),
                                    'label' => __('Sliding Duration', '{domain}'),
                                    'desc' => __(' Select time duration between slides', '{domain}')
                                ),
                            ),
                        ),
                    ),
                    'slider_arrows_tab' => array(
                        'type' => 'switch',
                        'label' => __('Slider Arrows', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider arrows from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_dots_tab' => array(
                        'type' => 'switch',
                        'label' => __('Slider Dots', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider dots from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_swipe' => array(
                        'type' => 'switch',
                        'value' => true,
                        'label' => __('Slider Swipe', '{domain}'),
                        'desc' => __('Enable slider swipe feature in tablet', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_touchMove' => array(
                        'type' => 'switch',
                        'label' => __('Slider Touch Move', '{domain}'),
                        'desc' => __('Enable slide motion with touch feature in tablet', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'unslick' => array(
                        'type' => 'switch',
                        'label' => __('Unslick Slider', '{domain}'),
                        'value' =>  'false',
                        'desc' => __('Remove slider mode in tablet. *All above settings will not effect if this enabled and content will display as stack.', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                )
            ),
        )
    )
);