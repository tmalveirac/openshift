<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OlaMundo extends CI_Controller{
    
    public function index(){
        $this->load->view('olamundo.html');
    }
    
    public function ex3(){
        $dados = array(
            'titulo' => 'Este título foi passado via controller.',
            'text'   => 'Texto enviado pelo controlador',
            'menu'   => array(
                0 => '<a href="#">Home</a>',
                1 => '<a href="#">Sobre</a>',
                2 => '<a href="#">Serviços</a>',
                3 => '<a href="#">Contato</a>',
            ),
            'segmento' => $this->uri->segment(3)
        );
        
        $this->load->view('exemplo3', $dados);
    }
}

?>
