<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style>
  
    #blue_bar{
        height:60px;
        background-color:#405d9b;
        color:#d9dfeb;
    }
    #search_box{
        width:400px;
        height:20px;
        border-radius:5px;
        border: none;
        padding:4px;
        background-image: url(download.png);
        background-repeat: no-repeat;
        background-position: right;
        font-size: medium;

    }
    #profile{
        width:150px;
        border-radius: 50%;
        margin-top: -200px;
        border:solid 3px white;
        }
        #menu_button{
            width:100px;
            display:inline-block;
            margin:2px;
        }
      
        #friends_bar{
            background-color: white;
            min-height: 400px;
            width: 200px;
            margin-top: 20px;
            color: black;
            padding: 8px;
        }
        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;
        }
        
       
    </style>
<body style="background-color: #e9ebee;">
    <br>
    <!--top bar -->
    <div id="blue_bar">
        <div style="width:800px;margin:auto;font-size:30px;">
            INSTAGRAM &nbsp; &nbsp;<input type="text" id="search_box" placeholder="search for people">
            <img src="people.png" style="width:60px;height:60px;float:right;">
        </div><br><br>
        <!-- cover area-->
        <div style="width:800px;margin:auto;min-height:600px;">
            <div style="background-color: white;text-align:center;color:#405d9d;">
            <img src="mountain.png" style="width: 800px"; height="400px";></img>
            <img id="profile" src="profile.png"></img>
            <br>
           <div style="font-size:20px;">Mary Banda</div>
                <div id="menu_button">Timeline</div>
                <div id="menu_button"><a href="About.php">About</a></div> 
                <div id="menu_button">Friends</div>
                <div id="menu_button">Photos</div>
                <div id="menu_button">Settings</div>
            </div><br>
            <!--below cover area -->
            <div style="display:flex;">
                <!--freinds area -->
                <div style="min-height:400px;flex:1; color:black;">
                        <div id="friends_bar">
                                 Friends<br><br>
                            <div id="friends">
                                <img id="friends_img" src="medium.png" style=" width:70px;height: 60px;"><br><br>
                                first user
                           
                            </div> 
                        </div> 
                           
                    <div style="min-height:400px;flex:2.5;">
                        kgh     
                    </div>
                </div>   
            </div>
        </div>
   
</body>
</html>