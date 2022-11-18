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
                              <?php  foreach($getStudents as $studnet){ ?>
                                    <tr>
                                        <td><?php echo $studnet['id'];?></td>
                                        <td><?php echo $studnet['name'];?></td>
                                        <td><?php echo $studnet['email'];?></td>
                                        <td><?php echo $studnet['address'];?></td>
                                        <td><?php echo $studnet['phone'];?></td>
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