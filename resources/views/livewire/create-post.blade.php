<div class="">
    <div class="pagetitle">
        <h1>Publish A New Post</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/user/home">Home</a></li>
                <li class="breadcrumb-item active">Create Post</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <br><br>
    <div class="card">
        <div class="card-body">
            {{-- here we call save function --}}
            <form class="my-3" wire:submit="save">
                <div class="col-sm-10">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" wire:model="post_title" id="floatingInput">
                        <label for="floatingInput">Title</label>
                    </div>
                    {{-- show validation error here --}}
                    @error('post_title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-10">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="post details" wire:model="content" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingInput">Details</label>
                    </div>
                    @error('content')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-10">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" placeholder="post details" wire:model="photo" id="">
                        <label for="floatingInput">Image</label>
                    </div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button> &nbsp; &nbsp;
                    <a href="/user/home" wire:navigate class="btn btn-secondary">cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>