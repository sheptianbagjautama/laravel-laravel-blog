@extends('template.app')

@section('top')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
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
        <form role="form" method="post" action="{{ route('admin.posts.update', ['id' => $post->id])  }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea id="editor1" name="body" rows="10" cols="80">
                                           {{ $post->body }}
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="featured"  id="featured" class="form-control" id="exampleInputEmail1" >
                </div>

                <div class="form-group">
                    <label>Preview Image</label>
                    <img src="{{ url('uploads/file/'.$post->featured) }}" style="width: 150px; height: 150px; border-radius: 20px">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    {!! Form::select('category_id', ['' => '-']+ App\Category::pluck('name', 'id')->all() , null, ['class' => 'form-control select2','required']) !!}
                </div>

                <div class="form-group">
                    <label>Setatus</label>
                    <select name="status" class="form-control">
                        <option {{$post->status == 1 ? 'selected' : ''}} value="1">Publish</option>
                        <option {{$post->status == 0 ? 'selected' : ''}} value="0">Draft</option>
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
    <!-- CK Editor -->
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js') }} "></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} "></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

    <!-- Select2 -->
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            $('.select2').select2()
        })
    </script>
@endsection
