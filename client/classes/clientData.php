<?php 
class inventory_clientData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod_client' => array(
	    'name'     => 'Client',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
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
         'address' => array(
	    'name'     => 'Address',
	    'type'     => 'varchar',
	    'size'     => '256',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Client'),);
}