// https://jsfiddle.net/Lzmw25t7/4/

var input = document.querySelector('div').getAttribute('data-input');
var delivered = {};

var santaX = 0;
var santaY = 0;
var roboX = 0;
var roboY = 0;

function deliver(x, y) {
  var key = x + 'x' + y;

  if (delivered[key] === undefined) {
    delivered[key] = 1;
  } else {
    delivered[key] += 1;
  }
}

deliver(santaX, santaY);
deliver(roboX, roboY);

for (var i = 0; i < input.length; i++) {
  var move = input.charAt(i);
  var isSanta = (i % 2) === 0;

  if (move === '^') {
    if (isSanta) santaY++;
    else roboY++;
  } else if (move === 'v') {
    if (isSanta) santaY--;
    else roboY--;
  } else if (move === '>') {
    if (isSanta) santaX++;
    else roboX++;
  } else if (move === '<') {
    if (isSanta) santaX--;
    else roboX--;
  }

  if (isSanta) deliver(santaX, santaY);
  else deliver(roboX, roboY);
}

console.log(Object.keys(delivered).length);
