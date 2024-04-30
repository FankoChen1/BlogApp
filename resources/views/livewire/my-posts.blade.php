<div class="dashboard">
  <div class="pagetitle">
    <h1>My Posts Manager</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/user/home">Home</a></li>
        <li class="breadcrumb-item active">Posts manager</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  @if (session()->has('message'))
  <span class="alert alert-success p-2 my-2">{{ session('message') }}</span>
  @endif
  <div class="card-body">
    <div class="row">
      <!-- My Posts -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">My Posts</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
              </div>
              <div class="ps-3">
                <h6>145</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Posts -->

      <!-- My Followers -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">My Followers</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
              </div>
              <div class="ps-3">
                <h6>145</h6>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- My Followers -->

      <!-- Comments -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">My Comments</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
              </div>
              <div class="ps-3">
                <h6>145</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Comments -->
    </div>
    <hr>
    <!-- Table with stripped rows -->
    <table class="table datatable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Posted At</th>
          <th scope="col">Last Updated</th>
          <th scope="col" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $item)
        {{-- for livewire to keep track and work efficient with loops use keys to uniquely identify each row in a loop --}}
        <tr wire:key="{{$item->id}}">
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->post_title}}</td>
          <td>{{str($item->content)->words(10)}}</td>
          <td>{{$item->created_at}}</td>
          <td>{{$item->updated_at}}</td>
          <td>
            <a href="/edit/post/{{$item->id}}" wire:navigate class="btn btn-primary btn-sm">Edit</a>
            <button wire:click="deletePost({{$item->id}})" wire:confirm="Are you sure you want to delete this?" class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>