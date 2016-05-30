<h1>View Reservation</h1>
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
      <div class="col-sm-1">
    <label for="exampleSelect1"></label>   
    <div class="form-group">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
  </div>     
 </div> 
  </div>
  </form>