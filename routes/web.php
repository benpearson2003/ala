<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('test', function() {
    return view('test');
})->name('test');

Route::get('aboutus', function() {
    return view('aboutus');
})->name('aboutUs');
Route::get('staff', function() {
    return view('staff');
})->name('staff');
Route::get('professionaloversight', function() {
    return view('professionaloversight');
})->name('professionalOversight');
Route::get('ljachandbook', function() {
    return view('ljachandbook');
})->name('LJACHandbook');
Route::get('privacypolicy', function() {
    return view('privacypolicy');
})->name('privacyPolicy');
Route::get('employment', function() {
    return view('employment');
})->name('employment');
Route::get('committee', function() {
    return view('committee');
})->name('committee');
Route::get('ourreports', function() {
    return view('ourreports');
})->name('ourReports');
Route::get('searchaudits', function() {
    return view('searchaudits');
})->name('searchAudits');
Route::get('searchreports', function() {
    return view('searchreports');
})->name('searchReports');
Route::get('meetings', function() {
    return view('meetings');
})->name('meetings');
Route::get('upcomingmeetings', function() {
    return view('upcomingmeetings');
})->name('upcomingMeetings');
Route::get('meetingscalendararchive', function() {
    return view('meetingscalendararchive');
})->name('meetingsCalendarArchive');
Route::get('resources', function() {
    return view('resources');
})->name('resources');
Route::get('quicklinks', function() {
    return view('quicklinks');
})->name('quickLinks');

Route::group(['middleware' => 'addrrestrict'], function () {
    Auth::routes();
});

Route::group(['prefix' => '!mgt', 'middleware' => ['auth','addrrestrict']], function () {
    Route::get('/', function() {
        return view('mgt');
    })->name('mgt');
    Route::get('managecontent', function () {
        return view('mgt/managecontent');
    })->name('mgt/manageContent');
    Route::get('carousel', function () {
        return view('mgt/carousel');
    })->name('mgt/carousel');
    Route::get('auditreports', function () {
        return view('mgt/auditreports');
    })->name('mgt/auditReports');
    Route::get('meetingtypes', function () {
        return view('mgt/meetingtypes');
    })->name('mgt/meetingTypes');
    Route::get('meetingscalendar', function () {
        return view('mgt/meetingscalendar');
    })->name('mgt/meetingsCalendar');
    Route::get('agencies', function () {
        return view('mgt/agencies');
    })->name('mgt/agencies');
    Route::get('employmentform', function () {
        return view('mgt/employmentform');
    })->name('mgt/employmentForm');
    Route::get('addannouncement', function () {
        return view('mgt/addannouncement');
    })->name('mgt/addAnnouncement');

    Route::get('uploadaudit', function () {
        return view('mgt/uploadaudit');
    })->name('mgt/uploadAudit');

    Route::post('uploadaudit', function(Request $request) {
        $validator = Validator::make($request->file(), [
            'audit' => 'pdf'
        ]);
        if($request->hasFile('file'))
        {
            $files = $request->file('file');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move('storage/audits', $filename);
            }
        }
        /*foreach ($request->files as $file) {
           $path = $file->store('audits');
       };*/
        return view('mgt/uploadaudit');
    });
});
