<?php 
class inventory_itemData extends \classes\Model\DataModel{
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
         'visit' => array(
	    'name'     => 'Visit',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'inventory/visit',
	    'fkey' => array(
	        'model' => 'inventory/visit',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_visit', 'cod_visit'),
	    ),
        ),
         'amount' => array(
	    'name'     => 'Amount',
	    'type'     => 'int',
	    'size'     => '8',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'price' => array(
	    'name'     => 'Price',
	    'type'     => 'decimal',
	    'especial' => 'monetary',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Item'),);
}