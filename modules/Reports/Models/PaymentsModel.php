<?php
namespace Modules\Reports\Models;

use CodeIgniter\Model;

class PaymentsModel extends \CodeIgniter\Model
{
    protected $table = 'payments';

    protected $allowedFields = ['consultation_id', 'payment_date', 'paid_amount', 'recieved_by', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getPaymentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getPaymentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		// $str = "SELECT a.*, b.function_name FROM payments a LEFT JOIN permissions b ON a.function_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];1
     $str = "SELECT * FROM payments WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];//without foreign key
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getPayments()
	{
	    return $this->findAll();
	}

    public function addPayments($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editPayments($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deletePayments($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
