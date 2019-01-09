<?php use Carbon\Carbon;

require APPROOT . '/views/inc/header.php'; ?>
    <h3><?php //echo $data['title']; ?></h3>
<div class="content">
 <div class="container">
     <div class="content-grids">
         <div class="col-md-8 content-main">
             <div class="content-grid">
                
                <?php foreach ($data['posts'] as $posts) :  ?>
                 <div class="content-grid-info">
                     <img src="<?php echo URLROOT ?>/images/postimages/<?php echo $posts->image; ?>" height='360' width='669' alt=""/>
                     <div class="post-info">
                     <h4><a href="<?php echo URLROOT ?>/blogposts/fullpost/<?php echo $posts->id; ?>"><?php echo $posts->title; ?></a></h4><br/><p> <span class="fa fa-clock"></span> <?php

                        // use Carbon\Carbon;

                        // require '../vendor/autoload.php';
                         $carbon = new Carbon($posts->published_at);
 
                        $formatted = $carbon->diffForHumans();
 
                        // var_dump();
                        echo $formatted;

                        ?> &nbsp;<span class="fa fa-folder"></span> <?php echo $posts->cat_title; ?></p>
                     <p><?php
                        $Parsedown = new Parsedown();
                        echo $Parsedown->text(trim_text($posts->body, 500));
                        ?></p>
                     <a href="<?php echo URLROOT ?>/blogposts/fullpost/<?php echo $posts->id; ?>"><span></span>READ MORE</a>
                     </div>
                 </div>
                <?php endforeach; ?>
                 </div>
                <input type="text" name="start" value="<?php echo $data['start']; ?>" hidden>
                <input type="text" name="perpage" value="<?php echo $data['perpage'] ?>" hidden>
                <input type="text" name="page" value="<?php echo $data['page'] ?>" hidden>
                
                <ul class="pagination ">    
                    <?php // echo $data['totalrows']; ?>
                
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $prev= $page-1;
                $next= $page+1;
                $records = $data['totalrows'];
                $recordPages = $records/5;
                $recordPages = ceil($recordPages);

                if ($page >= 5) {
                    echo '<li> <a href="'.URLROOT.'/blogposts/index?page=1">First</a></li>';
                }

                if ($prev >=1) {
                    echo '<li> <a href="'.URLROOT.'/blogposts/index?page='.$prev.'">Prev</a></li>';
                }

                if ($recordPages >= 2) {
                    for ($r=1; $r<=$recordPages; $r++) {
                        $active = $r == $page ? 'class="active"' : '';
                        echo '<li> <a href="'.URLROOT.'/blogposts/index?page='.$r.'" '.$active.'>'.$r.'</a></li>';
                    }
                }

                if ($next <= $recordPages && $recordPages >=2) {
                    echo '<li> <a href="'.URLROOT.'/blogposts/index?page='.$next.'">Next</a></li>';
                }

                if ($page != $recordPages && $recordPages >= 5) {
                    echo '<li> <a href="'.URLROOT.'/blogposts/index?page='.$recordPages.'">Last</a></li>';
                }

                    ?>


                 </ul>
             </div>
          </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
