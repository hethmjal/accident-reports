<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
        });


    DB::table('departments')->insert([
        ['name' => 'مدير المستشفى'],
        ['name' => 'الخدمات الطبية'],
        ['name' => 'التمريض',],
        ['name' => 'الشئون المالية'],
        ['name' => 'الموارد البشرية'],
        ['name' => 'الادارة المناوبة'],
        ['name' => 'التشغيل والصيانة',],
        ['name' => 'الصحة الاكترونية'],
        ['name' => 'الخدمات الطبية المساندة'],
        ['name' => 'الجودة و سلامة المرضى'],
        ['name' => 'المخاطر',],
        ['name' => 'مكافحة العدوى'],
        ['name' => 'تجربة المريض'],
        ['name' => 'خدمات المرضى'],
        ['name' => 'الشئون القانونية'],
        ['name' => 'الشئون الاكاديمية و التدريب'],
        ['name' => 'أدمن'],

    ]);
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
