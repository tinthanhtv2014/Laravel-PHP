<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = Article::all();
        // dd($articles);
        return view('home',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo " fuk laravel";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo " fuk laravel";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo " fuk laravel";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo " fuk laravel";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo " fuk laravel";
    }
}
