<?php 
require 'database.php';
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Students</title>
    <style>
        body {
            direction: ltr;
        }
        .table-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Students Details</h4>
                        <a href="register.php" class="btn btn-primary">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($con, $query);
                                
                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $student) {
                                ?>
                                        <tr>
                                            <td><?php echo $student['id']; ?></td>
                                            <td><?php echo $student['name']; ?></td>
                                            <td><?php echo $student['email']; ?></td>
                                            <td><?php echo $student['phone']; ?></td>
                                            <td><?php echo $student['course']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">View</a>
                                                <a href="student-edit.php?id=<?php $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="delete.php" method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                                                    <button type="submit" name="delete_student" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center'>No Record Found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>