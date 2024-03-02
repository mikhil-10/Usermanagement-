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
                    if (!$_SESSION["login"]) {
                        # code...
                        header("location:login.html");
                    }else{
                    
                    include "connect.php";
                    $sql="select * from contact";
                    $res=mysqli_query($con,$sql);
                    if (mysqli_num_rows($res)>0) {
                        # code...
                        echo "<div
                        class='table-responsive'
                    >
                        <table
                            class='table table-primary'
                        >
                            <thead>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>Email</th>
                                    <th scope='col'>Number</th>
                                    <th scope='col'>Query</th>
                                    <th scope='col'>Replied</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>
                            <tbody>";
                        while ($row=mysqli_fetch_assoc($res)) {
                            # code...
                            echo "
                            <tr class=''>
                                <td scope='row'>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['number']}</td>
                                <td>{$row['query']}</td>
                                <td>{$row['reply']}</td>
                                <td><a name='' id=''  class='btn btn-warning' href='reply.php?id={$row['id']}' role='button' >Reply</a>
                                <a name='' id=''  class='btn btn-primary' href='deletecontact.php?id={$row['id']}' role='button' >Delete</a>
                                </td>
                            </tr>";
                        }
                        echo "                               
                        </tbody>
                    </table>
                    </div>";
                    }
                }
                    ?>
                    
                    
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