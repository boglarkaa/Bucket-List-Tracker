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
        Schema::create('bucket_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->timestamps();
            $table->string("title");
            $table->text("description")->nullable();
            $table->string("category")->nullable();
            $table->enum('status', ['Pending', 'In progress', 'Completed'])->default('Pending');
            $table->date("deadline")->nullable();
            $table->string("image")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bucket_lists');
    }
};
