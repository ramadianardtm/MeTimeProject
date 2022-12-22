<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
    {
        public function __invoke(Request $request)
        {
            $validatedData = $request->validate([
                'body' => ['required']
            ]);

            $validatedData['user_id'] = $request->user()->id;

            Post::create($validatedData);

            return redirect()->back();

    }

        public function destroy($id)
        {
            $post= Post::findOrFail($id);
            $post->delete();
            
            return redirect()->back();
    }
}