
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Resume</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="homepage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add-new">Add New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-12 my-auto">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>skill</th>
                                <th>Qualification</th>
                                <th>Objective</th>  
                                <th>Experience</th>  
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($data as $dt) {
                                ?>
                                <tr>
                                    <td><?= $i;
                            $i++;
                                ?></td>
                                    <td><?= $dt->u_name; ?></td>
                                    <td><?= $dt->u_contact; ?></td>
                                    <td><?= $dt->u_email; ?></td>
                                    <td><?= $dt->u_skill; ?></td>
                                    <td><?= $dt->qualification; ?></td>
                                    <td><?= $dt->objective; ?></td>
                                    <td><?= $dt->experience; ?></td>
                                </tr>
<?php } ?>                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>