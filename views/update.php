<h1>Edit Existing Reservation</h1>
  <form action="" method="GET">
    <div class="row">
    <div class="form-group">
    <div class="col-sm-3">
        <label for="exampleInputEmail1">BookingID</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="<?= htmlentities($d) ?>">
    </div>
  
     <div class="col-sm-2">
        <label for="exampleInputEmail1">Reservation Name</label>
         <input type="email" class="form-control" id="exampleInputEmail1" value="<?= htmlentities($d) ?>">
    </div>
             <div class="col-sm-2">
                   <label for="exampleInputEmail1">Date of Birth</label>
                <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" value="<?= htmlentities($co) ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker').datetimepicker();
                        });
                    </script>
    </div>
</div>
 <div class="col-sm-1">
    <label for="exampleSelect1"></label>   
    <div class="form-group">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
  </div>
 </div> 
  </div>
  </form>