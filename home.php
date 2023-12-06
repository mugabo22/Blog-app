<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .fa-facebook {
        color: white;
        font: size 23px;
        }

        .fa-twitter {
        color: white;
        font-size: xx-large;
        }

        .fa-google {
        color: white;
        font-size: xx-large;
        }
        .bottom-left {
          position: absolute;
          bottom: 8px;
          left: 16px;
          
        }
        
        .top-left {
          position: absolute;
          top: 8px;
          left: 16px;
        }
        
        .top-right {
          position: absolute;
          top: 8px;
          right: 16px;
        }
        
        .bottom-right {
          position: absolute;
          bottom: 8px;
          right: 16px;
        }
        
        .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        .text{
            color: white;
            font-size: 40px;
        }
        p{
            color: azure;
            font-size: large;
            block-size: 3px;
            margin-left: 3px;
            text-align: center;
        }
    </style>
    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <?php include"finalehome.php"?>
    <div class="row mt-2">
        <div class="col-lg-11">
            <center>
                <p style="font-size: large;"><b>Latest Blogs</b></p>
            </center>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-3" style="margin-left: 1rem;">
            <img src="image1.jpg" width="400" height="200" alt="...." style="margin-left: 3px;">
            <div class="card" style="width: 400px; height: 17rem; margin-left: 2px;">
                <center>
                    <h><u>Technologies</u></h>
                </center>
                <blockquote>
                    <p style="margin-left: 1rem; color: black;">
                        Technologies are the ways that humans use scientific knowledge to create practical solutions for various problems. Technologies can be seen in many aspects of our lives, such as transportation, communication, health, education, entertainment, and more. 
                    </p>
                </blockquote>
                <center>
                    <a class="btn btn-secondary " href="technlogies.html" style="margin-top: 9rem;">Read More..</a>
                </center>
            </div>
        </div>
        <div class="col-lg-4" style="margin-left: 2rem;">
            <div class="">
                <img src="im1.jpg" style="margin-left: 4rem;" width="400" height="200" alt="....">
                <div class="card" style="width: 400px; height: 17rem; margin-left: 4rem;">
                    <center>
                        <h><u>Querring MyServer</u></h>
                    </center>
                    <blockquote>
                        <p style="margin: left 1rem; color: black;">
                            Querying a server using MySQL is a way of retrieving data from a database that runs on the MySQL software. MySQL is an open-source relational database management system that is widely used for web applications and data analysis. To query a server using MySQL,
                        </p>
                    </blockquote>
                    <center>
                        <a class="btn btn-secondary" style="margin-top: 9rem;" href="technlogies.html">Read More..</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-left: 2rem;">
            <div class="">
                <img src="im3.jpg" style="margin-left: 1rem;" width="400" height="200" alt="....">
                <div class="card" style="width: 400px; height: 17rem; margin-left: 1rem;">
                    <center>
                        <h><u>Fashion</u></h>
                    </center>
                    <blockquote>
                        <p style="margin-left: 1rem; color: black;">
                            Fashion is a way of expressing yourself through the clothes and accessories you wear. Fashion can also reflect the culture, history, and trends of different times and places. Fashion can be influenced by many factors, such as art, music, politics, celebrities, and more. 
                    </blockquote>
                    <center>
                        <a class="btn btn-secondary" href="fash.html" style="margin-top: 9rem;">Read More..</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <?php include"packedd.php" ?>
    <div class="row mt-3">
        <div class="col-lg-5" style="background-color:lightblue; margin-left: 2rem; ">
            <h1 style="font-size: small;"><u>About author</u></h1>
            <p>
                I am a passionate blogger who loves to share my thoughts and opinions on various topics.I have been blogging for some time and I have a loyal and engaged audience. I write about things that interest me, such as Coding,Querring DataBase and lifestyle. I also like to review books, movies, and products that I have tried or enjoyed. I live in Uganda with my cat and  guitar. I am is currently working on my next blog post, which is a personal story about my childhood.
            </p>
            <center>
                <a class="btn btn-secondary" style="margin-top: 14rem;" href="author.html"> About author</a>
            </center>
        </div>
        <div class="col-lg-6 bg-secondary" style="margin-left: 3rem;">
            <!-- <center> -->
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner bg-success">
                        <div class="carousel-item active">
                            <p class="text-bg-danger display-6"></p>
                            <img src="https://th.bing.com/th?id=ORMS.c05a8951853c1adcbd59287ef8f1a23d&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" alt="GFG" width="800" height="300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <p class="text-bg-danger display-6"></p>
                            <img src="https://th.bing.com/th?id=ORMS.734e2f5c6ee46abdbc9f930faa68fe4a&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" alt="GFG" width="800" height="300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <p class="text-bg-danger display-6"></p>
                            <img src="https://th.bing.com/th?id=ORMS.39c1e8af21677f3dbe07c716df4f7462&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" alt="GFG" width="800" height="300" class="d-block w-100" alt="...">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            <!-- </center> -->
        </div>
    </div>
    <?php include"Includes/footer.php" ?>
</body>
</html>