<?php

namespace App\Controller;

use App\Controller\AppController;

class RecordsController extends AppController
{
    public function index()
    {
    	$this->loadModel('Records');

    	$records = $this->Records->find();

    	$this->set('records',$records);
    }
}