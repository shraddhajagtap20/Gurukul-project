<?php
	include 'p_header.php';
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p><b>Gurukul : The educational society</b><br>
		   If you are intrested in software devlopment then contact us using below information:<br></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.204353984241!2d77.5866073!3d12.958771599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15debbccefc1%3A0x510bf3e7edb6c694!2sLal%20Bagh%20Main%20Rd%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1672663194891!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Lalbagh main road<br>
					 Bengaluru, Karnataka<br>
                     India.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gurukul@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
		  <?php
				$conn=mysqli_connect("localhost","root","","students");
		
		  ?>

            <form action="student_demo-add.php" method="post" role="form" class="php-email-form">
              <div class="row">
					<div class="col-md-6 form-group">
					<tr>
					<th>Name</th>
					<input type="text" name="name" class="form-control" placeholder="Your name" required>
					</tr>
					</div>
					<div class="form-group col-md-6 ">
					<tr>
					<th>City</th>
					<input type="text" class="form-control" name="city"  placeholder="city" required>
					</tr>
					</div>
					<div class="form-group col-md-6 ">
					<th>Password</th>
					<tr>
					<input type="text" class="form-control" name="password"  placeholder="password" required>
					</tr>
					</div>
					<div class="form-group col-md-6 ">
					<th>Mobile_no</th>
					<tr>
					<input type="text" class="form-control" name="mobile_no"  placeholder="mobile_no" required></tr>
					</div>
					<div class="col-md-6 form-group mt-3 mt-md-0">
					<th>Email</th>
					<tr>
					<input type="email" class="form-control" name="email"  placeholder="Your email" required>
					</tr>
					</div>
					<div class="form-group col-md-6 ">
					<th>Subject</th>
					<tr>
					<input type="text" class="form-control" name="subject"  placeholder="subject" required>
					</tr>
					</div>
					<div class="my-3">
					<div class="loading">Loading</div>
					<div class="error-message">Something went wrong.Plz try again.</div>
					<div class="sent-message">Your message has been sent. Thank you!</div>
					</div>
					<tr>
					<div class="text-center"><button type="submit">Add record</button></div>
					</tr>
			  </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php
	include 'p_footer.php';
?>