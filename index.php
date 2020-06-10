<?php




?>
<html lang="en" style="height:100%;">
<head>
  <title>Flash Study</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src='../ToDo/model/validation.js'></script>
  
</head>

<body style="height:100%;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Flash Study</a>
    
    <a class="nav-item d-xs-block d-sm-block d-md-none d-lg-none d-xl-none" href="#">Login</a>
</nav>
    
<div class="container-fluid" style="min-height:680px;">
    <div class="row mt-4 mb-4 p-4">
        <section class="col-lg-8 col-md-10 col-sm-12 col-xl-6 col-xs-12">
            <h1>Welcome to Flash Study</h1>
            <p class="text-justify">After registering you will be able to make flash card decks by creating flash cards, grouping 
                them by classes, and grouping them again by chapter or section! You will be able to save 
                your decks to study from at anytime.</p>
            <p class="text-justify">Make a mistake? Feel free edit or even delete your cards, classes, or groups.</p>
            <p class="text-justify">Want to show off your deck? Feel free to share your deck with classmates or friends!</p>
        </section>
    </div>
    <div class="row h-50">
        <div class="col m-auto border border-dark h-100">
            <form method='POST' class='m-auto w-50'>
                <h1 class='mt-4'>Register</h1>
                <?php
                    /*if(isPostRequest())
                    {
                        echo 
                        '<div>
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Login Failed</strong> check your spelling
                            </div>
                        </div>';
                    } */
                ?>
                <div class="form-group mt-5">
                    <input class='form-control' type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group mt-5">
                    <input class='form-control' type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group mt-2">
                    <input class='form-control' type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group mt-2">
                    <input class='form-control' type="password" name="confirmPassword" placeholder="Confirm Password">
                </div>
                <div class="form-group mb-2">
                    <input type='submit' class="btn btn-outline-primary float-right" value='Register'>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-4 col-xl-3 d-md-block d-lg-block d-xl-block d-sm-none d-xs-none float-right border border-info">
            <form method='POST' class='m-auto w-50'>
                <h1 class='mt-4'>Login</h1>
                <?php
                    /*if(isPostRequest())
                    {
                        echo 
                        '<div>
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Login Failed</strong> check your spelling
                            </div>
                        </div>';
                    } */
                ?>
                <div class="form-group mt-5">
                    <input class='form-control' type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group mt-2">
                    <input class='form-control' type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group ml-5">
                    <input type='submit' class="btn btn-outline-primary ml-5" value='Submit'>
                </div>
            </form>
        </div>
    </div>
    
    
    
    
        
   <footer>
        <div class="row mt-5">
            <div class="col-2 offset-5 border border-dark">
                <p class="text-center">© 2020 Michael Quinn</p>
            </div>
        </div>
    </footer>
</div><!--/.container-fluid-->
<?php //include __DIR__.'/model/footer.php'; ?>
</body>
</html>
