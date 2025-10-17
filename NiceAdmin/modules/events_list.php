   <?php
 include "./includes/connection.php";
$sql = "SELECT * FROM tbl_event";
$result = $conn->query($sql);


$conn->close();
   ?>
   
   <table class="table datatable">
                <thead>
                  <tr>
                    <th>Event ID </th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>City</th>
                    <th colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): ?>
                   <tr class="gradeA">
                     <td><?php echo $row['event_id']; ?></td>
                     <td><?php echo $row['full_name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['city']; ?></td>
                     <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-info">Show Details</button>
                     </td>
                    </tr>
                     <?php endwhile; ?>
                </tbody>
              </table>