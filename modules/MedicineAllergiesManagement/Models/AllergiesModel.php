<?php
namespace Modules\MedicineAllergiesManagement\Models;

use CodeIgniter\Model;

class AllergiesModel extends \CodeIgniter\Model
{
    protected $table = 'medicine_allergies';

    protected $allowedFields = ['med_name', 'description', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getAllergiesWithCondition($conditions = [])
	{
    //die("here");
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAllergiesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM medicine_allergies WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getAllergies()
	{
	    return $this->findAll();
	}

    public function addMedicineAllergies($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editMedicineAllergies($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteMedicineAllergies($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
