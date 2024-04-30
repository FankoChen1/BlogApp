<div class="row">
  <div class="col-xl-5">
    <div class="card">
      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <img height="100px" width="100px" class="rounded-circle" src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="profile image">
        <h2>{{$user_data->name ?? ''}}</h2>
        <h4 class="text-muted">{{$user_data->job}}</h4>

      </div>
    </div>

  </div>

  <div class="col-xl-7">

    <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
          </li>

        </ul>

        <div class="tab-content pt-2">

          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <h5 class="card-title">About</h5>
            <p class="small fst-italic">{{$user_data->about ?? ''}}</p>
            <h5 class="card-title">Profile Details</h5>
            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Full Name</div>
              <div class="col-lg-9 col-md-8">{{$user_data->name ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Company</div>
              <div class="col-lg-9 col-md-8">{{$user_data->company ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Job</div>
              <div class="col-lg-9 col-md-8">{{$user_data->job ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Country</div>
              <div class="col-lg-9 col-md-8">{{$user_data->country ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Address</div>
              <div class="col-lg-9 col-md-8">{{$user_data->address ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Phone</div>
              <div class="col-lg-9 col-md-8">{{$user_data->phone ?? ''}}</div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Email</div>
              <div class="col-lg-9 col-md-8">{{$user_data->email ?? ''}}</div>
            </div>
            <br>
          </div>

          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <!-- Profile Edit Form -->
            <livewire:profile-details-edit :fullName="$user_data->name" />
          </div>

          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form>

              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->

          </div>

        </div><!-- End Bordered Tabs -->

      </div>
    </div>

  </div>
</div>