<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class NewController extends Controller
{
    public function index() {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    public function add() {
       
        $news = News::all();
        return view('admin.news.add', compact('news'));
    }

    public function insert(Request $request) {
        $news = new News();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('assets/uploads/news/', $filename);
            $news->image = $filename;  
        }

        $news->title = $request->input('title');
        $news->description = $request->input('description');

        $news->save();

        return redirect('news')->with('status', 'News Added Successfully');
    }

    public function edit($id) {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id) {
        $news = News::find($id);

        if($request->hasFile('image')) {
            $path = 'assets/uploads/news'.$news->image;

            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/news', $filename);

            $news->image = $filename;
        }

        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->update();

        return redirect('news')->with('status', 'News Updated Successfully');
    }

    public function destroy($id) {
        $news = News::find($id);

        $path = 'assets/uploads/news/'.$news->image;

        if(File::exists($path)) {
            File::delete($path);
        }

        $news->delete();
        return redirect('news')->with('status', 'News Delete Successfully');
    }
}