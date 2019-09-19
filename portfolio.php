<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
   <title>Welcome To My Portfolio Page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="jquery-3.2.1.min.js"></script>
<style>
   body{
       padding:0;
       margin:0;
       font-family: sans-serif;
       font-size: 18px;
       background: #fffdff;
   }

   section{
       margin: 0;
       padding: 0;
       color: red;
   }
   #contact{
       background:url(http://www.hdwallpaperup.com/wp-content/uploads/2015/01/Laptop-wallpaper-1920x1080.jpg);
   }
   .jumbotron{
       margin-top: -30px;
       background-color: #000;
   }
   .jumbotron h1{
       color: #fff;
   }
 .showcase-btn{
    margin-top: 30px;
  }   
  #about {
      padding: 40px;
  }  
  #about p {
      letter-spacing: 2.6px;
  }
  .projectdiv1 {
      background-color: #f1f1f1;
      padding: 20px;
  }   
  .projectdiv1:hover {
      background-color: #f8f8ff;
  }  
  .projectdiv1 p {
      padding: 30px;
  }
  .projectdiv2 {
      background-color: #f8f8ff;
      padding: 20px;
  }   
  .projectdiv2:hover {
      background-color: #f1f1f1;
  }  
  .projectdiv2 p {
      padding: 30px;
  }
  #project p {
      margin-bottom: 40px;
      color: #000;
      letter-spacing: 2.6px;
  }     
  #project h4 {
      margin-bottom: 40px;
      color: #000;
  } 
  #project img {
      margin-bottom: 15px;
  }
  #project a.showcase-btn:hover {
      font-size: 25px;
      background-color: red;
      color: #fff;
  }    
  #project a {
      margin-bottom: 20px;
  }
  #certificate p{
      margin-bottom: 70px;
      letter-spacing: 2.6px;
  }
  #certificate h2{
      margin-bottom: 50px;
  }
  #tec h2 {
      margin-bottom: 40px;
      color: red;
      font-weight: bold;
      font-size: 50px;
  }
  #tec p {
      font-size: 25px;
      color: #a2a2a2;
  }
  #tec .percentbox {
      margin-bottom: 35px;
  }
  #contact {
      background:url("https://images.wallpaperscraft.com/image/laptop_cup_glasses_plant_114948_1920x1080.jpg");
      padding: 30px;
      border-top: red solid 2px;
      border-bottom: red solid 2px;
      background-position: right bottom;
      background-attachment: fixed;
      min-height: 450px;
      background-size: cover;

  }
  #contact form {
      margin-top: 30px;
  }
  #contact h1 {
      text-align: center;
      margin-top: 55px;
      padding: 0 80px;
      line-height: 2.2rem;
  }
  span.page-header {
   font-weight: bold;
  }
  footer {
      background-color: #f1f1f1;
      color: #000;
  }
  #bbtn {
   margin-top: 70px;
  }
  #bbtn a {
   font-size: 2.2rem;
   padding: 10px 30px;
  }
  .page-header h1, .page-header h2 {
      font-size: 4rem
  }
  .monoText {
      font-family: monospace;
  }
  p {
      font-size: 1.8rem;
  }
  #about span.cap {
      text-transform: capitalize;
      text-decoration: underline;
  }
@media screen and (max-width: 600px) {
    body {
    background-color: ;
  }
  h1, h2, h3, h4 {
      font-family: monospace;
  }
   #certificate .page-header p {
      font-size: 2.2rem;
  }
  .page-header h1, .page-header h2 {
      font-size: 3rem;
      text-shadow: 2px 2px #a1a1a1;
  }
  #bbtn a {
   font-size: 1.8rem;
   padding: 10px 30px;
   margin: 10px 0 70px 0;
  }
  #contact {
      display: grid;
      grid-template-rows: 1fr 1fr;
      grid-template-columns: 1fr;
      height: 80vh;
  }
  #contact .row {
      display: flex;
      flex-direction: column-reverse;
  }
  #contact form {
      padding-top: 50px;
  }
  #contact h1 {
      padding: 0;
      line-height: 2.2rem;
  }
  footer {
      padding: 15px;
  }
}
</style>

</head>
<body>
<!-- NAVBAR -->
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><span class="page-header">Portfolio Page</span></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown nabvar-right text-center"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HOME <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="#">Home</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#project">Projects</a></li>
         <li><a href="#certificate">Certificates</a></li>
         <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header> 

<!--PICTURE & HEADER -->
 <section id="header">
    <div class="jumbotron text-center">
        <h1>Welcome To My Portfolio Page</h1>
    </div>
</section>

<!--ABOUT ME -->

<section id="about">
   <div class="container">
       <div class="row">
           <div class="col-md-6 col-sm-6">
               <img class="img-responsive img-circle" src="https://image.ibb.co/maDZhQ/IMG_20140726_194942.jpg" alt="picture of michael harris" border="0">
           </div>
           <div class="col-md-6 col-sm-6">
               <div class="page-header">
                   <h1 class="text-center monoText">About Me</h1>
                   <p style="color: black;">Hello, my name is Michael Harris and I am a self taught programmer, Looking forward to becoming a <span class="cap"><em>full stack web developer</em></span> one day.</p>
               </div>
           </div>
       </div>
   </div>
</section> 

