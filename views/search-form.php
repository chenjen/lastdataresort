<h1>Reservations</h1>
  <form action="" method="GET">
    <div class="row">
    <div class="form-group">
    <div class="col-sm-3">
        <label for="exampleInputEmail1">Destination</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="<?= htmlentities($d) ?>" placeholder="City, State">
    </div>
  
     <div class="col-sm-2">
        <label for="exampleInputEmail1">Check-in</label>
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" value="<?= htmlentities($ci) ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
         </div>
    </div>
             <div class="col-sm-2">
                   <label for="exampleInputEmail1">Check-out</label>
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
    <label for="exampleSelect1">Guests</label>
    <select class="form-control" id="exampleSelect1" value="<?= htmlentities($g) ?>">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
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
<!--<form action="" method="GET">
    <div class="form-group">
        <input type="text" 
            id="qInput" 
            name="q"
            class="form-control" 
            value="<?= htmlentities($q) ?>"
            placeholder="Search by title"
            >
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Get Results</button>
    </div>
</form>-->