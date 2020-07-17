<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VersionOnePointOh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->string('name');

            $table->timestampsTz();
        });

        Schema::create('ems', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->char('region_id', 22);
            $table->string('name');

            $table->timestampsTz();

            $table->foreign('region_id')
                ->references('id')
                ->on('regions');
        });

        Schema::create('ems_feeds', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->char('ems_id', 22);
            $table->string('url');

            $table->timestampsTz();

            $table->foreign('ems_id')
                ->references('id')
                ->on('ems');
        });

        Schema::create('ems_log', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->char('region_id', 22);
            $table->char('ems_id', 22);
            $table->string('event');
            $table->timestampTz('occurred_at');
            $table->text('notes')->nullable();

            $table->timestampTz('created_at');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions');

            $table->foreign('ems_id')
                ->references('id')
                ->on('ems');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ems_feeds');
        Schema::dropIfExists('ems_log');
        Schema::dropIfExists('ems');
        Schema::dropIfExists('regions');
    }
}
