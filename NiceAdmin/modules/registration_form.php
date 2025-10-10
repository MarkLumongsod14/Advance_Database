<?php
 include "./includes/connection.php";

if(isset($_POST["btn_submit"])){

$fullname = $_POST['event_fullname'];
$email = $_POST['event_email'];
$city = $_POST['event_city'];

$sql = "INSERT INTO tbl_event (full_name	, email, city)
VALUES ('$fullname', '$email', '$city')";

if ($conn->query($sql) === TRUE) {
   echo '<script>alert("new event added");</script>';
} else {
  echo  "Error: " . $sql . "<br>" . $conn->error ;
}


}
if(isset($_POST["btn_reset"])){
   echo '<script>alert("reset  button is click");</script>';
}


$conn->close();
?>


<div class="card-body">
  <h5 class="card-title">Event Participation Form</h5>

  <!-- Floating Labels Form -->
  <form class="row g-3" method="POST" action="index_admin.php?page=registration_form" >
    <div class="col-md-12">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" placeholder="Full Name" name="event_fullname">
        <label for="floatingName">Full Name</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingEmail" placeholder="Email Address" name="event_email">
        <label for="floatingEmail">Email Address</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Create Password">
        <label for="floatingPassword">Create Password</label>
      </div>
    </div>

    <div class="col-12">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Your Reason for Participation" id="floatingTextarea" style="height: 100px;"></textarea>
        <label for="floatingTextarea">Reason for Participation</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="col-md-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCity" placeholder="City" name="event_city">
          <label for="floatingCity">City</label>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Select Event">
          <option selected>Workshop</option>
          <option value="1">Competition</option>
          <option value="2">Conference</option>
        </select>
        <label for="floatingSelect">Event Type</label>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingZip" placeholder="Registration ID">
        <label for="floatingZip">Registration ID</label>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
      <button type="submit" class="btn btn-secondary" name="btn_reset">Reset</button>
    </div>
  </form>
  <!-- End floating Labels Form -->
</div>
