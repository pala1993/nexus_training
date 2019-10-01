<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    
</head>
<body>
<div class="container-fluid fixed-top " id="top-bar">
      <div class="container" >
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" href="#">Nexus</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                          <a class="nav-link" href="#">Our Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Quote Schedule</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                          </li>
                      </ul>
                    </div>
            </nav>
      </div>
    </div> 
<section>
    <div class="container-fluid div1 mt-5 pt-5">
        <div class="row" style="height:200px">
            <div class="align-self-center mx-auto">
            <h1 class="font-weight-bold">CONTACT</h1>
        <p class="text-center p1"><i class="fas fa-home"></i>  <a href="#"  class="a1">Home</a>  /   contact</p>

            </div>
        
        </div>
        
    </div>
</section>
<section >
    <div class="container pt-5">
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="card pt-2">
  <div class="card-body">
  <i class="fas fa-map-marker-alt fa-2x mx-auto d-block text-center i1"></i>
  
    <h5 class="card-title text-center pt-3 head2">Address</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <!-- <a href="#" class="btn btn-primary">Button</a> -->
  </div>
</div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="card pt-2">
  <div class="card-body">
  <i class="fas fa-phone-alt  fa-2x mx-auto d-block text-center i2"></i>
    <h5 class="card-title text-center pt-3 head2">Contact Details</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <!-- <a href="#" class="btn btn-primary">Button</a> -->
  </div>
</div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
        
            <div class="card card1 pt-2">
            <div class="card-body">
  <!-- <i class="fas fa-phone-alt  fa-2x mx-auto d-block text-center i2"></i> -->
  <i class="fas fa-envelope fa-2x mx-auto d-block text-center i2"></i>
            <!-- <i class="far fa-envelope "></i> -->
            <h5 class="card-title text-center pt-3 head2">Email</h5>
             <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <!-- <a href="#" class="btn btn-primary">Button</a> -->
            </div>
            </div>
      
        
        </div>

        </div>
  

    </div>
</section>
   <section>
       <div class="container pt-5">
           <div class="row">
               <!-- <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-0"></div> -->
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                   
               <form action="database.php" method="POST">
               <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="Full Name*">
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email Address*">
               </div>
              
               <div class="form-group">
                    <input type="text" class="form-control" name="sub" placeholder="Subject">
               </div>
               <div class="form-group">
                    <textarea type="text" class="form-control" name="msg" col="30" rows="7" placeholder="Message"></textarea>
               </div>
                <button type="submit" class="btn rounded-0">Send Message</button>
               
           </form>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
               <img src="image1.png" alt="" class="pl-5">
               </div>
               <!-- <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-0"></div> -->
          

           </div>
           
       </div>
   </section>

















<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>




</body>
</html>