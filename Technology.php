<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORLD OF KNOWLADGE</title>
    <link rel="icon" type="image/png" href="img/LOGO.png">
    <link type="text/css" rel="stylesheet" href="css/Home.css">

    <link type="text/css" rel="stylesheet" href="flexslider.css">
    <script type="text/javascript" src="JQuery (1).min.js"></script>
    <script type="text/javascript" src="jquery.flexslider.js"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        .glyphicon-search {
            font-size: 17px;
        }
        
		.glyphicon-search:before {
    content: "";
}
        .btn-default {
            background: orange;
            width: auto;
			height: auto;
            padding: 0px;
        }
        
        .form-control {
            padding: 5px;
            font-size: 13px;
			width: 150px;
			float:left;
        }
        
        .btno {
		     top: 14px;
            font-family: arial;
            text-transform: uppercase;
            width: 90px;
            height: 30px;
            border-radius: 80px;
            line-height: 24px;
            text-align: center;
            border: 3px solid #009688;
            display: block;
            text-decoration: none;
			color:black;
            position: relative;
            overflow: hidden;
            background: transparent;
            transition: .8xs;
			padding:2px; 
			font-size:14px; 		  
			font: bold;
        }
		 p{
	text-align:justify; 
 }
		
    </style>
</head>

<body>
    <div id="MainDiv">
        <div id="MainHeader">
            <div id="HeaderLogo">
                <div id="LogoWork">
                    <img src="img/LOGO.png" style=" float: left; height: 100px;
            width: 260px;" />
                </div>
               <div id="LogoSideWork" style="width: 600px; height: 110px;float: left;">
                   <div id="LogoSideWorkPart_one" style="width: 300px; height: 110px;float: left;">                 
				   <h1 style="margin:15px;"> <form>
                        <div class="input-group" style="  margin: 10px; float: left;">
                            <div class="searchBox" style=" float: left;">
							<input type="text" class="form-control" placeholder="Search" name="search" style="width: 200px; ">
                              </div>
						   <div class="input-group-btn" style=" float: left; margin: 0px 4px;">
                                <button class="btn btn-default" type="submit" style="height: 30px; 
								    width: 40px; background-color: lightblue;">
                                    
									<i class="glyphicon glyphicon-search"><img src="img/Search24.png" /></i>
                                    
								</button>
                            </div>
                        </div>
                    </form></h1></div>
					<div id="LogoSideWorkPart_two" style="width: 300px; height: 110px;float: left;">
                    <div id="login" style="margin: 10px; float: right;"> 
					      <a href="Post.php" class="btno" style="float: left; background-color:red;
						     margin: 0px 10px">Post</a>
					<a href="logout.php" 
					class="btno" style="float: left; margin: 0px 10px">Log Out</a>

                    </div>
                </div>
                </div>
            </div>
            <div id="HeaderMenu">
                <ul>

                    <li style="border-radius:10px 0px 0px  10px;">
                       <a href="HomeLogin.php" style="border-radius:10px 0px 0px  10px;">Home</a>
                    </li>

                    <li>
                        <a href="Technology.php"> Technology</a>
                        <ul>
                            <li>
                                <a href="Computer.php">Computer</a>
                            </li>
                            <li><a href="Electronics.php">Electronics</a></li>
                            <li><a href="Science.php">Science</a>
                           </li>


                        </ul>


                    </li>

                    <li>
                        <a href="Geography.php">Geography</a>
                        <ul>
                            <li>
                                <a href="Planet.php">Planet</a></li>
                           
                            <li>
                                <a href="Earth.php">Earth</a></li>
                            
                            <li>
                                <a href="Evolution.php">Evolution </a></li>


                        </ul>

                    </li>
                    <li>
                        <a href="Tourist Place.php">Tourist Place</a>
                        <ul>
                            <li>
                                <a href="Bangladesh.php">Bangladesh </a></li>
                            <li>
                                <a href="India.php">India </a></li>


                        </ul>

                    </li>
                    <li>
                        <a href="Education.php">Education</a>
                        <ul>
                            <li>
                                <a href="Education System.php">Educa. System</a></li>
 </ul>

                    </li>
                    <li>
                        <a href="UNESCO.php">UNESCO</a>
                        <ul>
                            <li>
                                <a href="Heart Country.php">Heart Country</a></li>
                          


                        </ul>


                    </li>
                    <li>
                        <a href="Sports.php">Sports</a>
                        <ul>
                            <li>
                                <a href="Cricket.php"> Cricket</a></li>
                            <li>
                                <a href="Football.php">Football</a></li>


                        </ul>

                    </li>

                    <li style="border-radius: 0px 10px 10px  0px;">
                        <a href="Contact US.php" style="border-radius: 0px 10px 10px  0px;">Contact US</a>


                    </li>
                </ul>
            </div>
        </div>
        <div id="MainBody">
            
            <div id="BodyMain">
                
				<center> <img src="img/TECNOLOGY.png" style="height: 90px;
            width: 300px;  " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Technology'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /> </center>";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			
			
			
			
			<div id='sideber1'>

                        <p style="color: blue;"
