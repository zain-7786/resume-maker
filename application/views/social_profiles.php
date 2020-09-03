
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
               
              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">
      
              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">
        
                <!-- Toggle -->
                <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

               
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
                  SOCIAL PROFILES
                </h1>

              </div>
              <div class="col-12 col-md-auto mt-3 mt-md-0">
                
                <!-- Avatar group -->
                <div class="avatar-group">
                  
                  
                </div>

                <!-- Button -->
               

              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="<?php echo base_url();?>profile/personal_info" class="nav-link">
                      Personal Information
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
                    <a href="<?php echo base_url();?>profile/social_profiles" class="nav-link active">
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
          <form class="mb-4" method="POST" action="<?php echo base_url();?>profile/<?php echo $user_data ? 'update_social_profiles' : 'done';?>">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook"  value="<?php echo $user_data ?$user_data->facebook : ''; ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin"  value="<?php echo $user_data ?  $user_data->linkedin : ''; ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter"  value="<?php echo $user_data ?$user_data->twitter : ''; ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Github</label>
                            <input type="text" class="form-control" name="github"  value="<?php echo $user_data ? $user_data->github : ''; ?>" placeholder="" >
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>StackOverFlow</label>
                            <input type="text" class="form-control" name="stackoverflow"  value="<?php echo $user_data ? $user_data->stackoverflow : ''; ?>">
                        </div>
                    </div>
                <hr class="mt-4 mb-5">
                        <input type='hidden' name='hidden_id' value='<?php echo $user_data ? $user_data->id : ''; ?>' />
                        <button type="submit" class="btn btn-primary" name="<?php echo $user_data ? 'update' : 'insert';?>" value="<?php echo $user_data ? 'update' : 'insert'; ?>"   id="soc_update">Update</button>&nbsp;
                        <button href="<?php echo base_url();?>profile/preview" class="btn btn-primary">Preview CV    </button>
                    </div>
                </div>
            </form>
          </div>
        </div>   
      </div>  
      
    </div> <!-- / .main-content -->

    <?php $this->load->view('shared/footer'); ?>