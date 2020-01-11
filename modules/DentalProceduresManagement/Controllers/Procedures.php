<?php
namespace Modules\DentalProceduresManagement\Controllers;

use Modules\DentalProceduresManagement\Models\ProceduresModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Procedures extends BaseController
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
    	$this->hasPermissionRedirect('list-procedure');

    	$model = new ProceduresModel();
    	
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getProcedureWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
       	//die("here");
        $data['procedures'] = $model->getProcedureWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
        //die("here");
        $data['function_title'] = "Dental Procedures List";
        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_procedure($id)
	{
		$this->hasPermissionRedirect('show-procedure');
		$data['permissions'] = $this->permissions;

		$model = new ProceduresModel();

		$data['procedure'] = $model->getProcedureWithCondition(['id' => $id]);

		$data['function_title'] = "Procedure Details";
        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\procedureDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_procedure()
    {
    	$this->hasPermissionRedirect('add-procedure');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new ProceduresModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('procedure'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Procedure";
		        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\frmProcedure';
		        echo view('App\Views\theme\index', $data);
		        //die("here");
		    }
		    else
		    {
		        if($model->addProcedures($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dental-procedures'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('dental-procedures'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Procedure";
	        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\frmProcedure';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_procedure($id)
    {
    	$this->hasPermissionRedirect('edit-procedure');
    	helper(['form', 'url']);
    	$model = new ProceduresModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	//die();
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('procedure'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Editing Procedure";
		        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\frmProcedure';
		        echo view('App\Views\theme\index', $data);
		//        die("here");
		    }
		    else
		    {
		    	if($model->editProcedures($_POST, $id))
		        {
		        	//$role_id = $model->insertID();
		        	$_SESSION['success'] = 'You have edited a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dental-procedures'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('dental-procedures'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Procedures";
	        $data['viewName'] = 'Modules\DentalProceduresManagement\Views\procedures\frmProcedure';
	        echo view('App\Views\theme\index', $data);
	        //die();
    	}
    }

    public function delete_procedure($id)
    {
    	$this->hasPermissionRedirect('delete-procedure');

    	$model = new ProceduresModel();
    	$model->deleteProcedure($id);
    }

}
