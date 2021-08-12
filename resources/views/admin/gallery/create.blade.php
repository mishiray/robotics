@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{env('APP_NAME')}}</a></li>
                        <li class="breadcrumb-item active">New Image</li>
                    </ol>
                </div>
                <h5 class="page-title">Image Gallery</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <form class="" enctype="multipart/form-data" method="POST" action="{{ route('gallery.posts.store') }}">{{csrf_field()}}
                               


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div>
                                               <input type="file" name="image" required class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div>
                                                <select name="status"  class="form-control" required autofocus>
                                                    <option value="" disabled selected> Select One</option>
                                                    <option value="1" {{ old('status') == '1' ? 'selected' : ''}}>Published</option>
                                                    <option value="0" {{ old('status') == '0' ? 'selected' : ''}}>Unpublished</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <input name="description" id="summernote" value="{{old('description')}}" required class="form-control summernote" required value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Filter</label>
                                            <div>
                                                <input type="text" list="filters" name="filter" class="form-control" required autofocus value="{{old('filter')}}">
                                                <datalist id="filters">
                                                    @foreach ($tags as $item)
                                                        <option value="{{$item->filter}}">
                                                            {{$item->filter}}
                                                        </option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container fluid -->
@endsection