> 22 Dec 2017: </p><p style="font-size: 20px; font-weight: bold;">Apple Is Developing an EKG Heart Monitor
for Its Smartwatch</p><p style="font-size: 16px;">By Alex Webb.......<a href="https://medium.com/bloomberg/apple-is-developing-an-ekg-heart-monitor-for-its-smartwatch-b6fe1c4bb9dd"
>see more</a>
</p> 
<p style="color: blue;">15 November 2017</p><p style="font-size: 20px; font-weight: bold;">Biohackers are using CRISPR on their
DNA and we can’t stop it :</p><p style="font-size: 16px;">People are starting to alter their own 
DNA with cheap, easy gene-editing technology.
Is it time to regulate CRISPR?.....<a href="">see more</a></p>
                       <p style="color: blue;">17 November 2017: </p><p style="font-size: 20px; font-weight: bold;">Blue tits divorce their 
partners if they turn up 
late to mate :</p><p style="font-size: 16px;">Blue tits were 5 times less likely to
stay faithful if one partner had to wait 
more than 3 days for the other to
 arrive...<a href="">see more</a></p>
                        
                    
                    
                        
						<p style="color: blue;">TECHNOLOGY 17 November 2017: </p><p style="font-size: 20px; font-weight: bold;">Rocket-powered Land Rovers cansurvive
deadly roadside bombs :</p><p style="font-size: 16px;">Firing 50 solid rocket fuel motors within 10 
milliseconds of an IED blast temporarily makes
the vehicle weigh 120 tons, freezing it in 
placeand protecting everyone inside....<a href="">see more</a>
</p>
          <img src="img/er3.jpg" style="height: 200px;
            width: 300px;" />
                        			
<p style="color: blue;"> 17 November 2017:</p><p style="font-size: 20px; font-weight: bold;">Why setting ‘safe’ limits for 
environmental damage won’t work :</p><p style="font-size: 16px;">The boundaries set for human impacts on 
the planet are deeply flawed and only
encourage us to keep pushing towards 
them, warns Stuart Pimm .....<a href="">see more</a></p><p style="color: blue;"> 17 November 2017: </p><p style="font-size: 20px; font-weight: bold;">Common condition endomet-riosis 
reprograms brain for depression :</p><p style="font-size: 16px;"> Endometriosis causes symptoms of mental health 
problems in mice, and the one in ten women
who have the condition are more likely 
to have depression or anxiety... <a href="">see more</a></p>
                        <p style="color: blue;">TECHNOLOGY 17 November 2017: </p><p style="font-size: 20px; font-weight: bold;">Watch humanoid Boston Dynamics robot
