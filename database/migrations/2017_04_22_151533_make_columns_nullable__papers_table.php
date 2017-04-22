<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeColumnsNullablePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('papers', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('paperType')->nullable()->change();
			$table->string('technique')->nullable()->change();
			$table->string('phase')->nullable()->change();
			$table->string('objective')->nullable()->change();
			$table->string('origin')->nullable()->change();
			$table->string('researchType')->nullable()->change();
			$table->string('environment')->nullable()->change();
			$table->string('reference')->nullable()->change();
			
			$table->string('search_type')->nullable()->change();
			$table->string('link')->nullable()->change();
			
			$table->dropColumn('remember_token');
	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('papers', function (Blueprint $table) {
			$table->string('name')->nullable()->change();;
            $table->string('paperType')->nullable(false)->change();
			$table->string('technique')->nullable(false)->change();
			$table->string('phase')->nullable(false)->change();
			$table->string('objective')->nullable(false)->change();
			$table->string('origin')->nullable(false)->change();
			$table->string('researchType')->nullable(false)->change();
			$table->string('environment')->nullable(false)->change();
			$table->string('reference')->nullable(false)->change();
			
			$table->string('search_type')->nullable(false)->change();
			$table->string('link')->nullable(false)->change();
		});
    }
}
