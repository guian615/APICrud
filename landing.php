<?php
    include_once('nav.php');
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="https://image.freepik.com/free-vector/isometric-online-business-training-cartoon-tiny-trainer-character-teaching-businessman-students-white_109722-1114.jpg"
                    alt="...">
            </div>
            <div class="col-sm">
                <div class="row justify-content-center">
                    <form action="http://192.168.0.21:8081/patAndGuian/insert.php" method="POST">
                        <div class="form-group mt-3">
                            <h3 class="text-center text-light bg-dark" style="border-radius:20px;">Input Field</h3>
                            <label class="text-primary">
                                <h5>Name:</h5>
                            </label>
                            <input type="text" name="Name" class="form-control bg-dark text-light mt-1"
                                placeholder="Enter Name"
                                style="border-radius:10px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <label class="text-primary mt-3">
                                <h5>Email Address:</h5>
                            </label>
                            <input type="email" name="Email" class="form-control bg-dark text-light"
                                placeholder="Enter Email"
                                style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">
                                <h5>Password</h5>
                            </label>
                            <input type="password" name="Password" class="form-control bg-dark text-light"
                                placeholder="Enter Password"
                                style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        </div>
                        <div class="form-group">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary" name="save" style="border-radius:20px;width: 100%;
                                     padding: 15px;
                                     border: 0;
                                     font-size: 1.2em;
                                     text-shadow: 1px 1px 0px rgba(0, 0, 0, .4);
                                     box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <h4><i class="fa fa-save" style="font-size:30px"></i>
                                        Save</h4>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>