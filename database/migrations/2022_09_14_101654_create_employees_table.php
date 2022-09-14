<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email', 191);
            $table->foreignId('company_id')->constrained('companies');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth', 200)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('residential_address', 200)->nullable();
            $table->string('digital_address', 200)->nullable();
            $table->string('phone_number', 200)->nullable();
            $table->string('identity_type', 200)->nullable();
            $table->string('id_file', 200)->nullable();
            $table->string('mothers_name', 200)->nullable();
            $table->string('fathers_name', 200)->nullable();
            $table->boolean('father_deceased')->default(false);
            $table->boolean('mother_deceased')->default(false);
            $table->string('marital_status', 200)->nullable();
            $table->integer('children')->nullable();
            $table->integer('dependants')->nullable();
            $table->string('next_of_kin_name')->nullable();
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_address')->nullable();
            $table->string('next_of_kin_phone', 200)->nullable();
            $table->date('date_employed')->nullable();
            $table->date('date_of_exit')->nullable();
            $table->string('experience')->nullable();
            $table->foreignId('department_id')->nullable()->constrained('departments');
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
        Schema::dropIfExists('employees');
    }
}
