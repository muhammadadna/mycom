@extends('admin.main')
@section('content')

<div class="page-content">
    <!-- Page Header-->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <h2 class="h5 mb-0">Edit Course Category</h2>
        </div>
    </div>

    <section class="pt-4">
        <div class="container-fluid">
            <div class="row gy-4">
                <!-- Form Elements -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body pt-0">
                            <form action="{{ route('course-category.update', $courseCategory->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <label class="col-sm-3 form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Title" value="{{ old('name', $courseCategory->name) }}">
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" name="type">
                                            <option value="">Choose Type</option>
                                            <option value="Programing">Programing</option>
                                            <option value="UI/UX">UI/UX</option>
                                            <option value="Backend">Backend</option>
                                            <option value="Frontend">Frontend</option>
                                            <option value="QA">QA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="my-2"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label" for="formFile">File input</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="formFile" type="file" name="image">
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <label class="col-sm-3 form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" name="description"
                                            placeholder="Description">{{ old('description', $courseCategory->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="my-4"></div>
                                <div class="row">
                                    <div class="col-sm-9 ms-auto">
                                        <a href="{{ url('course-category') }}"><button class="btn btn-danger"
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
