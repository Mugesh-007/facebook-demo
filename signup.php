<?php
     
    include("database.php");


   if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re_password'])){
        
            
            $firstname = $_POST['fname'];
            $lastname =  $_POST['lname'];
            $email = $_POST['email'];
            $password =$_POST['password'];
            $repass =$_POST['re_password'];

            $sql = "INSERT INTO `signup` (`fname`, `lname`, `email`, `password`, `re_password`)
 VALUES ('$firstname', '$lastname', '$email', '$password', '$repass')";


        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
            header("location: profile.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

   }else{

    echo "the field is required";
   }
//    if()


   


 

    // mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACEBOOK | signup </title>
</head>
<style>
/* #bar{
    height:100px;
    background:#3c5a99;
    color:whitesmoke;
    padding:4px;

    
    } */
#sign{
     color: black; 
     font-family: Arial, Helvetica, sans-serif;
     text-align: left;
     line-height: 38px;
     font-size: 32px;
     margin-top: -35px;
     }
#signup_button{
    font-family: Arial;
   width:50px;
    background:green;
    color:white;
    text-align:center;
    padding:4px;
    border-radius:4px;
    float:right;
}
#login-bar{
    background-color: white;
    width:500px;
    height: 400px;
    margin:auto;
    margin-top:50px;
    padding: 10px;
    padding-top: 50px;
    text-align:center;

}
#text{
    height: 37px;
    width: 200px;
    border-radius:5px;
    padding: 4px;
    font-size:14px;
    background-color:#EBEBEB;
    border-color:darkgray;
    
}
#tex{
    height: 37px;
    width: 410px;
    border-radius:5px;
    padding: 4px;
    font-size:14px;
    background-color:#EBEBEB;
    border-color:darkgray;
    

}
#day{
    height: 37px;
    width: 125px;
    border-radius:5px;
    padding: 4px;
    font-size:14px;
    /* background-color:#EBEBEB; */
    border-color:darkgray;
    position: static;
    margin-left: -280px;
    
}
#button
{
    height:30px;
    width:200px;
    background-color:#3c5a99; 
    border-radius: 4px;
    font-weight: bold;
    font-family: Arial;
    border: none;
    color: white;
}
#line{
    align-items: center;
    border-bottom: 2px solid #C0C0C0;
    display: flex;
    
    text-align: center;
}

</style>
<body style="background-color:#e9ebee;">
    <div id="bar">
        
        <!-- <div id="signup_button">Login</div> -->
    </div>

    <div id="login-bar">
    <div id="sign"><b>Sign Up</b>
        <div style="font-size:15px; color:#606770;">it's quick and easy</div>
    </div>
    <div id="line"></div><br>
        <form action="signup" method="post">
            <input type="text" id="text" name="firstname" placeholder="First name">&nbsp;
            <input type="text" id="text" name="surname" placeholder="surname"><br><br>
            <input type="text" id="tex" name="mobile" placeholder="mobile number or phone number"><br><br>
            <input type="text" id="tex" name="new" placeholder="New password">
        </form>
        <div>
            <form>
            <div style="text-align: center; position: static; top: 10px; margin-right: 318px;color:#636363;">
    Date of Birth:</div>
                <select id="day" name="days">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
                <select id="day" name="days">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
                <select id="day" name="days">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </form>
        </div>

    </div>

</body>
</html>

