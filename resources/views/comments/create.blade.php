@extends('template.app')

@section('top')
@endsection

@section('content')

    @if(session('status'))
        <div class="box-body">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('status') }}
            </div>
        </div>
    @endif

    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $titleForm }}</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form role="form" method="post" action="{{ route('admin.categories.store')  }}">
            @csrf
            <div class="box-body">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
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
