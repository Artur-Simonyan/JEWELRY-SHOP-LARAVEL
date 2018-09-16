<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBraceletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'bracelets' , function ( Blueprint $table ) {
            $table->increments ( 'bracelet_id' );
            $table->string ( 'bracelet_name' , 169 );
            $table->string ( 'bracelet_price' , 169 );
            $table->integer ( 'check' );
            $table->text ( 'description' );
            $table->timestamps ();
        } );
        DB::table('bracelets')->insert(
            array(
                'bracelet_name' => 'test',
                'bracelet_price' => 'test',
                'check'=>1,
                'description'=>'test'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists ( 'bracelets' );
    }
}
