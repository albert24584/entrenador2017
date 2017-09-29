<?php
class WebControler{
    private $c;

    public function __construct(Interop\Container\ContainerInterface $ci){
        $this->c = $ci;
    }

    public function cargarHome($request, $response, $args){

        $data['tema'] = $this->c->data->getTemas();
        $response = $this->c->view->render($response, "home.php", $data);
        return $response;
    }

    public function temas($request, $response, $args){

    	$id_tema = $args["id"];

        $data['tema'] = $this->c->data->getTema($id_tema);

        
        $preguntes = $this->c->data->getPregunta($id_tema);
        $index = array_rand($preguntes, 1);
        $data['pregunta'] = $preguntes[$index];

        $data['respostes'] = $this->c->data->getRespostes($data['pregunta']['id']);


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
