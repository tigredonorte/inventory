<?php 
class inventory_mtechnicianData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod_mtechnician' => array(
	    'name'     => 'Mtechnician',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'product' => array(
	    'name'     => 'Product',
	    'type'     => 'int',
	    'size'     => '11',
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
         'responsible' => array(
	    'name'     => 'Responsible',
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
         'date' => array(
	    'name'     => 'Date',
	    'type'     => 'timestamp','private' => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'amount' => array(
	    'name'     => 'Amount',
	    'type'     => 'int',
	    'size'     => '8',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'type' => array(
	    'name'     => 'Type',
	    'type'     => 'enum',
	    'default' => 'picked',
	    'options' => array(
	    	'picked' => 'picked',
	    	'spented' => 'spented',
	    	'returned' => 'returned',
	    	'losted' => 'losted',
	    ),
	    'grid'    => true,
	    'display' => true,
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
	    'button'     => array('button' => 'Gravar Mtechnician'),);
}