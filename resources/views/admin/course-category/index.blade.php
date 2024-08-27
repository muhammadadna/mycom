@extends('admin.main')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <h2 class="h5 mb-0">Course Category</h2>
        </div>
    </div>

    <section class="pt-4">
        <div class="container-fluid">
            <div class="row gy-4">
                <a href="{{ url('course-category/create') }}"><button class="btn btn-primary" type="button">Add</button></a>
                @forelse ($courseCategory as $data)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gy-3 align-items-center">
                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center"><img class="avatar ms-3"
                                            src="{{ Storage::url('public/images/course-category/').$data->image }}" alt="">
                                        <div class="ms-3">
                                            <h3 class="h5 mb-0">{{ $data->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="d-inline-block py-1 px-4 rounded-pill bg-dash-dark-3 fw-light text-sm">
                                        {{ Str::limit($data->description , 50) }}</div>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-inline text-center mb-0 d-flex justify-content-between mb-0 text-sm">
                                        {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('course-category.destroy', $data->id) }}" method="POST">
                                            <a href="{{ url('course-category', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> --}}
                                        <li class="list-inline-item">{{ $data->type }}</li>
                                        <li class="list-inline-item">
                                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('course-category.destroy', $data->id) }}" method="POST">
                                                <a href="{{ url('course-category', $data->id) }}">Update</a> /
                                                <a href="{{ url('course-category.destroy', $data->id) }}">Delete </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form> --}}
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('course-category.destroy', $data->id) }}" method="POST">
                                                <a href="{{ route('course-category.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                        Data Course belum Tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

</div>
@endsection
