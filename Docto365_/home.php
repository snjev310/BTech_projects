<?php
if(isset($_GET['submit']))
 {
	    $msg="";
        require_once('dbconnect.php');
		$qry="insert into feedback(name,email,message)values('$_GET[name]','$_GET[email]','$_GET[message]')";
	    mysqli_query($con,$qry);
		if(mysqli_affected_rows($con)>0)
        {
            header("location:feedback.php?id=0");
		}
        else
        header("location:feedback.php?id=1");
		mysqli_close($con);
}
?>
<html>
<?php
include "header.php";
?>
                    <a href="login.php"><div class="read-more">Login/Signup</div></a>
<html>
<?php
include "header1.php";
?>                   
                
	           
               <li><a href="#home">HOME</a></li>
               <li><a href="#about-us">ABOUT US</a></li>
               <li><a href="#portfolio">OUR APP</a></li>
               <li><a href="#contact">CONTACT US</a></li>
            </ul>
    </div>
</section>
<section class="about-us" id="about-us">
    
<div>
</div>

   <h1>ABOUT US</h1>
    <hr />
    <p><font size=4>DOCTO365 aims towards catering to the
needs of users by providing healthcare
solutions. It provides a platform to patients by
making their trip to the healthcare centre a
hassle-free experience through integrated cab
services. Doctors can also use this application
to manage their appointments and create a
schedule.</font></p>
<div class="column-one">
  <div class="circle-one"></div>
    <h2>RESPONSIVE<br/>LAYOUT</h2>
          <p></p>
    </div>
  <div class="column-two">
    <div class="circle-two"></div>
        <h2>MINIMALIST<br/>CONTENT</h2>
          <p></p>
    </div>
    <div class="column-three">
        <a href="app.php"><div class="circle-three"></div></a>
            <h2>DOWNLOAD<br/>OUR APP</h2>
        <p></p>
    </div>  
</section>
<div class="clear"></div>


<section class="portfolio" id="portfolio">
    <div class="portfolio-margin">
        <h1>OUR APP</h1>
        <hr />
        <ul class="grid">
            <li>
            <a href="#">
              <img src="a.jpg" alt="image1" />
                <div class="text">
                  <p></p>
                  <p class="description">Find nearby Hospitals and Clinics easily</p>   
              </div>
            </a>
          </li>
          
             <li>
            <a href="#">
              <img src="b.jpg" alt="image2" />
                <div class="text">
                  <p></p>
                  <p class="description">Ride to the nearest healthcare centres using Ola Jugnoo and Uber</p>   
              </div>
            </a>
          </li>
          
           <li>
            <a href="#">
              <img src="c.jpg" alt="image3" />
                <div class="text">
                  <p></p>
                  <p class="description">Find nearby Diagnostic Centres Using our map</p>   
              </div>
            </a>
          </li>
          
           <li>
            <a href="#">
              <img src="d.jpg" alt="image4" />
                <div class="text">
                  <p></p>
                  <p class="description">Oreder Medicine Online through our app on one click</p>   
              </div>
            </a>
          </li>
          
           <li>
            <a href="#">
              <img src="e.jpg" alt="image5" />
                <div class="text">
                  <p></p>
                  <p class="description">Entire list of healthcare centres at your Fingertips</p>   
              </div>
            </a>
          </li>
          
           <li>
            <a href="#">
              <img src="f.jpg" alt="image6" />
                <div class="text">
                  <p></p>
                  <p class="description">View details of healthcare centres</p>   
              </div>
            </a>
          </li>

        </ul>
        <a href="home.php"><div class="read-more">Home</div></a>
    </div>

</section>


<div class="clear"></div>  

<section class="partners parallax-background-partners" id="partners">
    <div class="opacity"></div>
        <div class="content">
           <h2>OUR TEAM</h2>
             <div class="logo">
                <h2>1. ANUBHAV SARANGI&nbsp;&nbsp;&nbsp; 2. ABHISHEK KUMAR</h2><br />
                <h2>3. SANJEEV KUMAR&nbsp;&nbsp;&nbsp; 4. ASHOK NITIN</h2><br />
                <h2>5. SASWAT NANDA</h2>
             </div>
       </div>
</section>
<section class="contact" id="contact">
        <h1>Contact Us</h1>
        <hr/>       
      
        <div class="content">
          
          <div class="form">
          
            <form>
          
            <input type="text" name="name" id="your-name" placeholder="YOUR NAME" />
            <input type="text" name="email" id="your-email" placeholder="YOUR E-MAIL" />
          
            <textarea id="message" name="message" placeholder="MESSAGE"></textarea>
            
 <input type="submit" name="submit" id="your-email" value="SEND" />
            
 
            </form>
          
          </div>
          
          
          <div class="contact-text">
          
          To contact us please use the contact form visible also provide us feedback<br/><br/>

          When sending files, please use<br/>
          the following e-mail<br/><br/>
          <strong>Abhishek kumar</strong><br/><br/>
            e-mail: <strong>ak7662@gamil.com</strong>
          </div>
    </div>      
</section>

 <?php
 include "footer.php";
 ?>