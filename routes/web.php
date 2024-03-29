<?php

use App\Models\FacultyNursing;
use App\Models\vcOfficeMember;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SyndicateController;
use App\Http\Controllers\AdminCouncilController;
use App\Http\Controllers\FacultyBspcsController;
use App\Http\Controllers\FacultyNursingController;
use App\Http\Controllers\VcOfficeMemberController;
use App\Http\Controllers\ViceChancellorController;
use App\Http\Controllers\AcademicCouncilController;
use App\Http\Controllers\FacultyMedicineController;
use App\Http\Controllers\adminController\homeController;
use App\Http\Controllers\adminController\noticController;
use App\Http\Controllers\adminController\reportController;
use App\Http\Controllers\adminController\dashboardController;
use App\Http\Controllers\adminController\activitiesController;
use App\Http\Controllers\adminController\subscriberController;
use App\Http\Controllers\adminController\aboutController\eventsController;
use App\Http\Controllers\adminController\aboutController\shmuActController;
use App\Http\Controllers\adminController\administration\chancellorController;
use App\Http\Controllers\adminController\aboutController\campusDetailsController;
use App\Http\Controllers\adminController\aboutController\instituteCodeController;
use App\Http\Controllers\adminController\aboutController\missionAndVisionController;

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



Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';


//////////// frontend view routes start/////////////////

Route::get('/', function () {
    return  view('frontend/index');
});
Route::get('/shmu-act', function () {
    return  view('frontend/shmu-act');
});
Route::get('/ins-code', function () {
    return  view('frontend/ins-code');
});
Route::get('/campus-detail', function () {
    return  view('frontend/campus-detail');
});
Route::get('/campus-map', function () {
    return  view('frontend/campus-map');
});
Route::get('/vision-mission', function () {
    return  view('frontend/vision-mission');
});
Route::get('/event', function () {
    return  view('frontend/event');
});

Route::get('/event/deatils/{id}', function ($id) {
    return  view('frontend/eventdtls',compact('id'));
});

Route::get('/chancellor', function () {
    return  view('frontend/chancellor');
});
Route::get('/vice-chancellor', function () {
    return  view('frontend/vice-chancellor');
});
Route::get('/syndicate', function () {
    return  view('frontend/syndicate');
});
Route::get('/academic-council', function () {
    return  view('frontend/academic-council');
});
Route::get('/admin-council', function () {
    return  view('frontend/admin-council');
});
Route::get('/faculty-of-medicine', function () {
    return  view('frontend/faculty-of-medicine');
});
Route::get('/faculty-of-basic-science-and-para-clinical-science', function () {
    return  view('frontend/faculty-of-basic-science-and-para-clinical-science');
});
Route::get('/faculty-of-nursing', function () {
    return  view('frontend/faculty-of-nursing');
});
Route::get('/program-all', function () {
    return  view('frontend/program-all');
});
Route::get('/academmic-calender', function () {
    return  view('frontend/academmic-calender');
});
Route::get('/certificate', function () {
    return  view('frontend/certificate');
});
Route::get('/affiliated-institutions-government', function () {
    return  view('frontend/affiliated-institutions-government');
});
Route::get('/affiliated-institutions-non-government', function () {
    return  view('frontend/affiliated-institutions-non-government');
});
Route::get('/frontNotice', function () {
    return  view('frontend/notice');
});
Route::get('/event-gallary', function () {
    return  view('frontend/event-gallary');
});
Route::get('/noc', function () {
    return  view('frontend/noc');
});
Route::get('/apa', function () {
    return  view('frontend/apa');
});
Route::get('/tender', function () {
    return  view('frontend/tender');
});
Route::get('/career', function () {
    return  view('frontend/career');
});
Route::get('/form', function () {
    return  view('frontend/form');
});

////////////////// frontend route end /////////////////

/////////////////// admin route start /////////////////

