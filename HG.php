<?php

namespace: JaydenMaze\HGPlugin;

use pocketmine\plugin\PluginBase;

class HGPlugin extends PluginBase;

    public function onEnable(){
        this->getLogger()info("onEnable() has been called!");
    
    }

    public function onDisable(){
        this->getLogger()info("onDisable()has been called!");
    }
}

?>