<!-- PROJECTS -->
<section id="project">
   <div class="container">
       <div class="page-header text-center">
           <h2 class="monoText">Projects</h2>
           <p style="color:#000;">Here are projects I've accomplished. More coming soon.</p>
           <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-6 projectdiv1">
                   <h4>Single Page Website</h4>
                   <img class="img-responsive" src="https://image.ibb.co/i54qNQ/img01022.png" alt="img01022" border="0">
                   <a class="btn btn-default btn-lg showcase-btn" href="https://laskate.000webhostapp.com/" target="_blank">Visit Website</a>
               </div>
               <div class="col-md-6 col-sm-6 projectdiv2">
                   <h4>Multi Page Website</h4>
                   <img class="img-responsive" src="https://image.ibb.co/iYFdbk/img0102.png" alt="img0102" border="0">
                   <a class="btn btn-default btn-lg showcase-btn" href="https://michael-harris.000webhostapp.com/" target="_blank">Visit Website</a>
               </div>
           </div>

     <div id="bbtn" class="container-fluid">
       <a class="btn btn-primary btn-lg" href="#" target="">Visit More Projects</a>
       </div>
     </div>

       </div>
       </div>
   </div>
</section>
<hr>

<!-- CERTIFICATES SECTION ONE -->
<section id="certificate">
   <div class="container">
       <div class="page-header text-center">
           <h1 class="monoText">Certificates</h1>
           <p style="color:#000;">Certificate I've earned.</p>
           <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-4">
                   <a href="https://i.ibb.co/SRQY7jh/CSS-certificate.jpg">
                   <img class="img-responsive" src="https://i.ibb.co/pjFXSy6/CSS-certificate.jpg" alt="CSS-certificate" border="0">
                   </a>
                   <h3 class="text-center" >CSS</h3>
               </div>
               <div class="col-md-4 col-sm-4">
                   <a href="https://i.ibb.co/J3ZYh3S/HTML-certificate.jpg">
                   <img class="img-responsive" src="https://i.ibb.co/J3ZYh3S/HTML-certificate.jpg" alt="HTML-certificate" border="0">
                   </a>
                   <h3 class="text-center" >HTML</h3>
               </div>
               <div class="col-md-4 col-sm-4">
                   <a href="https://i.ibb.co/4pCTqJK/Java-Script-certificate.jpg">
                   <img class="img-responsive" src="https://i.ibb.co/4pCTqJK/Java-Script-certificate.jpg" alt="Java-Script-certificate" border="0">
                   </a>
                   <h3 class="text-center" >JavaScript</h3>
               </div>
           </div>
       </div>
       </div>
   </div>
</section>

<!-- CERTIFICATES SECTION TWO -->
<section id="certificates">
   <div class="container">
                   <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <a href="https://i.ibb.co/58MZkMC/PHP-certificate.jpg">
                           <img class="img-responsive" src="https://i.ibb.co/58MZkMC/PHP-certificate.jpg" alt="PHP-certificate" border="0">
                           </a>
                           <h3 class="text-center" >PHP</h3>
                       </div>
                       <div class="col-md-6 col-sm-6">
                       <a href="https://i.ibb.co/FXDZkTC/SQL-certificate.jpg">
                           <img class="img-responsive" src="https://i.ibb.co/FXDZkTC/SQL-certificate.jpg" alt="SQL-certificate" border="0">
                           </a>
                           <h3 class="text-center" >SQL</h3>
                       </div>
                   </div>
               </div>
</section>

<!-- Technical Skills -->
<hr>
<div id="tec" class="container">
<hr class="w3-opacity">
     <h2 class="w3-padding-16">Technical Skills</h2>
     <p class="w3-wide">Web Design</p>
     <div class="w3-white">
       <div class="w3-container w3-padding-small w3-center w3-grey percentbox" style="width:100%">100%</div>
     </div>
     <p class="w3-wide">Problem Solving</p>
     <div class="w3-white">
       <div class="w3-container w3-padding-small w3-center w3-grey percentbox" style="width:99.47%">99.47%</div>
     </div>
     <p class="w3-wide">Photoshop</p>
     <div class="w3-white">
       <div class="w3-container w3-padding-small w3-center w3-grey percentbox" style="width:90%">90%</div>
     </div>
</div>
<div style="height: 70px;"></div>

<div class="page-header text-center">
   <h2 class="monoText" style="color: red;">Contact Me</h2>
   <p>michaelh0405@gmail.com</p>
</div>

<!-- CONTACT ME -->
<section id="contact">
 <div class="container">
   <div class="row">
     <div class="col-md-5 col-sm-5">
       <form method="POST" action="submit.php">
         <div class="form-group">
           <label>Name: </label>
           <input class="form-control" type="text" name="username" value="" placeholder="Enter Name">
         </div>
         <div class="form-group">
           <label>Email: </label>
           <input class="form-control" type="email" name="email" value="" placeholder="Enter Email">
         </div>
         <div class="form-group">
           <label>Message: </label>
           <textarea class="form-control" name="messages" value="" placeholder="Enter Message"></textarea>
         </div>
         <input class="btn btn-default" type="submit" value="Submit">    
       </form>
     </div>
     <div class="col-md-7 col-sm-7">
       <h1 style="color: white;">Need a WEBSITE? I provide mobile responsive web applications.</h1>
     </div>
   </div>
 </div>
</section>

<!-- FOOTER AREA -->
<footer>
   <div class="w3-default w3-center w3-padding-24">
       <p>Created by: <code>Michael Harris</code> , Copyright &copy; 2019</p>
</div>
</footer>
</body>
</html>