<?php $this->load->view('shared/header'); ?>

  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign up
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Free access to our dashboard.
          </p>

          <!-- Form -->
          <form method="POST" action="<?php echo base_url()?>sign_in">

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Email Address
              </label>

              <!-- Input -->
              <input type="email" name="email" class="form-control" placeholder="name@address.com">

            </div>

            <!-- Password -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Password
              </label>

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" name="password" class="form-control form-control-appended" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button type='submit' class="btn btn-lg btn-block btn-primary mb-3">
              Sign up
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Already have an account? <a href="<?php echo base_url();?>sign_in">Log in</a>.
              </small>
            </div>

          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

<?php $this->load->view('shared/footer');?>
    