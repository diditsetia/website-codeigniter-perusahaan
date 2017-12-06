    <style >
      #container .table .mi-width {
      width: 25%;
    }
    .pane {
        border-radius: 3px;
        border: 0;
        box-shadow: 0 1px 2px 1px rgba(113, 113, 113, 0.2);
        margin-bottom: 20px;
    }

    .task-img {
      width: 30%;

    }
    .tasklist {
        background-color: rgba(0,0,0,.03);
        border-radius: 3px;
        padding: 0px;
    }

    </style>
<div id="content-container">
    <div id="page-head">
      <!--Page Title-->
        <div id="page-title">
          <h1 class="page-header text-overflow">Struktur Organisasi</h1>
        </div>
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
                            <span class="menu-title">Struktur Organisasi</span>
                        </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create Anggota</span>
                        </a>
                      </li>

                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-3">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create Picture</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-1" class="tab-pane fade active in">
                          <div class="row">
                					    <div class="col-lg-12">
                                  <div class="panel">
                                    <div class="col-md-6">

                                    <ul id="demo-tasklist-upcoming" class="sortable-list tasklist list-unstyled ui-sortable">

                                        <li id="demo-tasklist-3" class="task-success ui-sortable-handle">
                                            <p class="text-bold text-main text-sm">PICTURE</p>
                                            <div class="">
                                                <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$pictureso['picture']) ?>" alt="Image">
                                            </div>
                                            <p class="pad-btm bord-btm"></p>
                                              <div class="btn-group">
                                                <a href="<?php echo  site_url('admin/hapuspictureso').'/'.$pictureso['id_picture'];?>">
                                                <button class="btn btn-default"><i class="ti-trash"></i></button>
                                                </a>
                                                <a href="<?php echo  site_url('admin/editpictureso').'/'.$pictureso['id_picture'];?>">
                                                <button class="btn btn-default"><i class="ti-pencil"></i></button>
                                                </a>
                                              </div>
                                        </li>

                                    </ul>

                                  </div>
                                  <div class="col-md-12">
                                    <?php $no=$this->uri->segment('3') + 1; ?>
                					        <div class="panel">

                					            <!--Hover Rows-->
                					            <!--===================================================-->

                					                <table class="table table-hover table-vcenter">
                					                    <thead>
                					                        <tr>
                                                      <th class="min-width">No</th>
                					                            <th class="min-width">Photo</th>
                					                            <th class="mi-width">Name</th>
                                                      <th class="mi-width">Position</th>
                                                      <th class="mi-width">status</th>
                					                            <th class="text-center">Action</th>
                					                        </tr>
                					                    </thead>
                                              <?php foreach ($dataso as $key) { ?>
                					                    <tbody>
                					                        <tr>
                                                    <td>
                                                        <p class="text-center text-semibold">
                                                          <?php echo $no ?>
                                                        </p>
                                                    </td>
                					                            <td class="text-center">
                                                        <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']) ?>" alt="Image">
                                                      </td>
                					                            <td>
                					                                <p class="text-main text-semibold">
                                                            <?php echo $key['name']?>
                                                          </p>
                					                            </td>
                                                      <td>
                                                         <p class="text-main text-semibold">
                                                           <?php echo $key['posisi']?>
                                                          </p>
                                                     </td>

                                                     <td>
                                                        <p class="text-main text-semibold">
                                                          <?php echo $key['status'] ?>
                                                         </p>
                                                    </td>
                					                            <td class="text-center">
                                                          <div class="btn-group">
                                                            <a href="<?php echo  site_url('admin/hapusso').'/'.$key['id_strukturorganisasi'];?>">
                                                              <button class="btn btn-default"><i class="ti-trash"></i></button>
                                                            </a>
                                                            <a href="<?php echo  site_url('admin/editso').'/'.$key['id_strukturorganisasi']; ?>">
                                                              <button class="btn btn-default"><i class="ti-pencil"></i></button>
                                                            </a>
                                                          </div>
                                                      </td>
                					                        </tr>
                					                    </tbody>
                                              <?php $no++; ?>
                                            <?php } ?>
                					                </table>
                					            </div>
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
              					           <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksiso')?>">
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
                                             <label class="col-md-2 control-label" >Name</label>
                                             <div class="col-sm-6">
                                                <input type="text" class="form-control" name="nama">
                                             </div>
                                         </div>

                                         <div class="form-group">
                                            <label class="col-md-2 control-label" >Position</label>
                                            <div class="col-sm-6">
                                               <input type="text" class="form-control" name="posisi">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-2 control-label" >Status</label>
                                            <div class="col-sm-6">

                                                <div class="radio">

                                                <!-- Inline radio buttons -->
                                                <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="status" value="pejabat">
                                                <label for="demo-inline-form-radio">Pejabat</label>

                                                <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="status" value="pegawai">
                                                <label for="demo-inline-form-radio-2">Pegawai</label>


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

                      <div id="demo-lft-tab-3" class="tab-pane fade">
                        <div class="">

                            <div class="panel-body">



                                <div class="col-sm-12">
                                <div class="">
                                    <!--Horizontal Form-->
                                    <!--===================================================-->
                                    <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo site_url('admin/aksiuploadpicture') ?>">
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


                                      <div class="panel-footer text-right">
                                          <button class="btn btn-success" type="submit">upload</button>
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
