    <?php $this->load->view('shared/header'); ?>
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
                

                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>dashboard" data-toggle="" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
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