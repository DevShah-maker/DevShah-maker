<!-- Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <?php
      $sql = "SELECT * from visitor_info where username='$username'";
      ?>
        <h5 class="modal-title" id="exampleModalLabel">Hey <?php echo $username ?>,your schedule info:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

<?php
// echo $sql;
include 'db.php';
$result = $conn->query($sql);
$num = mysqli_num_rows($result);

if($num == 1)
{
$row = mysqli_fetch_assoc($result);
$date = $row['date'];
$time = $row['time'];
$no   = $row['no'];
$purpose = $row['purpose'];


      
echo'<div class="container">

  <p class="mb-0">Date: '.$date.'</p>
  <p class="mb-0">Time: '.$time.'</p>
  <p class="mb-0">No. of person/s: '.$no.'</p>
  <p class="mb-0">Purpose: '.$purpose.'</p>

  </div>';
  
}

else
{
  ?>
  
  Sorry,you have no scheduled meetings.
  <?php
}


?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>