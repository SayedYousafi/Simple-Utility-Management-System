<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Show</title>
    <style>
        .hed{
            background: #ccc;
            color: blue;
        }
        .hed h1{
            padding-top: 20px;
            padding-bottom: 25px;
        }
        .form{
            margin-top: 50px;
            background: #ccc;
        }
        .table{
            margin-top: 50px;
        }
    </style>
</head>
<body class="stretched">
    <div class="col-md-12 hed">
        <center>
        <h1>View a particular meter reading</h1>
        </center>
    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <table class="table table-dark">
                            <?php 
                                include 'Connection.php';

                                $id = $_GET['id'];
                                $b = new Connection();
                                $b->select("premises p,readings r","*","r.id='$id'");
                                $result = $b->sql;

                                $row = mysqli_fetch_assoc($result);
                             ?>
                          <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td><?php echo $row['id']; ?></td>
                                </tr>  
                                <tr>
                                    <th>Premises Name</th>
                                    <td><?php echo $row['premises_name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Electricity</th>  
                                    <td><?php echo $row['electricity']; ?></td>
                                </tr>
                                <tr>
                                    <th>Water</th>  
                                    <td><?php echo $row['water']; ?></td>
                                </tr> 

                                <tr> 
                                    <th>Remarks</th>
                                    <td><?php echo $row['remarks']; ?></td>
                                </tr>
                                <tr>
                                    <th>Created Time & Date</th>  
                                    <td><?php echo $row['date']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Updated Time & Date</th>
                                    <td><?php echo $row['date']; ?></td>
                                </tr>
                                <tr>  
                                    
                                    <td align="center" colspan="2">
                                        <a href="index.php" type="button" class="btn btn-primary">Back</a> |
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success">Edit</a>
                                </td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>