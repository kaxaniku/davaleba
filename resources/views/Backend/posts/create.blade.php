@extends('Backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="">
                Create Post
            </h4>

            <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('Backend.posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_text" class="form-label">Short Text</label>
                                <textarea class="form-control" id="short_text" rows="6" name="S_text"></textarea> 
                                @error('S_text')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Text</label>
                                <textarea class="form-control" id="text" rows="6" name="text"></textarea> 
                                @error('text')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Image</label>
                                <input type="file" class="form-control" name="img"> 
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" name="category_id">
                                @foreach ($data['categories'] as $item)
                                    <option value="{{ $item->id}}">{{$item->name}}</option>
                                @endforeach
                                </select>  
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Tags</label>
                                <br>
                                @foreach ($data['tags'] as $item)
                                    <div>
                                        <input type="checkbox" id="tag_id" name="tag_id[]" value="{{ $item->id }}"> {{ $item->name }}
                                    </div>
                                @endforeach
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection