<?php
namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class HelloWordController extends AbstractControllers {

    public function execute(){
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value){
            if($value["name"] == "info"){
                $valueOfVariable = $value["value"];
            }
        }
        view([
            "name" => "Api to Learning",
            "version" => 1.0,
            "value_of_varible_info" => $valueOfVariable,
            "manager_developer" => "Jhenifer Bianca de Assis pimentel",
            "web_site_company" => "https://jbap.com"
        ]);
    }
}