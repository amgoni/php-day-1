<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 25;
if ($age > 21) {
  echo 'You are old enough for deez nuts';
} else {
  echo 'You are not old enough for deez nuts';
}

$t = date("H");
if ($t < 12) {
  echo "Good morning!";
} elseif ($t < 18) {
  echo "Good afternoon!";
} else {
  echo "Good evening!";
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
$posts = ['First Post'];
echo !empty($posts) ? 'There are posts' : 'No posts';

/* -------- Switch Statements ------- */
$favcolor = "blue";
switch($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
