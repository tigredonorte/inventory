<?php 
class inventory_itemModel extends \classes\Model\Model{
    public $tabela = "inventory_item";
    public $pkey   = array('product','visit');
}
