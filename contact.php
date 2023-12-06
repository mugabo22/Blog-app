<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .p{
      font-size: large;
    }
  </style>
  <title>Contact</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: mediumseagreen;">
  <div class="">
    <h1 class="text-"></h1>
    <div id="carouselExample" class="carousel slide">
      <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-dark mt-0">
          <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="https://th.bing.com/th?q=Home+Icon+Jpg&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247" alt="Home" width="40" height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " href="contact.php">ContactUs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="author.php">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="add.php">Add Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="new.php">New blogs</a>
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
  <div style="margin-top: 3rem;">
    <center>
      <p style="font-size: x-large; color: white; margin-top: 5rem;"><b>CONTACT US</b></p>
    </center>
    <div class="card w-28 bg-dark" style="height: 40rem;">
    <center>
      <div class="card-header text-white">
        Information
      </div>
    </center>
      <form action="Includes/contactpro.php" method="post" style="width: 200px; margin-left: 20rem; color: white;">
        <div class="mb-3">
          <label for=" " class="form-label">First Name</label>
          <input type="text" name="first_name">
        </div>
        <div class="mb-3">
          <label for=" l" class="form-label">Second Name</label>
          <input type="text" name="second_name">
        </div>
        <div class="mb-3">
          <label for=" sampleInputEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Problem</label>
          <textarea name="complaint" style="height: 5rem; width: 15rem;"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
  <?php include"Includes/footer.php" ?>

</body>
</html>