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
                            <h4 class="mb-sm-0">Articles List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Articles List</li>
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
                                @can('create articles')
                                <a href="{{ route('article.create') }}" class="btn btn-primary mb-3 ms-auto">Create
                                    Article</a>
                                @endcan
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Article Title</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ $article->title }}</td>
                                            <td>
                                                @if ($article->image)
                                                    <img src="{{ asset('storage/' . $article->image) }}"
                                                        alt="{{ $article->title }}" width="200" height="100">
                                                @else
                                                    <span>No image uploaded</span>
                                                @endif
                                            </td>
                                            <td>{{ $article->author }}</td>
                                            <td>{{ $article->created_at->format('d-m-Y') }}</td>
                                            
                                            <td>
                                                @can('edit articles')
                                                <a href="{{ route('article.edit', $article->id) }}"
                                                    class="btn btn-warning" style="display-inline-block">Edit</a>
                                                @endcan
                                                @can('delete articles')
                                                <form action=""{{route('article.destroy', $article->id)}} method="POST" class="delete-article-form " style="display:inline-block; margin-left: 5px;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-article-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!confirm('Are you sure you want to delete this Article?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection
