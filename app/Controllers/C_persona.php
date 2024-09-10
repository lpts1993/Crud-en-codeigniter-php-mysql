<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_persona;
class C_persona extends Controller{

    public function index()
    {
        $per=new m_persona();
        $datos['persona']=$per->findAll();
        return view('welcome_message',$datos);
    }

    //controlador agregar

    public function agregar()
    {
        
        return view('agregar');
    }
//controlador insertar

public function insertar(){
       
        $per = new m_persona();

        $data=[
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'sexo' => $_POST['sexo'],
            'edad' => $_POST['edad']
        ];

        $per->insert($data);
        return redirect()->to(base_url());
        
    }
//controlador eliminar

public function eliminar($id=null){
       
    $per = new m_persona();
    $per->delete($id);

    
    return redirect()->to(base_url());
    
}
//controlador editar

public function editar($id = null)
    {

        $per = new m_persona();
        $registro['persona']= $per->find($id);

      return view('actualizando',$registro);
     


       // return redirect()->to(base_url());
    }
    //boton asctulizar

    public function factualizar()
    {

        $per = new m_persona();
        $id= $_POST['id'];

        $data = [

            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'sexo' => $_POST['sexo'],
            'edad' => $_POST['edad']
        ];
        $per->update($id,$data);

        



       return redirect()->to(base_url());
    }


}