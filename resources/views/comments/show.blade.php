@extends('template.app')

@section('top')
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail CommentData</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered">
                <tr>
                    <th>Post Title</th>
                    <th>{{ $comment->post->name }}</th>
                </tr>

                <tr>
                    <th>Name</th>
                    <th>{{ $comment->name }}</th>
                </tr>

                <tr>
                    <th>Email</th>
                    <th>{{ $comment->email }}</th>
                </tr>

                <tr>
                    <th>Body</th>
                    <th>{{ $comment->body }}</th>
                </tr>

                <tr>
                    <th>Status</th>
                    <th>{{ $comment->status }}</th>
                </tr>

                <tr>
                    <th>Created at</th>
                    <th>{{ $comment->created_at }}</th>
                </tr>

                <tr>
                    <th>Updated at</th>
                    <th>{{ $comment->updated_at }}</th>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bot')
@endsection
