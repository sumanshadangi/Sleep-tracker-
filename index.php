<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sleep Tracker</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="splashscreen.css">
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </head>

  <div class="bg">
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Sleep Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#Contact">Contact Us</a>
        </li>
      </ul>
      
        <button class="btn btn-primary my-2 my-sm-0 btnc" type="submit"><a href="login.php">Log In</a></button>
        <button class="btn btn-primary my-2 my-sm-0 btnc" type="submit"><a href="register.php">Sign Up</a></button>
      
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>
         <img src="SW6wso.jpg">

        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Measure, manage, and improve your sleep.</h1>
            <p>Sleep Cycle tracks and analyzes your sleep, waking you up at the most perfect time, feeling rested!.</p>
            <p><a class="btn btn-lg btn-primary" href="register.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>
        <img src="istockphoto-646178948-170667a.jpg">


        <div class="container">
          <div class="carousel-caption">
            <h1>Know more about us.</h1>
            <p>Follow us on our social handles.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" id="About">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-6 align-items-center"> 
      
        <img src="a6300e6015cc740fa76d51a0dfc56217-removebg-preview.png">    

       
        <h2>Sleep impacts your organization.Find out what you can do about it.</h2>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-6">
       
        <img src="360_F_210078286_L4RCPcLKVyO3l2A7VRbzIlchH5Ss4sxG-removebg-preview.png">

        <h2>???A well-spent day brings happy sleep.??? Use our site to track your sleep.</h2>
        
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" id="Discover">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Analyze your sleep data through our graph monitoring system.</h2>
        
      </div>
      <div class="col-md-5">
        <img src="sleep-tracker-graph.jpg">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Schedule your sleep,edit or remove sleep durations.</h2>
       
      </div>
      <div class="col-md-5 order-md-1">
        <img src="depositphotos_395130768-stock-illustration-fox-cartoon-sleep-animals-sleeping-removebg-preview.png">


      </div>
    </div>
    
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container" id="Contact">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="mailto:joe@example.com?subject=feedback" "email me">sleeptrackersupport.in</a></p>
  </footer>
</main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </div>    
<!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
</html>
