<?php
namespace Modules\DentistManagement\Controllers;

use Modules\DentistManagement\Models\DentistsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Dentists extends BaseController
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
    	$this->hasPermissionRedirect('list-dentist');

    	$model = new DentistsModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getDentistWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
        $data['dentists'] = $model->getDentistWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
        $data['function_title'] = "Dentist List";
        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_dentist($id)
	{
		$this->hasPermissionRedirect('list-dentist');
		$data['permissions'] = $this->permissions;

		$model = new DentistsModel();

		$data['dentists'] = $model->getDentistWithCondition(['id' => $id]);

		$data['function_title'] = "Dentist Details";
        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\dentistDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_dentist()
    {
    	$this->hasPermissionRedirect('add-dentist');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DentistsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('dentists'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Dentist";
		        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\frmDentist';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDentists($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dentists'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('dentists'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Dentist";
	        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\frmDentist';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_dentist($id)
    {
    	$this->hasPermissionRedirect('edit-dentist');
    	helper(['form', 'url']);
    	$model = new DentistsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('dentists'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Dentist";
		        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\frmDentist';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDentists($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('dentists'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('dentists'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Dentist";
	        $data['viewName'] = 'Modules\DentistManagement\Views\dentists\frmDentist';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_dentist($id)
    {
    	$this->hasPermissionRedirect('delete-dentist');
    	$model = new DentistsModel();
    	$model->deleteDentist($id);
    }

}
