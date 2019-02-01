(function ($) { 
  $(document).ready(function () {
    jQuery(function () {
      initDPUi2();
      initAnchors();
      initAddClassToClick();
      initAddClassToRoom();
      initSlick();
    });

    //init

    function initAddClassToClick() {
      $('a.sect0').on('click', function (e) {
        $('section.sect0').addClass('visible');
      });
      $('a.sect1').on('click', function (e) {
        $('section.sect1').addClass('visible');
      });
      $('a.sect2').on('click', function (e) {
        $('section.sect2').addClass('visible');
      });
      $('a.sect3').on('click', function (e) {
        $('section.sect3').addClass('visible');
      });
      $('a.sect4').on('click', function (e) {
        $('section.sect4').addClass('visible');
      });
    }

    function initAddClassToRoom() {
      $('.b-slider__form-button-shownext').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.room_item').toggleClass('activeroom')
          .siblings('.room_item').removeClass('activeroom')
          .parents('section').toggleClass('activelinksect2');
      });
    }

    function initAnchors() {
      new SmoothScroll({
        anchorLinks: 'a[href^="#"]:not([href="#"])',
        extraOffset: 0,
        activeClasses: 'link',
        anchorActiveClass: 'anchor-active',
        sectionActiveClass: 'section-active',
        wheelBehavior: 'none'
      });
    }

    function initSlick() {
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,        
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,        
        focusOnSelect: true,        
        
      });
    }

    function initDPUi2() {
      // alert();
      $('#check-in-date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate: 0,
        maxDate: "+6M +10D",
        //defaultDate: "+1w",
        //changeMonth: true,
        numberOfMonths: 2
      });
      $('#check-out-date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate: +1,
        maxDate: "+6M +10D",
        //defaultDate: "+1w",
        //changeMonth: true,
        numberOfMonths: 2
      });
    }
  });

  // $('input[type="date"]').attr('type', 'text');
  // jQuery('input[type="date"]').live('click', function (e) { e.preventDefault(); }).datepicker();



})(jQuery);


// body

// ss
!function(l,t){var e,s,a,h=l(window),r="onwheel"in document||9<=document.documentMode?"wheel":"mousewheel DOMMouseScroll";function i(t,o,n){var i;document.body&&(o="number"==typeof o?{duration:o}:o||{},e=e||l("html, body"),i=o.container||e,"number"==typeof t&&(t={top:t}),s&&a&&s.off(r,a),o.wheelBehavior&&"none"!==o.wheelBehavior&&(a=function(t){"stop"===o.wheelBehavior?(i.off(r,a),i.stop()):"ignore"===o.wheelBehavior&&t.preventDefault()},s=i.on(r,a)),i.stop().animate({scrollLeft:t.left,scrollTop:t.top},o.duration,function(){a&&i.off(r,a),l.isFunction(n)&&n()}))}function o(t){this.options=l.extend({anchorLinks:'a[href^="#"]',container:null,extraOffset:null,activeClasses:null,easing:"swing",animMode:"duration",animDuration:800,animSpeed:1500,anchorActiveClass:"anchor-active",sectionActiveClass:"section-active",wheelBehavior:"stop",useNativeAnchorScrolling:!1},t),this.init()}o.prototype={init:function(){this.initStructure(),this.attachEvents(),this.isInit=!0},initStructure:function(){var t=this;this.container=this.options.container?l(this.options.container):l("html,body"),this.scrollContainer=this.options.container?this.container:h,this.anchorLinks=jQuery(this.options.anchorLinks).filter(function(){return jQuery(t.getAnchorTarget(jQuery(this))).length})},getId:function(t){try{return"#"+t.replace(/^.*?(#|$)/,"")}catch(t){return null}},getAnchorTarget:function(t){var o=this.getId(l(t).attr("href"));return l(1<o.length?o:"html")},getTargetOffset:function(t){var o=t.offset().top;return this.options.container&&(o-=this.container.offset().top-this.container.prop("scrollTop")),"number"==typeof this.options.extraOffset?o-=this.options.extraOffset:"function"==typeof this.options.extraOffset&&(o-=this.options.extraOffset(t)),{top:o}},attachEvents:function(){var o=this;if(this.options.activeClasses&&this.anchorLinks.length){this.anchorData=[];for(var t=0;t<this.anchorLinks.length;t++){var n=jQuery(this.anchorLinks[t]),i=o.getAnchorTarget(n),e=null;l.each(o.anchorData,function(t,o){o.block[0]===i[0]&&(e=o)}),e?e.link=e.link.add(n):o.anchorData.push({link:n,block:i})}this.resizeHandler=function(){o.isInit&&o.recalculateOffsets()},this.scrollHandler=function(){o.refreshActiveClass()},this.recalculateOffsets(),this.scrollContainer.on("scroll",this.scrollHandler),h.on("resize load orientationchange refreshAnchor",this.resizeHandler)}this.clickHandler=function(t){o.onClick(t)},this.options.useNativeAnchorScrolling||this.anchorLinks.on("click",this.clickHandler)},recalculateOffsets:function(){var n=this;l.each(this.anchorData,function(t,o){o.offset=n.getTargetOffset(o.block),o.height=o.block.outerHeight()}),this.refreshActiveClass()},toggleActiveClass:function(t,o,n){t.toggleClass(this.options.anchorActiveClass,n),o.toggleClass(this.options.sectionActiveClass,n)},refreshActiveClass:function(){var e=this,s=!1,a=this.container.prop("scrollHeight"),r=this.scrollContainer.height(),c=this.options.container?this.container.prop("scrollTop"):h.scrollTop();this.options.customScrollHandler?this.options.customScrollHandler.call(this,c,this.anchorData):(this.anchorData.sort(function(t,o){return t.offset.top-o.offset.top}),l.each(this.anchorData,function(t){var o=e.anchorData.length-t-1,n=e.anchorData[o],i="parent"===e.options.activeClasses?n.link.parent():n.link;a-r<=c?o===e.anchorData.length-1?e.toggleActiveClass(i,n.block,!0):e.toggleActiveClass(i,n.block,!1):!s&&(c>=n.offset.top-1||0===o)?(s=!0,e.toggleActiveClass(i,n.block,!0)):e.toggleActiveClass(i,n.block,!1)}))},calculateScrollDuration:function(t){return"speed"===this.options.animMode?Math.abs(this.scrollContainer.scrollTop()-t.top)/this.options.animSpeed*1e3:this.options.animDuration},onClick:function(t){var o=this.getAnchorTarget(t.currentTarget),n=this.getTargetOffset(o);t.preventDefault(),i(n,{container:this.container,wheelBehavior:this.options.wheelBehavior,duration:this.calculateScrollDuration(n)}),this.makeCallback("onBeforeScroll",t.currentTarget)},makeCallback:function(t){if("function"==typeof this.options[t]){var o=Array.prototype.slice.call(arguments);o.shift(),this.options[t].apply(this,o)}},destroy:function(){var e=this;this.isInit=!1,this.options.activeClasses&&(h.off("resize load orientationchange refreshAnchor",this.resizeHandler),this.scrollContainer.off("scroll",this.scrollHandler),l.each(this.anchorData,function(t){var o=e.anchorData.length-t-1,n=e.anchorData[o],i="parent"===e.options.activeClasses?n.link.parent():n.link;e.toggleActiveClass(i,n.block,!1)})),this.anchorLinks.off("click",this.clickHandler)}},l.extend(o,{scrollTo:function(t,o,n){i(t,o,n)}}),t.SmoothScroll=o}(jQuery,this);
