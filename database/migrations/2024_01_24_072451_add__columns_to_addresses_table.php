<?php

use App\Models\City;
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
        Schema::table('addresses', function (Blueprint $table) {
            //
            $table->decimal('latitude', 10, 7)->after('country_id'); // Adjust precision and scale based on your requirements
            $table->decimal('longitude', 10, 7)->after('latitude'); // Adjust precision and scale based on your requirements
            $table->string('city')->after('city_id');
            $table->string('country', 2)->after('city'); // Assuming a two-letter country code
            $table->string('region')->after('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
            $table->dropColumn('latitude')->after('city_id');
            $table->dropColumn('longitude')->after('country_id');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('region');
        });
    }
};
