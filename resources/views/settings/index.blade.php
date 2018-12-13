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
            <h3 class="box-title">Data Settings</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    {{--<th>No</th>--}}
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>

                @php
                    //$no = 1;
                @endphp

                @foreach($settings as $setting)
                    <tr>
                        {{--<td>{{ $no++ }}</td>--}}
                        <td>{{ $setting->title }}</td>
                        <td>{{ $setting->tagline }}</td>
                        <td>{{ $setting->email }}</td>
                        <td>{{ $setting->phone }}</td>
                        <td>{{ $setting->address }}</td>
                        <td>
                            {{--<a href="{{ route('categories.show', [ 'id' => $category->id ]) }}" class="btn btn-primary">Detail</a>--}}
                            <a href="{{ route('admin.settings.edit', [ 'id' => $setting ->id ]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        {{--<td>--}}
                            {{--<form action="{{ route('categories.destroy', [ 'id' => $category->id ])}}" method="post" onsubmit="return confirm('Delete this category permanently?')" >--}}
                                {{--@csrf--}}
                                {{--@method('DELETE')--}}
                                {{--<button class="btn btn-danger" type="submit" >Delete</button>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    {{--<th>No</th>--}}
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
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
