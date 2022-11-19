<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <section class="mb-5">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li>
                    <a href="" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="" class="nav-link">About</a>
                </li>
                <li>
                    <a href="" class="nav-link">Product</a>
                </li>
                <li>
                    <a href="" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
       </nav>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Students</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                </tr>
                                
                              <?php  foreach($getStudents as $student){ ?>
                                    <tr>
                                        <td><?php echo $student['id'];?></td>
                                        <td><?php echo $student['name'];?></td>
                                        <td><?php echo $student['email'];?></td>
                                        <td><?php echo $student['address'];?></td>
                                        <td><?php
                                           foreach ($student as $phone){
                                               if(is_array($phone)){
                                                   echo $phone['Phone_1']." | ".$phone['Phone_2'];
                                               }
                                           }

                                            ?></td>
                                    </tr>


                              <?php  } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>