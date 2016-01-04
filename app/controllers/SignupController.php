<?php

class signupController  extends ControllerBase
{

    public function loginAction()
    {
        $Users = new Users();


        $success = $Users->save(array('id', 'username', 'email'), array('', 'Julylovin', 'julylovin@163.com'));

        if ($success)
        {
            echo "Thanks for registering!";
        }
        else
        {

        }

        $this->view->disable();
    }

    public function registerAction()
    {

    }


}

