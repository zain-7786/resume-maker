<?php $this->load->view('shared/header');?>
<body>
    <!-- NAVIGATION
    ================================================== -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo base_url();?>dashboard">
                <img src="<?php echo base_url();?>/assets/img/logo.svg" class="navbar-brand-img 
              mx-auto" alt="...">
            </a>   
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>dashboard" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                            <i class="fe fe-home"></i> Dashboards
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <i class="fe fe-file"></i> Profile
                        </a>
                        <div class="collapse " id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>profile/personal_info" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Personal Information
                        </a>
                        <a href="<?php echo base_url();?>profile/experiences" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Experiences
                        </a>
                        <a href="<?php echo base_url();?>profile/educations" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Education
                        </a>
                        <a href="<?php echo base_url();?>profile/projects" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Projects
                        </a>
                        <a href="<?php echo base_url();?>profile/social_profiles" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Social Profiles
                        </a>
                                </li>
                            </ul>
                        </div>
                    </li>           
                </ul>

                <!-- Divider -->
                <hr class="navbar-divider my-3">
                <!-- Heading -->
                <h6 class="navbar-heading">
                    
                </h6>
            </div>
            <!-- / .navbar-collapse -->

        </div>
        
    </nav>
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
        <div class="container my-5" style="background-image: url('<?php echo base_url();?>/assets/img/avatars/projects/bg1.jpg');";>
            <div class="row">
                <div class="col-10">
                <!--<img src="<?php echo base_url();?>/assets/img/avatars/projects/bg1.jpg" alt="..." style="height:94%; width:100%;">-->
                    <div class="card my-5">
                        <div class="card-header" style="background-color:#FF5733;">Get your Profile URL</div>
                        <div class="card-body">http://localhost:8080/first-app/profile/preview/<?php echo $user->unique_key; ?></div>
                    </div> 
                </div><hr>
                <div class="col-3 my-5" >
                    <div class="card my-5" style="border:solid 0px">
                        <div class="card-header" style="background-color:#FF5733;"><span class="fe fe-user"></span>PROFILE VISITOR<span class="fe fe-arrow-down mr-4"></span></div>
                        <div class="card-body" style='align-text:center;'><h1><?php echo $count->visitors_count;?></h1></div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- / .main-content -->

  <?php $this->load->view('shared/footer'); ?>