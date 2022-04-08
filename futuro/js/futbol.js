    function makeEaseOut(timing) {
      return function(timeFraction) {
        return 1 - timing(1 - timeFraction);
      }
    }

    function bounce(timeFraction) {
      for (let a = 0, b = 1; 1; a += b, b /= 2) {
        if (timeFraction >= (7 - 4 * a) / 11) {
          return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
        }
      }
    }

    function quad(timeFraction) {
      return Math.pow(timeFraction, 2);
    }

    //ball.onclick = function() {
    function mover() {

      let height = field.clientHeight - ball.clientHeight;
      let width = screen.width;

      animate({
        duration: 2000,
        timing: makeEaseOut(bounce),
        draw: function(progress) {
          ball.style.top = height * progress + 'px'
        }
      });

      animate({
        duration: 2000,
        timing: makeEaseOut(quad),
        draw: function(progress) {
          ball.style.left = width * progress + "px"
        }
      });
    }


    //para aparecer y desaparecer
$(document).ready(function() {   
    setTimeout(function() {
        $(".aparecer").fadeIn(1500);
    },3000);
    setTimeout(function() {
        mover();
    },6000);
    setTimeout(function() {
        $(".desaparecer").fadeOut(1500);
    },12000);
});