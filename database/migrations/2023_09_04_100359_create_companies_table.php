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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();

            $table->string('nit_ci')->nullable();
            $table->string('representante_legal')->nullable();
            $table->string('link')->nullable();
            $table->string('logo')->nullable();
            $table->string('portada')->nullable();

            $table->boolean('habilitado')->default(true);
            $table->timestamp('fecha_deshabilitado')->nullable();
            $table->boolean('eliminado')->default(false);
            $table->timestamp('fecha_eliminado')->nullable();
            $table->string('razon_eliminado')->nullable();
            $table->timestamps();
        });

        Schema::create('company_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_user');
    }
};
