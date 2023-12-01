<!DOCTYPE html>
<html lang="en">
<head>
  <title>AddBlog</title>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"> </script>
<style>
.custom-class {
  display: none;
}
@media (max-width: 767.98px) {
  .custom-class {
    display: block;
  }
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-secondary">
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
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
  </nav>
  <center>
    <div class="card mt-5" style="height: 35rem; width: 23rem;">
      <p><b>Choose a name for your blog</b></p>
      <p>This is the title that will happen on your blog</p>
      <form action="Includes/form_processor.php" method="post">
        <p><input type="text" name="title" placeholder="title"  ></p>
        <textarea name="description" id="" cols="30" rows="10">description</textarea>
        <p>Author: <input type="text" name="author" placeholder="author"  ></p>
        <input type="submit" name="Submit">
        <!-- <a href="update.php" class="btn btn-success" >update</a> -->
      </form>
    </div>
  </center>
</body>
</html>