// Invoke jqEye method when the page is loaded.
jQuery(document).ready(function() {
    jQuery(".eye div.pupil").jqEye();
});

//A heavily modified version of jqEye
(function (e) {
    e.fn.jqEye = function (t) {
        function s(e, t, n, r) {
            var i = {
                x: e,
                y: t
            };
            if (e * e / (n * n) + t * t / (r * r) > 1) {
                if (e !== 0) {
                    var s = t / e;
                    i.x = Math.sqrt(1 / (1 / (n * n) + s * s / (r * r)));
                    i.x = e > 0 ? i.x : -i.x;
                    i.y = Math.abs(s * i.x);
                    i.y = t > 0 ? i.y : -i.y
                } else {
                    i.y = t > 0 ? r : -r
                }
            }
            return i
        }

        function translateDirection(rotation, x, y) {
            //Rotated 90deg ccw
            if (rotation < -55)  {
                return -y;
            }
            //Rotated 90deg cw
            else if (rotation > 55) {
                return y;
            }
            else {
                return x;
            }
        }

        return this.each(function () {
            var t = e(this);
            var u = e(this).position().left + e(this).width() / 2;
            var a = e(this).position().top + e(this).height() / 2;
            var f = e(this).offset().left + e(this).width() / 2;
            var l = e(this).offset().top + e(this).height() / 2;

            var width = e(this).data("width");
            var height = e(this).data("height");

            // Position Variables
            var x = 0;

            // Speed - Velocity
            var vx = 0;

            // Acceleration
            var ax = 0;

            var delay = 10;
            var vMultiplier = 0.01;

            //On desktop use mousemove
            e(document).mousemove(function (e) {
                var c = e.clientX;
                var h = e.clientY;
                var p = c - f;
                var d = h - l;

                //ellipse
                var g = s(p, d, width / 2, height / 2);
                p = g.x;
                d = g.y;

                p = p + u - t.width() / 2;
                d = d + a - t.height() / 2;
                t.css({
                    left: p,
                    top: d
                })
            })

            /*

            Temporarily disable mobile support

            var parentWidth = t.parent().width();
            var width = t.width();

            var left = 0;
            var center = (parentWidth/2) - (width /2);
            var right = parentWidth - width;

            gyro.startTracking(function(o) {
                
                direction = translateDirection(o.gamma, o.x, o.y);

                if (direction !== null && direction !== 0 && !t.hasClass("animate"))
                {
                    t.addClass("animate");
                
                    if (direction >= -1 && direction <= 1) {
                        //Center eyes
                        t.css({
                            left: center
                        })
                    } else if (direction < -1) {
                        //Left
                        t.css({
                            left: left
                        })
                    } else {
                        //Right
                        t.css({
                            left: right
                        })
                    }

                }

            });

            */

        });
    }
})(jQuery)