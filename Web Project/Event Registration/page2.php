<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Events</title>
<style type="text/css">
body, html {
  background-color:#767676;
  height: 100%;
  margin: 0;
}
.vii{
  margin-top: -150px;

}
.aud{
  margin-top: -100px!important;
}
.na{
  color: white;

}
.fa {
  padding: 10px;
  font-size: 38px;
  width: 10px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  float: right; 
  margin-right: 30px;

}
.fa:hover {
    opacity: 0.7;
}
.fa-instagram {
  
  color: white;
}

.fa-facebook {
 
  color: white;
}

.fa-twitter {

  color: white;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
  padding: 15px;

}
.ri{
			float:right;
			margin-right: 20px;
			
			padding: 15px;
			border-radius:12px;
			color: white;
			margin-top: 10px;
			background-color: black;
			
			
		}	
.bg {

  background-image: url("https://www.elegantthemes.com/blog/wp-content/uploads/2018/04/Best-Code-and-Text-Editors.png");

  
  height: 100%; 

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
a{
	text-decoration:none;
  color: white; 
}


.column {
  float: left;
  width: 33.33%;
  padding: 100px;
}

/* Clearfix (clear floats) */
.row::after {
  
  clear: both;
  display: table;
}		
.lb{
  float: left;
  text-align: left;
}
main {
  margin: 0;
  padding: 5px;
  background-color:black;
  font-family:verdana;
  color: white;
}

main > h1, p, .browser {
  margin: 10px;
  padding: 5px;
  font-family:verdana;
  
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}
aside {
  width: 20%;
  padding: 5px;
  margin-left: 15px;
  float: right;
  margin-top: 500px;
  border-radius: 5px;
  font-style: italic;
  background-color: lightgray;
}
mark{
  background-color: black;
  color: white;
  padding: 3px;
}

</style>
</head>

<body>
  <main>
  <h1>ITIL Foundation v4 Certification Training
</h1>
  <p>"Our training courses go beyond preparing you for the exam."</p>
</main>
	<div class="bg">
    <nav class="na">
  &emsp;Welcome <strong><?php echo $_SESSION['email']; ?></strong>
  
</nav>

	<a href="congo.php" class="ri" style="font-family:verdana;">Home page</a>
	<aside>
<p>" <mark> Certification</mark> training course gets you ready to take the certification exam."</p>
</aside>
  </div>

<h2 style="font-family:verdana;margin-left: 15px;">Event Overview &#128203</h2>

<div class="row">
 <div class="column">
  <audio controls class="aud">
  <source src="audio.ogg" type="audio/ogg" >
  <source src="audio.mp3.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  <details>
  <summary><b>More Information:</b></summary>
  <pre>
  <b>Course Contents:</b>
  This Specialization covers how to write syntactically 
  correct HTML5 and CSS3. 
  </pre>        
</details>
  <section>
    <figure>
    <figcaption>TEVH</figcaption>
     <img src="tech.png">
  </figure>
   
  </section>
  </div>

  <div class="column">
     <section class="vii">
    <figure>
    
  <iframe width="560" height="315" src="https://www.youtube.com/embed/0_FBwJi8VBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
  </figure>
  </section>
  </div>
</div>	


<footer class="footer">
<pre class="lb">
 Venue
 Jan 01 - Sep 30 | 09:00 AM
 Palium Skills Professional Training Institute in Kolkata
 Katju Nagar, Jadavpur, Kolkata, India
 Contact no:9999999   
</pre>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
</footer>

</body>
</html>
