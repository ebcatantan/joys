<?php
namespace Modules\Inventory\Models;

use CodeIgniter\Model;

class StocksModel extends \CodeIgniter\Model
{
    protected $table = 'supply_stocks';

    protected $allowedFields = ['supply_name', 'brand_name', 'description', 'date_purchased',
     'total_unit_purchased', 'total_item_used', 'unit_on_stocks', 'expiration_date','status', 'created_at','updated_at', 'deleted_at'];

    public function getStockWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getStockWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM supply_stocks WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getStocks()
	{
	    return $this->findAll();
	}

    public function addStocks($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editStocks($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteStocks($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
