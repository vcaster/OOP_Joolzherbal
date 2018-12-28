<?php require APPROOT . '/views/inc/header.php'; ?>
    <h3><?php //echo $data['title']; ?></h3>
<div class="content">
 <div class="container">
     <div class="content-grids">
        <h1 style=" padding-bottom: 20px;">Category: <?php echo $data['catT']->cat_title; ?></p> </h1>
         <div class="col-md-8 content-main">
             <div class="content-grid">
                <?php foreach ($data['posts'] as $posts) :  ?>
                 <div class="content-grid-info">
                     <img src="<?php echo URLROOT ?>/images/postimages/<?php echo $posts->image; ?>" height='360' width='669' alt=""/>
                     <div class="post-info">
                     <h4><a href="single.html"><?php echo $posts->title; ?></a></h4><br/><p> <span class="fa fa-clock"></span> <?php echo $posts->published_at; ?> &nbsp;<span class="fa fa-folder"></span> <?php echo $posts->cat_title; ?></p>
                     <p><?php echo trim_text($posts->body, 500); ?></p>
                     <a href="<?php echo URLROOT ?>/blogposts/fullpost/<?php echo $posts->id; ?>"><span></span>READ MORE</a>
                     </div>
                 </div>
                <?php endforeach; ?>
                 </div>

             </div>
          </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
