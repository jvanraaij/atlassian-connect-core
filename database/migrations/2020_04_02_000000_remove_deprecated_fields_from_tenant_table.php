<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class RemoveDeprecatedFieldsFromTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('plugin.tenant'), function (\Illuminate\Database\Schema\Blueprint $blueprint) {
            $blueprint->dropColumn('server_version');
            $blueprint->dropColumn('plugin_version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('plugin.tenant'), function (\Illuminate\Database\Schema\Blueprint $blueprint) {
            $blueprint->string('server_version', 20);
            $blueprint->string('plugin_version', 20);
        });
    }
}
