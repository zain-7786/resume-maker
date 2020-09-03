
<?php $this->load->view('shared/layout');?>
<!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      
        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    
          
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">
      
              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">
        
                
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                
                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">
                
                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    
            
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="<?php echo base_url();?>/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="<?php echo base_url();?>dashboard/logout" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>
  
          </div>
        </nav>
      

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">
          
          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col-auto">

                <!-- Avatar -->
                <div class="avatar avatar-lg avatar-4by3">
                  <img src="<?php echo base_url();?>/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                </div>

              </div>
              <div class="col ml-n3 ml-md-n2">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  PERSONAL INFO
                </h1>

              </div>
              <div class="col-12 col-md-auto mt-3 mt-md-0"> 
                <!-- Avatar group -->
                <div class="avatar-group"> 
                </div>
              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/personal_info" class="nav-link active">
                      Perosonal Information
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/experiences" class="nav-link">
                      Experiences
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/educations" class="nav-link">
                      Educations
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/projects" class="nav-link">
                      Projects
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/social_profiles" class="nav-link">
                      Social Profiles
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div>

        </div>
      </div> <!-- / .header -->

      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form class="mb-4" method="POST" action="<?php echo base_url();?>profile/<?php echo $user_data ?  'update_personal_info' : 'add_personal_info'; ?>" enctype='multipart/form-data' >
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $user_data ? $user_data->name: ''; ?>">
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Phone/Contact</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $user_data ? $user_data->phone : ''; ?>">
                            <span class="text-danger"><?php echo form_error("phone"); ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $user_data ? $user_data->email : ''; ?>">
                            <span class="text-danger"><?php echo form_error("email"); ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Tagline</label>
                            <input type="text" class="form-control" name="tagline"value="<?php echo $user_data ? $user_data->tagline : ''; ?>" placeholder="" >
                            <span class="text-danger"><?php echo form_error("tagline"); ?></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Current Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $user_data ? $user_data->address : ''; ?>">
                            <span class="text-danger"><?php echo form_error("address"); ?></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="<?php echo $user_data ? $user_data->description : ''; ?>">
                            <span class="text-danger"><?php echo form_error("description"); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" name="picture" value="<?php echo $user_data ? $user_data->picture : ''; ?>">
                            <span class="text-danger"><?php echo form_error("picture"); ?></span>
                        </div>
                </div>
              </div>
                <!-- Divider -->
                <hr class="mt-4 mb-5">
                        <!-- Submit -->
                         <input type='hidden' name='hidden_id' value='<?php echo $user_data ? $user_data->id : '';?>' />
                        <button type="submit" class="btn btn-primary lift" name="<?php echo $user_data ? 'update' :  'insert';?>" value="<?php echo $user_data ? 'update' : 'insert';?>">go to next</button>
                    </div>
                </div> 
            </form>
            <hr class="mt-4 mb-5">
          </div>
        </div>
      </div>  
      
    </div> <!-- / .main-content -->

    <?php $this->load->view('shared/footer'); ?>