<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/image.css">
    
    
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <div class="header">
       @section('header')
         <div class="row-sm-6">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
               <ul class="navbar-nav">
                 <li class="nav-item">
                    <a class="nav-link" href="login">LogIn |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register">Register |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?></a>
                  </li>
               </ul>
            </nav>
</div>
            @show
          </div>
          <div class="header-menu">
          @section('header-menu')
          <div class="page-header">
              <div class="row">
	               <div class="col-sm-3"><img src="image/logo.jpg" class="rounded-circle" alt="Cinque Terre"/></div>
                 <div class="col-sm-4"><div>PAYAL ART GALLARY</div></div>
                 <div class="col-sm-5">
                   
                     <nav class="mein-menu">
                       <ul class="nav">
                         <li class="nav-item">
                            <a class="nav-link" href="index">HOME</a>
                          </li>
                          <li class="nav-item dropdown">
                             <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">ART</a>
                             <div class="dropdown-menu">
                             <a href="historical" class="dropdown-item">HISTORICAL</a>
                             <a href="fashion" class="dropdown-item">FASHION</a>
                             <a href="nature" class="dropdown-item">NATURE</a>
                             </div>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="about">ABOUT US</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">ARTIST</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact">CONTACT US</a>
                           </li>
                        </ul>
                     </nav>
</div>
  	           </div>
             </div>
        @show
     </div>


     <div class="container">
      @section('container')
      
      @show
     </div>




     <div class="footer">
     @section('footer')
     <footer class="page-footer font-small special-color-dark pt-4">


<div class="content">


  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> <img src="image/fb.png" class="rounded" alt="Cinque Terre"/></i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"><img src="image/twitter.png" class="rounded" alt="Cinque Terre"/> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"><img src="image/google.png" class="rounded" alt="Cinque Terre"/> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"><img src="image/linkedin.png" class="rounded" alt="Cinque Terre"/></i>
      </a>
    </li>
  </ul>
  

</div>
<div class="footer-copyright text-center py-3">© 2020 Copyright:</div>


</footer>

	   @show
   </div>
</body>
</html>