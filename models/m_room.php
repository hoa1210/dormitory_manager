<?php
include "core/database.php";

class m_room extends DB{

    public function insert_room($name, $user_id, $status, $describes){
        $sql = "INSERT INTO rooms VALUES (null,'$name',$user_id,'$status','$describes')";
        return $this->query($sql);
    }

    public function select_room(){
        $sql = "SELECT rooms.*, users.name as name_user FROM rooms INNER JOIN users ON rooms.user_id = users.id  ";
        return $this->get_list($sql);
    }

    public function get_room_by_id($id)
    {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        return $this->get_row($sql);
    }
}

?>