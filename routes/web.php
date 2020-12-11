<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FluentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\PaymentGateway\Payment;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;

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
    // App::setLocale($locale);
    return view('welcome');
});



// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/posts', [ClientController::class,'getAllPost'])->name('posts.getallpost');
// Route::get('/posts/{id}', [ClientController::class,'getPostById'])->name('posts.getpostbyid');
// Route::get('/add-post', [ClientController::class,'addPost'])->name('posts.addpost');
// Route::get('/update-post', [ClientController::class,'updatePost'])->name('posts.updatepost');
// Route::get('/delete-post/{id}',[ClientController::class,'deletePost' ])->name('posts.delete');

Route::get('/fluent-string', [FluentController::class,'index'])->name('fluent.string');

//route login middleware
Route::get('/user',[UserController::class,'index'])->name('user.index');
// Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
// Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

//route session
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');

//posts
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');
Route::get('/add-post',[PostController::class,'addPost'] )->name('post.add');
Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');
Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getbyid');
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');
//innerjoin
Route::get('/inner-join',[PostController::class,'innerJoinClause'])->name('post.innerjoin');
Route::get('/left-join',[PostController::class,'leftJoinClause'])->name('post.leftjoin');
Route::get('/right-join',[PostController::class,'rightJoinClause'])->name('post.rightjoin');

//start using model
Route::get('/all-post',[PostController::class,'getAllPostsUsingModel'])->name('post.getallpostusingmodel');

//page
Route::get('/home',function(){
    return view('index');
})->name('home');
Route::get('/about',function(){
    return view('about');
} )->name('about');
Route::get('/contact',function(){
    return view('contact');
} )->name('contact');


//pagination
Route::get('/users', [PaginationController::class,'allUsers'])->name('users.all');
//upload
Route::get('/upload', [UploadController::class,'uploadForm'])->name('upload.uploadform');
Route::post('/upload', [UploadController::class,'uploadFile'])->name('upload.uploadfile');

Route::get('/payment', function () {
    return Payment::process();
});

//send email
Route::get('/send-email',[MailController::class,'sendEmail'])->name('mail.send');


//jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/students',[StudentController::class,'fetchStudents'])->name('students.fetch');

route::get('/add-user',[UserController::class,'insertRecord'])->name('user.insert');

route::get('/get-phone/{id}',[UserController::class,'fetchPhoneByUser'])->name('user.fetch');


//addcomment
Route::get('/add-comment/{id}',[PostController::class,'addComment'])->name('post.addcomment');
Route::get('/get-comments/{id}',[PostController::class,'getCommentByPost'])->name('post.getcomments');

//roles
Route::get('/add-roles',[RoleController::class,'addRole'])->name('role.add');
Route::get('/add-users',[RoleController::class,'adduser'])->name('role.useradd');
Route::get('/rolesbyuser/{id}',[RoleController::class,'getAllRolesByUser'])->name('role.getroleuser');
Route::get('/usersbyrole/{id}',[RoleController::class,'getAllUsersRoles'])->name('role.getuserrole');

//employee
Route::get('/add-employee',[EmployeeController::class,'addEmployee'])->name('employee.add');
//export
Route::get('/export-excel',[EmployeeController::class,'exportIntoExcel'])->name('employee.exportexcel');
Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV'])->name('employee.exportexcel');
//get employee
Route::get('/get-all-employees',[EmpController::class,'getAllEmployees'])->name('employee.getAll');
//download pdf
Route::get('/export-pdf',[EmpController::class,'downloadPDF'])->name('employee.pdfdownload');
//import-form
Route::get('/import-form',[EmployeeController::class,'importForm'])->name('employee.importform');
// import file
Route::post('/import',[EmployeeController::class,'importFile'])->name('employee.import');

//resize img
route::get('/resize-image',[ImageController::class,'resizeImage'])->name('image.resize');
route::post('/resize-image',[ImageController::class,'resizeImageSubmit'])->name('image.resizesubmit');

//dropzone
route::get('/dropzone',[DropzoneController::class,'dropzone'])->name('dropzone.upload');
route::post('/dropzone-store',[DropzoneController::class,'dropzoneStore'])->name('dropzone.uploadsubmit');

//gallery
route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery.get');

//editor
route::get('/editor',[EditorController::class,'editor'])->name('editor.show');

//students
route::get('/all-student',[StudentController::class,'students'])->name('student.show');
route::get('/add-student',[StudentController::class,'addStudent'])->name('student.addform');
route::post('/add-student',[StudentController::class,'storeStudent'])->name('student.store');
route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('student.edit');
route::post('/update-student',[StudentController::class,'updateStudent'])->name('student.update');
route::get('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('student.delete');
