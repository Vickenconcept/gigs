<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\User;

use Illuminate\View\Middleware\ShareErrorsFromSession;


use App\Models\newGig;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// Namespace App\Http\Controllers\Rule;
use Illuminate\Validation\Rule;

class NewGigController extends Controller
{
    public function index()
    {
        $gigs =  newGig::orderByDesc('created_at')
        ->with('user')
        ->get();

            return view('newGig.index', [
                'gigs' =>  $gigs
            ]);
    }

    public function create()
    {
            $users =User::all();

            return view('newGig.create',[
                'users' =>$users,
            ]);
    }

    public function store(Request $request)
    {

        //  dd(request()->all());
        $user = auth()->user();
        $gig = $user->newGigs()->create([
            'company' => $request->input('company'),
            'role' => $request->input('role'),
            'country' => $request->input('country'),
            'state_region' => $request->input('state_region'),
            'address' =>$request->input('address'),
            'minimum' =>$request->input('minimum'),
            'maximum' =>$request->input('maximum'),
            'tag' => $request->input('tag')
    ]);
    return redirect('/dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(newGig $newGig)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newGig $newGig)
    {

    if(auth()->user()->id !== $newGig->user_id) {
        abort(403, 'Unauthorized action.');
    }
    return view('newGig.edit', ['newGig' => $newGig]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newGig $newGig)
    {
        dd();
        $this->validate($request, [
            'company' => 'required|string',
            'role' => 'required|string',
            'country' => 'required|string',
            'state_region' => 'required|string',
            'address' => 'required|string',
            'minimum' => 'required|numeric',
            'maximum' => 'required|numeric',
            'tag' => 'required|string',
        ]);

        if(auth()->user()->id !== $newGig->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $newGig->update([
            'company' => $request->input('company'),
            'role' => $request->input('role'),
            'country' => $request->input('country'),
            'state_region' => $request->input('state_region'),
            'address' => $request->input('address'),
            'minimum' => $request->input('minimum'),
            'maximum' => $request->input('maximum'),
            'tag' => $request->input('tag'),
        ]);

        return redirect()->to('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $newGig = newGig::find($id);

    if(auth()->user()->id !== $newGig->user_id) {
        abort(403, 'Unauthorized action.');
    }

    $newGig->delete();

    return redirect()->to('/dashboard');

    }
// public function destroy(newGig $newGig)
// {
//     $this->authorize('delete', $newGig);
//     $newGig->delete();

//     return redirect()->to('/dashboard');
// }

}


