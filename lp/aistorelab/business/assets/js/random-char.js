var prefix = '';
var delay = 2;
var step = 1;
var tail = 5;
var timeout = 50;
var colors = [
  '#3FB1F0',
  '#D36ABE',
  '#86A5E5',
  '#F8639D',
  '#677DE9',
];
var params_map = {};
var _getRandomColor = function() {
  return colors[Math.floor(Math.random() * colors.length)];
};
var _getRandomChar = function() {
  return String.fromCharCode(Math.random() * (127 - 33) + 33)
};
var _getRandomColoredString = function(n) {
  var fragment = document.createDocumentFragment();
  for (var i = 0; i < n; i++) {
    var char = document.createElement('span');
    char.textContent = _getRandomChar();
    char.style.color = _getRandomColor();
    fragment.appendChild(char);
  }
  return fragment;
}
var render_random_character = function(el, is_recursive) {
  if (!el.dataset) {
    console.log("<= ie10");
    return;
  }
  var skill = el.dataset["title"];
  console.log(params_map);
  if (!params_map[skill]) {
    params_map[skill] = {
      text: '',
      prefixP: -5,
      skillI: 0,
      skillP: 0,
      direction: 'forward',
      delay: undefined,
      step: undefined,
    }
  } else {
    if (!is_recursive) {
      return;
    }
  }
  var params = params_map[skill];
  console.log("skill", skill);
  if (params.step) {
    params.step--;
  } else {
    params.step = step;
    if (params.prefixP < prefix.length) {
      if (params.prefixP >= 0) {
        params.text += prefix[params.prefixP];
      }
      params.prefixP++;
    } else {
      if (params.direction === 'forward') {
        if (params.skillP < skill.length) {
          params.text += skill[params.skillP];
          params.skillP++;
        } else {
          if (params.delay) {
            params.delay--;
          } else {
            return;
          }
        }
      }
    }
  }
  el.textContent = params.text;
  el.appendChild(
    _getRandomColoredString(
      params.prefixP < prefix.length ?
        Math.min(tail, tail + params.prefixP):
        Math.min(tail, skill.length - params.skillP)
    )
  );
  setTimeout(function() { 
    render_random_character(el, true);
  }, timeout);
}
