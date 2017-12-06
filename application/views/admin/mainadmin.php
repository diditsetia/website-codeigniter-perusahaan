<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.8/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:36:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/fonts.googleapis.com/css13b7.css?family=Open+Sans:400,300,600,700')?>" rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/nifty.min.css') ?>" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo-icons.min.css') ?>" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo.min.css') ?>" rel="stylesheet">



    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/morris-js/morris.min.css') ?>" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/magic-check/css/magic-check.min.css') ?>" rel="stylesheet">



    <!--Themify Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/themify-icons/themify-icons.min.css') ?>" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/summernote/summernote.min.css" rel="stylesheet') ?>">


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url('assets/admin/plugins/pace/pace.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/admin/plugins/pace/pace.min.js') ?>"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url('assets/admin/js/jquery.min.js') ?>"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets/admin/js/nifty.min.js') ?>"></script>


    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/nifty-demo.min.js') ?>"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/morris-js/morris.min.js') ?>"></script>
	  <script src="<?php echo base_url('assets/admin/plugins/morris-js/raphael-js/raphael.min.js') ?>"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/dashboard.js') ?>"></script>


    <!--Icons [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/icons.js') ?>"> </script>

    <!--Form File Upload [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-file-upload.js') ?>"></script>

    <!--Dropzone [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/dropzone/dropzone.min.js') ?>"></script>

    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap-validator/bootstrapValidator.min.js') ?>"></script>


    <!--Form Wizard [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-wizard.js') ?>"></script>

    <!--Summernote [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/summernote/summernote.min.js') ?>"></script>


    <!--Form File Upload [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-text-editor.js') ?>"></script>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
  <div id="container" class="effect aside-float aside-bright mainnav-lg">
      <!--NAVBAR-->
      <!--===================================================-->
          <?php echo $header;?>
      <!--===================================================-->
      <!--END NAVBAR-->

      <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
          <?php echo $konten;?>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
            <?php echo $sidebar;?>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

      </div>

        <!-- FOOTER -->
        <!--===================================================-->
            <?php echo $footer;?>
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->

  </div>
      <!--===================================================-->
      <!-- END OF CONTAINER -->

</body>
<!-- Mirrored from www.themeon.net/nifty/v2.8/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:39:05 GMT -->
</html>
