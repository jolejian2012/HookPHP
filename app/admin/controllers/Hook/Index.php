<?php
class Hook_IndexController extends AbstractController
{
    public function indexAction()
    {
        $this->_view->assign(['test' => $this->_name]);
    }
}