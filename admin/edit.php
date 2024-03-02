<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <h2 class="text-primary">BS Page</h2>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="users.php" aria-current="page">Users <span
                                    class="visually-hidden">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php" aria-current="page">Contact <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="logout.php" aria-current="page">Logout <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                       
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container border border-1 border-dark mt-5 col-sm-12 col-md-6">
            <h2 class="text-center pb-1 pt-2">Contact and Query</h2>
            <hr>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <?php 
                    include "connect.php";
                    $id=$_GET["id"];
                    $sql="select * from user where id='$id'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($res);
                    ?>

<div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <form action="update.php" method="post">

                    <div class="mb-3">     
                            <label for="" class="form-label">Id</label>
                            <input type="text" class="form-control" name="id" id="" aria-describedby="helpId"
                                value="<?php echo $row['id']?>" placeholder="" >
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="mb-3">     
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                            value="<?php echo $row['name']?>"placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                            value="<?php echo $row['email']?>"placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" name="uname" id="" aria-describedby="helpId"
                            value="<?php echo $row['username']?>" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" id="" aria-describedby="helpId"
                            value="<?php echo $row['password']?>" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
                    
                </div>
            </div>
        </div>




    </main>
    </main>
    <footer>
        <!-- place footer here -->
        <hr>
        <p class="text-center ">Copyright &copy 2023 . All Rights Reserved by Company M.</p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>