<?php
include "server.php";
include "fetch_data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css?version=1" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar-light">
        <div id="title" class="container-fluid">
            <h2>Student Information</h2>
        </div>
    </nav>
    <form class="container" id="form" action="" method="POST">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nameOfStudent" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="nameOfStudent" placeholder="name" />
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="subject" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Level</label>
                    <select class="form-control" name="level" id="level">
                        <option value="level1">Level 01</option>
                        <option value="level2">Level 02</option>
                        <option value="level3">Level 03</option>
                        <option value="level4">Level 04</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="passward" />
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class=" d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary ">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
    <div class="container" id="table">
        <table class="table table-striped">
            <tr class="table-danger">
                <th>Name</th>
                <th>Subject</th>
                <th>Level</th>
                <th>Email</th>
                <th>passward</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($Students)) {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>


</body>

</html>