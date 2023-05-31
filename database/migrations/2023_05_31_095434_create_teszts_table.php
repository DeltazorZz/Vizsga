<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id('teszt_id');
            $table->string("kerdes");
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('kateg_id')->on('kategorias');
            $table->timestamps();
        });

Teszt::create(['kerdes'=>'A parpíírt milyen színu szelektív kukába gyujtjuk','v1'=>'kek','v2'=>'piros','v3'=>'sarga','v4'=>'szurke','helyes'=>'v1','kategoriaId'=>'1',]);
Teszt::create(['kerdes'=>'Melyek komposztálhatók','v1'=>'repa','v2'=>'Nagy ágak, fatörzsek ','v3'=>'fém hulladék, muanyag','v4'=>'Textil','helyes'=>'v1','kategoriaId'=>'1',]);
Teszt::create(['kerdes'=>'Hova lehet csak elrakni a szemetet','v1'=>'Bárhova','v2'=>'Csak a megfelelő szelektív kukába','v3'=>'A zsebedbe','v4'=>'Csak ugy eldobod','helyes'=>'v2','kategoriaId'=>'1',]);
Teszt::create(['kerdes'=>'Hova kerül a processzor?','v1'=>'Tál vízbe','v2'=>'Nem kerül sehova mert nem kell!','v3'=>'Az alaplapi foglalatába','v4'=>'Bedobod a gépbe mindegy hogy hova','helyes'=>'v3','kategoriaId'=>'2',]);
Teszt::create(['kerdes'=>'Fontos a megfelelő hutés?','v1'=>'Nem ha a medencében van a gép és hideg a víz','v2'=>'Igen nagyon fontos','v3'=>'Nem csak foglalja a helyet','v4'=>'Nem','helyes'=>'v2','kategoriaId'=>'2',]);
Teszt::create(['kerdes'=>'Ki fedezte fel amerikát?','v1'=>'Bob','v2'=>'Káin és Ábel','v3'=>'Kolompár Józsi','v4'=>'Colombusz Kristóf','helyes'=>'v4','kategoriaId'=>'3',]);
Teszt::create(['kerdes'=>'A történelemben volt olyan ido amikor nem használtak pénzt?','v1'=>'Nem. A pénz minden csak az számít','v2'=>'Igen cserekereskedelem volt','v3'=>'Aranyat használtak de az is pénz nem?','v4'=>'Ilyen nem volt a történelemben','helyes'=>'v2','kategoriaId'=>'3',]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
