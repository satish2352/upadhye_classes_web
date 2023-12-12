<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportIncidentModalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_incident_modals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('incident');
            $table->string('location');
            $table->string('datetime');
            $table->string('mobile_number');
            $table->string('media_upload')->default('null');;
            $table->text('description');
            $table->string('is_deleted')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('report_incident_modals');
    }
}