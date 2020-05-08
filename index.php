<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap NavBar</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
        <link rel="stylesheet"href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



        <!--Demo purpose css-->
        <style>
            body{
                background-color: ;
            }

            .aboutimg{
                padding-left: 15px;
                width:750px;
                height: 250px! important;
            }
            #abo{
                width: 550px;
                height: 350px;
            }
            #footer{
                   width:100%;
             }
             .footer-box {
                      padding: 20px;
              }
              .footer-box .fa {
                   margin-right: 8px;
                   font-size: 25px;
                   height: 40px;
                     width: 40px;
                     text-align: center;
                      padding-top: 7px;
                    border-radius: 2px;
               }
               #social-media{
                        background: #f8f9fa;
                       
                   }
               #social-media p{
                          font-size:25px;
                          font-weight:500;
                        margin-bottom:15px;
                    }
                #social-media img{
                           width: 40px;
                            transition: 0.5s;
                            margin-bottom: 15px;
                    }
                     #social-media a:hover img
                    {
                      transform: translateY(-10px);
                     }
                     hr{
                           background-color: #fff;

                        }
                        .copyright{
                                 margin-bottom: 0;
                                   padding-bottom: 20px;
                                  text-align: center;

                        }

        </style>
    </head>
    <body>



        <div class="container-fluide">

            <!-- Static navbar -->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
               <div class="logo">
                  <a class="navbar-brand" href="#">
                    <img src="abc..png" alt="logo" style="width:60px;">
                  </a>
                </div>
                <a class="navbar-brand text-warning" href="#">SHORTNOTES</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu bg-warning text-white" aria-labelledby="navbarDropdownMenuLink">
                               <!---   Engineering menu ----->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Engineering</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hfile/Efirst.html">First year</a></li>
                                        <li><a class="dropdown-item" href="hfile/Esecond.html">Second year</a></li>
                                        <li><a class="dropdown-item" href="hfile/Ethird.html">Third year</a></li>
                                        <li><a class="dropdown-item" href="hfile/Efour.html">Four year</a></li>
                                    </ul>
                                </li>
                              <!---B.s.c menu section------>
                                <li><a class="dropdown-item dropdown-toggle" href="#">B.Sc</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hfile/BSCFIRST.html">First year</a></li>
                                        <li><a class="dropdown-item" href="hfile/BSC2.html">Second year</a></li>
                                        <li><a class="dropdown-item" href="hfile/BSC3.html">Third year</a></li>
                                    </ul>
                                </li>
                              <!---B.A menu Section-->
                              <li><a class="dropdown-item dropdown-toggle" href="#">B.Com</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hfile/BCOM1.html">First year</a></li>
                                        <li><a class="dropdown-item" href="hfile/BCOM2.html">Second year</a></li>
                                        <li><a class="dropdown-item" href="hfile/BCOM3.html">Third year</a></li>
                                        
                                    </ul>
                                </li>
                              <!--- B.A------->
                              <!--<li><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                                    <ul class="dropdown-menu">
                                       <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item text-center" href="#">Subsubmenu action aa</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>-->
                              <li><a class="dropdown-item dropdown-toggle" href="#">B.A</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hfile/ARTS1.html">First year</a></li>
                                        <li><a class="dropdown-item" href="hfile/ARTS2.html">Second year</a></li>
                                        <li><a class="dropdown-item" href="hfile/ARTS3.html">Third year</a></li>
                                        
                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="#">Other</a></li>
                              <!--  End-->

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feature.php" style="color: khaki;">Features</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contect</a>
                        </li>
                    </ul>
                </div>
            </nav>

           
        <!-- container -->
        <!----   main section --->
        <div id="demo" class="carousel slide container-fluide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Elearnig.jpg" alt="E-book" width="1650"  height="650">
      <div class="carousel-caption">
        <h1 class="text-warning">Welcome To This Site </h1>
        <p><h3 class=""style="color: #00FFFF;"><strong>We will provide Study Material E-book(pdf) in Bachelor of Engineering,Bachelor of Science,Bachelor of Commerce and Bachelor of Art</strong></h3></p> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="dev.png" alt="Chicago" width="1650" height="650"><!--full-stack.jpg-->
      <div class="carousel-caption">
        <h3 class="text-warning my-4">Web Devlopment & Apps Devlopment</h3>
        <!--<p>complete web devlopment & apps devlopment books are avilible</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="abcdf.jpeg" alt="" width="1650" height="650">
      <div class="carousel-caption">
        <h2 class="text-warning">Self Devlopment</h2>
        <p></p>
      </div>
    </div>
  </div>

 
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  <section class="my-5">
      <div class="py-5">
          <h1 class="text-center">About Us</h1>
      </div>
      <div class="comtainer-fluid">
        <div class="containe">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-12" >
                  <img  src="elarning.jpg " class="img-fluid aboutimg">
             </div>
              <div class="col-lg-4 col-md-6 col-12">
                   <p class="">This site provide Mumbai university all brances degre books like Bachelor of Engineering,Bachelor of Science,Bachelor of Commerce and Bachelor of Arts and other books App devlopment,web devlopment books and Self devlopment books etc.</p>
                   <a href="about.php" class="btn btn-warning"> Chek More</a>
              </div>  
          </div>
      </div>
  </div>
  </section>

