<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Auth::user()->is_admin == 1){ 
            // $notes = Note::orderBy("created_at", "desc")->get();
            $notes = Note::latest()->get();
        } else {
            $notes = Note::where("user_id", Auth::user()->id)->latest()->get();
        }
        
        $data['notes'] = $notes; 
        // dd($data['notes']);
        // return view("notes.index", compact("notes"));
        return view("notes.index", $data);
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        return view("notes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Note $note)
    {
        $note->title = $request->title;
        $note->content = $request->content;
        $note->user_id = Auth::user()->id; //Auth::id()
        $note->save();

        return redirect()->route("notes.show", compact("note"))->with("status", "Note was created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view("notes.show", compact("note"));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view("notes.edit", compact("note"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note) 
    {
        $note->title = $request->title;
        $note->content = $request->content; 

        $note->save();

        return redirect()->route("notes.show", compact("note"))->with("status", "Note was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        if($note){
            $note->delete();
        }

        return back()->with("status", "Note was deleted successfully");
    }
}
