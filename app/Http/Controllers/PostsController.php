<?php

namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class PostsController extends Controller
{
    /**
     * @var array
     */
    protected $rules =
        [
            'email' => 'required|email',
            'password' => 'required|min:2|max:128'
        ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('created_at', 'desc')->paginate(2);
        $tipos = TipoUsuario::all();
        return view('mantenimientos.usuario.index', ['usuarios' => $usuarios, 'tipos' => $tipos]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->has('remember'))) {
                $user = Auth::user();
                return Response::json($user);
            } else {
                return Response::json(array('errores' => 'El correo o la contraseña son invalidas'));
            }
        }
    }

    public function iniciar(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->has('remember'))) {
                $user = Auth::user();
                return Response::json($user);
            } else {
                return Response::json(array('errores' => 'El correo o la contraseña son invalidas'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        //$usuario = User::where('id', $id)->with('tipoUsuario')->first();
        $tipo = TipoUsuario::find($usuario->tipo_usuarios_id);
        return view('mantenimientos.usuario.detalle', ['usuario' => $usuario, 'tipo' => $tipo]);
    }

    public function crear()
    {
        return view('mantenimientos.usuario.crear');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     */
    public function update(Request $request, $id)
    {

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$post = Post::findOrFail($id);
        $post->delete();

        return response()->json($post);*/
    }


    /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
}
