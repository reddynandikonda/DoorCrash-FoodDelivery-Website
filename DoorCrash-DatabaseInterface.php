<?php

  //Credentials to connect the data base connection
  $host = "localhost";
  $user = "root";
  $password = "password";
  $database = "dbfooditems";
  //connecting database connection
  $cxn = mysqli_connect($host, $user, $password, $database);

   //Starting switch case with request as it parameter taken from .php or .html pages
   switch ($_GET["request"])
   {
		
	  //Update case
    case "update":
    // retrieveing data from order.html page
    $quantity = $_GET['quantity'];
    $order = $_GET['order'];
    $id= $_GET['id'];
    //Query to update the database table.
    $sql1 = "UPDATE tbFoodItems SET QuantitySold='" . $quantity .  "', OrdersSold='" . $order . "' WHERE FoodItemID='" . $id ."';";
    echo $sql1;
    //Executing the query
    $result1 = mysqli_query($cxn, $sql1);


    //checking whether the query is executed or not
    if($result1 == false)
      echo "Update operation FAILED.";
    else
      echo "Updated Successfully";
    
    break;
    	
	  //List Case
	  case "list":

      //Query to retrieve data  from the database tables
      $sql = "SELECT * FROM tbFoodItems;";
      $result = mysqli_query($cxn, $sql);
      
      //checking for the query to be executed or not
      if($result == false)
        echo "List operation FAILED.";
      else
      {
        //declaring an array to store the result for the select query
        $FooddataArray = array();
        //Storing result values in the Aood Data array
        while($row = mysqli_fetch_row($result))
        {
            $FooddataArray[] = $row;
        }
        //En-coding the Array data to json
        $en = json_encode($FooddataArray);
        //sending the encoded json data
        echo $en;
        
                  
      }
      break;
    
    //default when no request is received by the server
    default:
      //displaying error message
      echo "Error: unknown database request.";
	
        
  }
  
  ?>