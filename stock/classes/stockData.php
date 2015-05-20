<?php 
class inventory_stockData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod_stock' => array(
	    'name'     => 'Stock',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
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
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'author' => array(
	    'name'     => 'Author',
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
	    'button'     => array('button' => 'Gravar Stock'),);
}