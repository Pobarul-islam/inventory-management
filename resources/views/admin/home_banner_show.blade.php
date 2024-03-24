@extends('admin.layout.app')

@section('heading', 'Edit Home Page Banner')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('uploads/' . $page_data->banner_photo) }}" alt=""
                                        class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="banner_photo">
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="banner_title"
                                            value="{{ $page_data->banner_title }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Name *</label>
                                        <input type="text" class="form-control" name="banner_person_name"
                                            value="{{ $page_data->banner_person_name }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Designation *</label>
                                        <input type="text" class="form-control" name="banner_person_designation" cols="30" row="10"
                                            value="{{ $page_data->banner_person_designation }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Description *</label>
                                        <textarea name="banner_description" class="form-control h_100" value="{{ $page_data->banner_person_description }}"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button url *</label>
                                        <input name="banner_button_url" class="form-control" value="{{ $page_data->banner_button_url }}"></input>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button text *</label>
                                        <input name="banner_button_text" class="form-control" value="{{ $page_data->banner_benner_text }}"></input>
                                    </div>
                                  
                                   
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
