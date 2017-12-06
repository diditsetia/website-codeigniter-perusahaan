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
            <h1 class="page-header text-overflow">Visi Misi</h1>


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
                        <a data-toggle="tab" href="#demo-lft-tab-1">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Visi Misi</span>
                        </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-1" class="tab-pane fade active in">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="panel">

                                      <!--Hover Rows-->
                                      <!--===================================================-->
                                      <div style="padding-bottom: 0px;" class="panel-body">
                                          <table class="table table-hover table-vcenter">
                                              <thead>
                                                  <tr>
                                                      <th class="min-width">Picture</th>
                                                      <th class="mi-width">Visi</th>
                                                      <th class="mi-width">Misi</th>
                                                      <th class="text-center">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td class="text-center">
                                                        <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$datavisimisi['foto_visimisi']); ?>" alt="Image">
                                                      </td>
                                                      <td>
                                                        <p class="text-main text-semibold">
                                                          <?php echo $datavisimisi['visi'] ?>
                                                        </p>
                                                      </td>

                                                      <td>
                                                        <p class="text-main text-semibold">
                                                          <?php echo $datavisimisi['misi'] ?>
                                                        </p>
                                                      </td>
                                                      <td>
                                                          <a href="<?php echo  site_url('admin/hapusvisimisi').'/'.$datavisimisi['id_visimisi'];?>">
                                                            <button class="btn btn-default"><i class="ti-trash"></i></button>
                                                          </a>
                                                          <a href="<?php echo  site_url('admin/editvisimisi').'/'.$datavisimisi['id_visimisi'];?>">
                                                            <button class="btn btn-default"><i class="ti-pencil"></i></button>
                                                          </a>
                                                        
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                      <!--===================================================-->
                                      <!--End Hover Rows-->

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="demo-lft-tab-2" class="tab-pane fade">
                        <div class="">

              					    <div class="panel-body">
                                <div class="col-sm-12">
              					        <div class="">
              					            <!--Horizontal Form-->
              					            <!--===================================================-->
              					            <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksivisimisi') ?>">
                                      <div class="form-group">
                                          <label class="col-md-2 control-label" for="demo-hor-inputemail"></label>
                                          <div class="col-sm-9">
                                            <div  class="image-upload" style="height: 200px; width: 100% ; ">
                                            <label  for="file-input" >
                                              <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="<?php echo base_url('assets/admin/img/profile-photos/2.png') ?>"
                                              style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                                              data-holder-rendered="true">
                                              <span style="margin-left: 85px;"><label>PICTURE</label></span>
                                            </label>
                                            <input type='file' name='userfile' required id='file-input' >
                                          </div>
                                          </div>
                                      </div>

            					                    <div class="form-group">
            					                        <label class="col-md-2 control-label" >Visi</label>
            					                        <div class="col-sm-9">
                                                <div class="pane">
                                                   <div class="panel-body">

                                                       <!--Summernote-->
                                                       <!--===================================================-->

                                                         <textarea id="demo-summernote-full-width" class="full-content" name="visi">

                                                         </textarea>

                                                       <!--===================================================-->
                                                       <!-- End Summernote -->

                                                   </div>
                                               </div>
            					                        </div>
            					                    </div>


            					                    <div class="form-group">
            					                        <label class="col-md-2 control-label">Misi</label>
            					                        <div class="col-sm-9">
                                                <div class="pane">
                                                   <div class="panel-body">

                                                       <!--Summernote-->
                                                       <!--===================================================-->
                                                       <textarea id="demo-summernote-full-width" class="full-content" name="misi">

                                                       </textarea>
                                                       <!--===================================================-->
                                                       <!-- End Summernote -->

                                                   </div>
                                               </div>
            					                        </div>
            					                    </div>


            					                <div class="panel-footer text-right">
            					                    <button class="btn btn-success" type="submit">submit</button>
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
