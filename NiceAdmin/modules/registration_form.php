<div class="card-body">
  <h5 class="card-title">Event Participation Form</h5>

  <!-- Floating Labels Form -->
  <form class="row g-3">
    <div class="col-md-12">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" placeholder="Full Name">
        <label for="floatingName">Full Name</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingEmail" placeholder="Email Address">
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
          <input type="text" class="form-control" id="floatingCity" placeholder="City">
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
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
  <!-- End floating Labels Form -->
</div>
