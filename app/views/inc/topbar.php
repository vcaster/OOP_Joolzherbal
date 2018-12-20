<div class="header">
     <div class="container">
          <div class="logo">
              <a href="<?php echo URLROOT ?>"><img src="<?php echo URLROOT ?>/images/logo.jpg" title="" /></a>
          </div>
             <!---start-top-nav---->
             <div class="top-menu">
                 <div class="search">
                     <form>
                     <input type="text" placeholder="" required="">
                     <input type="submit" value=""/>
                     </form>
                 </div>
                  <span class="menu"> </span>
                   <ul>
                        <li class="active"><a href="<?php echo URLROOT ?>/index">HOME</a></li>
                        <li><a href="<?php echo URLROOT ?>/blogpost/about">ABOUT</a></li>
                        <li><a href="<?php echo URLROOT ?>/blogpost/contact">CONTACT</a></li>
            <li><a href="<?php echo URLROOT ?>/users/register">REGISTER</a></li>
            <li><a href="<?php echo URLROOT ?>/users/login">LOGIN</a></li>
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
