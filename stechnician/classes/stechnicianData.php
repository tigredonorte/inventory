<?php 
class inventory_stechnicianData extends \classes\Model\DataModel{
    public $dados  = array(
         'product' => array(
	    'name'     => 'Product',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'inventory/product',
	    'fkey' => array(
	        'model' => 'inventory/product',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_product', 'name'),
	    ),
        ),
         'technician' => array(
	    'name'     => 'Technician',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_usuario', 'email'),
	    ),
        ),
         'stock' => array(
	    'name'     => 'Stock',
	    'type'     => 'int',
	    'size'     => '8',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Stechnician'),);
}