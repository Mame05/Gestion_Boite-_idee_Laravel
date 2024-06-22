<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('idees', function (Blueprint $table) {
            $table->dropColumn('nom_auteur');
            $table->dropColumn('prenom_auteur');
            $table->dropColumn('email_auteur');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idees', function (Blueprint $table) {
            $table->string('nom_auteur');
            $table->string('prenom_auteur');
            $table->string('email_auteur');
        });
    }
};
