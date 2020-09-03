<?php $this->load->view('shared/header'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>cv-preview</title>
</head>
<body>

<div class="container my-4" id="main">
    <div class="row">
    <div class="card col-sm-3" style="background-color:lavender;">
    <h5 class='mt-2 mx-5'>Profile Picture</h5>
        <!--<div class='my-2 mx-5' style="border:solid 3px; height:150px; width:150px"></div>-->
        <div class="avatar avatar-xxl mx-5">
        <img src="<?php echo site_url();?>/assets/img/uploads/<?php echo $personalinfo_data->picture;?>" alt="..." class="avatar-img rounded-circle">
    
        </div>
        <hr style="border:1px solid">
        <h5><span class="badge badge-primary fe fe-user">Name :</span> <small><?php echo $personalinfo_data->name;?></small></h5>
        <h5><span class="badge badge-primary fe fe-mail">Email:</span> <small><?php echo $personalinfo_data->email;?></small></h5>
        <h5><span class=""><span class="badge badge-primary fe fe-phone">..Phone</span> <small><?php echo $personalinfo_data->phone;?></small></h5>
        <h5><span class="badge badge-primary fe fe-align-center">Description:</span> <small><?php echo $personalinfo_data->description;?></small></h5>
        <h5><span class="badge badge-primary">Tagline:</span> <small>"<?php echo $personalinfo_data->tagline;?>"</small></h5>
        <h5><span class="badge badge-primary">Address:</span> <small><?php echo $personalinfo_data->address;?></small></h5><br>
        <hr style="border:1px solid">
   
   
        <h4><span class="badge badge-dark">Social Profiles</span></h4><br>
        
        <h5><span class="fe fe-user"></span>Facebook</b>: <br> <small><?php echo $social_data->facebook;?></small></h5>
        <h5><span class="fe fe-linkedin"></span>LinkedIn</b>: <br><small><?php echo $social_data->linkedin;?></small></h5>
        <h5><span class="fe fe-user"></span>Twitter</b>: <br><small><?php echo $social_data->twitter;?></small></h5>
        <h5><span class="fe fe-user"></span>Github</b>: <br><small><?php echo $social_data->github;?></small></h5>
        <h5><span class="fe fe-user"></span>StackOverFlow</b>: <small><?php echo $social_data->stackoverflow;?></small></h5><hr>
       
    </div>

   
    <div class="card col-sm-9" style="background-color:lavenderblush; ">
        <h3 class='my-4'><b><u><span class="badge badge-danger">EXPERIENCES</span></u></b></h4><hr style="border:1px solid">
        <?php foreach($experience_data as $key => $row3){?>
        <div>
            <b><span class="badge badge-success">From</u> <?php echo $row3->start_month;?> <b><u> To</u></b> <?php echo $row3->end_month;?></span>
            <h6>At : <small> <?php echo $row3->company_name;?> </small></h6>
            <h6>Position: <small><?php echo $row3->position;?></small></h6>
            <h6>Description: <small><?php echo $row3->description;?> </small></h6><hr>
        </div>
    <?php   }
    ?>    
        

        
        <h3 class='my-2'><b><u><span class="badge badge-danger">EDUCATION</span></u></b></h5><hr style="border:1px solid">
        <?php foreach($education_data as $row4){?>
        <div>
        <span class="badge badge-success"><b><u>From</u> <?php echo $row4->start_month;?> <b><u> To</u></b> <?php echo $row4->end_month;?></span>
            <h6>At <small><?php echo $row4->institution_name;?></small></h6>
            <h6>Degree Program: <small><?php echo $row4->name;?></small></h6>
            <h6>Description: <small><?php echo $row4->description;?> </small></h6><hr>
        </div>
    <?php
    }?>    

    
        <h3 class='my-2'><b><u><span class="badge badge-danger">PROJECTS</span></u></b></h5><hr style="border:1px solid">
        <?php foreach($project_data as $row5){?>
        <div>
            <h6><b><u>Name</u>: </b><small> <?php echo $row5->name;?> </small></h4>
            <h6>URL link: <small><?php echo $row5->url;?></small></h6>
            <h6>Technologies: <small><?php echo $row5->technologies;?></small></h6>
            <h6>Description: <small><?php echo $row5->description;?> </small></h6><hr>
        </div>
    <?php 
    }?>    
    </div>
  </div>
  </div><hr>
  <input type="button" align="right" id="btnExport" value="Export PDF" /><hr>

  <script>
  $("body").on("click", "#btnExport", function () {
            alert("here");
            html2canvas($('#main')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cv.pdf");
                }
            });
        });
  </script>
</body>
</html>