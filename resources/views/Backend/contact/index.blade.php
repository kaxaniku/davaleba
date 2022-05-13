@extends('Backend.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="">
                Contact Page
            </h4>

            <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('Backend.contact.update') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $data['ContactData']->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="short_text" class="form-label">Short Text</label>
                                <textarea class="form-control" id="short_text" rows="6" name="S_text">{{ $data['ContactData']->S_text }}</textarea> 
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Text</label>
                                <textarea class="form-control" id="text" rows="6" name="text">{{ $data['ContactData']->text }}</textarea> 
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Contact Address</label>
                                <textarea class="form-control" id="text" rows="6" name="C_address">{{ $data['ContactData']->C_address }}</textarea> 
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Contact Info</label>
                                <textarea class="form-control" id="text" rows="6" name="C_info">{{ $data['ContactData']->C_info }}</textarea> 
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection