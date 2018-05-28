<?php
namespace application\controllers;
use application\core\Controller;
class MembersController extends Controller{

    function indexAction()
    {

        $result = $this->model->getMembers();
        $vars=[
            'members'=>$result
        ];
        $this->view->render('member', $vars);
    }

}
