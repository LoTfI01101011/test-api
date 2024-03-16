<?php

use App\Models\Profile;
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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->date('birth_date')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('state')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        Profile::create(['user_id' => 2, 'birth_date' => '2003-12-05', 'avatar_url' => 'fsfsd/dfsfs/fff', 'state' => 'setif' , 'bio' => 'One day i will become the strogest man in fsdfa .']);
        Profile::create(['user_id' => 3, 'birth_date' => '2004-05-15', 'avatar_url' => '/fdsfs/fsfsd/dsff', 'state' => 'jelfa' , 'bio' => 'One day i will become the strogest man in ? .']);
        Profile::create(['user_id' => 1, 'birth_date' => '1999-08-12', 'avatar_url' => '/dsfsa/fdghh/bvcbv', 'state' => 'blida' , 'bio' => 'One day i will become the strogest man in algeria .']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
