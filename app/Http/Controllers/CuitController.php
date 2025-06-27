<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class CuitController extends Controller
{
    public function index(): View {
        // SELECT id.posts, user_id.post, content.post, name.users LEFT JOIN..
        $posts = Post::with('user')->latest()->get();

        return view ('home', compact('posts'));
    }

    public function post(Request $request): RedirectResponse {
    Post::create([
        'user_id' => Auth::id(),
        'content' => $request->content,
    ]);
    return redirect('/')->with('success', 'Your post has been saved!');

    }
}
