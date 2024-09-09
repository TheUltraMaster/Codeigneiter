<?php 
namespace App\Models;

use CodeIgniter\Model;

class AutomovilModel extends Model
{
    protected $table = 'automovil'; // Nombre de la tabla
    protected $primaryKey = 'id';   // Clave primaria

    protected $allowedFields = ['modelo', 'color', 'marca', 'linea']; // Campos permitidos para la inserción y actualización

    // Reglas de validación básicas
    protected $validationRules = [
        'modelo' => 'required|min_length[1]|max_length[255]',
        'color'  => 'required|min_length[1]|max_length[255]',
        'marca'  => 'required|min_length[1]|max_length[15]',
        'linea'  => 'required|min_length[1]|max_length[20]',
    ];

    // Mensajes de validación personalizados
    protected $validationMessages = [
        'modelo' => [
            'required' => 'El campo modelo es requerido.',
        ],
        'color' => [
            'required' => 'El campo color es requerido.',
        ],
        'marca' => [
            'required' => 'El campo marca es requerido.',
        ],
        'linea' => [
            'required' => 'El campo línea es requerido.',
        ],
    ];

    // Configuración de retorno
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
}
