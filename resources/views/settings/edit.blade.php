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
        <form role="form" method="post" action="{{ route('admin.settings.update', ['id' => $setting->id])  }}">
            @csrf
            @method('PUT')
            <div class="box-body">
                {{--<input name="id" value="{{ $setting->id }}">--}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title"  value="{{ $setting->title }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Tagline</label>
                    <input type="text" name="tagline" value="{{ $setting->tagline }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $setting->email }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $setting->phone }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{ $setting->address }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="so_facebook" value="{{ $setting->so_facebook }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="so_twitter" value="{{ $setting->so_twitter }}" id="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="so_instagram" value="{{ $setting->so_instagram }}" id="title" class="form-control" id="exampleInputEmail1"  required>
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
