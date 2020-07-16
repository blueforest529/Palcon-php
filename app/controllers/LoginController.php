<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class LoginController extends Controller
{
    public function indexAction()
    {

    }
    
    public function registerAction()
    {
   
        $value = $this->request->getPost("login_id");
        $sql = 'SELECT * FROM  users WHERE name = "'.$value.'"';

        // Base model
        $users = new Users();

        // Execute the query
        $success =  new Resultset(
            null,
            $users,
            $users->getReadConnection()->query($sql, null)
        );

        if ($success) {
            echo "login OK!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }


        //$this->view->disable();
    }
}