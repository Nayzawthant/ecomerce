<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index() {
        $slides = Slide::all();
        return view('admin.slides.index', compact('slides'));
    }

    public function add() {
        $slides = Slide::all();
        return view('admin.slides.add', compact('slides'));
    }

    public function insert(Request $request) {
        $slides = new Slide();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slides/', $filename);
            $slides->image = $filename;
        }

        $slides->title = $request->input('title');
        $slides->save();

        return redirect('slides')->with('status', 'HeroSlide Added Successfully');
    }

    public function edit($id) {
        $slides = Slide::find($id);
        return view('admin.slides.edit', compact('slides'));
    }

    public function update(Request $request, $id) {
        $slides = Slide::find($id);

        if($request->hasFile('image')) {

            $path = 'assets/uploads/slides/'.$slides->image;

            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slides/',$filename);
            $slides->image = $filename;
        }

        $slides->title = $request->input('title');
        $slides->update();

        return redirect('slides')->with('status', 'HeroSlide Updated Successfully');
    }

    public function destroy($id) {
        $slides = Slide::find($id);

        $path = 'assets/uploads/slides'.$slides->image;
        if(File::exists($path)) {
            File::delete($path);
        }

        $slides->delete();

        return redirect('slides')->with('status', 'HeroSlide Delete Successfully');
    }
}
