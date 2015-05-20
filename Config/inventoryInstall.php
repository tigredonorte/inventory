<?php
class inventoryInstall extends classes\Classes\InstallPlugin{
    protected $dados = array(
        "pluglabel" => "Inventory",
        "isdefault" => "n",
        "system"    => "n",
        "detalhes"  => "",
    );
     public function install(){return true;}
     public function unstall(){return true;}
}
