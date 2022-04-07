<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "navigation.php";

    ?>
   

 <form action="../controller/createemployee.php" method="POST" enctype="multipart/form-data">
    <table>
        <fieldset allign="center" style="height: 320px; width: 400px;"> 
            <legend><b><h2>Add Books</h2></b> </legend>
<label for="username">Books:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="phonenumber">Author:</label><br>
  <input type="text" id="phonenumber" name="phonenumber"><br>
  <label for="password">Year:</label><br>
  <input type="date" id="password" name="password"><br>
  <label for="email">Part:</label><br>
  <input type="number" id="text" name="email"><br>


 


  <label for="image">Image :</label><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "addemployee" value="Add">
  <input type="reset">
 
  </fieldset> 
  </table>


</form>
 <?php
require '../color.php';

?> 

</body>
</html>

