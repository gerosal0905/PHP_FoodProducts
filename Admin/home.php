<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    
    

    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    .table-wrapper {
    width: 900px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th{
        width: 70px;
    }
    table.table th:first-child{
        width: 50px;
    }
    table.table th:last-child{
        width: 60px;
    }
    table.table th:nth-child(8){
        width:40px;
    }
    table.table th:nth-child(2){
        width:110px;
    }
    table.table th:nth-child(4){
        width:110px;
    }
    table.table th:nth-child(5){
        width:25px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
    
    .navbar {
    background-color: rgb(255, 255, 255);
    color: #d8d8d8;
    
    width: 100%;
    line-height: 80px;
    height: 80px;
    font-size: 14px;
    padding: 0 30px;
    position: absolute;
    top:0;
    left: 0;
   
}

.navbar a{
    text-decoration: none;
    color: #000000;
}

.navbar ul {
    float: right;
    list-style: none;
    height: inherit;
    line-height: inherit;
    padding: 0 50px;
}
.navbar ul li{
    display: inline-block;
}

.navbar ul li a{
    display: block;
    text-align: center;
    min-width: 120px;
    padding: 0 30px;
    text-decoration: none;
    color: #000000;
}

.navbar ul li a:hover{
    color: rgb(156, 155, 160);
    transform: scale(1.2);
    transition: .3s;
    text-shadow: none;
}


.navbar img{
    width: 150px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin-left: 50px;
    margin-top: -15px;
}


.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    margin-top: 120px;
    margin-right: 400px;
    margin-left: 400px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    text-align: center;
}
.btn81 {
  background-color: #fff;
  border: 0 solid #e2e8f0;
  border-radius: 1.5rem;
  box-sizing: border-box;
  color: #0d172a;
  cursor: pointer;
  display: inline-block;
  font-family: "Basier circle",-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1.1rem;
  font-weight: 600;
  line-height: 1;
  padding: 1rem 1.6rem;
  text-align: center;
  text-decoration: none #0d172a solid;
  text-decoration-thickness: auto;
  transition: all .1s cubic-bezier(.4, 0, .2, 1);
  box-shadow: 5px 10px 12px rgba(166, 175, 195, 0.25);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-top: 20px;
  margin-bottom: 20px;
}

.btn81:hover {
  background-color: #1e293b;
  color: #fff;
}

@media (min-width: 768px) {
  .btn81 {
    font-size: 1.125rem;
    padding: 1rem 2rem;
  }
}
    </style>
</head>
<body>
     <div class="navbar">
        <a href = "../index.php" > <img src="nutrilife.jpg" class="logo-img"> </a>
        <ul>
            <li><a href="logout-user.php">Logout</a></li>
          
        </ul>
    </div>
    
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Manage')" id="defaultOpen">Manage Product</button>
        <button class="tablinks" onclick="openCity(event, 'Account')">Account Settings</button>
    </div>

    <!-- Tab content -->
    <div id="Manage" class="tabcontent">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        
                        <div class="col-sm-4">

                            <h2>Manage Product</h2>
                        </div>
                        
                        <div class="col-sm-7">
                            <button type="button" class="btn btn-success add-new" data-bs-toggle="modal" data-bs-target="#demo">
                             Add Product
                            </button>
                        </div>
                    
                    <table class="table table-bordered">
        <?php
        include('dbconfig.php');
        ?>
        
        <!-- Button trigger modal -->
        <div class="container-fluid">
        <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
            echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
        }
        ?>
        </div>
        <!-- ADD MODAL-->
        <div class="modal fade" id="demo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">    
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" name="username" class="form-control" value="<?php echo $fetch_info['name'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Product Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="lname" class="form-control" placeholder="Product Detail" required>
                        </div>

                        <div class="form-group">
                            <select name="category" class="form-control">
                                <option value="">Select Category</option>
                                <option value="Farm Fresh Fruits and Veggies">Farm Fresh Fruits and Veggies</option>
                                <option value="Farm Fresh Salads">Farm Fresh Salads</option>
                                <option value="Made with Nutrilife">Made with Nutrilife</option>
                                <option value="Beverages/In-cup Salads">Beverages/In-cup Salads</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="number" step="any" name="price" class="form-control" placeholder="Price" required>
                        </div>

                        <div class="form-group">
                            <input type="date" name="dated" class="form-control" placeholder="YYYY-MM-DD" required>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image" id="images" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- EDIT MODAL -->
        <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">    
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <input type="hidden" name="edited_id" id="edited_id" value="<?php echo $row['id']?>">

                        <input type="hidden" name="username" value="<?php echo $fetch_info['name'] ?>">

                        <div class="form-group">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
                        </div>

                        <div class="form-group">
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                <option value="Farm Fresh Fruits and Veggies">Farm Fresh Fruits and Veggies</option>
                                <option value="Farm Fresh Salads">Farm Fresh Salads</option>
                                <option value="Made with Nutrilife">Made with Nutrilife</option>
                                <option value="Beverages/In-cup Salads">Beverages/In-cup Salads</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="number" step="any" name="price" id="price" class="form-control" placeholder="Price" required>
                        </div>

                        <div class="form-group">
                            <input type="date" name="dated" id="dated"class="form-control" placeholder="Date" required>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive">
        <?php
        $connection = mysqli_connect("localhost","root", "","nutrilife");
        $query = "SELECT * FROM user";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table id="myDataTable" class="table table-bordered" width="100" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th style="visibility:hidden; display:none;">Product Detail</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Best By Date</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0){
                    while($row = mysqli_fetch_assoc($query_run)){
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td style="visibility:hidden; display:none;"><?php echo $row['lastname']?></td>
                    <td><?php echo $row['category']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['dated']?></td>
                    <td><?php echo '<img src="upload/'.$row['image'].'"width="70px";height="70px";alt=".pdf file">'?></td>
                    <td>

                    <button type="button" class="btn btn-success editbtn">EDIT</button>
              

                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']?>">
                            <input type="hidden" name="delete_image" value="<?php echo $row['image']?>">
                            <input type="hidden" name="username" value="<?php echo $fetch_info['name'] ?>">
                            <button type="submit" name="data_delete" class="btn btn-warning">DELETE</button>  
                        </form>
                    </td>
                </tr>
            <?php
                    }
                }else{
                    echo "No Record Found";
                }
            ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
