<?php require_once("../../private/initialize.php"); ?>

<?php $page_title = "Become a Member"; ?>
<?php

  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (uname,email,password) ";
  $sql .= "VALUES (";
  $sql .= "'". $uname ."',";
  $sql .= "'". $email ."',";
  $sql .= "'". $password ."'";
  $sql .= ")";
  $users = mysqli_query($db, $sql);

 ?>
<?php include(SHARED_PATH .'/header.php'); ?>



<!-- ********************MAIN CONTENT*********************************-->

    <div class="content">
      <div class="jumbotron">
        <p>
          Become a member and track your project progress, receive discounts and coupons from hardware stores.
        </p>
      </div>

       <form id="form1" action="member.php" method="post" class="form1">
         <div class="form-group row">
           <label for="uname" class="col-sm-2">Username</label>
           <div class="col-sm-10">
             <input name="uname" id="uname" type="text" maxlength="50" class="form-control" placeholder="Enter your username" />
           </div>
         </div>


         <div class="form-group row">
           <label for="email" class="col-sm-2">Email</label>
           <div class="col-sm-10">
             <input name="email" id="email" type="text" maxlength="50" class="form-control" placeholder="Enter your email" />
           </div>
         </div>

         <div class="form-group row">
           <label for="email" class="col-sm-2">Password</label>
           <div class="col-sm-10">
             <input name="password" id="password" type="password" maxlength="20" class="form-control" placeholder="Enter your password" />
           </div>
         </div>

         <div class="form-group row">
           <label for="email" class="col-sm-2">Confirm Password</label>
           <div class="col-sm-10">
             <input name="con_password" id="con_password" type="password" maxlength="20" class="form-control" placeholder="Enter your password" />
           </div>
         </div>

         <div class="form-group row">
           <div class="col-sm-offset-2 col-sm-10">
             <input type="submit" value="Submit" class="btn btn-primary" />
             <button type="reset" class="btn btn-primary">Clear</button>
           </div>
         </div>

       </form>
    </div>

<?php include(SHARED_PATH .'/footer.php'); ?>
