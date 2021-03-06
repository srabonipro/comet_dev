@extends('admin.layouts.app')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')


        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit The Post</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data" id="edit_post_form">
                                @csrf

                                <input type="hidden" id="edit_id">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Title</label>
                                    <div class="col-md-10">
                                        <input name="title" id="edit_title" type="text" class="form-control">
                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <label class="col-form-label col-md-2">Select Tags</label>
                                    <div class="col-md-10">
                                        <select name="tag[]" class="form-control tag_selector" multiple="multiple">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Categories</label>
                                    <div class="col-md-10">
                                        @foreach ($categories as $category)
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="category[]" value="{{ $category->id }}"> {{ $category->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}

                                <div class="form-group row post_type">
                                    <label class="col-form-label col-md-2">Select Type</label>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="Image" checked> Image
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="Gallery"> Gallery
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="Video"> Video
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="Audio"> Audio
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input name="image" type="file" id="upload_image">
                                        <input name="gallery[]" style="display: none" type="file" id="upload_gallery"  multiple>
                                        <input name="video" style="display: none" type="file" id="upload_video">
                                        <input name="audio" style="display: none" type="file" id="upload_audio">
                                    </div>

                                </div>

                                {{-- Preload Images --}}
                                <div class="row">
                                    <div class="preload">
                                        <img  style="width:200px" src="" class="preload_image my-4">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea name="content" id="text_area"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Post Now" class="btn btn-success">
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Main Wrapper -->
@endsection
