<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function comment_index(Request $request, $id){

        return view('phonecontent.phone0');
    }
}
