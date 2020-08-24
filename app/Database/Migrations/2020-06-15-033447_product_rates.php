<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductRates extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'product_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'stars' => [
				'type'           => 'INT',
				'Constraint' 	 => 11,
				'null' 			 => true
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('product_rates');
	}



	public function down()
	{
		$this->forge->dropTable('product_rates');
	}
}
