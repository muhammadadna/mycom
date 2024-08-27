@extends('admin.main')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <h2 class="h5 mb-0">Courses</h2>
        </div>
    </div>

    <section class="pt-4">
        <div class="container-fluid">
            <div class="row gy-4">
                <a href="{{ url('course/create') }}"><button class="btn btn-primary"
                        type="button">Add</button></a>

                @forelse($courses as $course)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3 align-items-center">
                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            {{-- <strong class="text-sm d-none d-lg-block">{{ $course->status }}</strong> --}}
                                            <div class="position-relative"><img class="avatar ms-3"
                                                src="{{ Storage::url('public/images/course/').$course->image }}" alt="">
                                                @if ($course->status == 1)
                                                    <span class="availability-status bg-success"></span>
                                                @elseif ($course->status == 2)
                                                    <span class="availability-status bg-warning"></span>
                                                @else
                                                    <span class="availability-status bg-danger"></span>
                                                @endif
                                            </div>
                                            <div class="ms-4">
                                                <h3 class="h5 mb-0">{{ $course->name }}</h3>
                                                {{-- <p class="text-sm fw-light mb-0">{{ $course->category->name }}</p> --}}
                                                <p class="text-sm fw-light mb-0">Course Categpry</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <div
                                            class="d-inline-block py-1 px-4 rounded-pill bg-dash-dark-3 fw-light text-sm">
                                            {{ Str::limit($course->description , 50) }}</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul
                                            class="list-inline text-center mb-0 d-flex justify-content-between mb-0 text-sm">
                                            <li class="list-inline-item">{{ $course->type }}</li>
                                            <li class="list-inline-item">{{ $course->start_time }}</li>
                                            <li class="list-inline-item">{{ $course->end_time }}</li>
                                            <li class="list-inline-item">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('course.destroy', $course->id) }}" method="POST">
                                                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-primary fa fa-pen"></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger fa fa-trash"></button>
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
