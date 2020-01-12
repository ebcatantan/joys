<?php
namespace Modules\ConsultationSchedules\Controllers;

use Modules\ConsultationSchedules\Models\SchedulesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Schedules extends BaseController
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
    	$this->hasPermissionRedirect('list-consultation-schedules');

    	$model = new SchedulesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getSchedulesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['schedules'] = $model->getSchedulesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Consultation Schedules List";
        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_consultation_schedules($id)
	{

		$this->hasPermissionRedirect('show-consultation-schedules');
		$data['permissions'] = $this->permissions;

		$model = new SchedulesModel();

		$data['schedules'] = $model->getSchedulesWithCondition(['id' => $id]);

		$data['function_title'] = "Consultation Schedules Details";
        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\SchedulesDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_consultation_schedules()
    {
    	$this->hasPermissionRedirect('add-consultation-schedules');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new SchedulesModel();
			//die("here");
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('schedules'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Consultation Schedules";
		        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\frmSchedules';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addConsultationSchedules($_POST))
		        {
		        	$role_id = $model->insertID();
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('consultation-schedules'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					    $this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('consultation-schedules'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Consultation Schedules";
	        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\frmSchedules';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_consultation_schedules($id)
    {
			//die("here");
    	$this->hasPermissionRedirect('edit-consultation-schedules');
    	helper(['form', 'url']);
    	$model = new SchedulesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('schedules'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Consultation Schedules";
		        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\frmSchedules';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editConsultationSchedules($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
				    	$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('consultation-schedules'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					    $this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('consultation-schedules'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Consultation Schedules";
	        $data['viewName'] = 'Modules\ConsultationSchedules\Views\schedules\frmSchedules';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_consultation_schedules($id)
    {
    	$this->hasPermissionRedirect('delete-consultation-schedules');

    	$model = new SchedulesModel();
    	$model->deleteConsultationSchedules($id);
    }

}
