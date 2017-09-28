<?php
class WebControler{
    private $c;

    public function __construct(Interop\Container\ContainerInterface $ci){
        $this->c = $ci;
    }

    public function cargarHome($request, $response, $args){
        $data['tema'] = $this->c->data->getTemas();
        $response = $this->c->view->render($response, "home.php", []);
        return $response;
    }

    public function temas($request, $response, $args){
        $data['tema'] = $this->c->data->getTemas();
        $response = $this->c->view->render($response, "pregTema.php", $data);
        return $response;
    }

    public function crear($request, $response, $args){
        $data['tema'] = $this->c->data->getTemas();
        $response = $this->c->view->render($response, "crear.php", []);
        return $response;
    }

}
?>
