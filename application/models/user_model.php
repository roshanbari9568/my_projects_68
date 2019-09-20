
<?php

class User_model extends CI_Model
{


    public function get_users()
    {

        $query = $this->db->get('Users');

        return $query->result();

    }


}

?>