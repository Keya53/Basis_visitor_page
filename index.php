<?php
include './conn.php';
?>
<?php
if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {
//     echo '<pre>', print_r($_POST);
//        die();

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars($_POST['email']);

    $phone = htmlspecialchars($_POST['phone']);

    $Organization = htmlspecialchars($_POST['Organization']);
    $Profession = htmlspecialchars($_POST['Profession']);

    $district = htmlspecialchars($_POST['district']);
    $gender = htmlspecialchars($_POST['gender']);
//    $sql = "insert into visitors(Name,Email,Phone,Organization,Profession,District,Gender) "
//            . " values('$name','$email','$phone','$Organization','$Profession','$district','$gender)";

    $sql = "INSERT INTO `visitors`(`Name`, `Email`, `Phone`, `Organization`, `Profession`, `District`, `Gender`)
            VALUES ('$name','$email','$phone','$Organization','$Profession','$district','$gender')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        ?>
        <script> alert("Data Insertion Successful")</script>
        <?php
    } else {
        ?>
        <script> alert("Error in Data Insertion")</script>
        <?php
    }

    if ($res) {
        ?>
        <script>alert("Data insertion Successful")</script>
        <?php
    } else {
        ?>
        <script>alert("Error in Data Insertion")</script>
        <?php
    }
}
?>
<div class="">
    
        <div class="row navbar-fixed-top">
        <img src="img/logo.png" class="logo col-md-2">     
        <div class="menu col-md-8 " >
            <ul class="nav nav-pills">
                <li ><a>Home</a></li>
                <li><a>About</a></li>
                <li><a>Sessions</a></li>
                <li><a>Venue</a></li>
                <li><a>Exhibitors</a></li>
                <li><a>Speakers</a></li>

                <li><a>Photo Gallery</a></li>
                <li><a>News</a></li>
                <li class="active"><a>Register</a></li>
                <li><a>Search</a></li>

            </ul>
        </div>
    
        </div>
  <section id="slider">
        <div class="slider-overlay">
            <div class="container">
            <h1>Visitor Registration 2019</h1>
       </div>
            </div>
    </section>
   

    <div class="col-md-8 col-md-offset-2" >
        <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Name *</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Email *</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Phone *</label>
                    <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Organization *</label>
                    <input type="text" class="form-control" placeholder="Enter Organization" name="Organization">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Profession *</label>
                    <select class="form-control" name="Profession">
                        <option value="Select">Select</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Govt">Govt</option>
                        <option value="Other">Other</option>
                    </select>

                </div>
            </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Gender *</label><br>

                    <label class="radio-inline">
                        <input type="radio" name="gender" value="male"> Male
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="gender" value="female"> Female
                   </label>

                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">District *</label>
                    <select class="form-control" name="district">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Mymenshing">Mymenshing</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Kishoregonj">Kishoregonj</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
          
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>

            </div>

        </form>
       
    </div>   
</div>
<?php include './footer.php'; ?>