do box jumps and back flips :</p><p style="font-size: 16px;">Endometriosis causes symptoms of mental health 
problems in mice, and the one in ten women
who have the condition are more likely 
to have depression or anxiety...<a href="">see more</a>
                    </p>

                    </div>
                </div>

</div>


       
        <div id="BodySection">
            <p>Global Warming (National Geographic)</p>
            <video width="265px" height="220PX" controls>
                <source src="video/Global Warming .mp4" type="video/mp4">
            </video>
            <p>EducationSystem</p>
            <video width="265px" height="220PX" controls>
                <source src="video/EducationSystem.mp4" type="video/mp4">
            </video>
            <p>Latest news technology</p>
            <video width="265px" height="220PX" controls>
                <source src="video/Latest news technology.mp4" type="video/mp4">
            </video>
            <p>BSC Electronics Technology</p>
            <video width="265px" height="220PX" controls>
                <source src="video/BSC Electronics Technology.mp4" type="video/mp4">
            </video>
           <!-- <p>3 WORLD WAR IN 3 MIN</p>
            <video width="265px" height="220PX" controls>
                <source src="video/3 WORLD WAR IN 3 MIN.mp4" type="video/mp4">
            </video>
            <p>Sports Science- Baseball Vs. Cricket</p>
            <video width="265px" height="220PX" controls>
                <source src="video/Sports Science-  Baseball Vs. Cricket.mp4" type="video/mp4">
            </video> -->

        </div>

  
    <div id="MainFooter" style="background-image:url('img/almFooter2.png'); background-repeat:repeat-x;">
        <div id="footerHeader" style="">
            <table border="0" cellspacing="15" width="auto">
                <tr>
                    <td style="width: 500px;">
                        <img src="img/LOGO.png" style="height: 100px; width: 300px;" />
                    </td>
                    <td style="
    width: 750px; 
">
                        <ul style="width: 250px;">
                            <li style="padding-right: 40px;">
                                <a href=""><img src="img/j.png" style="height: 25px;
            width: 25px;" /> </a>
                            </li>
                            <li style="padding-right: 40px;">
                                <a href=""><img src="img/google.jpg" style="height: 25px;
            width: 25px;" /> </a>
                            </li>
                            <li style="padding-right: 40px;">
                                <a href=""> <img src="img/Instrogram.png" style="height: 25px;
            width: 25px;" /></a>
                            </li>
                            <li style="padding-right: 40px;">
                                <a href=""> <img src="img/twter.png" style="height: 25px;
            width: 25px;" /> </a>
                            </li>
                            <li style="padding-right: 40px;">
                                <a href=""><img src="img/youtube.png" style="height: 25px;
            width: 25px;" /></a>
                            </li>
                            <li style="padding-right: 40px;">
                                <a href=""><img src="img/whats app.png" style="height: 25px;
            width: 25px;" /></a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        <div id="footerBoby">
            <table border="0" cellspacing="15" style="
    width: auto;
	height: auto;

">
                    <tr>

                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 140px;">
                        <li><a href="HomeLogin.php">Home</a>
                                </li>
                                <li><a href="Technology.php">Technology</a>
                                </li>
                                <li> <a href="Computer.php">Computer</a>
                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 10px;">
                                <li> <a href="Geography.php">Geography</a>
                                </li>
                                <li> <a href="Evolution.php">Evolution</a>
                                </li>
                                <li> <a href="Bangladesh.php">Bangladesh</a>

                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 10px;">
                                <li> <a href="Tourist Place.php">Tourist Place</a>
                                </li>
                                <li> <a href="Sports.php">Sports</a>
                                </li>
                                <li> <a href="Cricket.php">Cricket</a>
                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 30px;">
                                <li> <a href="UNESCO.php">UNESCO</a>
                                </li>
                                <li> <a href="Education.php">Education</a>
                                </li>
                                <li> <a href="Contact US.php">Contact US</a>

                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            copyright : RainbowGroup,,... abdullahmamun108187@gmail.com
        </div>

    </div>
    </div>
</body>

</html>