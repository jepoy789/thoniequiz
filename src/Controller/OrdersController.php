<?php
namespace App\Controller;

use App\Controller\AppController;

class OrdersController extends AppController
{
	public function index()
	{

		$orders = $this->paginate($this->Orders);
        $this->set(compact('orders'));
	}

	public function view($id = null)
    {
        $this->loadModel('Items');

        $order = $this->Orders->get($id, [
            'contain' => ['OrderDetails','Items'], 
        ]);

        $this->set(compact('order'));
    }

}