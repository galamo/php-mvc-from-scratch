<?php


class MainController {


        public function get_all_users()
    {

        $db = DatabaseConnection::getDBCSingleInstance();
        $query = "SELECT * FROM post";
        $res = $db->SelectQuery( $query );
        echo json_encode($res);

       
    }

}

?>