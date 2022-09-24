<?php

namespace App\FrameworkTools\Implementation\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWordController;
use App\Controllers\InsertDataController;
use App\Controllers\TrainQueryController;

class RouteProcess{

    public static function execute(){
        $processServerElements = ProcessServerElements::start();
        $routeArray =[];

        switch ($processServerElements->getVerb()){
            case 'GET':

                switch ($processServerElements->getRoute()){
                    
                    case '/hello-world':

                        return (new HelloWordController)->execute();
                    break;

                    case '/car':

                        return (new TrainQueryController)->car();
                    break;

                    case '/car/id-by-car':

                        return (new TrainQueryController)->carid();
                    break;

                    case '/car/name-by-car':

                        return (new TrainQueryController)->carname();
                    break;
                    case '/seller ':

                        return (new TrainQueryController)->seller();
                    break;
                    case '/seller/id-by-seller':

                        return (new TrainQueryController)->idseller();
                    break;
                    case '/seller/name-by-seller':

                        return (new TrainQueryController)->sellername();
                    break;

                    case '/seller/get-all-car-by-seller':

                        return (new TrainQueryController)->sellercar();
                    break;
                    case '/buyer ':

                        return (new TrainQueryController)->buyer();
                    break;
                    case '/buyer/id-by-buyer':

                        return (new TrainQueryController)->buyerid();
                    break;
                    case '/buyer/name-by-buyer ':

                        return (new TrainQueryController)->buyername();
                    break;
                    case '/buyer/get-all-cars ':

                        return (new TrainQueryController)->carbuyer();
                    break;
                }
            case 'POST':

                switch ($processServerElements->getRoute()){
                        
                    case '/insert-data':
    
                        return (new InsertDataController)->execute();
                    break;
                }
        }
                
    }
}