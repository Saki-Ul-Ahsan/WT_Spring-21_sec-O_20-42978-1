
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "navigation.php";

?>
   
    <form method="post" action="../controller/findemployee.php">
      <h2>Search Employee </h2>
      <input type="text" name="Books" />
      <input type="submit" name="findemployee" value="Search"/>
    </form>

 <?php
require '../color.php';

?> 
 
  </body>
</html>