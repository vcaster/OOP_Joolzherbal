<?php require APPROOT . '/views/inc/admheader.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Add New Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <form action="<?php echo URLROOT; ?>/admins/edit/<?php echo $data['posts']->id; ?>" method="post"  enctype="multipart/form-data">
          <div class="col-xs-9">
              <div class="box">
                                   
                    <div class="box-body">
                      <div class="form-group">
                        <label for="title">Title</label>
                      </div>
                      <input type="text" name="title" placeholder="Enter Title here" id="title" class="form-control" value="<?php echo $data['posts']->title; ?>">
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" rows="10" class="form-control"><?php echo $data['posts']->body; ?></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->

                   <!--  <div class="box-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div> -->
                  
                </div>
          </div>
          <div hidden >
                        <input type="text" name="id" placeholder="Enter Title here" id="title" class="form-control" value="<?php echo $data['posts']->id; ?>"></div>
          <div class="col-md-3">
              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Publish</h3>
                  </div>
                  <div class="box-body">
                      <div class="form-group">
                        <label for="published_at">Publish date</label>
                        <input name="datetime" type="text" id="datepicker" class="form-control" value="<?php echo $data['posts']->published_at; ?>">
                      </div>
                  </div>
                  <div class="box-footer clearfix">
                      <div class="pull-left">
                          <!--  <a href="#" id="draft-btn" class="btn btn-default">Save Draft</a> -->
                          <input style="width: 90px;" class="btn btn-default" id="draft-btn" type="Submit" name="Draft" value="Save Draft"> 
                      </div>
                      <div class="pull-right">
                          <!-- <a href="#" class="btn btn-primary ">Publish</a> -->
                          <input class="btn btn-primary" type="Submit" name="edit" value="Publish"> 
                          
                      </div>
                  </div>
              </div>
              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Category</h3>
                  </div>
                  <div class="box-body">
                    <?php foreach ($data['cats'] as $cats) :  ?>
                      <div class="radio">
                          <label>
                            <input type="radio" name="cat" id="category-1" value="<?php echo $cats->id; ?>"> <?php echo $cats->title; ?>
                          </label>
                      </div>
                    <?php endforeach; ?>
                  </div>
                    
              </div>
              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Feature Image</h3>
                  </div>
                  <div class="box-body text-center">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo URLROOT; ?>/images/postimages/<?php echo $data['posts']->image; ?>" width="100%" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="f">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
          </form>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require APPROOT . '/views/inc/admfooter.php'; ?>
