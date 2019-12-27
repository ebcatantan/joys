<?php namespace App\Database\Migrations;

class CreateMedicineStocks extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'medicine_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20',
                        ],

                        'brand_name'       => [
                          'type'           => 'VARCHAR',
                          'constraint'     => '255',
                        ],

                        'date_purchased'       => [
                                'type'           => 'DATE',
                        ],

                        'total_unit_purchased'       => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],

                        'total_item_used'  => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],

                        'unit_on_stock'  => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],

                        'expiration_date'       => [
                                'type'           => 'DATE',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('medicine_stocks');
        }

        public function down()
        {
                $this->forge->dropTable('medicine_stocks');
        }
}
