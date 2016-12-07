<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{
    /**
     * Public index page controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $posts = Post::all();
        return View('public.index', ['posts' => $posts]);
    }

    /**
     * Public Read post page controller
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        return View('public.show', ['post' => $post]);
    }
}
