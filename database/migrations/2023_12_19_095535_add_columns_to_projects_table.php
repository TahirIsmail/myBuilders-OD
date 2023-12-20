<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->string('job_postal_code')->nullable();
            $table->json('jobquestionsarray')->nullable();
            $table->boolean('isValidPostalCode')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->dropColumn('job_postal_code');
            $table->dropColumn('jobquestionsarray');
            $table->dropColumn('isValidPostalCode');

        });

};
