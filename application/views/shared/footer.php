  <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="<?php echo base_url();?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/list.js/dist/list.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/quill/dist/quill.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/chart.js/Chart.extension.min.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="<?php echo base_url();?>/assets/js/theme.min.js"></script>
<script>
 $(document).ready(function(){
        $(document).on('click','.delete_data',function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to delete this?"))
            {
                window.location="<?php echo base_url();?>profile/delete_experience/"+id;
            }
            else
            {
                return false;
            }
        });

        $(document).on('click','.delete_education',function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to delete this?"))
            {
                window.location="<?php echo base_url();?>profile/delete_education/"+id;
            }
            else
            {
                return false;
            }
        });

        $(document).on('click','.delete_project',function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to delete this?"))
            {
                window.location="<?php echo base_url();?>profile/delete_project/"+id;
            }
            else
            {
                return false;
            }
        });

        $(document).on('click','.edit_education',function(){
            var elem = this;
            var id = $(this).data('id');
            var startmonth = $(this).data('startmonth');
            var endmonth = $(this).data('endmonth');
            var institute = $(this).data('institution');
            var degree = $(this).data('degree');
            var desc = $(this).data('desc');

            //console.log(id);
            $('#start_month').val(startmonth);
            $('#end_month').val(endmonth);
            $('#institution_name').val(institute);
            $('#degree_name').val(degree);
            $('#description').val(desc);
            
            $('#edu_btn').html("Update");
            $('form').attr('action','<?php echo base_url();?>profile/update_education/'+id);
            //window.location="<?php //echo base_url();?>profile/edit_education/"+id;
            
        });

        $(document).on('click','.edit_experience',function(){
            var elem = this;
            var id = $(this).data('id');
            var startmonth = $(this).data('start');
            var endmonth = $(this).data('end');
            var company = $(this).data('company');
            var position = $(this).data('position');
            var desc = $(this).data('desc');

            //console.log(id);
            $('#start_month').val(startmonth);
            $('#end_month').val(endmonth);
            $('#company_name').val(company);
            $('#position').val(position);
            $('#description').val(desc);
            
            $('#exp_btn').html("Update");
            $('form').attr('action','<?php echo base_url();?>profile/update_experience/'+id);
            //window.location="<?php //echo base_url();?>profile/edit_education/"+id;
            
        });

        $(document).on('click','.edit_project',function(){
            var elem = this;
            var id = $(this).data('id');
            var name = $(this).data('name');
            var url = $(this).data('url');
            var tech = $(this).data('tech');
            var desc = $(this).data('desc');

            //console.log(id);
            $('#project_name').val(name);
            $('#url').val(url);
            $('#technologies').val(tech);
            $('#description').val(desc);
            
            $('#proj_btn').html("Update");
            $('form').attr('action','<?php echo base_url();?>profile/update_project/'+id);
            //window.location="<?php //echo base_url();?>profile/edit_education/"+id;
            
        });

    });
</script>
</body>

</html>