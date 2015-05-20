<?php 
use classes\Classes\Actions;   
class inventoryActions extends Actions{
    protected $permissions = array(
        "inventory/public" => array(
            "nome"      => "inventory/public",
            "label"     => "Acesso ao inventory",
            "descricao" => "Acesso público ao plugin inventory",
            "default"   => "s",
        ),
         "inventory/admin" => array(
            "nome"      => "inventory/admin",
            "label"     => "Administrar inventory",
            "descricao" => "Permite gerenciar (adicionar, visualizar, editar e apagar) os dados do plugin inventory",
            "default"   => "n",
        ),
        
    );
    
    protected $actions = array( 
        "inventory/index/index" => array(
            "label" => "inventory", "publico" => "n", "default_yes" => "s","default_no" => "n",
            "permission" => "inventory/admin",
            "menu" => array('inventory/stock/index','inventory/mtechnician/index','inventory/stechnician/index','inventory/visit/index','inventory/client/index','inventory/product/index','inventory/item/index',),
            "breadscrumb" => array("inventory/index/index", )
        ),
        
        
        'inventory/stock/index' => array(
            'label' => 'stock', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/stock/formulario')
        ),
        
        'inventory/stock/formulario' => array(
            'label' => 'Criar stock', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/stock/index')
        ),
        
        'inventory/stock/show' => array(
            'label' => 'Visualizar stock', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/stock/index', 'Ações' => array('Editar' => 'inventory/stock/edit', 'Excluir' => 'inventory/stock/apagar'))
        ),
        
        'inventory/stock/edit' => array(
            'label' => 'Editar stock', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/stock/index', 'Voltar para stock' => 'inventory/stock/show')
        ),

        'inventory/stock/apagar' => array(
            'label' => 'Excluir stock', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/mtechnician/index' => array(
            'label' => 'mtechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/mtechnician/formulario')
        ),
        
        'inventory/mtechnician/formulario' => array(
            'label' => 'Criar mtechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/mtechnician/index')
        ),
        
        'inventory/mtechnician/show' => array(
            'label' => 'Visualizar mtechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/mtechnician/index', 'Ações' => array('Editar' => 'inventory/mtechnician/edit', 'Excluir' => 'inventory/mtechnician/apagar'))
        ),
        
        'inventory/mtechnician/edit' => array(
            'label' => 'Editar mtechnician', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/mtechnician/index', 'Voltar para mtechnician' => 'inventory/mtechnician/show')
        ),

        'inventory/mtechnician/apagar' => array(
            'label' => 'Excluir mtechnician', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/stechnician/index' => array(
            'label' => 'stechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/stechnician/formulario')
        ),
        
        'inventory/stechnician/formulario' => array(
            'label' => 'Criar stechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/stechnician/index')
        ),
        
        'inventory/stechnician/show' => array(
            'label' => 'Visualizar stechnician', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/stechnician/index', 'Ações' => array('Editar' => 'inventory/stechnician/edit', 'Excluir' => 'inventory/stechnician/apagar'))
        ),
        
        'inventory/stechnician/edit' => array(
            'label' => 'Editar stechnician', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/stechnician/index', 'Voltar para stechnician' => 'inventory/stechnician/show')
        ),

        'inventory/stechnician/apagar' => array(
            'label' => 'Excluir stechnician', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/visit/index' => array(
            'label' => 'visit', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/visit/formulario')
        ),
        
        'inventory/visit/formulario' => array(
            'label' => 'Criar visit', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/visit/index')
        ),
        
        'inventory/visit/show' => array(
            'label' => 'Visualizar visit', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/visit/index', 'Ações' => array('Editar' => 'inventory/visit/edit', 'Excluir' => 'inventory/visit/apagar'))
        ),
        
        'inventory/visit/edit' => array(
            'label' => 'Editar visit', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/visit/index', 'Voltar para visit' => 'inventory/visit/show')
        ),

        'inventory/visit/apagar' => array(
            'label' => 'Excluir visit', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/client/index' => array(
            'label' => 'client', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/client/formulario')
        ),
        
        'inventory/client/formulario' => array(
            'label' => 'Criar client', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/client/index')
        ),
        
        'inventory/client/show' => array(
            'label' => 'Visualizar client', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/client/index', 'Ações' => array('Editar' => 'inventory/client/edit', 'Excluir' => 'inventory/client/apagar'))
        ),
        
        'inventory/client/edit' => array(
            'label' => 'Editar client', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/client/index', 'Voltar para client' => 'inventory/client/show')
        ),

        'inventory/client/apagar' => array(
            'label' => 'Excluir client', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/product/index' => array(
            'label' => 'product', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/product/formulario')
        ),
        
        'inventory/product/formulario' => array(
            'label' => 'Criar product', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/product/index')
        ),
        
        'inventory/product/show' => array(
            'label' => 'Visualizar product', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/product/index', 'Ações' => array('Editar' => 'inventory/product/edit', 'Excluir' => 'inventory/product/apagar'))
        ),
        
        'inventory/product/edit' => array(
            'label' => 'Editar product', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/product/index', 'Voltar para product' => 'inventory/product/show')
        ),

        'inventory/product/apagar' => array(
            'label' => 'Excluir product', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'inventory/item/index' => array(
            'label' => 'item', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Página Principal' => 'inventory/index/index', 'inventory/item/formulario')
        ),
        
        'inventory/item/formulario' => array(
            'label' => 'Criar item', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin',
            'menu' => array('Voltar' => 'inventory/item/index')
        ),
        
        'inventory/item/show' => array(
            'label' => 'Visualizar item', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/item/index', 'Ações' => array('Editar' => 'inventory/item/edit', 'Excluir' => 'inventory/item/apagar'))
        ),
        
        'inventory/item/edit' => array(
            'label' => 'Editar item', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array('inventory/item/index', 'Voltar para item' => 'inventory/item/show')
        ),

        'inventory/item/apagar' => array(
            'label' => 'Excluir item', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'inventory/admin', 'needcod' => true,
            'menu' => array()
        ),

    
    );
    
}
