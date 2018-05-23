// delete
unset()

strtoupper()
strtolower()
substr()
  substr("eeek", 0,3)
sort()
rsort()
join()
  join(", ", $something);
  


// Select a random item from an array

  //create an array
  $population = array();
    
    //push items into array
    array_push($population, "american", "swiss", "UK");
    
    //select a random population
    
    //number in an array
    $max = count($population)-1;
    
    //randomly selected a population group from array
    echo $randomSelection = $population[rand(0,$max)];
 

//excercise
$chest = =array();

array_push=($chest, "1000 Gold Coins", "sword");

//periods . 

  function greetBot($name, $age)  {
  echo "Greetings " . $name . "you're age is: " . $age " .";
  
  }
  
  greetBot("john", 12);
  
  
//OOP creating class

    Class Animal {
    public $isAnimal = true;
    public $name;
    public $age;
    
    public function __construct($name, $age){
    $this->name=$name;
    $this->age=$age;
    };
    
    public function makeNoise($name) {
    return "I'm " . this.$name . " so guess my noise!";
    };
    }
    
    //instances of animal
    $animalOne = new Animal ("elephant");
    $animalOne-> this.makeNoise();


//extend a class

  Class Vehicle {
    public $hasWheels = true;
    public function honk (){
    return "HONK HONK!!!";
    }
  }
  
  //this overrides the original public function "honk"
  Class Bicycle extends Vehicle {
  public function honk () {
  return "BEEP BEEP";
  }
  }
  //inherit Vehicle's hasWheels
  $newBicycle = new Bicycle()
  echo $newBicycle->this.$hasWheels


//Using class property without creating an instance through 'static'

Class King {
public static function proclaim() {
return "I am the king of England!";
}
}

King::proclaim();

Class Queen {
$status= "Wealthy";
$human= true;

public statis function proclaim() {

return "I am the Queen of England. Queen Elizabeth I, bow!";
}
}
Queen::proclaim();
echo Queen->this.$status;


