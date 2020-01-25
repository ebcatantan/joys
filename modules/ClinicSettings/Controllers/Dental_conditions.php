<?php
namespace Modules\ClinicSettings\Controllers;

use Modules\ClinicSettings\Models\Dental_conditionsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Dental_conditions extends BaseController
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
    	$this->hasPermissionRedirect('list-dentalcondition');

    	$model = new Dental_conditionsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getDental_conditionWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['dental_conditions'] = $model->getDental_conditionWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Dental Conditions List";
        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_dental_condition($id)
	{
		$this->hasPermissionRedirect('show-dentalcondition-details');
		$data['permissions'] = $this->permissions;

		$model = new Dental_conditionsModel();

		$data['dental_condition'] = $model->getDental_conditionWithCondition(['id' => $id]);

		$data['function_title'] = "Dental Condition Details";
        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\dental_conditionDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_dental_condition()
    {
    	$this->hasPermissionRedirect('add-dentalcondition');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new Dental_conditionsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('dental_condition'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Dental Condition";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\frmDental_condition';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDental_conditions($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dental-conditions'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('dental-conditions'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Dental Condition";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\frmDental_condition';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_dental_condition($id)
    {
    	$this->hasPermissionRedirect('edit-dentalcondition');
    	helper(['form', 'url']);
    	$model = new Dental_conditionsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('dental_condition'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Dental Condition";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\frmDental_condition';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDental_conditions($_POST, $id))
		        {
		        	$permissions_model->update_permitted_dental_condition($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dental-conditions'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('dental-conditions'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Dental Condition";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\dental_conditions\frmDental_condition';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_dental_condition($id)
    {
    	$this->hasPermissionRedirect('delete-dentalcondition');

    	$model = new Dental_conditionsModel();
    	$model->deleteDental_condition($id);
    }


}
