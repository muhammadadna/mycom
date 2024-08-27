@extends('admin.main')

@section('content')

<div class="page-content">
    <!-- Page Header-->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <h2 class="h5 mb-0">Create Course</h2>
        </div>
    </div>

    <section class="pt-4">
        <div class="container-fluid">
            <div class="row gy-4">
                <!-- Form Elements -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="h4 mb-0">Course Data</h3>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <label class="col-sm-3 form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Title">
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Course Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="course_category_id">
                                            <option value="">Choose Course Category</option>
                                            @foreach ($categories as $category )
                                            @if(old('category_id') == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="my-2"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Type Course</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="type">
                                            <option value="">Choose Type Course</option>
                                            <option value="Online">Online</option>
                                            <option value="Offline">Offline</option>
                                            <option value="Hybrit">Hybrit</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="my-2"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Start Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="datetime-local" name="start_time">
                                    </div>
                                </div>
                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">End Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="datetime-local" name="end_time">
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label" for="formFile">File input</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="formFile" type="file" name="image">
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="status">
                                            <option value="">Choose Status</option>
                                            <option value="1">Ongoing</option>
                                            <option value="2">Upcoming</option>
                                            <option value="0">Passed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" name="description"
                                            placeholder="Description"></textarea>
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <div class="col-sm-9 ms-auto">
                                        <a href="{{ url('course') }}"><button class="btn btn-danger"
                                                type="button">Cancel</button></a>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
