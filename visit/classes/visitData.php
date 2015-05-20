<?php 
class inventory_visitData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod_visit' => array(
	    'name'     => 'Visit',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'technician' => array(
	    'name'     => 'Technician',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_usuario', 'email'),
	    ),
        ),
         'client' => array(
	    'name'     => 'Client',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'inventory/client',
	    'fkey' => array(
	        'model' => 'inventory/client',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_client', 'name'),
	    ),
        ),
         'date' => array(
	    'name'     => 'Date',
	    'type'     => 'timestamp','private' => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'total' => array(
	    'name'     => 'Total',
	    'type'     => 'decimal',
	    'especial' => 'monetary',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Visit'),);
}