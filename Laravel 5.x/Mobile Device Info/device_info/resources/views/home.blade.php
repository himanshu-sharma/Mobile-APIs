@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile Subscribers
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>ID</th>
                        <th>Cordova Version</th>
                        <th>Device Model</th>
                        <th>Device Platform</th>
                        <th>Device UUID</th>
                        <th>Device Version</th>
                        <th>Device Manufacturer</th>
                        <th>Is Device Virtual</th>
                        <th>Device Serial</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $user->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->cordova_version }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_model }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_platform }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_uuid }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_version }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_manufacturer }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_isVirtual }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->device_serial }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->created_at }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->updated_at }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('subscriber/'.$user->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div align="center">{!! $users->links() !!}</div>
            </div>
        </div>
    </div>
</div>
@endsection
