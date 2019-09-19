<?php

require_once ('db.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.js"></script>
   
</head>
<body id="body" >
    <!--header-->
    <section class="header" id="header">
        <div class="container">
            <div class="col-md-8 col-12 mx-auto">
                <ul class="list-unstyled text-uppercase lead">
                    <li><a href="index.html" id="hover">home</a></li>
                    <li><a href="#menu" id="hover">menu</a></li>
                    <li><a href="#event" id="hover">private events</a></li>
                    <li><a href="#about" id="hover">about us</a></li>
                    <li><a href="#contact" id="hover">contact &nbsp;us</a></li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--header section-->


























    <!--mid-section-->
    <section class="mid py-5" id="mid">
        <div class="container py-5">
            <div class="col-md-8 col-12 mx-auto text-uppercase mid-block">
                <h1 class="text-center text-success">food king</h1>
                
            </div>
        </div>
    </section>
    <!--end of mid section-->
    



    


























    <!--work section-->
    <section class="work py-5 bg-white" id="work">
        <div class="container">
           <h1 class="text-muted text-uppercase text-center "> our work</h1>
           <div class="title-underline bg-success mx-auto"></div>
          <div class="row img-row my-5" id="work-section">
              <img src="images/d-1.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-2.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-3.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-4.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-5.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-6.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-7.jpg" alt="work" class="img-fluid" id="work-img">
              <img src="images/d-8.jpg" alt="work" class="img-fluid" id="work-img">
           </div> 
        </div>
    </section>
    <!--end of work section-->



























    <!--menu section-->
    <section class="menu py-5 bg-light" id="menu">
        <div class="container">
            <h3 class="text-center text-dark text-uppercase">our menu</h3>
            <div class="title-underline bg-success mx-auto"></div>
            <div class="my-5">
                <div class="table-responsive">
                    <table class="table table-dark table-borderless" id="table-menu">
                        <thead>
                            <tr class="text-uppercase">
                                <th>#</th>
                                <th>breakfast</th>
                                <th>price</th>
                                <th>lunch</th>
                                <th>price</th>
                                <th>dinner</th>
                                <th>price</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="text-capitalize">
                                        <td>1</td>
                                        <td>eggs</td>
                                        <td>40rs/-</td>
                                        <td>simple thali</td>
                                        <td>77rs/-</td>
                                        <td>simple thali with rice</td>
                                        <td>99rs/-</td>
                                    </tr>

                                    <tr class="text-capitalize ">
                                            <td>2</td>
                                            <td>parantha</td>
                                            <td>60rs/-</td>
                                            <td>special thali & cheeze</td>
                                            <td>130rs/-</td>
                                            <td>special thali & sweets</td>
                                            <td>145/-</td>
                                        </tr>

                                        <tr class="text-capitalize">
                                                <td>3</td>
                                                <td>bread butter</td>
                                                <td>20rs/-</td>
                                                <td>butter chicken</td>
                                                <td>200rs/-</td>
                                                <td>fried chicken</td>
                                                <td>150rs/-</td>
                                            </tr>

                                            <tr class="text-capitalize">
                                                    <td>4</td>
                                                    <td>milk</td>
                                                    <td>50rs/-</td>
                                                    <td>fish</td>
                                                    <td>200rs/-</td>
                                                    <td>dal makhni</td>
                                                    <td>100rs/-</td>
                                                </tr>

                                                <tr class="text-capitalize">
                                                        <td>5</td>
                                                        <td>peanut butter</td>
                                                        <td>70rs/-</td>
                                                        <td>chicken without bones</td>
                                                        <td>250rs/-</td>
                                                        <td>pizza</td>
                                                        <td>90rs/-</td>
                                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--end of menu section-->





































    <!--event section-->
    <section class="event py-5 bg-white" id="event">
        <div class="container">

            <h3 class="text-uppercase text-left text-dark">book your private events</h3>
            <div class="title-underline-1 bg-danger  "></div>
            <div class="row my-5">
                <div class="col-md-5 col-12">
                    <p class="lead text-justify text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet aperiam fugiat provident tempore velit harum hic perferendis rem debitis, voluptates dignissimos quas eligendi. Aut quidem rerum ullam magnam id? Veniam, soluta laboriosam repudiandae sit quae tempora odit maxime excepturi!</p>
                </div>

                <div class="col-md-7 col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="images/e-1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/e-2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/e-3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                </div>




            </div>
        </div>
    </section>

    <!--end of event section-->






















































    <!--about us section-->
    <section class="about bg-dark py-5" id="about">
        <div class="container">
                <h1 class="text-light text-uppercase text-center ">about &nbsp;us</h1>
                <div class="title-underline bg-warning mx-auto"></div>
            <div class="row my-5">
                <div class="col-md-6 mx-auto col-12">
                 <div align="center" style="font-family: serif;">
                     <h5 class=" text-capitalize text-white ">for order booking</h5>
                            <p class="font-weight-bold text-white" style="font-size:2rem;">
                                <span class="fa fa-envelope" style="font-size:3rem;" aria-hidden="true">
                                </span> foodking@gmail.com</p>
                            <p class="font-weight-bold lead text-white" style="font-size:2rem;">
                                <span class="fa fa-phone" style="font-size:3rem;" aria-hidden="true">
                                </span> 0120-4444 888</p>
                                </div>
                    
                </div>




                <div class="col-md-6 mx-auto col-12">
                    <h4 class="text-uppercase text-light">opening hours</h4>
                    <p class="text-uppercase text-muted lead">Monday-Friday -> 10am to 10pm </p>

                    <p class="text-uppercase text-muted lead">Saturday-Sunday -> 12am to 7pm </p>
                </div>

            </div>
        </div>
    </section>
    <!--end of about us section-->



























    <!--contact section-->

    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="col-md-8 col-12 mx-auto bg-dark">
                <div class="py-5">
        
                   <h4 class="text-light text-uppercase text-center">contact &nbsp;form</h4>
                    <div class="title-underline bg-warning mx-auto"></div>
                    <br>
                    <form action="get_data.php" method="post" onsubmit="return formSubmit()">
                            <p id="error" class="text-uppercase font-weight-bold text-center text-danger" style="font-family: serif"></p>
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..." autocomplete="off">
                            </div>
                
                            <div class="form-group">
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number..." autocomplete="off">
                            </div>
                
                
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email..." autocomplete="off">
                            </div>
                
                            <div class="form-group">
                                <textarea name="msg" class="form-control" id="msg" cols="30" rows="5" placeholder="Drop Your Message..." autocomplete="off"></textarea>
                            </div>
                
                            <div align="right">
                            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Send Message">

                        </div>


                        </div>
                
                
                        </form>




            </div>
        </div>
    </section>
    <!--end of contact section-->












    <!--map section-->
    <section class="map py-5 bg-light" id="map">
        
            <h4 class="text-dark text-uppercase text-center ">our location</h4>
            <div class="title-underline bg-warning mx-auto"></div>
                <div class="my-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114937.39838783338!2d-80.21018236687704!3d25.810379263170756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a6172bfeddb9%3A0x37be1741259463eb!2sMiami+Beach%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1566033806842!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
    </section>
    <!--end of map section-->





    





















    <!--script files-->
    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/app.js"></script>
    
</body>
</html>