</div> 
</div> 

    <div id="Account" class="tabcontent">
        <h3>Account Settings</h3>
        <h2>Welcome <?php echo $fetch_info['name'] ?></h2>
        <form method="post" action="generate_pdf.php">
            <button type="submit" id="pdf" name="generate_pdf" class="btn81"><i class="fa fa-pdf" aria-hidden="true"></i>
            Generate Logs</button>
        </form>

        <form action="signup-user.php">
            <button class="btn81">Add Admin Account</button>
        </form>
        <form action="forgot-password.php">
            <button class="btn81">Change Password</button>
        </form>
        <form action="code.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $fetch_info['id']?>">
            <button class="btn81 deletebtn" type="button">Delete Account</button>
            <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                Delete Account?
                            </div>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" name="user_delete" class="btn btn-primary">Yes</button>
                        </div>    
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script>
    $(document).ready( function () {
        $('#myDataTable').DataTable();
    });
    </script>

</body>

<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    $(document).ready(function(){
        /*$('.editbtn').on('click', function(){
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
        $('#edited_id').val(data[0]);
        $('#fname').val(data[1]);
        $('#lname').val(data[2]);
        $('#category').val(data[3]);
        $('#price').val(data[4]);
        $('#dated').val(data[5]);
        $('#image').val(data[6]);*/
        $('#myDataTable tbody').on('click', '.editbtn',function(){
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
        $('#edited_id').val(data[0]);
        $('#fname').val(data[1]);
        $('#lname').val(data[2]);
        $('#category').val(data[3]);
        $('#price').val(data[4]);
        $('#dated').val(data[5]);
        $('#image').val(data[6]);

        });
    });
</script>  
<script>
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
        });
    });
</script>  
</html>