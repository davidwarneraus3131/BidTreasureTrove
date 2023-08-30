<script>
    const service_request_id = '';
    const cus_id = '';
    const service_id = '';
    const car_id = '';
    const workshop_id = '';
</script>
</div>
<!-- /#wrapper -->

<!-- GLOBAL SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/plugins/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>

<!-- <script src="js/plugins/popupoverlay/defaults.js"></script> -->
<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        <img class="img-circle img-logout" src="img/profile-pic.png" alt="">
        <h3>
            <i class="fa fa-sign-out text-green"></i> Ready to go?
        </h3>
        <p>Select "Logout" below if you are ready<br>to end your current session.</p>
        <ul class="list-inline">
            <li>
                <a href="logout.php" class="btn btn-green">
                    <strong>Logout</strong>
                </a>
            </li>
            <li>
                <button class="logout_close btn btn-green">Cancel</button>
            </li>
        </ul>
    </div>
</div>
<!-- popup change password -->
<!-- Button trigger modal -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Password Change</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="chng_pass">
                <form method="" action="" id="change_pass">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="text" class="form-control" name="oldpass" id="oldpass" aria-describedby="emailHelp" placeholder="Enter Your Old Password" required />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="text" class="form-control" name="newpass" id="newpass" placeholder="Enter Your New Password" required>
                    </div>
                    <button type="submit" id="btn-chng_pass" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- /#logout -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Logout Notification jQuery -->
<script src="js/plugins/popupoverlay/logout.js"></script>
<!-- HISRC Retina Images -->
<script src="js/plugins/hisrc/hisrc.js"></script>

<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<!-- HubSpot Messenger -->
<!-- <script src="js/plugins/messenger/messenger.min.js"></script> -->
<!--    <script src="js/plugins/messenger/messenger-theme-flat.js"></script>-->
<!-- Date Range Picker -->
<script src="js/plugins/daterangepicker/moment.js"></script>
<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Morris Charts -->
<!-- <script src="js/plugins/morris/raphael-2.1.0.min.js"></script> -->
<!-- <script src="js/plugins/morris/morris.js"></script> -->
<!-- Flot Charts -->
<!--     <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
 --> <!-- Sparkline Charts -->
<!-- <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script> -->
<!-- Moment.js -->
<!-- <script src="js/plugins/moment/moment.min.js"></script> -->
<!-- jQuery Vector Map -->
<!--     <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/demo/map-demo-data.js"></script>
 --> <!-- Easy Pie Chart -->
<!-- <script src="js/plugins/easypiechart/jquery.easypiechart.min.js"></script> -->
<!-- DataTables -->
<script src="js/plugins/datatables/jquery.dataTables.js"></script>
<script src="js/plugins/datatables/datatables-bs3.js"></script>

<!-- THEME SCRIPTS -->
<script src="js/flex.js"></script>
<!-- <script src="js/demo/dashboard-demo.js"></script> -->
<script src="js/demo/advanced-tables-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src="js/dash_board.js"></script>


<script>
    $(document).ready(function() {
  $(".get_cat").change(function(){
     
      var val = $(this).val();
    //    alert(val);
      $.ajax({
          url:"get_sub_cat.php",
          type:"post",
          data:{category_id:val},
          success:function(resp){
                  $('#getsubcategory').html(resp);
          }
      });
  
  });
}); 

</script>
<!-- <script>
    $(document).ready(function() {
         $(".dropdowns").on('change','.get_cat',function(){
        $(".get_cat").change(function(){
            
            var val = $(this).val();
            / alert(val);
            $.ajax({
                url:"get_sub_cat.php",
                type:"post",
                data:{category_id:val},
                success:function(resp){
                var data=JSON.parse(resp);
                var html=`<option value="${data.0
                }">${data.1}</option>`;
console.log(data);
                         $('#getsubcategory').html(resp);
                         $('#fstOp').append(resp);
                }
            });
        
        });
        $(document.body).on('change','.get_inner_cat',function(){
             $(".get_innet_cat").change(function(){
              alert("haridas");
                            var val = $(this).val();
                            $.ajax({
                                url:"get_inner_cat.php",
                                type:"post",
                                data:{category_id:val},
                                success:function(resp){
                                        $('#get_in_cat').html(resp);
                                }
                            });
        
        });
}); 
}); 
}); 


</script> -->



</body>


</html>