Route::middleware('auth')->group(function () {
    // dashboard routes 
    Route::get('/dashboard', [dashboardController::class, 'Index']);

    //  home page routes 
    Route::get('/adminHome', [homeController::class, 'Index']);


    //--------------------------------------------------------------//
    // ---------------- about section routes start----------//
    //--------------------------------------------------------------//

    //--------shmu act route------//
    Route::get('/shmu/Act', [shmuActController::class, 'Index']);

    Route::put('/update/act/text/{id}', [shmuActController::class, 'UpdateActText'])->name('updateActText');

    Route::post('/act/doc', [shmuActController::class, 'StoreAct'])->name('act.doc');

    Route::get('/act/edit/{id}', [shmuActController::class, 'Edit'])->name('act.edit');

    Route::put('/act/update/{id}', [shmuActController::class, 'Update'])->name('act.update');

    Route::get('/act/delete/{id}', [shmuActController::class, 'Destroy'])->name('act.delete');
    


    // -------events route --------//
    Route::get('/events', [eventsController::class, 'Index']);

    Route::post('/events', [eventsController::class, 'Store'])->name('store.news&event');

    Route::get('/edit/event/{id}', [eventsController::class, 'Edit'])->name('editEvent');

    Route::put('/update/event/{id}', [eventsController::class, 'Update'])->name('update.event');

    Route::get('/delete/event/{id}', [eventsController::class, 'Destroy'])->name('delete.event');



    //------------event image controller --------//
    Route::get('/event/img/{id}', [eventsController::class, 'EventImgIndex'])->name('event.img');

    Route::post('/event/img/{id}', [eventsController::class, 'StoreEventImg'])->name('store.event.img');

    Route::get('/event/img/delete/{id}', [eventsController::class, 'DeleteEventImg'])->name('delete.eventImg');



    //--------institute_code route ---------//
    Route::get('/institute/code', [instituteCodeController::class, 'Index']);

    Route::post('/Institute/Code', [instituteCodeController::class, 'Store'])->name('store.instituteCode');

    Route::get('/Institute/Edit/{id}', [instituteCodeController::class, 'Edit'])->name('edit.institute');

    Route::put('/Institute/update/{id}', [instituteCodeController::class, 'Update'])->name('update.instituteCode');

    Route::get('/Institute/delete/{id}', [instituteCodeController::class, 'Destroy'])->name('delete.institute');


    //-----------campus_details route-------------//
    Route::get('/campusdetails', [campusDetailsController::class, 'Index']);

    Route::put('/Update/campus/details/{id}', [campusDetailsController::class, 'Update'])->name('update.campusDtls');

    //-------------mission and vision -------------//
    Route::get('/mission/vision', [missionAndVisionController::class, 'Index']);

    Route::put('/Update/mission/{id}', [missionAndVisionController::class, 'UpdateMission'])->name('update.mission');

    Route::put('/Update/vision/{id}', [missionAndVisionController::class, 'UpdateVision'])->name('update.vision');
    

    //--------------------------------------------------------------//
    // ---------------- about section route end------------//
    //--------------------------------------------------------------//


    //--------------------------------------------------------------//
    // ------------------- Administration section route start-------//
    //--------------------------------------------------------------//

    //------Chancellor route--------//
    Route::get('/admin/chancellor', [chancellorController::class, 'Index']);
    Route::post('/update/chancellor/{id}', [chancellorController::class, 'Update'])->name('chancellor/update');

    //vice chancellor rote
    Route::get('Vice-Chancellor', [ViceChancellorController::class, 'index']);

    Route::post('Vice-Chancellor/update/{id}', [ViceChancellorController::class, 'update'])->name('viceChancellor.update');

    Route::post('vc-office/member', [VcOfficeMemberController::class, 'store'])->name('vc.Office.Member');

    Route::get('vc-office-member/edit/{id}', [VcOfficeMemberController::class, 'edit'])->name('edit.vcOfficeMember');

    Route::post('vc-office-member/update/{id}', [VcOfficeMemberController::class, 'update'])->name('update.vcMember');

    Route::get('vc-office-member/delete/{id}', [VcOfficeMemberController::class, 'destroy'])->name('delete.vcOfficeMember');

    //univercity syndicate
    Route::get('/univercity/syndicate', [SyndicateController::class, 'index']);
    Route::post('/univercity/syndicate', [SyndicateController::class, 'store'])->name('univercity.syndicate');
    Route::get('edit/univercity/syndicate/{id}', [SyndicateController::class, 'edit'])->name('edit.univercity.syndicate');

    Route::post('update/univercity/syndicate/{id}', [SyndicateController::class, 'update'])->name('update.univercity.syndicate');

    Route::get('delete/univercity/syndicate/{id}', [SyndicateController::class, 'destroy'])->name('delete.univercity.syndicate');
    

    //Academic Council
    Route::get('/academiccouncil', [AcademicCouncilController::class, 'index']);

    Route::post('/academiccouncil', [AcademicCouncilController::class, 'store'])->name('academiccouncil.store');

    Route::get('edit/academiccouncil/{id}', [AcademicCouncilController::class, 'edit'])->name('edit.academiccouncil');

    Route::post('update/academicCouncil/{id}', [AcademicCouncilController::class, 'update'])->name('update.academicCouncil');

    Route::get('delete/academicCouncil/{id}', [AcademicCouncilController::class, 'destroy'])->name('delete.academiccouncil');


     //admin Council
     Route::get('/admincouncil', [AdminCouncilController::class, 'index']);

     Route::post('/admincouncil', [AdminCouncilController::class, 'store'])->name('admin.council');
 
     Route::get('edit/admin/council/{id}', [AdminCouncilController::class, 'edit'])->name('edit.admin.council');
 
     Route::post('update/admin/council/{id}', [AdminCouncilController::class, 'update'])->name('update.admin.council');
 
     Route::get('delete/admin/council/{id}', [AdminCouncilController::class, 'destroy'])->name('delete.admin.council');
    
    //faculty of medicine
    Route::get('/facultyOfMedicine', [FacultyMedicineController::class, 'index']);
    Route::post('/faculty-of-medicine/{id}', [FacultyMedicineController::class, 'update'])->name('update.facultyofmedicine');

    //faculty of facultybspcs
    Route::get('/facultybspcs', [FacultyBspcsController::class, 'index']);

    Route::post('/facultybspcs/{id}', [FacultyBspcsController::class, 'update'])->name('update.facultybspcs');

    //faculty of nursing
    Route::get('/facultynursing', [FacultyNursingController::class, 'index']);

    Route::post('/facultynursing/{id}', [FacultyNursingController::class, 'update'])->name('update.facultynursing');
  
    

    //--------------------------------------------------------------//
    // ------------------- Administration section route end-------//
    //--------------------------------------------------------------//






    //-----------notice routes-------------//
    Route::get('/notice', [noticController::class, 'Index']);
    Route::post('/notice', [noticController::class, 'Store'])->name('store.notice');
    Route::get('/edit/notice/{id}', [noticController::class, 'Edit'])->name('editNotice');
    Route::post('/edit/notice/{id}', [noticController::class, 'Update'])->name('update.notice');
    Route::get('/delete/notice/{id}', [noticController::class, 'Destroy'])->name('delete');

    //-------------activities routes-------------//
    Route::get('/activities', [activitiesController::class, 'Index']);

    //---------------subscribe routes-------------//
    Route::get('/subscriber', [subscriberController::class, 'Index']);

    //---------------report routes--------------//
    Route::get('/report', [reportController::class, 'Index']);
});


                            // admin route end 