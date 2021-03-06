<?php

use App\Models\Provider;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('kind');
            $table->text('address');

        
            $table->string('email');
            $table->string('phone');
            $table->enum('status',[Provider::unknown,Provider::known,Provider::approval])->default(Provider::unknown);
            $table->float('price');



            $table->text('open_week');
            $table->text('break_week');
            $table->text('close_week');


          
            $table->text('open_weekend');
            $table->text('break_weekend');
            $table->text('close_weekend');

            $table->text('note');





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
        Schema::dropIfExists('providers');
    }
}
