<?php


use Illuminate\Support\Facades\Route;

//staff

Route::get('/',function(){
    return view('admin.dashboard');
})->name('dash');
Route::resource('staff','App\Http\Controllers\StaffController');
Route::get('staff/trash/{id}','App\Http\Controllers\StaffController@trash')->name('staff.trash');
Route::get('staff-tarsh','App\Http\Controllers\StaffController@trashData')->name('staff.trash.all');

Route::post('staff-search','App\Http\Controllers\StaffController@search')->name('staff.search');


//teachers
Route::resource('teacher','App\Http\Controllers\TeacherController');
Route::get('teacher/trash/{id}','App\Http\Controllers\StaffController@trash')->name('teacher.trash');
Route::get('teacher-tarsh','App\Http\Controllers\StaffController@trashData')->name('teacher.trash.all');

Route::post('teacher-search','App\Http\Controllers\StaffController@search')->name('teacher.search');
