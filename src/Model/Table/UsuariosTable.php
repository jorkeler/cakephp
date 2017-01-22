<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use \Cake\Validation\Validator;

class UsuariosTable extends Table{
    
    public function initialize(array $config) {
        $this->table('usuarios');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Usuario');
        
        $this->belongsTo('Roles', [
            'className' => 'Roles',
            'foreignKey' => 'roles_id',
            'propertyName' => 'rol'
        ]);
        
    }
    
   
    
}
