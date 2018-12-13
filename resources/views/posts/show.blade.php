@extends('template.app')

@section('top')
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail Post Data</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>{{ $post->id }}</th>
                </tr>

                <tr>
                    <th>By</th>
                    <th>{{ $post->user->name }}</th>
                </tr>

                <tr>
                    <th>Category</th>
                    <th>{{ $post->category->name }}</th>
                </tr>

                <tr>
                    <th>Title</th>
                    <th>{{ $post->title }}</th>
                </tr>

                <tr>
                    <th>Slug</th>
                    <th>{{ $post->slug }}</th>
                </tr>

                <tr>
                    <th>Body</th>
                    <th>{{ $post->body }}</th>
                </tr>

                <tr>
                    <th>Featured</th>
                    <th>{{ $post->featured }}</th>
                </tr>

                <tr>
                    <th>Status</th>
                    <th>{{ $post->status }}</th>
                </tr>

                <tr>
                    <th>Published At</th>
                    <th>{{ $post->published_at }}</th>
                </tr>

                <tr>
                    <th>Created At</th>
                    <th>{{ $post->created_at }}</th>
                </tr>

                <tr>
                    <th>Updated At</th>
                    <th>{{ $post->updated_at }}</th>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bot')
@endsection
