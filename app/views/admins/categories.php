<?php require APPROOT . '/views/inc/admheader.php'; ?>
 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
        <small>All Blog Categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <a href="#">Dashboard</a></li>
        <li class="active">Categories</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    
                    <div class="">
                        <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="<?php echo URLROOT; ?>/admins/categories">
                            <div class="input-group">
                                <input type="hidden" name="search">
                                <input type="text" name="catname" class="form-control input-sm " style="width: 600px;" placeholder="Add New..." value="">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default search-btn" type="Submit" name="Submit"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        
                    </div>
                    <!-- <div class="pull-right">
                        <a id="add-button" title="Add New" class="btn btn-success" href="<?php   echo URLROOT ?>/admins/newpost"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div> -->
                </div>
              <!-- /.box-header -->
                <?php flash('post_message');  ?>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>Action</th>
                        <th>Title</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['cats'] as $cats) :  ?>
                      <tr>
                        <td width="70">
                           <a title="Delete" class="btn btn-xs btn-danger delete-row" href="<?php echo URLROOT; ?>/admins/deletecat/<?php echo $cats->id; ?>">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                        <td><?php echo $cats->title; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-left">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require APPROOT . '/views/inc/admfooter.php'; ?>
