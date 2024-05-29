@extends('backend.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Add Article</h2>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="author_id">Author ID</label>
                    <input type="text" class="form-control" id="author_id" name="author_id" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



@endsection