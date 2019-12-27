<?php namespace App\Database\Migrations;

class CreateDentists extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'last_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'first_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'middle_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'ext_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'birthdate'       => [
                                'type'           => 'DATE'
                        ],

                        'licence_number' => [
                                'type'           => 'TEXT',
                        ],

                        'address' => [
                                'type'           => 'TEXT'
                        ],

                        'gender' => [
                                'type'           => 'CHAR',
                                'constraint'    => '1',
                                'comment'       => 'm for male f for female'
                        ],

                        'contact_number' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '20'
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
                $this->forge->createTable('dentists');
        }

        public function down()
        {
                $this->forge->dropTable('dentists');
        }
}
