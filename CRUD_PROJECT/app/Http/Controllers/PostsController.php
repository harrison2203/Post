<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::all();
        if (count($posts) <=0) {; // verification de la taille posts..si posts est inférieur ou égal à zero je renvoie le message
            return response (["message" =>"aucun post publié"], 200);
        }
        return response($posts, 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $postsValidation = $request ->validate ([
        "title" => ["required", "string"],
        "content" => ["required", "string"],
       ]);

       $posts = Posts::create ([
        "title" => $postsValidation["title"],
        "content" => $postsValidation["content"],
       ]);
       return response (["post créé."],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $id)
    {
        return Posts::find ($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postsValidation = $request ->validate ([
            "title" => ["required","string"],
            "content" => ["required", "string"],
        ]);
        $post = Posts::find($id);
        if (!$post) {
            return response ([ "message" => "aucun post trouvé avec cet id $id"]);
        }
        $post->update ($postsValidation);
        return response (["message" => "post modifié"], 201);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $postsValidation = $request ->validate ([
            "id" => ["required"],
        ]);
    $post = Posts::find($id);  // s'il y a pas de post j'envoie ce message
        if (!$post) {
            return response ([ "message" => "aucun post trouvé avec cet id $id"]);
        }
        $value = Posts::destroy ($id);
        return response (["message" => "post effacé avec succès!"], 201);
    }


}