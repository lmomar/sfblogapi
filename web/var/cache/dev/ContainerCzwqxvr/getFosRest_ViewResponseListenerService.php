<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.view_response_listener' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/ViewResponseListener.php';

return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener(${($_ = isset($this->services['FOS\RestBundle\View\ViewHandlerInterface']) ? $this->services['FOS\RestBundle\View\ViewHandlerInterface'] : $this->load(__DIR__.'/getViewHandlerInterfaceService.php')) && false ?: '_'}, false);
