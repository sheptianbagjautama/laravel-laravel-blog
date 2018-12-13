@extends('template.app')

@section('top')
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail Category Data</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>{{ $category->id }}</th>
                </tr>

                <tr>
                    <th>Name</th>
                    <th>{{ $category->name }}</th>
                </tr>

                <tr>
                    <th>Slug</th>
                    <th>{{ $category->slug }}</th>
                </tr>

                <tr>
                    <th>Created at</th>
                    <th>{{ $category->created_at }}</th>
                </tr>

                <tr>
                    <th>Updated at</th>
                    <th>{{ $category->updated_at }}</th>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bot')
@endsection
