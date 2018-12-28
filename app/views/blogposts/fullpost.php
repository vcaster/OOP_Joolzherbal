  <?php require APPROOT . '/views/inc/header.php'; ?>
<div class="single">
     <div class="container">
          <div class="col-md-8 single-main">
              <div class="single-grid">
                    <img src="<?php echo URLROOT ?>/images/postimages/<?php echo $data['posts']->image; ?>"  height='360' width='669' alt=""/>
                    <h2><?php echo $data['posts']->title; ?></h2>
                    <p><?php
                    $Parsedown = new Parsedown();
                    echo $Parsedown->text($data['posts']->body);
                    ?></p>
              </div>
             <ul class="comment-list">
                   <h5 class="post-author_head">Written by <a href="<?php echo URLROOT ?>/blogpost/about" title="Posts by admin" rel="author">admin</a></h5>
                   <li><img src="<?php echo URLROOT ?>/images/avatar.png" class="img-responsive" alt="">
                   <div class="desc">
                   <p>View author: <a href="<?php echo URLROOT ?>/blogpost/about" title="Posts by admin" rel="author">admin</a></p>
                   </div>
                   <div class="clearfix"></div>
                   </li>
              </ul>
             <!--  <div class="content-form">
                     <h3>Leave a comment</h3>
                    <form>
                        <input type="text" placeholder="Name" required/>
                        <input type="text" placeholder="Email" required/>
                        <input type="text" placeholder="Phone" required/>
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="SEND"/>
                   </form>
                         </div> -->
          </div>     
<?php require APPROOT . '/views/inc/footer.php'; ?>
