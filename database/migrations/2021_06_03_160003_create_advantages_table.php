<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateAdvantagesTable.
 */
class CreateAdvantagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advantages', function(Blueprint $table) {
        $table->id();
        $table->string('title_uz')->nullable();
        $table->string('title_ru')->nullable();
        $table->string('image')->nullable();
        $table->integer('order')->default(0);
        $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('advantages');
	}
}
