
function FixHTML(leftblocksID, centerblocksID, rightblocksID) {
    var ua = navigator.userAgent.toLowerCase();
    var is_old_ie = (ua.indexOf("msie") != -1) && (ua.indexOf("msie 8") == -1) &&
                    (ua.indexOf("msie 9") == -1) && (ua.indexOf("opera") == -1);
    // Set class attribute name
    // 'class'     for Gecko, Opera, Safari, IE9 and other
    // 'className' for IE8, IE7, IE6
    var classattr = (is_old_ie) ? 'className' : 'class';

    if (document.body.getAttribute(classattr) != 'js_off') return;

    var leftblocks   = document.getElementById(leftblocksID);
    var centerblocks = document.getElementById(centerblocksID);
    var rightblocks  = document.getElementById(rightblocksID);

    // Check HTML id attribute
    var classValue = 'left-center-right';
    if (leftblocks  && centerblocks && !rightblocks) classValue = 'left-center';
    if (!leftblocks && centerblocks && rightblocks ) classValue = 'center-right';
    if (!leftblocks && centerblocks && !rightblocks) classValue = 'center';
    
    // Set body class attribute by HTML structure
    document.body.setAttribute(classattr, classValue);
}


function delconfirm() {
  return (confirm("Delete this?")) ? true : false;
}

function postconfirm() {
  return (confirm("Send this?")) ? true : false;
}


/* http://tinynav.viljamis.com v1.03 by @viljamis */
/* Modified by dengen */
(function ($, window, i) {
  $.fn.tinyNav = function (options) {

    // Default settings
    var settings = $.extend({
      'active' : 'selected',  // String: Set the "active" class
      'header' : true,        // Boolean: Show header instead of the active item
      'string' : 'Navigation' // String: String for header
    }, options);

    return this.each(function () {

      // Used for namespacing
      i++;

      var $nav = $(this),
        // Namespacing
        namespace = 'tinynav',
        namespace_i = namespace + i,
        l_namespace_i = '.l_' + namespace_i,
        $select = $('<select/>').addClass(namespace + ' ' + namespace_i);

      if ($nav.is('ul,ol')) {

        if (settings.header) {
          $select.append(
            $('<option/>').text(settings.string)
          );
        }

        // Build options
        var options = '';

        $nav
          .addClass('l_' + namespace_i)
          .find('a')
          .each(function () {
            options += '<option value="' + $(this).attr('href') + '">';
            for (j = 0; j < $(this).parents('ul, ol').length - 1; j++) { 
               options += '&emsp;';
            }
            options += $(this).text() + '</option>';
          });

        // Append options into a select
        $select.append(options);

        // Select the active item
        if (!settings.header) {
          $select
            .find(':eq(' + $(l_namespace_i + ' li')
            .index($(l_namespace_i + ' li.' + settings.active)) + ')')
            .attr('selected', true);
        }

        // Change window location
        $select.change(function () {
          window.location.href = $(this).val();
        });

        // Inject select
        $(l_namespace_i).after($select);

      }

    });

  };
})(jQuery, this, 0);


$(function() {
  $('#navigation_ul').tinyNav({
    active: 'selected',
    string: 'Jump to...'
  });
  var istouch = ('ontouchstart' in window);
  if (istouch) {
    var ua = navigator.userAgent;
    var istablet = ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1)
                       || ua.indexOf('iPad') > 0 || ua.indexOf('SC-01C') > 0);
    if (!istablet) {
      var obj = $('.block-title');
      obj.addClass("show");
      $(".block-left-content").css("display", "none");
      $(".block-right-content").css("display", "none");
      $(".block-list-content").css("display", "none");
      obj.live('touchstart', function() {
        this.touched = true;
      });
      obj.live('touchmove', function() {
        this.touchmoved = true;
      });
      obj.live('touchend', function() {
        if (this.touched && !this.touchmoved) {
          $(this).next().toggle();
          $(this).toggleClass("show");
          $(this).toggleClass("hide");
        }
        this.touched = false;
        this.touchmoved = false;
      });
    }
  }
});
