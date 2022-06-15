<?php
     $errname = $erremail = $errnumber = $errwebsite = "";
     $name = $email = $number = $website = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){

          if(empty($_POST["name"])){
            $errname = " <span style = color:red> Name is required. </span>";
          }  
          else{
            $name = validate ($_POST["name"]);
          }

          if(empty($_POST["email"])){
            $erremail = " <span style = color:red> Email is required. </span>";
          }  
          else{
            $email = validate ($_POST["email"]);
          }

          if(empty($_POST["number"])){
            $errnumber = " <span style = color:red> Phone-number is required. </span>";
          }  
          else{
            $number = validate ($_POST["number"]);
          }
           

          if(empty($_POST["website"])){
            $errwebsite = " ";
          }  
          else{
            $website = validate ($_POST["website"]);
          }
                     
            
        }
        function validate($data) {
            $data = trim($data);
            $data = stripcslashes ($data);
            $data = htmlspecialchars ($data);
            return $data;
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        body{
            border: 1px solid black;
            width: 600px;
            height: 400px;
            margin-left:450px;
            margin-top:150px;
            padding-left:90px ;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
        <table id="table">
            <p style="color : red">* Required field</p>
            <h3>Registration form</h3>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="name"> <span style = color:red> * </span> <?php echo $errname; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"> <span style = color:red> * </span> <?php echo $erremail; ?></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="number"> <span style = color:red> * </span> <?php echo $errnumber; ?></td>
            </tr>
            <tr>
                <td>Website:</td>
                <td><input type="text" name="website">  <?php echo $errwebsite; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>     
        </table>
    </form>
<?php

        echo "<br/> <br/> Username: ".$name."<br/>";
        echo "Email: ".$email."<br/>";
        echo "Number: ".$number."<br/>";
        echo "Website: ".$website;
?>
</body>
</html>
