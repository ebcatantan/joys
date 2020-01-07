<?php
namespace Modules\Reports\Controllers;

use Modules\Reports\Models\PaymentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Payments extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-payment');

    	$model = new PaymentsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getPaymentWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
        $data['payments'] = $model->getPaymentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
        $data['function_title'] = "Payment List";
        $data['viewName'] = 'Modules\Reports\Views\payments\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_payment($id)
	{
		$this->hasPermissionRedirect('show-payment');
		$data['permissions'] = $this->permissions;

		$model = new PaymentsModel();

		$data['payments'] = $model->getPaymentWithCondition(['id' => $id]);

		$data['function_title'] = "Payment Details";
        $data['viewName'] = 'Modules\Reports\Views\payments\paymentDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_payment()
    {
    	$this->hasPermissionRedirect('add-payment');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new PaymentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('payments'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Payment";
		        $data['viewName'] = 'Modules\Reports\Views\payments\frmPayment';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addPayments($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('payments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('payments'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Dentist";
	        $data['viewName'] = 'Modules\Reports\Views\payments\frmPayment';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_payment($id)
    {
    	$this->hasPermissionRedirect('edit-payment');
    	helper(['form', 'url']);
    	$model = new PaymentsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('payments'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Payment";
		        $data['viewName'] = 'Modules\Reports\Views\payments\frmPayment';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editPayments($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('payments'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('payments'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Dentist";
	        $data['viewName'] = 'Modules\Reports\Views\payments\frmPayment';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_payment($id)
    {
    	$this->hasPermissionRedirect('delete-payment');
    	$model = new PaymentsModel();
    	$model->deletePayments($id);
    }

}
