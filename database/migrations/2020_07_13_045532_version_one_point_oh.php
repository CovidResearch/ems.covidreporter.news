<?php declare(strict_types=1);

/**
 * This file is part of ems.covidreporter.news, a Covid Reporter News, LLC, Project.
 *
 * Copyright © 2020 Covid Reporter News, LLC.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/PHPExpertsInc/Skeleton
 *
 * This file is licensed under the MIT License.
 */

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
                ->on('regions')
                ->cascadeOnDelete();
        });

        Schema::create('ems_feeds', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->char('ems_id', 22);
            $table->string('url');

            $table->timestampsTz();

            $table->foreign('ems_id')
                ->references('id')
                ->on('ems')
                ->cascadeOnDelete();
        });

        Schema::create('ems_logs', function (Blueprint $table) {
            $table->char('id', 22)->primary();
            $table->char('region_id', 22);
            $table->char('ems_id', 22);
            $table->string('event');
            $table->timestampTz('occurred_at');
            $table->text('notes')->nullable();

            $table->timestampTz('created_at');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->cascadeOnDelete();

            $table->foreign('ems_id')
                ->references('id')
                ->on('ems')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('ems_logs');
        Schema::dropIfExists('ems');
        Schema::dropIfExists('regions');
    }
}
