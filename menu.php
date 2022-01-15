<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>
.jumbo{
    background-color:#3435bb;
    padding:100px 50px;
}
#navbar{
    background-color:#7677ff;
}
</style>
<body>
<!-- Navbar-->
<div class="container">
<div class="row">
<div class="col">
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=menu">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=user">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=petugas">Petugas</a>
        </li>
        <!---<li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
</div>
</div>
</div>
<!-- tutup navbar -->
<!-- jumboron -->
<div class="container">
<div class="row">
<div class="col">
<div class="jumbo">
<h1>
SELAMAT DATANG DI PERPUSTAKAAN
</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum omnis fuga ea debitis voluptatum itaque! Non accusantium ut saepe fugit, obcaecati corporis, exercitationem quam inventore quibusdam sint, nemo similique explicabo.
</p>
</div>
</div>
</div>
</div>
<!-- tutup -->
<br>


<div class="container">
<div class="row">
<div class="col">
<?php
include("koneksi.php");
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'petugas') {
        include ('petugas.php');
    }elseif ($_GET['page'] == 'user') {
        include ('user.php');
    } 
        
    

}
?>
</div>
</div>
</div>
<!-- footer -->
<footer><h3 class="text-center mt-3 mb-3">BY DAFFA RAMADHAN SP</h3></footer>
<!--- tutup -->
</body>
<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>