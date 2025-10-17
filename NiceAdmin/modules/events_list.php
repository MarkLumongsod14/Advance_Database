 <?php
 include "./includes/connection.php";

if (isset($_POST["btn_delete"])){
    $del_event_id = $_POST['delete_event_id'];
 $sql = "UPDATE `tbl_event` SET `soft_delete`=1 WHERE event_id='$del_event_id'";
$result = $conn->query($sql);

}
 $sql = "SELECT * FROM tbl_event WHERE soft_delete=0";
$result = $conn->query($sql);


$conn->close();
 ?>
 
 <table class="table datatable">
                <thead>
                  <tr>
                    <th>Event ID </th>
                    <th>Fullname</th>
                     <th>Email</th>
                    <th>City</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                  <tr>
                   <td><?php echo $row['event_id']; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td>
                        <form method="POST" Action="index_admin.php?page=events_list">
                       <button type="button" class="btn btn-primary" >EDIT</button>
                       <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
                        <input type="hidden" name="delete_event_id" id="delete_event_id" value="<?php echo $row['event_id']; ?>">
                       <button type="button" class="btn btn-info">Show Details</button>
                    </form>
                    </td>
                      
                  </tr>
                    <?php endwhile; ?>
                </tbody>
              </table>

