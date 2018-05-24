// Even print even, odd print out odd
for ($i = 0; $i<=100; $i++) {
	if (($i % 2) ==  0) {
   echo "<p>{$i} is even</p>";
	}
  else {
  echo "{$i} is not even";
}
}
for ($i = 0; $i<=10; $i++){
echo "<p>{$i} earned points</p>";
}

//foreach, replaces an item in array and then loops loops through array.
$fruits = array("orange", "grapes", "Strawberries", "Banana", "Apples");

$fruits[3] = "blueberries";
foreach($fruits as $snacks) {
  echo "<p>$snacks</p>";
}

//flip a coin until heads
$flipCounter = 0;

do { 
  $flipCoin = rand(0,1);
  $flipCounter++;
  
  if($flipCoin) {
      echo "<p>tails</p>";
    } else {
      echo "<p>heads</p>";
    }
}
  while($flipCoin); 
      echo "<p> The coin was flipped {$flipCounter} times to get a heads</p>";


//number of times to flip a coin until 3 heads in a row
$flipCounter = 0;
$headsCounter = 0;

while ($headsCounter < 3) {
  $flipCoin = rand(0,1);
  $flipCounter++;
  
  if($flipCoin) {
      echo "<p>tails</p>";
      $headsCounter++;
    } else {
      echo "<p>heads</p>";
  
      $headsCounter = 0;
    }
}
echo "<p>The coin was flipped {$flipCounter} to get 3 heads in a row</p>";

//key and value pair

$chestBox = (
"bow"=>"basic",
"shortbow"="unidentified",
"axe" = "rare"
);

foreach($chestBox as $weapons=>$statusWeapon) {
echo $statusWeapon . " " . $weapons . "<br />";
}


