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
            <h3 class="box-title">Data Comments</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Post</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>

                @php
                    $no = 1;
                @endphp

                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $comment->post->title }}</td>
                        <td>{{ $comment->name }}</td>
                        <td width="40%">{{ $comment->body }}</td>
                        <td>{{ $comment->status }}</td>
                        <td>
                            <a href="{{ route('admin.comments.show', [ 'id' => $comment->id ]) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('admin.comments.edit', [ 'id' => $comment->id ]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.comments.destroy', [ 'id' => $comment->id ])}}" method="post" onsubmit="return confirm('Delete this category permanently?')" >
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
                    <th>Post</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>Status</th>
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
