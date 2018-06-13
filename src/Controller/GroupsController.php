<?php
namespace App\Controller;

use App\Controller\AppController;

class GroupsController extends AppController
{
    public function index()
    {
        $groups = $this->paginate($this->Groups);
        $this->set(compact('groups'));
    }
}
