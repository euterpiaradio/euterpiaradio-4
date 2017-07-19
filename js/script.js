(function ($) {

    'use strict';

    $.fn.chartify = function () {
        console.log($(this));
        this.find('tbody tr:has(td:contains("+"))').addClass("up");
        this.find('tbody tr:has(td:contains("-"))').addClass("down");
        var max = -1;
        var min = 1;
        this.find('tbody tr').each(function (i, o) {
            var t = $('td:nth-child(2)', o).text();
            if (t !== '–') {
                var i = parseInt(t);
                if (i > max) {
                    max = i;
                } else if (i < min) {
                    min = i;
                }
            }
        });
        this.find('tbody tr:has(td:contains("+' + max + '"))').addClass("best");
        this.find('tbody tr:has(td:contains("' + min + '"))').addClass("worst");
    };

    //language=JQuery-CSS
    $('section#chart article').chartify();

}(window.jQuery));