<?php 

//user_action.php

include('../php/database.php'); //include database details



if(isset($_POST["crud_action"]))
{
 if($_POST["crud_action"] == 'fetch_all')
 {
  $query = '';
  
  $output = array();
     
  $order_column = array('name','icNo','houseNo','road','sex','typeofresidences','phoneNo','email');


  $query .= "
   SELECT * FROM resident 
  ";

     
     //if user key into search bar
  if(isset($_POST["search"]["value"]))
  {

   $query .= 'WHERE houseNo LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR icNo LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR road LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR name LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR sex LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR typeofresidences LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR phoneNo LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR email LIKE "%'.$_POST["search"]["value"].'%" ';
  
  }

  if(isset($_POST["order"]))
  {
   $query .= 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
  }
  else
  {
   $query .= 'ORDER BY road DESC ';
  }


  if($_POST["length"] != -1)
  {
   $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
  }


  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

  $filtered_rows = $statement->rowCount();

  foreach($result as $row)
  {
         
   $sub_array = array(); //initial
   $sub_array[] = $row['name'];
    $sub_array[] = $row['icNo'];
   $sub_array[] = $row['houseNo'];
   $sub_array[] = $row['road'];
   $sub_array[] = $row['sex'];
   $sub_array[] = $row['typeofresidences'];
   $sub_array[] = $row['phoneNo'];
   $sub_array[] = $row['email'];
   $output[] = $sub_array;
  }

  $data = array(
   "draw"    => intval($_POST["draw"]),
   "recordsTotal"  => $filtered_rows,
   "recordsFiltered" => $filtered_rows,
   "data"    => $output
  );
 }

 else
 {
  $message = '';

    $query = '
   SELECT * FROM resident where id= $_POST["id"]
  ';

   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
  
   if(isset($result))
   {
    $data = array(
     'error'   => "error",
     'message'  => $message
    );
   }
  
  else
  {
   $data = array(
    'error'   => "error",
    'message'  => $message
   );
   
  }
    
 }

 echo json_encode($data);
}

?>
