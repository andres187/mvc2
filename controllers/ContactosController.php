<?php

class ContactosController {

    public function indexAction()
    {
        return new View('contactos', ['title' => 'Contactos']);
    }

    public function ciudadAction($ciudad)
    {
        return new View('contactos', ['title' => 'Ciudad '. $ciudad]);
    }

}
?>