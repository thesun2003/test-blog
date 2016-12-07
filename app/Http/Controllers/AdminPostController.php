<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminPostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Admin Index page controller
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $posts = Post::all();
        return View('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Controller to show one post in Admin
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        return View('admin.posts.show', ['post' => $post]);
    }

    /**
     * Admin Edit Post controller
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id = false) {
        if ($id) {
            $post = Post::find($id);
        } else {
            $post = new Post();
        }
        return View('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Admin Create/Update Post controller
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id = false) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($id) {
            $post = Post::find($id);
            $post->update($request->input());
        } else {
            $post = Post::create($request->input());
        }

        $message = 'Post has been ' . ($id ? 'updated': 'added');

        return redirect()->route('admin.posts.show', $post->_id)->with('message', $message);
    }

    /**
     * Controller to delete Post in Admin
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('message', 'Post has been deleted');
    }
}
