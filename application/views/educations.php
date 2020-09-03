
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
              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">
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
                  EDUCATIONS
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
                    <a href="<?php echo base_url();?>profile/educations" class="nav-link active">
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
          <form class="mb-4" method="POST" action="<?php echo base_url();?>profile/add_education">
                <div class="row">
                    <div class="col-12 col-md-6">

                        <!-- First name -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                Start Month
                </label>

                            <!-- Input -->
                            <input type="text" class="form-control" name="start_month" id="start_month" placeholder="Enter in Format(DD/MM/YYYY)">
                            <span class="text-danger"><?php echo form_error("start_month"); ?></span>

                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Last name -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                End Month
                </label>

                            <!-- Input -->
                            <input type="text" class="form-control" name="end_month" id="end_month" placeholder="Enter in Format(DD/MM/YYYY)">
                            <span class="text-danger"><?php echo form_error("end_month"); ?></span>

                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Email address -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                Institution Name
                </label>

                            <!-- Form text -->

                            <!-- Input -->
                            <input type="text" class="form-control" name="institution_name" id="institution_name" placeholder="Enter your College/University name">
                            <span class="text-danger"><?php echo form_error("institution_name"); ?></span>

                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Phone -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                Degree Name
                </label>

                            <!-- Input -->
                            <input type="text" class="form-control" name="degree_name" id="degree_name" placeholder="Specify your Degree" >
                            <span class="text-danger"><?php echo form_error("degree_name"); ?></span>

                        </div>

                    </div>
                    <div class="col-12">

                        <!-- Birthday -->
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                Description
                </label>

                            <!-- Input -->
                            <input type="text" class="form-control" name="description" id="description" placeholder="Enter briefly about your Field">
                            <span class="text-danger"><?php echo form_error("description"); ?></span>

                        </div>

                    </div>
                    

                <!-- Divider -->
                <hr class="mt-4 mb-5">

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary lift" name="edu_btn" id='edu_btn'>
                Save
                </button>

                    </div>
                </div>
            </form>
          </div>
          <?php
if($education_data != ''){
      foreach($education_data as $key => $row)
      {
?>
          <div class="card" style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
                <div class="card-body">
                  <h3 class="card-title"><b><?php echo $key+1; ?>- <u>From</u><?php echo $row->start_month; ?><b><u> To</u></b> <?php echo $row->end_month; ?></h3>
                  <p class="card-text">
                    <h6>At <small><?php echo $row->institution_name;?></small></h6>
                    <h6>Degree name: <small><?php echo $row->name;?></small></h6>
                    <h6>Description: <small><?php echo $row->description; ?> </small></h6><hr>
                  </p>
                  <a href="#" class="btn btn-danger delete_education" id='<?php echo $row->id; ?>'>DELETE</a>
                  <a href="javascript:void(0)" class="btn btn-danger edit_education" data-id='<?php echo $row->id; ?>' data-startmonth='<?php echo $row->start_month; ?>' data-endmonth='<?php echo $row->end_month; ?>' data-institution='<?php echo $row->institution_name; ?>' data-degree='<?php echo $row->name; ?>' data-desc='<?php echo $row->description; ?>'>EDIT</a>
                </div>
              </div>
      <?php }
      }else{
        echo '<div><h2>No Education added yet</div>';
      }
?>

        </div>
      </div>  
      
    </div> <!-- / .main-content -->

    <?php $this->load->view('shared/footer'); ?>