<?php
date_default_timezone_set('America/Los_Angeles');
?>
<table class="table table-hover">
      <thead>
        <tr>
          <th>Resort</th>
          <th>Location</th>
          <th>Room Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody> 
      
<?php

//display resorts that matched the search term
foreach ($matches as $row) {

$newRoom_id= $row['roomID'];

echo "<tr>";
echo "<td><a href='details.php?roomID=" . $newRoom_id . "'>"  . $row['ResortName'] . "</a></td>";

echo "<td>" . $row['Location'] . "</td>";
echo "<td>" . $row['RoomTypeName'] . "</td>";
echo "<td>$" . $row['RoomTypeDescr'] . "</td>";
echo "</tr>";
}
echo "</tbody></table>";

?>