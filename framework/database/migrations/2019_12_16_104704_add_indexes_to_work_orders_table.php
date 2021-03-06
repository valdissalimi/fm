<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToWorkOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('work_orders', function (Blueprint $table) {
			$table->index(['vehicle_id', 'vendor_id']);
			$table->index('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('work_orders', function (Blueprint $table) {
			$table->dropIndex(['vehicle_id', 'vendor_id']);
			$table->dropIndex(['status']);
		});
	}
}
