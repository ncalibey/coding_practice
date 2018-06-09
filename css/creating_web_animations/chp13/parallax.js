function setTranslate(xPos, yPos, el) {
  el.style.transform = 'translate3d(' + xPos + 'px, ' + yPos + 'px, 0)';
}

function scrollLoop() {
  xScrollPosition = window.scrollX;
  yScrollPosition = window.scrollY;

  setTranslate(0, yScrollPosition * -.02, bigYellowCircle);
  setTranslate(0, yScrollPosition * -1.5, blueSquare);
  setTranslate(0, yScrollPosition * .5, greenPentagon);

  requestAnimationFrame(scrollLoop);
}

var bigYellowCircle = document.querySelector('#bigYellowCircle');
var blueSquare = document.querySelector('#blueSquare');
var greenPentagon = document.querySelector('#greenPentagon');
var xScrollPosition;
var yScrollPosition;

window.addEventListener('DOMContentLoaded', scrollLoop, false);
console.log('test');
