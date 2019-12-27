<?php namespace App\Database\Migrations;

class CreateConsultationSchedules extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'patient_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'target_date_start'          => [
                                'type'           => 'date'
                        ],

                        'target_date_end'          => [
                                'type'           => 'date'
                        ],

                        'venue'          => [
                                'type'           => 'TEXT'
                        ],

                        'dentist_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'consultation_sched'       => [
                                'type'           => 'DATETIME'
                        ],

                        'is_approved'       => [
                          'type'           => 'TINYINT',
                          'constraint'     => '1',
                          'default'        => 0,
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
                $this->forge->createTable('consultation_schedules');
        }

        public function down()
        {
                $this->forge->dropTable('consultation_schedules');
        }
}
