<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
  <form method="post" action="../controller/loginCheck.php">
      <center>
    <table border="1" width="500px">
      <tr>
            <td>
                <table width="500px">
                    <tr>
            <td align="Left">
                <h3><b>Login</b></h3>
            </td>

            <td align="Right">
                <a href="../index.php">Home</a> |
                <a href="Login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>

        
        <tr>
            <td colspan="2">
      <fieldset>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
                
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
          
                <tr>
                    <td>
                        <input type="checkbox" name="remember me" value=""> Remember Me
          </td>
                </tr>

        <tr>
          <td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forgot Password?</td>
                </tr>
      </table>
            </fieldset>
            </td>
        </tr>

        <tr>
            <td colspan="2">

            </td>
        </tr>
    </table>
    </center>
    
  </form>
</body>
</html>