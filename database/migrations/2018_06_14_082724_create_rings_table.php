<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'rings' , function ( Blueprint $table ) {
            $table->increments ( 'ring_id' );
            $table->string ( 'ring_name' , 169 );
            $table->string ( 'ring_price' , 169 );
            $table->integer ( 'check' );
            $table->text ( 'description' );
            $table->timestamps ();
        } );
        DB::table('rings')->insert(
            array(
                'ring_name' => 'test',
                'ring_price' => 'test',
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
        Schema::dropIfExists ( 'rings' );
    }
}
