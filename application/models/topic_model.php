<?php
class Topic_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function gets(){
       return $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($id){
      return $this->db->get_where('topic', array('id'=>$id))->row();
      //아래와 동일
      //return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);
    }
}


?>