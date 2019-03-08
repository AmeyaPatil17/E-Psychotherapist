
var input;
var button;
function setup(){
noCanvas();
input = createInput('It was a dark and stormy night.');
input.changed(processRita);
button.mousePressed(processRita);
input.size(300);
}

function processRita(){
console.log('event');
var s = input.value();
createP(s);
}


