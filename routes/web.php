<?php
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Kelcontroller;
use App\Http\Controllers\Keccontroller;
use App\Http\Controllers\Pegawaicontroller;
use App\Http\Controllers\Sektorcontroller;
use App\Http\Controllers\Skpdcontroller;
use App\Http\Controllers\Pelatihancontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Dataadmincontroller;
use App\Http\Controllers\Logincontroller;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/login',[ Logincontroller::class,'Tampillogin' ])->name('login');
route::post('/postlogin',[ Logincontroller::class,'postLogin' ])->name('postlogin');
route::get('/logout',[ Logincontroller::class,'logout' ]);
//user
Route::get('/data',[Usercontroller::class,'Tampildata']);
Route::get('/formulir',[Usercontroller::class,'Tambahformulir']);
Route::post('/kirim',[Usercontroller::class,'kirim']);
Route::get('/',[Usercontroller::class,'welcome']);

Route::group(['middleware'=> ['auth', 'ceknip:2,1']], function () {
    Route::get('/berandaadmin',[Admincontroller::class,'Tampilberandaadmin']);
    Route::get('/datapelaku',[Admincontroller::class,'Tampildatapelaku']);
    Route::get('/pegawai',[Pegawaicontroller::class,'Tampilpegawai']);
});

Route::group(['middleware'=> ['auth', 'ceknip:1']], function () {
    //admin
    route::get('/tambahpelaku',[Admincontroller::class,'Tambahpelaku']);
    route::post('/simpanpelaku',[Admincontroller::class,'Simpanpelaku' ]);
    route::get('/edit/{id}',[Admincontroller::class,'Editdata']);
    route::post('/simpandata/{id}',[Admincontroller::class,'Simpandata' ]);
    route::get('/hapusdata/{id}',[Admincontroller::class,'Hapusdata']);
    route::get('/cetak',[Admincontroller::class,'cetak']);
    //dataadmin
    Route::get('/dataadmin',[Dataadmincontroller::class,'Tampiladmin']);
    Route::get('/tambahadmin',[Dataadmincontroller::class,'Tambahadmin']);
    Route::post('/simpanadmin',[Dataadmincontroller::class,'Simpanadmin']);
    route::get('/editadmin/{id}',[Dataadmincontroller::class,'Editadmin']);
    route::post('/simpanperubahan/{id}',[Dataadmincontroller::class,'Simpanperubahan']);
    route::get('/hapusdataadmin/{id}',[Dataadmincontroller::class,'Hapusdataadmin']);   
    //sektorusaha
    Route::get('/sektorusaha',[Sektorcontroller::class,'Tampilsektorusaha']);
    Route::get('/tambahsektor',[Sektorcontroller::class,'Tambahsektor']);
    Route::post('/simpansektor',[Sektorcontroller::class,'Simpansektor']);
    route::get('/hapusdatasektor/{id}',[Sektorcontroller::class,'Hapusdata']);
    //skpd
    Route::get('/skpdpengampu',[Skpdcontroller::class,'Tampilskpdpengampu']);
    Route::get('/tambahskpd',[Skpdcontroller::class,'Tampiltambahskpd']);
    Route::post('/simpanskpd',[Skpdcontroller::class,'Simpanskpd']);
    route::get('/hapusdataskpd/{id}',[Skpdcontroller::class,'Hapusdata']);
    //pelatihan
    Route::get('/pelatihan',[Pelatihancontroller::class,'Tampilpelatihan']);
    Route::get('/tambahplth',[Pelatihancontroller::class,'Tampiltambahplth']);
    Route::post('/simpanplth',[Pelatihancontroller::class,'Simpanplth']);
    route::get('/hapusdataplth/{id}',[Pelatihancontroller::class,'Hapusdata']);
    //kecamatan
    Route::get('/kecamatan',[Keccontroller::class,'Tampilkecamatan']);
    Route::get('/tambahkec',[Keccontroller::class,'Tampiltambahkec']);
    Route::post('/simpankec',[Keccontroller::class,'Simpankec']);
    route::get('/hapusdatakec/{id}',[Keccontroller::class,'Hapusdata']);
    //kelurahan
    Route::get('/kelurahan',[Kelcontroller::class,'Tampilkelurahan']);
    Route::get('/tambahkel',[Kelcontroller::class,'Tampiltambahkel']);
    Route::post('/simpankel',[Kelcontroller::class,'Simpankel']);
    route::get('/hapusdatakel/{id}',[Kelcontroller::class,'Hapusdata']);
    //pegawai
    Route::get('/tambahpegawai',[Pegawaicontroller::class,'Tampiltambahpegawai']);
    Route::post('/simpanpegawai',[Pegawaicontroller::class,'Simpanpegawai']);
    route::get('/hapuspegawai/{id}',[Pegawaicontroller::class,'Hapusdata']);
    route::get('/editpegawai/{id}',[Pegawaicontroller::class,'Editpegawai']);
    route::post('/simpanedit/{id}',[Pegawaicontroller::class,'Simpanedit']);
});



