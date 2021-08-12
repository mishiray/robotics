@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Robotics Lab</a></li>
                        <li class="breadcrumb-item active">Blog Categories</li>
                    </ol>
                </div>
                <h5 class="page-title">Blog Categories</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">View Created Categories</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @if (!empty($categories))
                                    @foreach ($categories as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td>{{$cat->getStatus()}}</td>
                                        <td>{{date('D , d M Y',strtotime($cat->created_at)) }}</td>
                                        <td class="center">
                                            <form action="{{ route('blog.categories.destroy' , $cat)}}" method="post">@csrf @method('delete')
                                                <a href="{{ route('blog.categories.edit' , $cat)}}" class="btn btn-primary btn-sm"><i class="ti-pencil"></i></a>
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="ti-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{ $categories->links() }}
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
    <script>
        $('#summernote').summernote({
            placeholder: 'Enter Blog Description',
            tabsize: 2,
            height: 120,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
          });
    </script>
@endsection
