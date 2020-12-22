<!DOCTYPE html>
<?php
require '../../includes/common.php';

//include 'snake_script.php';
if(!isset($_SESSION['email']))
   {
      header('location:../../index.php');
   }
?>
<html>
<head>
    
     <meta charset="UTF-8">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="css/w3.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link href="css/stylephp.css" rel="stylesheet" type="text/css"/>
  <title></title>
  <style>
  html, body {
    height: 100%;
    margin: 0;
  }
  body {
    background: black;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  canvas {
    border: 1px solid white;
  }
  #p1
  {
    color:red;
	position:absolute;
	left:100px;
	top:10px;
  }
    #p22
  {
    color:red;
	position:absolute;
	left:100px;
	top:30px;
  }
  #score
  {
    color:yellow;
    position:absolute;
	left:155px;
	top:10px;
  }
   #scorer
  {
    color:red;
	position:absolute;
	left:100px;
	top:30px;
  }
  #high2
  {
    color:yellow;
    position:absolute;
	left:195px;
	top:30px;
  }
  .butt{
      color:red;
	position:absolute;
	left:100px;
	bottom: 10px;
        color:black;
        text-decoration: none;
  }
  </style>
</head>
<body>
<p id="p1">SCORE:</p>

<p id="score"></p>
<p id="p22">HIGHSCORE:</p>
<p id="high2"><?php 
if(isset($_SESSION['hs']))
{
    $hss=0;
    $hss=$_SESSION['hs'];
    echo "$hss";
}
else
{
echo "<script>var hcc='';location.replace('snake_script.php?scc=0');</script>";
}

?></p><br>
<p id="scorer">
    
     <?php 
                            $uidn="";
                            
                            $uidn=$_SESSION['u_id'];
                                $sqn="SELECT user.name, MAX(gamedata.score) FROM user JOIN gamedata WHERE user.u_id=$uidn AND gamedata.ug_id=$uidn AND gamedata.g_id=2";
                                $sqnc= mysqli_query($con, $sqn);
                                $s= mysqli_fetch_array($sqnc);
                                $name="";
                                $name=$s[0];
                                echo "<br>Top scorer : $name";
                            ?>
</p>
<div class="container">
    <div class="row">
        <div class="col-8 offset-3">
<canvas width="400" height="400" id="game"></canvas>
    </div>
    </div>


<div class="row w3-bottom" >
    <div class="col-3 ">
    <button class="w3-btn w3-white" onclick="home()" >New Game</button><br>
    </div>
    <div class="offset-4 w3-btn w3-white">
        <a href="../../main.php" class="button bg-light" style="color:black;text-decoration: none;">HOME</a>
    </div>
</div>
</div>
<script>
    var scc=0;
        var hcc=0;
  /*  function home()
    {
        var scc=score;
        var hcc=max;
        location.replace('main.php?scc=" +score+ "&hcc="+max+"');
    }*/
var canvas = document.getElementById('game');
var context = canvas.getContext('2d');
var grid = 16;
var count = 0;
var score=0;
var max=0;  

var snake = {
  x: 160,
  y: 160,
  
  // snake velocity. moves one grid length every frame in either the x or y direction
  dx: grid,
  dy: 0,
  
  // keep track of all grids the snake body occupies
  cells: [],
  
  // length of the snake. grows when eating an apple
  maxCells: 4
};
var apple = {
  x: 320,
  y: 320
};

// get random whole numbers in a specific range
// @see https://stackoverflow.com/a/1527820/2124254
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
// game loop
function loop() {
  requestAnimationFrame(loop);
  // slow game loop to 15 fps instead of 60 (60/15 = 4)
  if (++count < 4) {
    return;
  }
  count = 0;
  context.clearRect(0,0,canvas.width,canvas.height);
  // move snake by it's velocity
  snake.x += snake.dx;
  snake.y += snake.dy;
  // wrap snake position horizontally on edge of screen
  if (snake.x < 0) {
    snake.x = canvas.width - grid;
  }
  else if (snake.x >= canvas.width) {
    snake.x = 0;
  }
  
  // wrap snake position vertically on edge of screen
  if (snake.y < 0) {
    snake.y = canvas.height - grid;
  }
  else if (snake.y >= canvas.height) {
    snake.y = 0;
  }
  // keep track of where snake has been. front of the array is always the head
  snake.cells.unshift({x: snake.x, y: snake.y});
  // remove cells as we move away from them
  if (snake.cells.length > snake.maxCells) {
    snake.cells.pop();
  }
  // draw apple
  context.fillStyle = 'red';
  context.fillRect(apple.x, apple.y, grid-1, grid-1);
  // draw snake one cell at a time
  context.fillStyle = 'green';
  snake.cells.forEach(function(cell, index) {
    
    // drawing 1 px smaller than the grid creates a grid effect in the snake body so you can see how long it is
    context.fillRect(cell.x, cell.y, grid-1, grid-1);  
    // snake ate apple
    if (cell.x === apple.x && cell.y === apple.y) {
      snake.maxCells++;
	  score+=10;
	  //max=score;
	  document.getElementById('score').innerHTML=score;
	
      // canvas is 400x400 which is 25x25 grids 
      apple.x = getRandomInt(0, 25) * grid;
      apple.y = getRandomInt(0, 25) * grid;
    }
    // check collision with all cells after this one (modified bubble sort)
    for (var i = index + 1; i < snake.cells.length; i++)
	{
      
      // snake occupies same space as a body part. reset game
      if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) 
	 { 
	 
	    if(score>max)
	    {
	     max=score;
	    }
            var scc=score;
        var hcc=max;
        location.replace("snake_script.php?scc="+score+"&hcc="+max+" ");
    	snake.x = 160;
        snake.y = 160;
        snake.cells = [];
        snake.maxCells = 4;
        snake.dx = grid;
        snake.dy = 0;
		score=0;
        apple.x = getRandomInt(0, 25) * grid;
        apple.y = getRandomInt(0, 25) * grid;
	    document.getElementById('high').innerHTML=max;
             
      }
    }
  }
  
  );
  
}
// listen to keyboard events to move the snake
document.addEventListener('keydown', function(e) {
  // prevent snake from backtracking on itself by checking that it's 
  // not already moving on the same axis (pressing left while moving
  // left won't do anything, and pressing right while moving left
  // shouldn't let you collide with your own body)
  
  // left arrow key
  if (e.which === 37 && snake.dx === 0) {
    snake.dx = -grid;
    snake.dy = 0;
  }
  // up arrow key
  else if (e.which === 38 && snake.dy === 0) {
    snake.dy = -grid;
    snake.dx = 0;
  }
  // right arrow key
  else if (e.which === 39 && snake.dx === 0) {
    snake.dx = grid;
    snake.dy = 0;
  }
  // down arrow key
  else if (e.which === 40 && snake.dy === 0) {
    snake.dy = grid;
    snake.dx = 0;
  }
});
// start the game
requestAnimationFrame(loop);
function home()
    {
        var scc=0;
        var hcc=max;
        location.replace("snake_script.php?scc="+score+"&hcc="+max+" ");
    }
</script>
</body>
</html>