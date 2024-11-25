<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Exception;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        return view('administrative.index', compact('events'));
    }

    public function create() {
        return view('administrative.createEvent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       try {
        $event = Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
            
        ]);
        $event->save();
        return redirect()->route('dashboard')
        ->with([ 'message' => 'Evento cadastrado com sucesso!', 'class' => 'alert-success' ]);

       } catch (Exception $e) {
        return redirect()->back()
        ->with([ 'message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger' ]);

       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       try {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('dashboard')
        ->with([ 'message' => 'Evento deletado com sucesso!', 'class' => 'alert-success' ]);

       } catch (Exception $e) {
            return redirect()->route('dashboard')
            ->with([ 'message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger' ]);


       }
    }
}
