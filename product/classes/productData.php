<?php 
class inventory_productData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod_product' => array(
	    'name'     => 'Product',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'name' => array(
	    'name'     => 'Name',
	    'type'     => 'varchar',
	    'size'     => '64',
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
         'stock' => array(
	    'name'     => 'Stock',
	    'type'     => 'int',
	    'size'     => '8',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Product'),);
}