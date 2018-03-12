
<?php
class PagesController
{
      
    public function error()
    {
        $error['message'] = "no action or controller requested";
        $error['response'] = false;
        //return new view - error page
        echo json_encode($error);
    }
}
