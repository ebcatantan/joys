<?php namespace App\Database\Seeds;

class PermissionPaymentManagementSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show payment details',
                       'function_description' => 'show payment details',
                       'slugs' => 'show-payment',
                       'name_on_class' => 'show_payment',
                       'page_title' => 'payment details',
                       'module_id' => '3',
                        'link_icon' => '',
                       'order' => '106',
                       'table_name' => 'payments',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create payment',
                        'function_description' => 'create payment',
                        'slugs' => 'add-payment',
                        'name_on_class' => 'add_payment',
                        'page_title' => 'create a payment',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '107',
                        'table_name' => 'payments',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of payment',
                        'function_description' => 'list of payment',
                        'slugs' => 'list-payment',
                        'name_on_class' => 'index',
                        'page_title' => 'list of payments',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '108',
                        'table_name' => 'payments',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit payment',
                        'function_description' => 'edit payment',
                        'slugs' => 'edit-payment',
                        'name_on_class' => 'edit_payment',
                        'page_title' => 'edit payment',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '109',
                        'table_name' => 'payments',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete payment',
                        'function_description' => 'delete payment',
                        'slugs' => 'delete-payment',
                        'name_on_class' => 'delete_payment',
                        'page_title' => 'delete payment account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '110',
                        'table_name' => 'payments',
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
