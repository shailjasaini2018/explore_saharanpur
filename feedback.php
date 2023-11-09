<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>  
    <meta charset ="utf-8">
    <title> Feedback Form</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
<div class="divu">
    
        <form class="feedback-form"  action="feedback_info.php" method="post"> 
            <h1><b>Give Your Feedback </b></h1>
            <div class="txtb">
                <label> Full Name:</label>
                <input type="text" name="fullname" autocomplete="off" required>
        </div>
        <div class="txtb">
            <label>E-mail:</label>
            <input type="email" name="email" autocomplete="off" required>
        </div>
        <div class="txtb">
            <label>Mobile Number:</label>
            <input type="number" name="mobile" autocomplete="off">
        </div>
        <div class="txtb">
            <label>
                Message:
            </label>
            <textarea name="message" rows="5" cols="30" autocomplete="off"></textarea>

        </div>
        <div class ="banner-btn">
        <button type="submit"> SUBMIT </button>
    </div>
        
</form>
    </body>
</html>

