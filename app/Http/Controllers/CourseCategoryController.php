<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseCategory = CourseCategory::latest()->paginate(10);
        return view('admin/course-category/index', compact('courseCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/course-category/create');
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
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/images/course-category', $image->hashName());

        CourseCategory::create([
            'name'                  => $request->name,
            'type'                  => $request->type,
            'description'           => $request->description,
            'image'                 => $image->hashName(),
        ]);

        return redirect('/course-category')->with('success', 'Course Category has been saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategory $courseCategory)
    {
        return view('admin/course-category/edit', compact('courseCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCategory $courseCategory)
    {
        $this->validate($request, [
            'name'                  => 'required',
            'type'                  => 'required',
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images/course-category', $image->hashName());

            //delete old image
            Storage::delete('public/images/course-category/'.$courseCategory->image);

            //update courseCategory with new image
            $courseCategory->update([
                'name'                  => $request->name,
                'type'                  => $request->type,
                'description'           => $request->description,
                'image'                 => $image->hashName(),
            ]);

        } else {

            //update courseCategory without image
            $courseCategory->update([
                'name'                  => $request->name,
                'type'                  => $request->type,
                'description'           => $request->description,
            ]);
        }

        return redirect('/course-category')->with('success', 'Course Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCategory $courseCategory)
    {
        if($courseCategory->image){
            Storage::delete('public/images/course-category/'. $courseCategory->image);
        }
        CourseCategory::destroy($courseCategory->id);

        return redirect('/course-category')->with('success', 'Post has been deleted!');
    }
}
