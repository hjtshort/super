<?php 
class Mother extends CI_Model {
    public function action()
    {
        $this->load->library('xuly');
         return $this->xuly->mother_of_xl('application/assets/best_data.xlsx');
    }
    public function insertt()
    {
       
         $data=$this->action();
        
        if( $this->db->insert_batch('monhoc', $data['danhsach']))
            return true;
        else
            return false;
    }
    public function getvalue($chon)
    {
        return $this->db->from('monhoc')->where($chon=="tc"? array('tuchon'=>'x'):array('batbuot'=>'x'))->get()->result_array();
    }
}
?>