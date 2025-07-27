@extends('admin.layout.master')
@section('content')
    <!-- start page title -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Permissions List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Permissions List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h5 class="card title">Permissions List</h5> --}}
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @can('create permissions')
                                    <a href="{{ route('permission.create') }}" class="btn btn-primary mb-3 ms-auto">Create
                                        Permission</a>
                                @endcan
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Permission Name</th>
                                        <th>Created At</th>
                                        <th>Action </th>
                                    </tr>
                                    @if ($permissions->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">No permissions found</td>
                                        </tr>
                                    @endif
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($permission->created_at)->format('d M, Y') }}</td>
                                            <td>
                                                @can('delete permissions')
                                                    <form action="{{ route('permission.destroy', $permission->id) }}"
                                                        method="POST" style="display:inline-block; margin-right: 5px;"
                                                        class="delete-permission-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>

                                                    </form>
                                                @endcan
                                                @can('edit permissions')
                                                    <form action="{{ route('permission.edit', $permission->id) }}"
                                                        method="GET" style="display:inline-block;">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $permissions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        img,
        svg {
            vertical-align: middle;
            margin-top: 3px;
            width: 80px;
            height: 43px;
        }

        p {
            margin-top: 20px;
            margin-bottom: 1rem;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-permission-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Are you sure you want to delete this permission?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>

@endsection
