<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::paginate();

        return view('usuarios.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    public function downloadPdf()
    {
        $users = User::paginate();

        view()->share('usuarios.pdf', $users);


        $pdf = PDF::loadView('usuarios.pdf', ['users' => $users]);

        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User();
        return view('usuarios.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'usuarios created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grado $grado
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user->update($request->all());
        if ($user === null) {
            return response()->json('Company Not found', 404);
        }
        $user->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Solicitude updated successfully');
            //return response()->json($user->all());

    }



    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuarios deleted successfully');
    }

    
}
