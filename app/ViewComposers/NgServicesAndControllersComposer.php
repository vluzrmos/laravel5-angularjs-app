<?php
/**
 * Created by PhpStorm.
 * User: vluzrmos
 * Date: 23/04/15
 * Time: 11:25
 */

namespace App\ViewComposers;
use Illuminate\Contracts\View\View;

class NgServicesAndControllersComposer{

    public function compose(View $view){
        $this->composeServices($view);
        $this->composeControllers($view);
    }

    /**
     * Compose an array of urls to ng-services
     * @param View $view
     */
    public function composeServices(View $view){
        $ngServices = [];

        foreach(glob(public_path("/services/*.js")) as $service){
            $ngServices[] = asset("services/".basename($service));
        }

        $view->with("ngServices", $ngServices);
    }

    /**
     * Compose an array of urls to ng-controllers
     * @param View $view
     */
    public function composeControllers(View $view){
        $ngControllers = [];

        foreach(glob(public_path("/controllers/*.js")) as $service){
            $ngControllers[] = asset("controllers/".basename($service));
        }

        $view->with("ngControllers", $ngControllers);
    }
}
