<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;
use App\Models\User;

return new class extends Migration {
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });


        $users = User::all();
        foreach ($users as $user) {
            $slug = Str::slug($user->name);
            $original = $slug;
            $i = 1;


            while (User::where('slug', $slug)->where('id', '!=', $user->id)->exists()) {
                $slug = $original . '-' . $i++;
            }

            $user->slug = $slug;
            $user->save();
        }


        Schema::table('users', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
