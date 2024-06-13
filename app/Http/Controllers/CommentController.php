<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feedback;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments =Feedback::paginate(8);        
        return view('comment',compact('comments'));
    }
   
    public function create()
    {
        // Logique pour afficher le formulaire de création
    }

    
    public function store(Request $request)
    {
        // Logique pour stocker une nouvelle ressource
    }

    
    public function show($id)
    {
        $comment = Feedback::find($id);
        return \view('show_comment',compact('comment'));
    }
  
    public function comment()
    {
        return view('profile.Comments') ; 
    }

    
    public function edit($id)
    {
        // Logique pour afficher le formulaire de modification
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une ressource spécifique
    }

    
    public function destroy($id,)
    {
       $comments=Feedback::find($id);
       $comments->delete();
       return redirect()->route('comment')->with('success', 'Comment deleted successfully');
    }
}