<!--------------service-------->
    <div class="my-5">
        <h1 class="text-center">Our Service</h1>
    </div>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
      <div class="card" style="width:300px">
     <img class="card-img-top" src="web1.png" alt="Card image">
      <div class="card-body">
     <h4 class="card-title">Web Devlopment</h4>
     <p class="card-text">Top Ten Complete web Devlopment books</p>
     <a href="https://drive.google.com/drive/folders/1CJIdyeFKJx5-12zPN2SFu_eEhsRwj77K?usp=sharing" class="btn btn-warning">click to download</a>
  </div>
</div>

    </div>

    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
        <div class="card" style="width:315px;">
      <img class="card-img-top" src="web.jpeg" alt="Card image">
      <div class="card-body">
      <h4 class="card-title">App Devlopment</h4>
      <p class="card-text">Top Ten Complete web Devlopment books</p>
      <a href="https://drive.google.com/drive/folders/1XLsKfDO4y2nREy9zLj23WGg9rvb9L8KX?usp=sharing" class="btn btn-warning">click to download</a>
  </div>
</div>
    </div><br><br>
   
    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
         <div class="card" style="width:300px">
          <img class="card-img-top" src="motivation.jpg" alt="Card image">
        <div class="card-body">
       <h4 class="card-title">Self Devlopment</h4>
      <p class="card-text">Top Five self devlopment books and startup business.</p>
      <a href="https://drive.google.com/drive/folders/11rJCtdqLN-QTj3ITBRcPvuWpi2IPMF6m?usp=sharing" class="btn btn-warning">click to download</a>
  </div>
</div>
    </div>
  </div>
</div>
<!--------------Service End------------------------>

<!---form---->
 <section class=" my-5">
      <div class="py-5">
        <h2 class="text-center">Query Form</h2>
       </div>
        <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                <label>Mobile No</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comment"></textarea>
             </div>
             <button type="sumbit" class="btn btn-warning">Submit</button>
            
        </form>
        </div>
      </div>
 </section>
<!----End form--->

<section id="social-media">
  <div class="container text-center">
    <p>Find Us On Social Media</p>
    <div class="social-icons">
      <a href="#"><img src="facebook.png"></a>
      <a href="#"><img src="instagram.png"></a>
      <!--<a href="https://twitter.com/ManishT70258443?s=08"><img src="twitter.png"></a>-->
      <!--<a href="tel:5554280940">Call us at 555-428-0940</a>-->
     <!-- <a href="https://api.whatsapp.com/send?phone=9082114014&text=urlencodedtext"><img src="whatsapp.png"></a>-->
      <!--<a href="https://api.whatsapp.com/send?phone=whatsappphonenumber&text=urlencodedtext"></a>-->
      <!--<a href="mailto:youremailaddress">Email Me</a>-->
      <a href="mailto:#"><img src="gmail.png"></a>
      <a href="tel:8286348403"><img src="customer-service.png"></a>
    </div>
    
  </div>
</section>
<!---    Floating point---->

<section id="footer" class="container-fluide bg-warning">
  
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-box">
        <img src="abc..png">
        <p>This Website Provides Customer support and the best Solutions </p>
      </div>
      <div class="col-md-4 footer-box">
        <p><b>CONTECT US</b></p>
        <P><i class="fa fa-user-circle-o" aria-hidden="true"></i>Mr Ashwani TIWARI</P>
        <P><i class="fa fa-phone-square"></i>+91 8286348403</P>
        <P><i class="fa fa-user-circle-o" aria-hidden="true"></i>Mr Ravi mali</P>
        <P><i class="fa fa-phone-square"></i>+91 9594167693</P>
        
      </div>
      <div class="col-md-4 footer-box">
        <P><i class="fa fa-envelope"></i>shortnotes11@gmail.com</P>
        <p><b>SUBSCRIBE LATEST UPDATE</b></p>
                 <input type="email" class="from-control" placeholder=" your email.@gmail.com">
                 <button type="button" class="btn btn-primary">Subscibe</button>
      </div>
    </div>
    <hr>
    <p class="copyright"> <marque><b>Copyright © shortnotes</b></marquee></p>
  </div>

</section>
<!--<footer>
    <h3 class="text-center">@shortnote</h3>
</footer>-->

<!----- Ending floating---->
<section src="smooth-scroll.js"></section>
  <script>
     var scroll = new SmoothScroll('a[href*="#"]');
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

        <script src="js/bootstrap-4-navbar.js"></script>
    </body>
</html>
