<?php require APPROOT . '/views/inc/admheader.php'; ?>
 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Posts
        <small>All Blog Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <a href="#">Dashboard</a></li>
        <li class="active">Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a id="add-button" title="Add New" class="btn btn-success" href="<?php   echo URLROOT ?>/admins/newpost"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                    <div class="pull-right">
                       <!--  <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="#">
                            <div class="input-group">
                                <input type="hidden" name="search">
                                <input type="text" name="keywords" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search..." value="">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
              <!-- /.box-header -->
                <?php flash('post_message');  ?>
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>Action</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['posts'] as $posts) :  ?>
                      <tr>
                        <td width="70">
                            <a title="Edit" class="btn btn-xs btn-default edit-row" href="<?php echo URLROOT; ?>/admins/edit/<?php echo $posts->id; ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a title="Delete" class="btn btn-xs btn-danger delete-row" href="<?php echo URLROOT; ?>/admins/deletepost/<?php echo $posts->id; ?>">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                        <td><?php echo $posts->title; ?></td>
                        <td><?php echo $posts->cat_title; ?></td>
                        <?php if ($posts->published_at == 'NULL') { ?> 
                        <td><abbr title="Draft"><?php echo 'Draft'; ?></abbr> | <span class="label label-default">Draft</span></td>
                        <?php } else { ?>
                        <td><abbr title="<?php echo $posts->published_at; ?>"><?php echo $posts->published_at; ?></abbr> | <span class="label label-success">Published</span></td>  
                        <?php } ?>                      
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require APPROOT . '/views/inc/admfooter.php'; ?>
