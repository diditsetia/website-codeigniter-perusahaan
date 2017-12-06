<style >
  #container .table .mi-width {
  width: 80%;

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
            <h1 class="page-header text-overflow">Gallery</h1>


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
                            <span class="menu-title">Gallery</span>
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
                					        <div class="">
                					            <div class="panel-heading">
                					                <h3 class="panel-title">Gallery</h3>
                					            </div>

                					            <!--Hover Rows-->
                					            <!--===================================================-->
                					            <div style="padding-bottom: 0px;" class="panel-body">
                                        <?php foreach ($datagallery as $key ) { ?>

                                        <div class="col-md-3">
                                        <ul id="demo-tasklist-upcoming" class="sortable-list tasklist list-unstyled ui-sortable" style="  padding-left: 0px;  padding-bottom: 0px;  padding-right: 0px;  padding-top: 0px;">

                                        <li id="demo-tasklist-3" class="task-success ui-sortable-handle">
                                           <p class="text-bold text-main text-sm">Judul: <?php echo $key['judul']?></p>
                                           <div class="task-img">
                                               <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']); ?>" alt="Image">
                                           </div>
                                           <p class="pad-btm bord-btm">keterangan: <?php echo $key['keterangan']?></p>

                                               <span class="box-inline">
                                                 <a href="<?php echo  site_url('admin/hapusgallery').'/'.$key['id_gallery'];?>">
                                                   <button class="btn btn-default"><i class="ti-trash"></i></button>
                                                 </a>
                                                 <a href="<?php echo  site_url('admin/editgallery').'/'.$key['id_gallery'];?>">
                                                   <button class="btn btn-default"><i class="ti-pencil"></i></button>
                                                 </a>
                                               </span>


                                            </li>

                                            </ul>
                                          </div>

                                      <?php } ?>
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
              					            <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksigallery')?>">
                                      <div class="form-group">
                                         <label class="col-md-2 control-label" for="demo-hor-inputemail"></label>
                                         <div class="col-sm-9">
                                            <div  class="image-upload" style="height: 200px; width: 100% ; ">
                                            <label  for="file-input" >
                                              <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="<?php echo base_url('assets/admin/img/profile-photos/2.png') ?>"
                                              style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                                              data-holder-rendered="true">
                                              <span style="margin-left: 85px;"><label>FOTO</label></span>
                                            </label>
                                            <input type='file' name='userfile' required id='file-input' >
                                          </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                          <label class="col-md-2 control-label" >Judul</label>
                                          <div class="col-sm-8">
                                             <input type="text" class="form-control" name="title">
                                          </div>
                                     </div>

                                     <div class="form-group">
                                        <label class="col-md-2 control-label" >Keterangan</label>
                                        <div class="col-sm-8">
                                          <textarea placeholder="keterangan" rows="8" class="form-control" name="keterangan"></textarea>
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
