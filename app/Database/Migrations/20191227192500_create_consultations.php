<?php namespace App\Database\Migrations;

class CreateConsultations extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'patient_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'consultation_date'       => [
                                'type'           => 'DATETIME'
                        ],

                        'blood_pressure'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'tooth_condition'       => [
                                'type'           => 'JSON',
                                'comment'       => 'tooth number and its condition at the time of consultation'
                        ],

                        'total_amount'       => [
                                'type'           => 'DOUBLE',
                                'comment'       => 'total amount of the charges for the procedures done in this consultation'
                        ],

                        'consultation_status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'o',
                                'comment'       => 'o - open, c-close , this is the indication that the consultation is done'
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
                $this->forge->createTable('consultations');
        }

        public function down()
        {
                $this->forge->dropTable('consultations');
        }
}
