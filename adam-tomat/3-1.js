// http://jsfiddle.net/Lzmw25t7/1/

var input = document.querySelector('div').getAttribute('data-input');
var delivered = {};
var x = 0;
var y = 0;

function deliver() {
  var key = x + 'x' + y;

  if (delivered[key] === undefined) {
    delivered[key] = 1;
  } else {
    delivered[key] += 1;
  }
}

deliver();

for (var i = 0; i < input.length; i++) {
  var move = input.charAt(i);

  if (move === '^') {
    y++;
  }
  else if(move === 'v') {
    y--;
  }
  else if(move === '>') {
    x++;
  }
  else if(move === '<') {
    x--;
  }

  deliver();
}

console.log(Object.keys(delivered).length);
