<?php
namespace Modules\ConsultationSchedules\Models;

use CodeIgniter\Model;

class SchedulesModel extends \CodeIgniter\Model
{
    protected $table = 'consultation_schedules';

    protected $allowedFields = ['patient_id', 'target_date_start', 'target_date_end', 'venue', 'dentist_id', 'consultation_sched', 'is_approved', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getSchedulesWithCondition($conditions = [])
	{
    //die("here");
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getSchedulesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM consultation_schedules WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getSchedules()
	{
	    return $this->findAll();
	}

    public function addConsultationSchedules($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editConsultationSchedules($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteConsultationSchedules($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
