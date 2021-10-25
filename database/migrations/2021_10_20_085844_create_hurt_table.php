<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHurtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hurt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('submitted_at');
            $table->string('management_planning');
            $table->string('management_command_n_control');
            $table->string('management_sortie');
            $table->string('management_working_hour');
            $table->string('management_flying_hour');
            $table->string('management_take_off_weight');
            $table->string('machine_aircraft_type');
            $table->string('machine_aircraft_status');
            $table->string('mission');
            $table->string('media_weather');
            $table->string('media_area_operation');
            $table->string('media_aerodrome');
            $table->string('media_runway_condition');
            $table->string('media_runway_length');
            $table->string('media_terrain');
            $table->string('man_qualification');
            $table->string('man_crew_combination');
            $table->string('man_crew_currency');
            $table->string('man_crew_test');
            $table->string('man_flying_hour');
            $table->integer('management_planning_score');
            $table->integer('management_command_n_control_score');
            $table->integer('management_sortie_score');
            $table->integer('management_working_hour_score');
            $table->integer('management_flying_hour_score');
            $table->integer('management_take_off_weight_score');
            $table->integer('machine_aircraft_type_score');
            $table->integer('machine_aircraft_status_score');
            $table->integer('mission_score');
            $table->integer('media_weather_score');
            $table->integer('media_area_operation_score');
            $table->integer('media_aerodrome_score');
            $table->integer('media_runway_condition_score');
            $table->integer('media_runway_length_score');
            $table->integer('media_terrain_score');
            $table->integer('man_qualification_score');
            $table->integer('man_crew_combination_score');
            $table->integer('man_crew_currency_score');
            $table->integer('man_crew_test_score');
            $table->integer('man_flying_hour_score');
            $table->integer('total_score');
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
        Schema::dropIfExists('hurt');
    }
}
