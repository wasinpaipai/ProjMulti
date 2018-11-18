<?php
  session_start();
  $username = $_POST['txtUsername'];
  $password = $_POST['txtPassword']
  $strSQL = "SELECT * FROM member WHERE Username = $username
  AND Password = $password";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  if(!$objResult)
  {
      echo "Username and Password Incorrect!";
  }
  else
  {
      $_SESSION["UserID"] = $objResult["UserID"];
      $_SESSION["Status"] = $objResult["Status"];

      session_write_close();
      
      if($objResult["Status"] == "ADMIN")
      {
        header("location:admin_page.php");
      }
      else
      {
        header("location:user_page.php");
      }
  }
  mysql_close();
?>


<?php
  session_start();
  mysql_connect("localhost","","root");
  mysql_select_db("tt");
  $strSQL = "SELECT * FROM employee WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
  AND password = '".mysql_real_escape_string($_POST['password'])."'";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  if(!$objResult)
  {
      echo "Username and Password Incorrect!";
  }
  else
  {
      $_SESSION["id"] = $objResult["id"];
      $_SESSION["username"] = $objResult["username"];

      session_write_close();
      echo "hello";
      echo $_SESSION['id'];
  }
  mysql_close();
?>





















while($row = $result->fetch_assoc()) {
          ?>
            <p>
              ID : <?=$row['id']?>
              <br>
              Username : <?=$row['username']?>
              <br> 
            </p> <input type="hidden" name="id" value="<?=$row['id']?>">
          <?php
      }