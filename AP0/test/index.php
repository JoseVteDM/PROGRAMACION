<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>free website template - templatemo.com</title>
<meta name="keywords" content="free templates, website templates, CSS, HTML" />
<meta name="description" content="free website template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="bmi2.js"></script>
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
        <div id="site_title">
            <a href="http://www.templatemo.com" target="_parent"><img src="images/templatemo_logo.png" alt="logo" /><span>YOUR TAGLINE GOES HERE</span></a>
        </div> <!-- end of site_title -->
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="http://www.templatemo.com" target="_parent" class="current">Home</a></li>
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Templates</a></li>
              <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li class="last"><a href="#">Contact</a></li>
            </ul>    	
	    </div> <!-- end of templatemo_menu -->
    
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	
        <div id="templatemo_content">
			
            <div class="content_box">
            	<h1>Welcome to Fruit Site</h1>
                <p class="welcome_text"><a href="http://www.templatemo.com/page/1" target="_parent">Free CSS Templates</a> are provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> for anyone to use in any website. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat aliquet risus, a ornare orci scelerisque et. Praesent ac arcu sapien. Maecenas a tortor tellus.</p>
          </div>
            
            <div class="content_box">
				<h2>Pellentesque lobortis boas</h2>
                <div class="image_wrapper image_fr"><span></span><img src="images/templatemo_image_02.png" alt="image 2" /></div>
                <p>Nulla facilisi. Fusce fermentum arcu ut orc oate sfmentum interdum <a href="#">tmalesuada</a> dolor sod raese ant.</p>		
                <p>Nam ut ipsum et urna consectetur com liquan fors non urna vitae ante <a href="#">dignissim</a>.</p>
          </div>
            
          <div class="content_box">
           	<h2>Vestibulum arcu augue</h2>
                <div class="image_wrapper image_fr"><span></span><img src="images/templatemo_image_01.png" alt="image 1" /></div>
                <p>Pellentesque lobortis bibendum tortor sit amet ant pellentesque. Nulla facilisi. <a href="#">Fusce ferme</a> ntarc fort condimentum interdum malesuada dolor soda am.</p>
                <p>Praesent consectetur gravida mauris ut cursu son Nam ut ipsum et urna consectetur <a href="#">commodo</a>.</p>
            <div class="cleaner"></div>
          </div>
            
            <div class="content_box cb_last">
            	<h2>STAFF</h2>
                <ul id="cool_link_list">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "daw";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, name, email FROM staff";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a href='mailto:" . $row["email"]. "'>" . $row["name"]. "</a></li>";
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>
                </ul>
                <div class="cleaner"></div>
        	</div>
        </div> <!-- end of content -->
        
        <div id="templatemo_sidebar">
        
        	<div class="sidebar_box_woframe">
        	    <a href="#" class="icon_link"><img src="images/email.png" alt="contact" /></a>
                <a href="#" class="icon_link"><img src="images/rss.png" alt="contact" /></a>
                <a href="#" class="icon_link"><img src="images/twitter.png" alt="contact" /></a>
                <div class="cleaner"></div>
			</div>
            
            
            <div class="sidebar_box"><div class="sidebar_box_top"></div>
            	
                <div class="sidebar_box_content">
                    <h3>Popular Posts</h3>
                    <ul id="popular_post_box">
                        <li>
                            <span class="date">25 Dec 2024</span>
                            <span class="title"><a href="#">Pellentesque lobortis</a></span>
                            bibendum toror sit amet pellentesque. Nulla facilis us fermentum arcu.
                         </li>
                         <li>
                            <span class="date">18 Dec 2024</span>
                            <span class="title"><a href="#">Fusce fermentum arcu</a></span>
                            Dut orci condim ntum interdum malesuada dolor sodles.
                         </li>
                         <li class="last">
                            <span class="date">14 Dec 2024</span>
                            <span class="title"><a href="#">Sit amet pellentesque</a></span>
                            Nulla facilis us fermentum arcu. Praesent consectetur gravida maurist
    cursus.</li>
                    </ul>
                </div>
                
                <div class="cleaner"></div>
			<div class="sidebar_box_bottom"></div>                    
            </div>
            
            <div class="sidebar_box"><div class="sidebar_box_top"></div>
            	<div class="sidebar_box_content">
                   
                   <h3>BMI Calculator</h3>
                   <p>Student Name=<input type="text" style="font-size:12px; font-weight: bold;" id="studentname" size="5"></p>
                    <p>Height=<input type="text" style="font-size:12px; font-weight: bold;" id="hgt" size="5"></p>
                    <p>Weight=<input type="text" style="font-size:12px; font-weight: bold;" id="wgt" size="5"></p>
                    <p>BMI=<b id="bmi_index"></b></p>

                    <p><input type="button" value="Calculate" onclick="bmi()"></p>

                  <cite>Web Designer  - <span>TemplateMo.com</span></cite>
                   
                    <div class="cleaner"></div>
                </div>
            	<div class="sidebar_box_bottom"></div>                    
            </div>

            <center>
            
	            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
    	    <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
            
            </center>
                        
            <div class="cleaner"></div>
        </div> <!-- end of sidebar -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    
     <div id="templatemo_footer">

        Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>     
    </div> <!-- end of templatemo_footer -->
    
</div> <!-- end of warpper -->

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
