<div class="header">
     <div class="container">
          <div class="logo">
              <a href="<?php echo URLROOT ?>"><img src="<?php echo URLROOT ?>/images/logo.jpg" title="" height='150' /></a>
          </div>
             <!---start-top-nav---->
             <div class="top-menu">
                 <div class="search">
                     <form  method="post" action="<?php echo URLROOT ?>/blogposts/index">
                     <input type="text" name="search" placeholder="Search for a blog...">
                     <input type="Submit" name="Submit" value=""/>
                     
                 </div>
                  <span class="menu"> </span>
                   <ul>
                        <li class="active"><a href="<?php echo URLROOT ?>/blogposts/index">HOME</a></li>
                        <li><a href="<?php echo URLROOT ?>/blogposts/about">ABOUT</a></li>
                        <li><a href="<?php echo URLROOT ?>/blogposts/contact">CONTACT</a></li>
           <!--  <li><a href="<?php //echo URLROOT ?>/users/register">REGISTER</a></li>
            <li><a href="<?php //echo URLROOT ?>/users/login">LOGIN</a></li> -->
                        <div class="clearfix"> </div>
                 </ul>
             </div>
             <div class="clearfix"></div>
                    <script>
                    $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                    });
                    </script>
                <!---//End-top-nav---->
     </div>
</div>
<!--/header-->
