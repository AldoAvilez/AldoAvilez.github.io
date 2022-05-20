function animate(options) {

  var start = performance.now();

  requestAnimationFrame(function animate(time) {
    // timeFraction 0 a 1
    var timeFraction = (time - start) / options.duration;
    if (timeFraction > 1) timeFraction = 1;

    // el estado actual de la animación
    var progress = options.timing(timeFraction)
    
    options.draw(progress);

    if (timeFraction < 1) {
      requestAnimationFrame(animate);
    }

  });
}