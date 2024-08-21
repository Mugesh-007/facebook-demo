<?php 

    include('database.php');

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

       $sql = "SELECT * FROM `signup` where `email` = '$email'";

       
             if($result = mysqli_query($conn,$sql)){

                $data = mysqli_fetch_assoc($result);
                if($password == $data['password']){
                  
                header("location: profile.php");

                }else{
                    echo "username or password incorrect";
                }

        
         }else{

            throw new Exception("error:" . mysqli_error($conn));
            
         }
     }
     ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACEBOOK | login  </title>
</head>
 <style>
/* #bar{
    height:100px;
    background:#3c5a99;
    color:whitesmoke;
    padding:4px;
    
    } */
/* #signup_button{
    font-family: Arial;
   width:50px;
    background:green;
    color:white;
    text-align:center;
    padding:4px;
    border-radius:4px;
    float:right;
} */
#login-bar{
    background-color: white;
    width:350px;
    height: 320px;
    margin:auto;
    /* margin-top:30px; */
    padding: 10px;
    /* padding-top: 50px; */
    text-align:center;
    border-radius: 5%;

}
#text{
    
    height:40px;
    width: 330px;
    border-radius:6px;
    padding: 4px;
    font-size:17px;
    background: transparent;
    border-radius: 6px;     
    
}
#button
{
    line-height:40px;
    width: 332px;
    background-color:#0866ff; 
    border-radius: 6px;
    display: inline-block;
    border: none;
    color: white;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    padding:4px;
    
    
}
 #facebook{ 
    text-align: center;
   
    
} 

  #facebook img{  
   
    margin-top: -100px;
    margin: auto;
    height: 100px;
    width: 200px;
    
}   
#forgot{
    color: #0866ff;
    font-family: Arial, Helvetica, sans-serif;
}
#line{
    align-items: center;
    border-bottom: 2px solid #dadde1;
    display: flex;
    margin: 20px 16px;
    text-align: center;
}

#create{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #42b724;
    border-radius: 4px;
    font-size: 20px;
    line-height:40px;
    width: 200px;
  
    color: #dadde1;
    font-size: medium;
}

</style>
<body style="background-color:#e9ebee;">
    
    <div id="facebook">
        <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" >
        <!-- FACEBOOK -->
    </div>
    <div id="login-bar">
        
            <form action="login.php" method="post">
                <input type="email" id="text" name="email" placeholder="Enter email or Phone number"><br><br>
                <input type="password" id="text" name="password" placeholder="password"><br><br>
                <input type="submit" id="button" name="Login" value="Log in" >
                
            </form>
        <div id="forgot"><br>Forgotten password?
            <div id="line"></div>
               <a href="signup.php">create new account</a>
        </div>
        
    </div>
    </div>
</body>
</html>




