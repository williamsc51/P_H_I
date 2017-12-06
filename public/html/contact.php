<?php require_once("../../private/initialize.php"); ?>

<?php $page_title = "Contact Us"; ?>
<?php include(SHARED_PATH .'/header.php'); ?>

<!-- ********************MAIN CONTENT*********************************-->

    <div class="content">
      <div class="jumbotron">
        <p>
          We are available for all your home improvement needs. We would love to here from you!
        </p>
      </div>

       <form id="form1" action="../../private/contact_form.php" method="post" class="form1">
         <div class="form-group row">
           <label for="fname" class="col-sm-2">Fistname</label>
           <div class="col-sm-10">
             <input name="fname" id="fname" type="text" maxlength="15" class="form-control" placeholder="Enter your first name" />
           </div>
         </div>

         <div class="form-group row">
           <label for="lname" class="col-sm-2">Lastname</label>
           <div class="col-sm-10">
             <input name="lname" id="lname" type="text" maxlength="15" class="form-control" placeholder="Enter your last name" />
           </div>
         </div>

         <div class="form-group row">
           <label for="contact" class="col-sm-2">Phone Number</label>
           <div class="col-sm-10">
             <input name="contact" id="contact" type="text" maxlength="15" class="form-control" placeholder="Enter your contact number" />
           </div>
         </div>


         <div class="form-group row">
           <label for="email" class="col-sm-2">Email</label>
           <div class="col-sm-10">
             <input name="email" id="email" type="text" maxlength="15" class="form-control" placeholder="Enter your email" />
           </div>
         </div>

         <div class="form-group row">
           <label for="date" class="col-sm-2">Desired Start Date</label>
           <div class="col-sm-10">
             <input name="date" id="date" type="date" class="form-control" value="" placeholder="01/01/17" />
           </div>
         </div>

         <div class="form-group row">
           <label for="service" class="col-sm-2">Select Service</label>
           <div class="col-sm-10">
           <select name="service" id="service">
                <option value="defaul">Select the service request</option>
                <option value="floor">Flooring</option>
                <option value="roof">Roofing</option>
                <option value="side">Siding</option>
                <option value="bathroom">Bathroom</option>
                <option value="kitchen">Kitchen</option>
                <option value="basement">Basement</option>
                <option value="other">Other</option>
           </select>
         </div>
         </div>

         <div class="form-group row">
           <label for="date" class="col-sm-2">Description</label>
           <div class="col-sm-10">
            <textarea name="description" rows="8" cols="80" placeholder="Enter a breif description of the project"></textarea>
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
