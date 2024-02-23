<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->whereType('blog')->get();

        return view('backEnd.blog.index',compact('blogs'));
    }

    public function create(){
        return view('backEnd.blog.create');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('backEnd.blog.edit',compact('blog'));
    }

    public function save(Request $request){
        //return $request;
        $rules = [
            'name' => [
                'required',
                Rule::unique('blogs', 'name'),
            ],
            'image' => 'required',
            'status' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'name.required' => 'Blog name is required.',
            'name.unique' => 'This Blog is already available.',
            'description.required' => 'Description is required.',
            'category_id.required' => 'Category is required.',
            'image.required' => 'Image is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

       $categoryIdsJson = json_encode($request->category_id);

        $recipe = new Blog();
        $recipe->name = $request->name;
        $recipe->slug = Str::slug($request->name, '-');
        $recipe->user_id = auth()->user()->id;
        $recipe->description = $request->description;
        $recipe->category_id = $categoryIdsJson;
        //$recipe->category_id = $request->category_id;
        $recipe->main_content = $request->main_content;
        $recipe->status = $request->status;
        $recipe->position = $request->position;
        $recipe->type = 'blog';
        $recipe->seo_description = $request->seo_description;
        $recipe->seo_tags = $request->seo_tags;
        $recipe->seo_keywords = $request->seo_keywords;
        if ($request->file('image')) {
            $recipe->image = $this->saveImage($request);
        }
        $recipe->save();

        return redirect()->route('blog.list')->with('success','Blog Created Successfully');
    }


    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'uploads/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function delete($id){
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Book not found');
        }
        if (file_exists($blog->image)) {
            unlink($blog->image);
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Book deleted successfully');
    }


    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'name.required' => 'Blog name is required.',
            'description.required' => 'Description is required.',
            'category_id.required' => 'Category is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // If validation passes, update the student
        $blog = Blog::find($request->id);
        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name, '-');
        $blog->user_id = auth()->user()->id;
        $blog->description = $request->description;
        //$blog->category_id = $request->category_id; // Store category IDs as JSON
       // $blog->category_id = json_encode($request->category_id); // Store category IDs as JSON

        $blog->main_content = $request->main_content;
        $blog->status = $request->status;
        $blog->position = $request->position;
        $blog->seo_description = $request->seo_description;
        $blog->seo_tags = $request->seo_tags;
        $blog->seo_keywords = $request->seo_keywords;
        $blog->type = 'blog';
        if ($request->file('image')) {
            if (file_exists($blog->image)) {
                unlink($blog->image);
            }
            $blog->image = $this->saveImage($request);
        }
        $blog->save();
        return redirect()->route('blog.list')->with('success', 'Update Successfully');
    }

}
