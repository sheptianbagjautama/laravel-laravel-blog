@extends('template.app')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
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

    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Data Posts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>By</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Featured</th>
                    <th>Published at</th>
                    <th>Action</th>
                    <th>Delete</th>


                </tr>
                </thead>
                <tbody>

                @php
                    $no = 1;
                @endphp

                @foreach($posts as $post)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ url('uploads/file/'.$post->featured) }}" style="width: 150px; height: 150px; border-radius: 20px;"> </td>
                        <td>{{ $post->published_at }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', [ 'id' => $post->id ]) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('admin.posts.edit', [ 'id' => $post->id ]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', [ 'id' => $post->id ])}}" method="post" onsubmit="return confirm('Delete this posts permanently?')" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>By</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Featured</th>
                    <th>Published at</th>
                    <th>Action</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bot')
    <!-- DataTables -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>

    <!-- SlimScroll -->
    <script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }} "></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }} "></script>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection
