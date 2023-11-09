<!DOCTYPE html>
<head>
<title> EXPLORE SRE</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tourney:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta charset="utf-8">
<meta name = "description" content =" This website shows all visiting places in saharanpur like temples,parks,hotels,restraunts ,malls and marts etc. and provide all the necessary information about them.">
<meta name="keywords" content="visiting ,Travel ,saharanpur,SRE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<section class="header">
    <div class="container">
        <img src="Saved Pictures/choti.jpeg">
     </div>
     <div id="local5" class ="banner-text">
        <h1>WELCOME TO SAHARANPUR </h1>
        <BR>
        <p><b>"It is a city and a muncipal corporation in the indian state of uttar pradesh. It is also the admistrative headquaters of saharanpur district."<br>
           <BR>
             # There are 319 villages and 4 Towns<br>
             # Population of Saharanpur in 2020/2021 is <b>3,911,158</b><br>
             # Literate Peoples are 2,077,108 out of 1,220,114 are Male and 856,994 are Female<br>
             # Vehicle-Registration: UP-11<br>
             # Area: 3,860 km<sup>2</sup>(1,490 sq mi)<br>
             # Lok Sabha Constituencies : Saharanpur<br>
             # Vidhan Sabha Contituencies : Gangoh and Nakud.<br>
        </b> </p><br>
        

    </div>
</section>
<div id="sideNav">
    <nav>
        <ul><li><a href="#local3"><b>HOME</b></a></li> 
            <li><a href="#local2"><b>ABOUT US</b></a></li>
            <li><a href="#local1"><b>CONTACT</b></a></li>  
            <li><a href="feedback.php"><b>FEEDBACK</b></a></li>
            <li><a href="index.php"><b> LOGOUT</b></a></li>
        </ul>
    </nav>
</div>
<div id ="menuBtn">
    <img src="Saved Pictures/aww.png"  id="menu">
</div>
<script> 
var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")
sideNav.style.right="-250px";
menuBtn.onclick = function(){
    if( sideNav.style.right=="-220px"){
        sideNav.style.right="0";
        menu.src="Saved Pictures/qs.jpg";
    }
    else{
        sideNav.style.right="-220px";
        menu.src ="Saved Pictures/aww.png";
    
    }
}
</script>
<section id ="local4" class="yyy"> 
    <h1> <B><u>FAMOUS</u> <u> DESTINATION</u></B></h1><br>
    <div class="container">
    <div class="gallery">
        <img src="Saved Pictures/111.jpg">
        <div class="desc">
            <h3>TEMPLES</h3>
            <p>The Bagheshwar temple in saharanpur is the one stop destination for ardent  followers of lord shiva. <br>It is very  beautiful and well developed from inside for<br> those who come from outside the city,<br>this temple is certainly a must visit and <br>It is located near Dhobhi ghat!!! <br><br></p> </div>
    </div>
    <div class="gallery">
        <img src="Saved Pictures/114.jpg">
        <div class="desc">
            <h3>HOTEL AND BARS</h3>
            <p>Royal Residency with its fine ambiance and lush interiors boasts<br> of being one <br>of the finest hotel <br>in saharanpur as well as nearby region.<br>Their aim to provide city of saharanpur <br>service oriented as<br> well as<br> new flavor<br> of hospitality!!!<br><br><br></p> </div>
    </div>

    <div class="gallery">
        <img src="Saved Pictures/115.jpg">
        <div class="desc">
            <h3>PARKS</h3>
            <p>The botanical garden<br> in saharanpur were created <br>by the preserve of the East India company<br> by the British.<br>The garden date back to almost 1750's.<br> This view point in saharanpur is the oldest ones existing.<br> This attraction in saharanpur<br> is worth a visit!!!<br><br></p> </div>
    </div>

    <div class="gallery">
        <img src="Saved Pictures/113.jpg">
        <div class="desc">
            <h3>MALLS AND MARTS</h3>
            <p>A GNG Mall is every shoper's paradise!<br> But the GNG Mall is a large piece<br> of land which<br> comprises <br>of a Pantaloons outlet ,SRS Cinemas, 2-3 local food joins.<br>The rest of the mall is vacant in terms of shopping /Food brands!!! <br><br></p> </div>
    </div>

    <div class="gallery">
        <img src="Saved Pictures/112.jpg">
        <div class="desc">
            <h3>CINEMAS</h3>
            <p> Theatre Advertising<br> in Prabhat Cinema offers <br>a variety of both Onscreen <br>Cinema Advertising & Off-screen<br> Cinema Advertising,<br>Both of which are executed in a highly<br> seamless manner and having a total of 4813 Screens in Prabhat Cinema caters to an Audience of 716+ people per show!!! </p> </div>
    </div>
    <div class="gallery">
        <img src="Saved Pictures/120.jpg">
        <div class="desc">
            <h3>RESTAURANTS</h3>
            <p>This is one of the reowned restraunt in saharanpur.<br>Aura Restraunt at Avas Vikas Colony <br>makes sure one has a great food experience by offering highly palatable food. The Restraunt welcomes guests from 9:00- 23:00 allowing dinners to relish a scrumptious meal between the functional hours!!!</p> </div>
    </div>
    </div>
