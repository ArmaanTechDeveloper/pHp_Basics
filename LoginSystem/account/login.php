<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <!-- own made css include  -->
    <link rel="stylesheet" href="login.css">
    <title>Login to continue</title>
  </head>
  <body>
    
  <div class="container containerCenter">
      
    <form class="center my-auto">
        <div class="container innerContainerCenter">
        <h1 class="text-center">Login to Continue </h1>
    <div class="mb-3 col-md-6">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-md-6">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 col-md-6">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary col-md-6">Login</button>
    <a href="signup.php"  class="btn btn-success col-md-6 my-2">Signup</a>
    </form>
    </div>
  </div>







    <!-- Bootstrap Javascript Tags Starts here  -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>