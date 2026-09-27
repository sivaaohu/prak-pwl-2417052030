<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
class UserController extends Controller
{
    public $userModel;
    public function getUser()
    {
        return $this->all();
    }
    public $kelasModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function store(Request $request){
        $this->userModel->create([
            'name' => $request->input('name'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        $this->userModel->createUser($data);
        return redirect()->route('user.create');
    }

  public function create(){
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'tittle' => 'Create User',
            'kelas' => $kelas
        ];
        return view('user.create', $data);
}
public function index(){
        $data = [
            'tittle' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
}
