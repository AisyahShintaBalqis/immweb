@extends('backend.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Silahkan Tambahkan Artikel!</h3>
            <form action="{{route('article.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" required></textarea>
                </div>
               

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection