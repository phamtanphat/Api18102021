<?php

   require "connect.php";

   $query = "Select * from food";

   $array = [];

   try{
    $data = $con->query($query);
    while($row = mysqli_fetch_assoc($data)){
        array_push($array , new Food(
            $row['id'],
            $row['name'],
            $row['image'],
            $row['short_description'],
            $row['calo'],
            $row['carbo'],
            $row['protein'],
            $row['ingcredient'],
            $row['recipe_preparation'],
            $row['link']
        ));
    }
    echo json_encode($array);
   }catch(Exception $e){

   }
   class Food {

        function __construct($id,$name,$image,$short_description,$calo,$carbo,$protein,$ingcredient,$recipe_preparation,$link){
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->short_description = $short_description;
            $this->calo = $calo;
            $this->carbo = $carbo;
            $this->protein = $protein;
            $this->ingcredient = $ingcredient;
            $this->recipe_preparation = $recipe_preparation;
            $this->link = $link;
        }
   }


?>