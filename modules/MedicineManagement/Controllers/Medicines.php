<?php
namespace Modules\MedicineManagement\Controllers;

use Modules\MedicineManagement\Models\MedicinesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Medicines extends BaseController
{
	private $roles;

	public function __construct()
	{
		parent:: __construct();

		$permission_model = new PermissionsModel();
		$this->permission = $permission_model->getPermissionsWithCondition(['status' => 'a']);
	}

	public function show_medicine($id)
	{
		
		$this->hasPermissionRedirect('show-medicine');
		$data['permissions'] = $this->permissions;

		$model = new MedicinesModel();

		$data['medicine'] = $model->getMedicineWithCondition(['id' => $id]);

		$data['function_title'] = "Medicine Detail";
        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\medicineDetails';
        echo view('App\Views\theme\index', $data);
	}

	public function user_own_profile($id)
	{
		$this->hasPermissionRedirect('user-own-profile');

		if($id != $_SESSION['rid'])
		{
			header('Location: '.base_url());
			session_destroy();
			exit;
		}

		$model = new UsersModel();

		$data['user'] = $model->getUserWithCondition(['id' => $id]);

		$data['function_title'] = "User Own Profile";
        	$data['viewName'] = 'Modules\UserManagement\Views\users\userOwnProfile';
        echo view('App\Views\theme\index', $data);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-medicine');
    	$model = new MedicinesModel();
	// die("here");
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getMedicineWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['medicines'] = $model->getMedicineWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Medicines List";
        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\index';
        echo view('App\Views\theme\index', $data);
    }

    public function add_medicine()
    {
    	$this->hasPermissionRedirect('add-medicine');

    	$model = new MedicinesModel();
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('medicine'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Medicine";
		        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\frmMedicine';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	unset($_POST['password_retype']);
		        if($model->addMedicines($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to( base_url('medicines'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('medicines'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Medicine";
	        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\frmMedicine';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_medicine($id)
    {
    	$this->hasPermissionRedirect('edit-medicine');



    	helper(['form', 'url', 'html']);

    	$model = new MedicinesModel();
    	$data['rec'] = $model->find($id);


    	if(!empty($_POST))
    	{
	    	if (!$this->validate('medicine'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Medicine";
		        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\frmMedicine';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {

		    	if($model->editMedicines($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to( base_url('medicines'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('medicines'));
		        }
		    }
    	}
    	else
    	{
    		$data['function_title'] = "Editing of User";
	        $data['viewName'] = 'Modules\MedicineManagement\Views\medicines\frmMedicine';
	        echo view('App\Views\theme\index', $data);
    	}
    }
    public function delete_medicine($id)
    {

    	$this->hasPermissionRedirect('delete-medicine');
	// die();
    	$model = new MedicinesModel();
    	$model->deleteMedicine($id);
    }

}
