<?php
    include_once('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3">View Record</h1>
                <a href="landing.php" class="btn btn-primary">
                    <span<i class="fa fa-backward" aria-hidden="true" style="font-size:20px;"></i>
                        </span> Back
                </a>
                <div class="table-responsive mt-4 mb-5" style="  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <table id="mytable" class="table">
                        <thead class="bg-dark text-light text-center">
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </thead>

                        <tbody class="text-center">
                        </tbody>

                        <table>
                </div>
            </div>
        </div>
        <!--  edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button"  class="btn btn-primary updateBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="ajax_request.js"></script>
</body>

</html>