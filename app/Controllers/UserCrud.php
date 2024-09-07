<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
   // muestra la lista de usuarios
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }

    // mueve al formulario crear
    public function create(){
        return view('add_user');
    }
 
 // insertar datos
    public function store() {
        $userModel = new UserModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'direccion'  => $this->request->getVar('direccion'),
            'telefono'  => $this->request->getVar('telefono'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }

  //mostrar datos
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_view', $data);
    }

  //Actualizar datos
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'direccion'  => $this->request->getVar('direccion'),
            'telefono'  => $this->request->getVar('telefono'),
            
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
   //eliminar datos
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}