<?php
namespace Modules\Inventory\Models;

use CodeIgniter\Model;

class Medicine_StocksModel extends \CodeIgniter\Model
{
    protected $table = 'medicine_stocks';

    protected $allowedFields = ['medicine_id', 'brand_name',	'date_purchased',	'total_unit_purchased',	'total_item_used',	'unit_on_stock',	'expiration_date',	'status',	 'created_at','updated_at', 'deleted_at'];

    public function getMedicineStocksWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getMedicineStocksWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM medicine_stocks WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getMedicineStocks()
	{
	    return $this->findAll();
	}

    public function addMedicineStocks($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('m-d-Y H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);

	}

    public function editMedicineStocks($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('m-d-Y H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteMedicineStocks($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('m-d-Y H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
