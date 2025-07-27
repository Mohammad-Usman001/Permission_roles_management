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
                            <h4 class="mb-sm-0">Create Article</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Create Article</li>
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
                                @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="role_name" class="form-label">Artcle Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('name') }}" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Article Image</label><br>
                                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" >
                                    
                                        <small class="text-muted">Upload an image for the article</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Article Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="article_author" class="form-label">Artcle Author</label>
                                        <input type="text" class="form-control" id="article_author" name="author" value="{{ Auth::user()->name }}" readonly >
                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Create Article</button>
                                    <button type="submit" class="btn btn-secondary ms-2">
                                        <a href="{{ route('article.index') }}" class="text-white text-decoration-none">Back to Articles List</a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .permissions-list {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
@endsection
