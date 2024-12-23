<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
for ($x = 0; $x < 5; $x++) {
  echo "For loop: The number is: $x <br>";
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x = 0;
while ($x < 10) {
  echo "While loop: The number is: $x <br>";
  $x++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$x = 0;
do {
  echo "Do While loop: The number is: $x <br>";
  $x++;
} while ($x < 5);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$evenNumbers = [2, 4, 6, 8, 10];
foreach ($evenNumbers as $number) {
  echo "Foreach loop: The number is: $number <br>";
}

$person = [
  'name' => 'John Doe',
  'age' => 25,
];
foreach ($person as $key => $value) {
  echo "Foreach loop: $key is $value <br>";
}