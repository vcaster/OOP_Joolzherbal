<div class="col-md-4 content-right">
 <div class="recent">
   <h3>RECENT POSTS</h3>
   <ul>
   <?php foreach ($data['side'] as $posts) :  ?>
   <li><a href="<?php echo URLROOT ?>/blogposts/fullpost/<?php echo $posts->id; ?>"><?php echo $posts->title; ?></a></li>
   <?php endforeach; ?>
   </ul>
 </div>
<!--  <div class="comments">
   <h3>RECENT COMMENTS</h3>
   <ul>
   <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
   <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
   <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
   </ul>
 </div> -->
 <div class="clearfix"></div>
 <!-- <div class="archives">
   <h3>ARCHIVES</h3>
   <ul>
   <li><a href="#">October 2013</a></li>
   <li><a href="#">September 2013</a></li>
   <li><a href="#">August 2013</a></li>
   <li><a href="#">July 2013</a></li>
   </ul>
 </div> -->
 <div class="categories">
   <h3>CATEGORIES</h3>
   <ul>
    <?php foreach ($data['cats'] as $cats) :  ?>
   <li><a href="<?php echo URLROOT ?>/blogposts/category/<?php echo $cats->cat_id; ?>"><?php echo $cats->cat_title; ?></a></li>
    <?php endforeach; ?>
   </ul>
 </div>
 <div class="clearfix"></div>
</div>
