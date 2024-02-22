<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'comment'=>'required|max:255',
        ]);
        $com = new Comment();
        $com->blog_id = $request->blog_id;
        $com->email = $request->email;
        $com->full_name = $request->full_name;
        $com->comment = $request->comment;
        $com->save();
        return redirect()->back()->with('success','Thanks for the Comment');
    }
    public function delete($id){
        $com = Comment::find($id);
        $com->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
