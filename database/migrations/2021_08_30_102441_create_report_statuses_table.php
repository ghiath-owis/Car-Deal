<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\ReportStatus;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\RequestTable;


class CreateReportStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content')->nullable();
            $table->date('date')->nullable();

            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->bigInteger('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->bigInteger('request_table_id')->unsigned();
            $table->foreign('request_table_id')->references('id')->on('request_tables')->onDelete('cascade');
            $table->timestamps();
        });

        $report_status = new ReportStatus;
        $report_status->content="";
        $report_status->date="2021/8/1";
        $report_status->client_id="1";
        $report_status->vehicle_id="1";
        $report_status->request_table_id="1";

        $report_status->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_statuses');
    }
}
