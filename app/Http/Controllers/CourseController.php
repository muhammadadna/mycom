<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10)->all();
        return view('admin/course/index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/course/create', [
            'categories' => CourseCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                  => 'required',
            'type'                  => 'required',
            'status'                => 'required',
            'course_category_id'    => 'required',
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $image = $request->file('image')->store('public/images/course');

        $image = $request->file('image');
        $image->storeAs('public/images/course', $image->hashName());

        Course::create([
            'name'                  => $request->name,
            'type'                  => $request->type,
            'course_category_id'    => $request->course_category_id,
            'start_time'            => $request->start_time,
            'end_time'              => $request->end_time,
            'description'           => $request->description,
            'status'                => $request->status,
            'image'                 => $image->hashName(),
        ]);

        return redirect('/course')->with('success', 'Course has been saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
