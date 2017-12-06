<style >
  #container .table .mi-width {
  width: 40%;

}

.pane {
    border-radius: 3px;
    border: 0;
    box-shadow: 0 1px 2px 1px rgba(113, 113, 113, 0.2);
    margin-bottom: 20px;
}
</style>
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Layanan</h1>


        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="row">
          <div class="col-lg-12">

              <!--Default Tabs (Left Aligned)-->
              <!--===================================================-->
              <div class="tab-base">

                  <!--Nav Tabs-->
                  <ul class="nav nav-tabs">
                      <li class="active">
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-pencil"></i>
                            <span class="menu-title">Edit Layanan</span>
                        </a>
                      </li>

                      <li >
                        <a  href="<?php echo site_url('admin/layanan') ?>">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Layanan</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-2" class="tab-pane fade active in">
                        <div class="">

                            <div class="panel-body">



                                <div class="col-sm-12">
                                <div class="">
                                    <!--Horizontal Form-->
                                    <!--===================================================-->
                                   <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/updatelayanan')?>">
                                     <div class="form-group">
                                         <label class="col-md-2 control-label" for="demo-hor-inputemail"></label>
                                         <div class="col-sm-9">
                                           <input type="hidden" name="id" value="<?php echo $editlayanan->id_layanan ?>">
                                           <div  class="image-upload" style="height: 200px; width: 100% ; ">
                                             <?php if ($editlayanan->picture == NULL) { ?>
                                               <label  for="file-input" >
                                                 <img  class=""  src="<?php echo base_url('assets/admin/img/profile-photos/2.png') ; ?>"
                                                 style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                                                 data-holder-rendered="true">
                                                 <span style="margin-left: 67px;"><label>PICTURE</label></span>
                                               </label>
                                               <input type='file' name='userfile'  required id='file-input' >

                                             <?php } else { ?>
                                               <label  for="file-input" >
                                                 <img  class=""  src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$editlayanan->picture); ?>"
                                                 style="height: 100px; width:150px; display: block; margin-top:35px; margin-left: 55px;margin-bottom: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"
                                                 data-holder-rendered="true">
                                                 <span style="margin-left: 105px;"><label>PICTURE</label></span>
                                               </label>
                                             <input type='file' name='userfile'  id='file-input' >
                                             <input type='hidden' name='oldfile' value="<?php echo $editlayanan->picture ?>"  id='file-input' >
                                              <?php } ?>

                                           </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                        <label class="col-md-2 control-label" for="demo-hor-inputemail">Layanan</label>
                                        <div class="col-sm-9">
                                           <div class="pane">
                                              <div class="panel-body">

                                                  <!--Summernote-->
                                                  <!--===================================================-->
                                                  <textarea id="demo-summernote"  name="layanan">
                                                    <?php echo $editlayanan->layanan ;?>
                                                  </textarea>
                                                  <!--===================================================-->
                                                  <!-- End Summernote -->

                                              </div>
                                          </div>
                                        </div>
                                    </div>

                                      <div class="panel-footer text-right">
                                          <button class="btn btn-success" type="submit">update</button>
                                      </div>
                                  </form>
                                  <!--===================================================-->
                                  <!--End Horizontal Form-->

                    </div>
                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!--===================================================-->
              <!--End Default Tabs (Left Aligned)-->
        </div>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>

<script>
      $('#summernote').summernote({
        height: 250,
      });

</script>
