<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //função para mostrar em geral
    public function index()
    {
        $posts = Post::all();
        $key = 0;
        return view('welcome', compact('posts', 'key'));
    }
    //função para mostrar o post em detalhe
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    //função para criar
    public function create(){
        return view('posts.create');
    }
    //função para armazenar
    public function store(Request $request){
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $user = auth()->user();
        $post->user_id = $user->id;
        $post->save();
        return redirect('/')->with('msg', 'Postagem criada com sucesso');
    }
    //função para deletar
    public function destroy($id) {
        Post::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Postagem deletada com sucesso!');
    }
}
