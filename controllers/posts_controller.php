
<?php

require ("DB.php");
class PostsController
{
    public $connection;
    public function __construct()
    {
    }
    public function get_all_posts()
    {

        $db = DatabaseConnection::getDBCSingleInstance();
        $query = "SELECT * FROM post";
        $res = $db->SelectQuery( $query );
        echo json_encode($res);

       
    }

    public function add_post()
    {
        $db = DatabaseConnection::getDBCSingleInstance();
        $post = $_POST['data'];
        $username = $post['sub'];
        $text = $post['text'];
        $x = $post['x'];
        $y = $post['y'];

        $query = "INSERT INTO `apischema`.`post`(`post`,`username`,`x`,`y`)VALUES('$username','$text',$x,$y)";
        
        $res = $db->InsertQuery( $query );
        //instead of json encode that implemented for ajax - can be generated view and echo new view to the client
        echo json_encode($res);
        //save this data in the database instead of return it to the client and return the id
    }
}
