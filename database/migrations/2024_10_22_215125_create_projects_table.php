<?php

use App\Models\User;

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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(User::class);
            $table->string('project_name'); // Project name (string)
            $table->string('funding_source'); // Funding source (string)
            $table->decimal('planned_amount', 15, 2); // Planned amount (decimal with 15 digits total and 2 decimals)
            $table->decimal('sponsored_amount', 15, 2); // Sponsored amount (decimal with 15 digits total and 2 decimals)
            $table->decimal('own_funds', 15, 2); // Own funds (decimal with 15 digits total and 2 decimals)
            $table->timestamps(); // Created at and updated at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
