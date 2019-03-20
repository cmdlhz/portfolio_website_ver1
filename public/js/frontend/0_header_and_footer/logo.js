var canvas = document.querySelector('#canvas_logo');
var context = canvas.getContext('2d');

let left_square_bracket = new Path2D();
left_square_bracket.moveTo(7,7);
left_square_bracket.lineTo(21,7);
left_square_bracket.lineTo(21,14);
left_square_bracket.lineTo(14,14);
left_square_bracket.lineTo(14,35);
left_square_bracket.lineTo(21,35);
left_square_bracket.lineTo(21,42);
left_square_bracket.lineTo(7,42);
left_square_bracket.lineTo(7,7);
left_square_bracket.closePath();

let right_square_bracket = new Path2D();
right_square_bracket.moveTo(28,7);
right_square_bracket.lineTo(42,7);
right_square_bracket.lineTo(42,42);
right_square_bracket.lineTo(28,42);
right_square_bracket.lineTo(28,35);
right_square_bracket.lineTo(35,35);
right_square_bracket.lineTo(35,14);
right_square_bracket.lineTo(28,14);
right_square_bracket.lineTo(28,7);
right_square_bracket.closePath();

context.fillStyle = 'rgb(11,128,220)';
context.fill(left_square_bracket, 'evenodd');
context.fill(right_square_bracket, 'evenodd');