<?php
  include_once('nav.php');
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="https://miro.medium.com/max/800/1*TUarwQmHCRGY4qnfnlCJCw.png" alt="..." style="height:500px; width:500px;">
            </div>
            <div class="col-sm">
                <div class="row justify-content-center mt-3">
                    <form method="post" action="http://192.168.0.21:8081/patAndGuian/update.php">
                        <div class="form-group mt-3">
                            <h3 class="text-center text-light bg-dark" style="border-radius:20px;">Input Field</h3>
                            <label class="text-primary">
                                <h5>Name:</h5>
                            </label>
                            <input type="text" name="Name" class="form-control bg-dark text-light"
                                placeholder="Enter Name" value="<?php echo $_GET['name']?>"
                                style="border-radius:10px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <label class="text-primary">
                                <h5>Email Address:</h5>
                            </label>
                            <input type="email" name="Email" class="form-control bg-dark text-light"
                                placeholder="Enter Email" value="<?php echo $_GET['email']?>"
                                style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">
                                <h5>Password</h5>
                            </label>
                            <input type="password" name="Password" class="form-control bg-dark text-light"
                                placeholder="Enter Password" value="<?php echo $_GET['password']?>"
                                style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                            <div class="mt-3">

                                <button type="submit" class="btn btn-primary" name="update" style="border-radius:20px;width: 100%;
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