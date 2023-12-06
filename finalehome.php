<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
        .posit{
            position: absolute;
            bottom: 17rem;
            left: 30rem;
            color:wheat;
            font-size: xx-large;
        }
        .admins{
            position: absolute;
            bottom: 7rem;
            left: 30rem;
            color:black;
            font-size: xx-large;
        }
        .ktlear{
            position: absolute;
            bottom: 7rem;
            left: 50rem;
            color:black;
            /* font-size: xx-large; */
        }
    </style>
</head>
<body>
    <div data-bs-ride="carousel" data-bs-interval="3000"  id="carouselExample" class="carousel slide">
        <div class="carousel-content">
            <div class="fixed-top">
                <div class="navbar" style="margin-left: 50rem; " >
                    <b><a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a></b>
                    <a class="nav-link " style="color: red; font-size:large; " href="author.php">About us</a>
                    <a class="nav-link" href="add.php">Add Blog</a>
                    <a class="nav-link" href="gene.php">Blogs</a> 
                </div>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="im1.jpg"  width="100%" height="700rem" alt="...">
                <div class="posit">
                    <h1>Publish Your Passions, Your way</h1>
                    <p><dfn>Get in touch with us about all blogs currently</dfn></p>
                    <p><dfn>Publish Your blog here</dfn></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Imagess/name.jpg"  width="100%" height="700rem" alt="...">
                <div class="admins">
                    <h1>Nemissis was good and far.....</h1>
                    <p><dfn>Get in touch with us about all blogs currently</dfn></p>
                    <p><dfn>Publish Your blog here</dfn></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Imagess/ronald.jpg"  width="100%" height="700rem" alt="...">
                <div class="ktlear">
                    <center>
                        <a href="add.php" class="btn btn-primary" >Crete Your Blog</a>
                    </center>
                </div>
            </div>
        </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button> -->
            <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
</body>
</html>