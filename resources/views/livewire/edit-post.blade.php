<div class="">
    <div class="pagetitle">
        <h1>Update Post Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/user/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/my/posts">Post</a></li>
                <li class="breadcrumb-item active">Edit Post</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <br>
    <div class="card">
        {{-- here create a form to add new post --}}
        <br>
        <div class="card-body">
            {{-- here we call save function --}}
            <form class="my-3" wire:submit="update">
                <div class="col-sm-10">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" wire:model="post_title" value="{{$post->post_title}}" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Title</label>
                    </div>
                    {{-- show validation error here --}}
                    @error('post_title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-10">
                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" wire:model="content" style="height: 100px;" id="floatingInput">{{$post->content}}</textarea>
                        <label for="floatingInput">Post details</label>
                    </div>
                    @error('content')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-10">
                    <label for="">Post image</label>
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" placeholder="post details" wire:model="photo" id="">
                    </div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update</button> &nbsp; &nbsp;
                    <a href="/my/posts" wire:navigate class="btn btn-secondary">cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>