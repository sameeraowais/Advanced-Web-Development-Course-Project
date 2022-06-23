<?php
if($dbc = @mysqli_connect ('localhost', 'root', '24682468')) {
  if(!@mysqli_select_db ($dbc, 'php_project')) {
    print ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
  }
} 
else {	
  print ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
}
 ?>
