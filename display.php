<?php
// Check existence of id parameter before processing further
   
        $servername = "192.168.0.21";
        $username = "patrick";
        $password = "2ndyrGroupA";
        $dbname = "patandguian";
    

    
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
           
           
   
?>
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
                    <a href="landing.php" class="btn btn-primary"><span<i class="fa fa-backward" aria-hidden="true" style="font-size:20px;"></i>
                    </span>  Back</a>
                    <div class="table-responsive mt-4 mb-5" style="  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <table id="mytable" class="table">
                        <thead class="bg-dark text-light text-center">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </thead>
                        <?php
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <?php echo 
                                    '
                                       
                                        <p><b>'.$row["name"].'</b></p>
                                   ';
                                    ?>
                                </td>
                                <td>
                                    <?php echo 
                                    '
                                      
                                        <p><b>'.$row["email"].'</b></p>'
                                   ;
                                    ?>
                                </td>
                                <td>
                                    <?php echo 
                                    '
                                       
                                        <p><b>'.$row["password"].'</b></p>
                                    ';
                                    ?>
                                </td>

                                <td>
                                        <a href="update.php?id=<?php echo($row['ID']) ?>&name=<?php echo($row['name'])?>&email=<?php echo($row['email'])?>&password=<?php echo($row['password'])?> ?"><button class="btn btn-primary btn-xs">
                                            <span<i class="fa fa-pencil" aria-hidden="true" style="font-size:20px;"></i>
                                            </span>
                                        </button>
                                        </a>

                                        <a href="http://192.168.0.21:8081/patAndGuian/delete.php?id=<?php echo($row['ID'])?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">
                                            <span<i class="fa fa-trash" aria-hidden="true" style="font-size:20px;"></i>
                                            </span>
                                        </button>
                                        </a>
                                    
                                </td>
                            </tr>
                        </tbody>
        
                        <?php
                        
                        }?>
                        
                    <table>
                  
                </div>
            </div>        
        </div>
</body>
</html>