<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.3.6
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

</div>
<!-- ./wrapper -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo URLROOT ?>/admin/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo URLROOT ?>/admin/js/jquery-ui.min.js"></script>
<script src="<?php echo URLROOT ?>/admin/js/ui.js"></script>
<script src="<?php echo URLROOT ?>/admin/js/jquery.js"></script>
<script src="<?php echo URLROOT ?>/admin/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT ?>/admin/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo URLROOT ?>/admin/plugins/simple-mde/simplemde.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo URLROOT ?>/admin/js/app.min.js"></script>
<script src="<?php echo URLROOT ?>/admin/js/custom.js"></script>
<script>


  // $('#title').on('blur', function() {
  //     var theTitle = this.value.toLowerCase().trim(),
  //         slugInput = $('#slug'),
  //         theSlug = theTitle.replace(/&/g, '-and-')
  //                           .replace(/[^a-z0-9-]+/g, '-')
  //                           .replace(/\-\-+/g, '-')
  //                           .replace(/^-+|-+$/g, '');

  //     slugInput.val(theSlug);
  // });

 // var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
  var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

  // $('#datetimepicker1').datetimepicker({
  //     format: 'YYYY-MM-DD HH:mm:ss',
  //     showClear: true
  // });

  // $('#draft-btn').click(function(e) {
  //     e.preventDefault();
  //     $('#published_at').val("");
  //     $('#post-form').submit();
  // });
</script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
 <script>
      $( function() {
          $( "#datepicker" ).datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss'
      });
      });
</script>
</body>
</html>
