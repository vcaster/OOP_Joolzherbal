<?php require APPROOT . '/views/inc/admheader.php'; ?>
 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Messages
        <small>All messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <a href="#">Dashboard</a></li>
        <li class="active">Messages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <div class="pull-left">
                        <a id="add-button" title="Add New" class="btn btn-success" href="<?php   echo URLROOT ?>/admins/newpost"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div> -->
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
                        <th>Name</th>
                        <th>Email</th>                        
                        <th>Phone</th>
                        <th>Message</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['msgs'] as $msgs) :  ?>
                        <td width="70">
                            <!-- <a title="Open" class="btn btn-xs btn-default edit-row" href="<?php //echo URLROOT; ?>/admins/openmsg/<?php// echo $posts->id; ?>">
                                <i class="fa fa-envelope"></i>
                            </a> -->
                                          <!-- Button trigger modal -->
<button type="button" class="btn btn-xs btn-default edit-row" data-toggle="modal" data-target="#exampleModalCenter<?php echo $msgs->msg_id; ?>" title="Open">
<i class="fa fa-envelope"></i>
</button>
<a title="Delete" class="btn btn-xs btn-danger delete-row" href="<?php echo URLROOT; ?>/admins/deletemsg/<?php echo $msgs->msg_id; ?>">
                                <i class="fa fa-times"></i>
      </a>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $msgs->msg_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Message from: &nbsp; <?php echo $msgs->name_msg; ?></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
                 <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" value="<?php echo $msgs->name_msg; ?>" class="form-control">
                            <label for="name" class="">Name </label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="email" name="email" value="<?php echo $msgs->email_msg; ?>" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="phone" name="phone" value="<?php echo $msgs->phone_msg; ?>" class="form-control">
                            <label for="phone" class="">Phone Number</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="city" name="city" value="<?php echo $msgs->city_msg; ?>" class="form-control">
                            <label for="city" class="">City</label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea id="message" name="message" rows="2" class="form-control"><?php echo $msgs->message; ?></textarea>
                            <label for="message">Message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
                        </td>
                        <td><?php echo $msgs->name_msg; ?></td>
                        <td><?php echo $msgs->email_msg; ?></td>                        
                        <td><?php echo $msgs->phone_msg; ?></td>
                        <?php if ($msgs->is_read == '0') { ?> 
                        <td><abbr title="unread"><?php echo trim_text($msgs->message, 30); ?></abbr> <!-- | <span class="label label-default">unread</span> --></td>
                        <?php } else { ?>
                        <td><abbr title="read"><?php echo trim_text($msgs->message, 30); ?> </abbr> | <span class="label label-success">read</span></td>  
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
