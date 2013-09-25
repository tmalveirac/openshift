<?php

class Crud_model extends CI_Model 
{
    public function do_insert($dados = NULL)
    {
        if($dados != NULL)
        {
            $this->db->insert('curso_ci',$dados);
            $this->session->set_flashdata('cadastroOk','Cadastro efetuado com sucesso');
            redirect('crud/create');
        }
    }
    
    public function do_update($dados = NULL, $condicao = NULL)
    {
        if($dados != NULL && $condicao != NULL)
        {
            $this->db->update('curso_ci',$dados,$condicao);
            $this->session->set_flashdata('edicaoOk', 'Alteração feita com sucesso');
            redirect(current_url());
        }
    }
    
    public function do_delete($condicao = NULL)
    {
        if($condicao != NULL)
        {
            $this->db->delete('curso_ci', $condicao);
            $this->session->set_flashdata('excluirOk', 'Registro deletado com sucesso!');
            redirect('crud/retrieve');
        }
    }

        public function get_all()
    {
        return $this->db->get('curso_ci');
    }
    
    public function get_byid($id = NULL)
    {
        if($id != NULL)
        {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('curso_ci');
        }  else {
            return FALSE;
        }
    }
}

?>
