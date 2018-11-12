Crafty.init(600, 400, document.getElementById('crafty-game'));

var blackBox = Crafty.e("2D, Canvas, Color, Tween")
  .attr({
    x: 50,
    y: 50,
    w: 50,
    h: 50
  })
  .color("black");

var orangeBox = Crafty.e("2D, Canvas, Color, Tween")
  .attr({
    x: 550,
    y: 250,
    w: 50,
    h: 50
  })
  .color("orange");

blackBox.tween({x: 500}, 3000);

orangeBox.tween({x: 50, rotation: 360}, 3000);