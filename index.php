<!doctype html>
<html lang="en">
    <head>
        <title>LOGIN & REGISTRATION</title>
        <link rel="stylesheet" href="style.css">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@500&display=swap" rel="stylesheet">
         <meta charset="utf-8">
         <meta name = "description" content =" This website shows all visiting places in saharanpur like temples,parks,hotels,restraunts ,malls and marts etc. and provide all the necessary information about them.">
         <meta name="keywords" content="visiting ,Travel ,saharanpur,SRE">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
                
        <div class="hero">
         <div class="xxx" >
             <h1><B><u>WELCOME TO EXPLORESRE!!!</u></B></h1></div>
    <div id="login-form" class="login-page">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button"  onclick="login()" class="toggle-btn"> Log In</button>
            <button type="button" onclick="register()" class="toggle-btn"> Register</button>
        </div>
    <form id="login" action="login_info.php" class="input-group-login" method="post">
    <input type="email" name="email" class="input-field" placeholder="Email Id" autocomplete="off" required>
    <input type="password" name="password" class="input-field" placeholder="Enter Password"  autocomplete="off"  required>
    <div class ="banner-btn">
        <button type="submit"> LOGIN </button>
    </div>
    </form>
    <form id="register" action="registration_info.php" class="input-group-register" method="post">
        <input type="text" name="fullname" class="input-field" placeholder="Full Name"  autocomplete="off"  required>
        <input type="email" name="email" class="input-field" placeholder="Email Id"  autocomplete="off"  required>
        <input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off"   required>
        <input type="password"  name="cpassword" class="input-field" placeholder="Confirm Password"  autocomplete="off"  required>
        <div class ="banner-btn">
        <button type="submit"> REGISTRATION </button>
        </div>
        </form>
    </div>
    </div>
    </div>
    <script>
        var  x = document.getElementById("login");
        var  y = document.getElementById("register");
        var  z = document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";

        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";

        }

    </script>
    <script>
        var modal= document.getElementById('login-form');
        window.onclick=function(event)
        {
            if (event.target==modal)
            {
                modal.style.display="none";
            }
        }
    </script>
    </body>
</html>