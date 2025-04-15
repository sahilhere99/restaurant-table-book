<!doctype html>
<html>
  <head>
    <title>learning php</title>
    <style>
      h3{
        margin: 5px;
      }

      .container{
        display: block;
        text-align: center;
        margin-top: 25vh;
      }

      .login{
        font-size: 4vh;
      }
    </style>
</head>
  <body>
    <!-- <h4>This is heading</h4> -->
    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ab eveniet blanditiis quibusdam odio a voluptatum laboriosam ipsa voluptate eligendi quo, magnam similique molestias aperiam repudiandae eum provident culpa quam! Lorem ipsum dolor sit amet consectetur adipisicing elit.  Totam quaerat officia eligendi fugiat iure neque quae hic vero. Corporis optio velit autem rem sunt eaque minima dicta voluptates repudiandae aut.</p> -->

    <form method=post action="learning.php">
      <div class="container">
      <h3>Enter username: </h3>
      <input type="text" name="username" placeholder="name">

      <br>

      <h3>Enter password:</h3>
      <input type="password" name="pass" placeholder="password">

      <br>
      <br>

      <input type="submit" value="submit" name=submitbtn>
      </div>
    </form>
  </body>

  <center style="margin-top: 10vh">
  <?php
      if(isset($_POST['submitbtn']))
      {
        $username=$_POST['username'];
        $password=$_POST['pass'];
      // echo $username;    
      // echo '<br>';
      // echo $password;

      if(strcmp($username,'Sahil Rawat')==0 && strcmp($password,'Sahil@35')==0)
      // echo '<p class="login" style="color: green "> login success. </p>';
        header("location:index.php");
      else
      echo '<p class="login" style="color: red"> Invalid user. </p>';
      }
    ?>
  </center>

</html>