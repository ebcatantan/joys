<?php
namespace Modules\SupplyStocksManagement\Controllers;

use Modules\SupplyStocksManagement\Models\StocksModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Stocks extends BaseController
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
    	$this->hasPermissionRedirect('list-supply-stocks');

	    	$model = new StocksModel();
				//die("here");
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getStockWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['stocks'] = $model->getStockWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Supply Stocks";
        $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\index';
        echo view('App\Views\theme\index', $data);
    }
		public function show_supply_stocks($id)
		{
		$this->hasPermissionRedirect('show-supply-stocks');
		$data['permissions'] = $this->permissions;

		$model = new StocksModel();

		$data['stock'] = $model->getStockWithCondition(['id' => $id]);

		$data['function_title'] = "Stock Details";
				$data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\stocksDetails';
				echo view('App\Views\theme\index', $data);
		}
  //   public function show_supply_stocks($id)
	// {
	// 	$this->hasPermissionRedirect('show-supply-stocks');
	// 	$data['permissions'] = $this->permissions;
	//
	// 	$model = new StocksModel();
	//
	// 	$data['stocks'] = $model->getStocksWithCondition(['id' => $id]);
	//
	// 	$data['function_title'] = "Stock Details";
  //       $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\stocksDetails';
  //       echo view('App\Views\theme\index', $data);
	// }
	public function add_supply_stocks()
	{
		$this->hasPermissionRedirect('add-supply-stocks');

		$permissions_model = new PermissionsModel();

		$data['permissions'] = $this->permissions;

		helper(['form', 'url']);
		$model = new StocksModel();

		if(!empty($_POST))
		{
			if (!$this->validate('stocks'))
			{
				$data['errors'] = \Config\Services::validation()->getErrors();
					$data['function_title'] = "Adding Stocks";
					$data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
					echo view('App\Views\theme\index', $data);
			}
			else
			{
					if($model->addStocks($_POST))
					{
						$role_id = $model->insertID();
						$permissions_model->update_permitted_stocks($role_id, $_POST['function_id']);
						$_SESSION['success'] = 'You have added a new record';
				$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('supply-stocks'));
					}
					else
					{
						$_SESSION['error'] = 'You have an error in adding a new record';
				$this->session->markAsFlashdata('error');
						return redirect()->to(base_url('supply-stocks'));
					}
			}
		}
		else
		{

			$data['function_title'] = "Adding Stocks";
				$data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
				echo view('App\Views\theme\index', $data);
		}
	}


    // public function add_supply_stocks()
    // {
    // 	$this->hasPermissionRedirect('add-supply-stocks');
		//
    // 	$permissions_model = new PermissionsModel();
		//
    // 	$data['permissions'] = $this->permissions;
		//
    // 	helper(['form', 'url']);
    // 	$model = new StocksModel();
		//
    // 	if(!empty($_POST))
    // 	{
	  //   	if (!$this->validate('stocks'))
		//     {
		//     	$data['errors'] = \Config\Services::validation()->getErrors();
		//         $data['function_title'] = "Adding Stock";
		//         $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
		//         echo view('App\Views\theme\index', $data);
		//     }
		//     else
		//     {
		//         if($model->add_supply_stocks($_POST))
		//         {
		//         	$role_id = $model->insertID();
		//         	$_SESSION['success'] = 'You have added a new record';
		// 					$this->session->markAsFlashdata('success');
		//         	return redirect()->to(base_url('stock'));
		//         }
		//         else
		//         {
		//         	$_SESSION['error'] = 'You have an error in adding a new record';
		// 			$this->session->markAsFlashdata('error');
		//         	return redirect()->to(base_url('stock'));
		//         }
		//     }
    // 	}
    // 	else
    // 	{
		//
	  //   	$data['function_title'] = "Adding Stock";
	  //       $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
	  //       echo view('App\Views\theme\index', $data);
    // 	}
    // }

    public function edit_supply_stocks($id)
    {
    	$this->hasPermissionRedirect('edit-supply-stocks');
    	helper(['form', 'url']);
    	$model = new StocksModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('stocks'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Stocks";
		        $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editStocks($_POST, $id))
		        {
		        	$permissions_model->update_permitted_stocks($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('supply-stocks'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('supply-stocks'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Stocks";
	        $data['viewName'] = 'Modules\SupplyStocksManagement\Views\stocks\frmStocks';
	        echo view('App\Views\theme\index', $data);
    	}
    }

		public function delete_supply_stocks($id)
		{
			$this->hasPermissionRedirect('delete-supply-stocks');

			$model = new StocksModel();
			$model->deleteStocks($id);
		}

	}
