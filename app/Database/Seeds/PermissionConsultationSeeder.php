<?php namespace App\Database\Seeds;

class PermissionConsultationSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show consultation schedules details',
                        'function_description' => 'show consultation schedules details',
                        'slugs' => 'show-consultation-schedules',
                        'name_on_class' => 'show_consultation_schedules',
                        'page_title' => 'consultation schedules details',
                        'module_id' => '7',
                         'link_icon' => '',
                        'order' => '806',
                        'table_name' => 'consultation_schedules',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create consultation schedule',
                        'function_description' => 'create consultation schedule',
                        'slugs' => 'add-consultation-schedules',
                        'name_on_class' => 'add_consultation_schedules',
                        'page_title' => 'create a consultation schedules',
                        'module_id' => '7',
                        'link_icon' => '',
                        'order' => '807',
                        'table_name' => 'consultation_schedules',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of consultation schedules',
                        'function_description' => 'list of consultation schedules',
                        'slugs' => 'list-consultation-schedules',
                        'name_on_class' => 'list_consultation_schedules',
                        'page_title' => 'list of consultation schedules',
                        'module_id' => '7',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '807',
                        'table_name' => 'consultation_schedules',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit consultation schedules account',
                        'function_description' => 'edit consultation schedules account',
                        'slugs' => 'edit-consultation-schedules',
                        'name_on_class' => 'edit_consultation_schedules',
                        'page_title' => 'edit consultation schedules account',
                        'module_id' => '7',
                        'link_icon' => '',
                        'order' => '808',
                        'table_name' => 'consultation_schedules',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete consultation schedules account',
                        'function_description' => 'delete consultation schedules account',
                        'slugs' => 'delete-consultation-schedules',
                        'name_on_class' => 'delete_consultation_schedules',
                        'page_title' => 'delete consultation schedules account',
                        'module_id' => '7',
                        'link_icon' => '',
                        'order' => '805',
                        'table_name' => 'consultation_schedules',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