</section><hr>
<section id="local3" class="yyy"> 
    <h1> <B><u>TRAVEL</u><u> GALLERY</u><B></h1><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="temple.php" class="btn"><b>TEMPLES!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="hotel.php" class="btn"><b>HOTEL AND BARS!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="parks.php" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;<b>PARKS!</b>&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mallandmarts.php" class="btn"><b>MALLS AND MARTS!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cinema.php" class="btn"><b>CINEMAS!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="restaurant.php" class="btn"><b>RESTAURANTS!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</section>
<section class="banner">
<div class="banner-highlights">
    <div class="ss">
        <div class="row">
            <div class="col-md-8">
                <h2><u>"HISTORY OF SAHARANPUR"</u></h2>
                <p>Saharanpur is a Northwestern city of Uttar Pradesh and It was found about 1340 with a name of muslim saint "Shah Haran Chishti. The city's industries include railway workshops,cotton and sugar processiong,papermaking and other manufactures.Saharanpur also has an active trade in agricultural produce.Principal crops of the surrounding region are grains, cotton, and sugarcanes.Rajaji National Park in uttarakhand is about 40 km east of Saharanpur.</p>
            </div>
        </div>
    </div>
</div>
</section>
<section id="local2" class="developers">
    <h1><b><u>DEVELOPED</u><u> BY</u><b></h1><br>
    <div class="np">
        <div class="row">
            <div class="col-md-4">
                <div class="user-review">
                    <p>"The Main Motive Behind this Website Is To Find The Best Places In SRE."</p>
                    <h5>-SHAILJA SAINI</h5>
                </div>
                <img src="Saved Pictures/34.jpg">
            </div>
            <div class="col-md-4">
                <div class="user-review">
                    <p>"To Spread Awareness About Beauty And Historical Significance."</p>
                    <h5>-NEELAM PANWAR</h5>
                </div>
                <img src="Saved Pictures/33.jpg">
            </div>
            <div class="col-md-4">
                <div class="user-review">
                    <p>"To Provide Customized And Benefical Information About SRE."</p>
                    <h5>-SAKSHI SINGH</h5>
                </div>
                <img src="Saved Pictures/31.jpg">
            </div>
            <div class="col-md-4">
                <div class="user-review">
                    <p>"It Provides Complete Information About All Famous Places In SRE."</p>
                    <h5>-SURBHI SINGH</h5>
                </div>
                <img src="Saved Pictures/32.jpg">
            </div>
            <div class="col-md-4">
                <div class="user-review">
                    <p>"It Saves The Times To Search Places From Different Websites."</p>
                    <h5>-MEHVISH</h5>
                </div>
                <img src="Saved Pictures/15.jpg">
            </div>
        </div>
    </div>
</section>
<div id="local1" class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h1 class="logo-text"><img src="Saved Pictures/choti.jpeg"></h1>
            <p>"The Agenda Behind This Website Is To Provide Complete Information About All Visiting Places Present In Saharanpur".</p><br>
            <div class="contact">
                <span><i class="fas fa-envelope"></i> &nbsp;exploresre@gmail.com</span>
            </div>
            <div class="socials">
                <a href="https://www.facebook.com/Exploresre_-111020811229457/offers/?ref=page_internal"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/exploresre_/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-section links">
            <h2> Quick Links</h2>
            <br>
            <ul>
                <a href="#local5"><li>Home</li></a>
                <a href="#local4"><li>Famous Destinations</li></a>
                <a href="#local3"><li>Travel Gallery</li></a>
                <a href="#local2"><li>Developers</li></a>
                <a href="feedback.php"><li>Feedback Form</li></a>
            </ul>
        </div>
        <div class="footer-section contact-form">
            <h2>Contact us</h2>
            <br>
            <form action ="contact_info.php" method="post">
                <input type="email" name="email" size="50" class="text-input contact-input" placeholder="Your email address...." autocomplete="off" required>
                <textarea name="message" class="text-input contact-input" placeholder="Your message...." autocomplete="off" required></textarea>
                <button type="submit" class="btn btn-big contact-btn">
                    <i class="fas fa-envelope"></i>
                    Send
                </button>
            </form>
        </div>
    </div>
        <div class="footer-bottom">
            &copy;exploresre.com | Designed by our team
    </div>
</div>
</body>
</html>