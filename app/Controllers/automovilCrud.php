<?php 
namespace App\Controllers;

use App\Models\AutomovilModel;
use CodeIgniter\Controller;

class AutomovilCrud extends Controller
{
    // Muestra la lista de automóviles
    public function index()
    {
        $automovilModel = new AutomovilModel();
        $data['automoviles'] = $automovilModel->orderBy('id', 'DESC')->findAll();
        return view('automovil_view', $data);
    }

    // Mueve al formulario crear
    public function create()
    {
        return view('add_automovil');
    }

    // Inserta datos
    public function store()
    {
        $automovilModel = new AutomovilModel();
        $data = [
            'modelo' => $this->request->getVar('modelo'),
            'color'  => $this->request->getVar('color'),
            'marca'  => $this->request->getVar('marca'),
            'linea'  => $this->request->getVar('linea'),
        ];
        $automovilModel->insert($data);
        return redirect()->to('/automoviles-list');
    }

    // Muestra los datos de un automóvil específico
    public function singleAutomovil($id = null)
    {
        $automovilModel = new AutomovilModel();
        $data['automovil'] = $automovilModel->where('id', $id)->first();
        return view('edit_automovil', $data);
    }

    // Actualiza datos
    public function update()
    {
        $automovilModel = new AutomovilModel();
        $id = $this->request->getVar('id');
        $data = [
            'modelo' => $this->request->getVar('modelo'),
            'color'  => $this->request->getVar('color'),
            'marca'  => $this->request->getVar('marca'),
            'linea'  => $this->request->getVar('linea'),
        ];
        $automovilModel->update($id, $data);
        return redirect()->to('/automoviles-list');
    }

    // Elimina datos
    public function delete($id = null)
    {
        $automovilModel = new AutomovilModel();
        $automovilModel->delete($id);
        return redirect()->to('/automoviles-list');
    }
}
