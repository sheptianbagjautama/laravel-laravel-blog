@extends('template.app')

@section('top')
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail User Data</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>{{ $user->id }}</th>
                </tr>

                <tr>
                    <th>Name</th>
                    <th>{{ $user->name }}</th>
                </tr>

                <tr>
                    <th>Email</th>
                    <th>{{ $user->email }}</th>
                </tr>

                <tr>
                    <th>Created at</th>
                    <th>{{ $user->created_at }}</th>
                </tr>

                <tr>
                    <th>Updated at</th>
                    <th>{{ $user->updated_at }}</th>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bot')
@endsection
