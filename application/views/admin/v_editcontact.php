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
            <h1 class="page-header text-overflow">Contact</h1>


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
                            <span class="menu-title">Edit Contact</span>
                        </a>
                      </li>

                      <li >
                        <a  href="<?php echo site_url('admin/contact') ?>">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Contact</span>
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
                                   <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/updatecontact')?>">
                                     <div class="form-group">
                                       <input type="hidden" name="id" value="<?php echo $editcontact->id_contact ?>">
                                        <label class="col-md-2 control-label" >Address</label>
                                        <div class="col-sm-8">
                                          <textarea placeholder="Address" rows="8" class="form-control" name="address">
                                            <?php echo $editcontact->address ;?>
                                          </textarea>
                                        </div>
                                      </div>

                                       <div class="form-group">
                                            <label class="col-md-2 control-label" >Phone</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" name="phone" value="<?php echo $editcontact->phone?>">
                                            </div>
                                       </div>

                                       <div class="form-group">
                                            <label class="col-md-2 control-label" for="demo-hor-inputemail">Email</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" name="email" value="<?php echo $editcontact->email?>">
                                            </div>
                                       </div>

                                       <div class="form-group">
                                          <label class="col-md-2 control-label" >Maps</label>
                                          <div class="col-sm-8">
                                            <textarea placeholder="" rows="2" class="form-control" name="maps">
                                            <?php echo $editcontact->maps?>
                                            </textarea>
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
