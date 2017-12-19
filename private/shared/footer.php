<!-- ********************FOOTER*********************************-->
  <div class="footer">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">

          <h4>Contact</h4>
            <p>
              email: customer@work.com
            </p>

            <p>
              Office: 555-555-555
            </p>

            <p>
              Cell: 555-555-555
            </p>
      </div>

      <div class="col-lg-2">
        <h4>Services</h4>
          <p>
            Roofing
          </p>

          <p>
            Flooring
          </p>

          <p>
            <a href=" <?php echo url_for('/html/service.php'); ?> ">more...</a>
          </p>
      </div>

      <div class="col-lg-2">
        <h4>Connect</h4>
          <p>
            <img src="<?php echo url_for('/img/facebook.gif') ?>" width="30px" height="30px" alt="Facebook"/>
            Facebook
          </p>

          <p>
            <img src="<?php echo url_for('/img/insta.png') ?>" width="30px" height="30px" alt="Instagram"/>
            Instagram
          </p>
    </div>

    <div class="col-lg-2">
        <h4>About Us</h4>
          <p>
            <a href="#">Help</a>
          </p>

          <p>
            <a href="<?php echo url_for('/html/contact.php'); ?>">Contact Us</a>
          </p>

          <p>
            <a href="#">Careers</a>
          </p>
    </div>


    <div class="col-lg-2">

        <h4>Enjoy</h4>

        <p>Become a member and enjoy upd</p>
        <a class="btn btn-primary btn-large" href="#"> Become A Member</a></a>
    </div>

  </div>
</div>
<div class="row">
     <div class="col-lg-12">
        <p> &copy; 2016 Professional Home Improvement, All rights reserved.</p>
     </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo url_for('/js/index.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url_for('/js/jquery.min.js'); ?> "></script>
<script type="text/javascript" src="<?php echo url_for('/js/bootstrap.js'); ?> "></script>
</body>
</html>
