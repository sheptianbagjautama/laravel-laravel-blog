@extends('template.app')

@section('top')
@endsection

@section('content')
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $titleForm }}</h3>
        </div>
        <!-- /.box-header -->

        @if(session('status'))
            <div class="box-body">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <!-- form start -->
        <form role="form" method="post" action="{{ route('admin.comments.update', ['id' => $comment->id])  }}">
            @csrf
            @method('PUT')

            <div class="box-body">

                <div class="form-group">
                    <label>Title Post</label><br>
                    <h2>{{ $comment->post->title }}</h2>
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" readonly name="name" value="{{ $comment->name }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" readonly name="name" value="{{ $comment->email }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                </div>

                <div class="form-group">
                    <label>Comment</label>
                    <input type="text" readonly name="name" value="{{ $comment->body }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                </div>

                <div class="form-group">
                    <label>Setatus</label>
                    <select name="status" class="form-control">
                        <option {{$comment->status == 1 ? 'selected' : ''}} value="1">Publish</option>
                        <option {{$comment->status == 0 ? 'selected' : ''}} value="0">Draft</option>
                    </select>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->
@endsection

@section('bot')
@endsection
