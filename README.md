## Unyson Shortcode Logo Slider

A slider with company logos and a small text. User can define how many logos display on screen.


### A User can :

1. customize the logo gird size ( visible on one slide ).
2. add a small title / description for every image.
3. add two images ( one for default view and another for mouse over ).
4. add title for the widget.
5. able to add border for images
    * @param `border-width` <number>px
    * @param `border-style` dotted, dashed, solid, double, groove, ridge, inset, outset, none, hidden
    * @param `border-color` Color Picker
6. can configure the slider options.
    * @param : auto-slide; (boolean)
    * @param : interval; (number in millisecond)
    * @params : controller [options for slick](http://kenwheeler.github.io/slick/)
        * @param : isArrowsVisible; (boolean)
        * @param : isDotsVisible; (boolean)
        * @param : adaptiveHeight; (boolean)
        * @param : autoplay; (boolean)
        * @param : autoplay speed; (number)
        * @param : draggable; (boolean)
        * @param : fade; (string)
        * @param : focusOnSelect; (boolean)
        * @param : easing; (string)
        * @param : draggable; (boolean)
        * @param : fade; (string)
        * @param : focusOnSelect; (boolean)
        * @param : draggable; (boolean)
        * @param : cssEase; (boolean)
 7. Can Configure slider options on tablet and mobile
    * @param : auto-slide; (boolean)
    * @param : interval; (number in millisecond)
    * @param : slider swipe
    * @param : slider touch move
 8. add link for image


### Requirements :
    1. php version >= 7.0
    

### Important:
    1. when logos count exceed the grid size only, slider will appear.
    2. logo image sizes should be equal.


### Style guide: 
    * @param : `.usc-logo-slider` : slider wrapper class
    * @param : `.usc-logo-slider__heading` : widget heading class
    * @param : `.usc-logo-slider__inner` : parent div class for slides
    * @param : `.usc-logo-slider__inner__slide` : div class for seperate slide
    * @param : `.usc-logo-slider__inner__slide__image` : slide image class
    * @param : `.usc-logo-slider__inner__slide__caption` : slide caption class
    

### Shortcode **[]**
All resources should start with prefix name.
