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
        <form role="form" method="post" action="{{ route('admin.users.store')  }}">
            @csrf
            <div class="box-body">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email"  value="{{old('email') }}" id="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="{{old('password') }}" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
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
