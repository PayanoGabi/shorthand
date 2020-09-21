<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
 // The contents below demonstrate how we can create variables using PHP. Also note the importance of heirachy. PHP reads from top to bottom. You can change the value of a variable lower in the syntax and it will change from the point where you changed it
    $charName = "Bob";
    $appliance = "microwave";
    $appliance = "boobs";
    echo "Is the $appliance running? - said $charName <br>";
    echo "Yes - said Jerry <br>";
    echo "Then you better go catch it - said Bob";
     ?>
    <!-- In this section below we are starting to look at how PHP can handle forms -->
     <form action="site.php" method="get">
       Name : <input type="text" name="name">
       <br>
       Age: <input type="number" name="age">
       <input type="submit">
     </form>

     My name is  <?php echo $_GET["name"]?>
     and I am <?php echo $_GET["age"]?>


     <form class="" action="site.php" method="get">
       <input type="number" name="num1">
       <br>
       <input type="number" name="num2">
       <input type="submit">
     </form>

     Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    <br>

    <form class="" action="site.php" method="get">
      location: <input type"text" name="location"> <br>
      noun: <input type="text" name="noun"><br>
      action: <input type="text" name="action"><br>
      <input type="submit">
    </form>

     <?php
     $noun = $_GET["noun"];
     $action = $_GET["action"];
     $location = $_GET["location"];
     echo "When the $noun in the $location ma <br>";
     echo " $action it like it's hot,<br> $action it like it's hot <br> $action it like it's hot <br>";
     echo "When the pigs try to give it to you <br>";
     echo "park it like it's hot, park it like it' hot, park it like it' hot";
      ?>

      <form class="" action="site.php" method="get">
        location: <input type"text" name="location"> <br>
        noun: <input type="text" name="noun"><br>
        action: <input type="text" name="action"><br>
        <input type="submit">
      </form>
<!-- Post method is more secure, and helps prevent exposing important URL parameters -->
      <form class="" action="site.php" method="post">
        Password: <input type"text" name="password">
       <br>
        <input type="submit">
      </form>

      <?php
      echo $_POST["password"];
       ?>

<!-- Below we have a sample of how we would create and modify an array in PHP by using a variable-->
       <?php
       $friends = array("Jensin", 1, false, "Cristina", "Morgan", "Evan");
       $friends[3] = "James Bond";
       $friends[4] = "Sean Paul";
       echo $friends[3];
       echo $friends[4];
       echo count($friends);
        ?>
        <!--  -->

        <form class="" action="site.php" method="post">
         Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
         Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
         Kiwi: <input type="checkbox" name="fruits[]" value="kiwi"><br>
          <input type="submit">
        </form> <br>

        <!-- gets stored in fruits variable -->
        <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];
         ?>
         <br>

         <form action="site.php" method="post">
           <input type="text" name= "student">
           <input type= "submit">
         </form>

        <!-- associative arrays store key value pairs-->
        <!-- Keys must be unique, value's do not -->
         <?php
         $grades = array("Jim"=>"A+", "Pam"=>"B+", "Oscar"=>"D+");
         // allows us to access data from the associative array and display it to the interface
         echo $grades[$_POST["student"]];
         // allows us to see the key value for the student
         echo $grades["Oscar"];
         // allos us to see how many indexes are in the array
         echo count($grades);
          ?>
          <br>
          <br>

          <!-- functions -->
<!-- Get input from the user through a form assigned to the name "FirstName" which prompts the user to enter their first name. Function $fname uses the entered info from the user and displays the it in a string to greet the user. -->
          <?php
          function sayHi(){
            echo("hello user");
          }
          sayHi();
           ?>
           <br>

          <form action="site.php" method="get">
            First Name:<input type="text" name="FirstName">
            <input type= "submit">
          </form>

          <?php

          function helloUser(){
            $fname = $_GET["FirstName"];
            echo("hello $fname");
          }
          helloUser();
           ?>
           <br>
<!-- Return Statements -->
           <?php
           function cube ($num){
             return $num * $num * $num;
           }

           $cubeResult = cube(4);
           echo $cubeResult;

            ?>
            <br>
<!-- samething just shorthand -->
            <?php
            function cube2 ($num){
              return $num * $num * $num;
            }

            echo cube2(4);
             ?>
             <br>

             <!-- If statements -->
             <!-- Checking conditions -->
             I wake up
             If I'm hugry
                I eat breakfast

             I look at my phone
             If it's about to device
                I charge it

             I leave my house
             If it's cloudy
                I bring an umbrella
              Otherwise
                I bring sunglasses

                <br>
                <?php
                $isFemale = false;
                // passing in condition
                if ($isFemale){
                  echo "Hey girl hey";
                 } else {
                    echo "hey man!";
                  }
                 ?>
                 <br>

                 <form class="" action="site.php" method="get">
                   Chhecked True:<input type="checkbox" name="checkedTrue">
                   False:<input type="checkbox" name="checkedFalse">
                   <input type= "submit">
                 </form>

                 <?php
                 $yesNO = false;
                 



                  ?>












  </body>
</html>
