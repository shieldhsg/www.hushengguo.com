window.onload = (function () {
        var container = $('#container');
        var list = $('#list');
        var buttons = $('#buttons span');
        var prev = $('#prev');
        var next = $('#next');
        var index = 1;
        var len = 4;
        var interval = 2396;
        var timer;


        function animate (offset) {
            var left = parseInt(list.css('left')) + offset;
            if (offset>0) {
                offset = '+=' + offset;
            }
            else {
                offset = '-=' + Math.abs(offset);
            }
            list.animate({'left': offset}, 300, function () {
                if(left > -200){
                    list.css('left', -599 * len);
                }
                if(left < (-599 * len)) {
                    list.css('left', -599);
                }
            });
        }

        function showButton() {
            buttons.eq(index-1).addClass('on').siblings().removeClass('on');
        }

        function play() {
            timer = setTimeout(function () {
                next.trigger('click');
                play();
            }, interval);
        }
        function stop() {
            clearTimeout(timer);
        }

        next.bind('click', function () {
            if (list.is(':animated')) {
                return;
            }
            if (index == 4) {
                index = 1;
            }
            else {
                index += 1;
            }
            animate(-599);
            showButton();
        });

        prev.bind('click', function () {
            if (list.is(':animated')) {
                return;
            }
            if (index == 1) {
                index = 4;
            }
            else {
                index -= 1;
            }
            animate(599);
            showButton();
        });

        buttons.each(function () {
            $(this).bind('click', function () {
                if (list.is(':animated') || $(this).attr('class')=='on') {
                    return;
                }
                var myIndex = parseInt($(this).attr('index'));
                var offset = -599 * (myIndex - index);

                animate(offset);
                index = myIndex;
                showButton();
            })
        });

        container.hover(stop, play);

        play();

    });