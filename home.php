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
<body style="background-color:mediumseagreen;">
    <div class="">
        <h1 class="text-"></h1>
        <div id="carouselExample" class="carousel slide">
            <div class="fixed-top">
                <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php"><img src="https://th.bing.com/th?q=Home+Icon+Jpg&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247" alt="Home" width="40" height="40"></a></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="author.php">About us</a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="add.php">Add Blog</a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="gene.php">Blogs</a>
                        </li>
            
                        </ul>
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                        </form>
                    
                    </div>

                </nav>
            </div>
        
        </div>
    </div>
    <div class="text">
        <img src="https://www.bing.com/th?id=OADD2.8315231658179_1K2L6MPMEX2H5AVYPR&pid=21.2&c=3&w=300&h=157&dynsize=1&qlt=90" alt="Snow" style="width:100%; margin-top: 3rem;">
        <div class="centered">
            <h1 class="text">Publish Your Passions, Your way</h1>
            <p><dfn>Get in touch with us about all blogs currently</dfn></p>
            <p><dfn>Publish Your blog here</dfn></p>
            <center>
                <a href="add.html" class="btn btn-primary" >Crete Your Blog</a>
            </center>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-11">
            <center>
                <p style="font-size: large;"><b>Latest Blogs</b></p>
            </center>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-3" style="margin-left: 2px;">
            <img src="https://www.bing.com/th?id=OADD2.7559191288302_1JF939VFFLAP2PM1LE&pid=21.2&c=16&roil=0&roit=0.1274&roir=1&roib=0.8711&w=612&h=304&dynsize=1&qlt=90" width="400" height="200" alt="...." style="margin-left: 3px;">
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
                <img src="https://th.bing.com/th/id/OIP.Jdh-U3zUdhxHDFOXgWZt6AAAAA?w=213&h=180&c=7&r=0&o=5&pid=1.7" style="margin-left: 4rem;" width="400" height="200" alt="....">
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
                <img src="https://th.bing.com/th?id=ORMS.d613ba8c8a56d18d5176e0ed11acbeae&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" style="margin-left: 1rem;" width="400" height="200" alt="....">
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
    <footer class="text-white mt-3" style="background-color:lightseagreen;">
        <div>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <img src="https://www.bing.com/th?id=OAIP.3ff8ed6c09f1ee8d1071113d02b4af17&pid=AdsNative&c=3&w=300&h=157&dynsize=1&qlt=90" width="500px alt="...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <h1>About Us</h1>
                    <ul>
                        <li>Company</li>
                        <li>Our Team</li>
                        <li>Careers</li>
                        <li>Jobs</li>
                        <li>Become a Teacher</li>
                        <li>Affiliates</li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h2>Contact</h2>
                    <ul style='color:white;'>
                        <li><a href="" class="fa fa-facebook"></a></li>
                        <li><a href=""><i class="fa fa-google"></i></a></li> 
                        <li><a href="www.twitter.com/mugaboronald111" class="fa fa-twitter"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>