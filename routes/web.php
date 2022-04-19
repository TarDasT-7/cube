<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\AdminusersController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\AdvertisementImageController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\Blogcontroller;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\Coursecontroller;
use App\Http\Controllers\Admin\CourseVideoController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PadCastController;
use App\Http\Controllers\Admin\PodCastAudioController;
use App\Http\Controllers\Admin\PodCastCategoryController;
// use App\Http\Controllers\Admin\PodCastController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductSubCategoryController;
use App\Http\Controllers\Admin\ProductTeacherController;
use App\Http\Controllers\Admin\ProductVideoController;
use App\Http\Controllers\Admin\QuestionCategoryController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseSubCategoryController;
use App\Http\Controllers\Admin\AdminAccountingController;
use App\Http\Controllers\Admin\SendPriceController;


use App\Http\Controllers\Controller;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\JquaryController;
use App\Http\Controllers\QcategoryController;


use App\Http\Controllers\Site\CommentController;
use App\Http\Controllers\Site\ForgetPasswordController;
use App\Http\Controllers\Site\SiteAdvertisementController;
use App\Http\Controllers\Site\SiteBlogController;
use App\Http\Controllers\Site\SiteContactUsController;
use App\Http\Controllers\Site\Downloadcontroller;
use App\Http\Controllers\Site\SiteCourceController;
use App\Http\Controllers\Site\SiteCourseController;
use App\Http\Controllers\Site\SitePadCastController;
use App\Http\Controllers\Site\SitePodCastController;
use App\Http\Controllers\Site\CourseFilterController;
use App\Http\Controllers\Site\ProductFilterController;
use App\Http\Controllers\Site\ProductSubFilterController;
use App\Http\Controllers\Site\SiteQuestionController;
use App\Http\Controllers\Site\SiteSliderController;
use App\Http\Controllers\Site\SiteUserController;

use App\Http\Controllers\Site\IndexPagesController;
use App\Http\Controllers\Site\ShowController;




use App\Models\ProductSubCategory;
use App\Models\Qcategory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\SiteProductController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\SitePlanController;
use App\Http\Controllers\Site\InvoiceController;
use App\Http\Controllers\Site\OrderController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductItemController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\PlanCategoryController;
use App\Http\Controllers\Admin\PlanDescriptionController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\AboutUsController;


use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProducerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\FreeVideoController;
use App\Http\Controllers\Admin\FreeVideoFileController;
use App\Http\Controllers\Admin\PodcastController;
use App\Http\Controllers\Admin\QuestionController;







use Trez\RayganSms\Facades\RayganSms;

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
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('admin.partials.index');
});





Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
Route::get('fake',[InstallController::class,'install']);

/*Route::get('/', function () {
    return view('welcome');
});*/
// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
//     return view('site.partials.index');
// })->name('dashboard');



/*admin route*/

Route::post('ckeditor/image_upload', [AboutUsController::class,'upload'])->name('upload');

    Route::prefix('admin/')->group(function (){

        Route::get('index',[AdminController::class,'index'])->name('dashboard');

        Route::resource('slider',SliderController::class);

        Route::resource('role',RoleController::class);

        Route::resource('user',UserController::class);
        Route::patch('user-role-{id}',[UserController::class , 'role'])->name('user_role');

        Route::resource('producer',ProducerController::class);

        Route::resource('category',CategoryController::class);
        Route::resource('sub',SubCategoryController::class);
        Route::resource('tag',TagController::class);

        Route::resource('free-video',FreeVideoController::class);
        Route::resource('free-file',FreeVideoFileController::class);
        Route::get('freFl-VI-{id}',[FreeVideoFileController::class  , 'findVideo'])->name('free-file-index');

        Route::resource('podcast',PodcastController::class);
        Route::get('podcast-part-{id}',[PodcastController::class , 'items'])->name('podcast_part');
        Route::get('podcast-create-item-{id}',[PodcastController::class , 'createItem'])->name('create_podItem');
        Route::get('podcast-edit-item-{id}',[PodcastController::class , 'editItem'])->name('edit_podItem');
        Route::post('podcast-create-item',[PodcastController::class , 'storeItem'])->name('store_podItem');
        Route::patch('podcast-edit-item-{id}',[PodcastController::class , 'updateItem'])->name('update_podItem');
        Route::delete('podcast-destroy-item-{id}',[PodcastController::class , 'destroyItem'])->name('destroy_podItem');

        Route::resource('blog',Blogcontroller::class);
        Route::get('blog-article-{id}',[Blogcontroller::class , 'article'])->name('blog_article');
        Route::get('blog-create-item-{id}',[Blogcontroller::class , 'createItem'])->name('create_blogItem');
        Route::get('blog-edit-item-{id}',[Blogcontroller::class , 'editItem'])->name('edit_blogItem');
        Route::post('blog-create-item',[Blogcontroller::class , 'storeItem'])->name('store_blogItem');
        Route::patch('blog-edit-item-{id}',[Blogcontroller::class , 'updateItem'])->name('update_blogItem');
        Route::delete('blog-destroy-item-{id}',[Blogcontroller::class , 'destroyItem'])->name('destroy_blogItem');


        Route::resource('course',Coursecontroller::class);
        Route::get('course-subcate',[Coursecontroller::class , 'subCateGET'])->name('subcateFind');
        Route::resource('coursevideo',CourseVideoController::class);
        Route::get('coursevideo-items-{id}',[CourseVideoController::class , 'items'])->name('cv_item');



        Route::resource('aboutUs',AboutUsController::class);
        Route::resource('contactUs',ContactUsController::class);

        Route::resource('question',QuestionController::class);
        Route::get('question-position',[QuestionController::class , 'position'])->name('question_position');

        Route::resource('footer',FooterController::class);















        Route::resource('questioncategory',QuestionCategoryController::class);
        Route::resource('admin',AdminusersController::class);
        Route::get('select',[Coursecontroller::class,'select'])->name('selects');
        Route::get('courseteacher',[Coursecontroller::class,'teacher'])->name('courseteachers');

        Route::resource('course_category',CourseCategoryController::class);
        Route::resource('course_sub_category',CourseSubCategoryController::class);
        Route::resource('teacher',TeacherController::class);
        Route::resource('blogcategory',BlogCategoryController::class);
        Route::resource('author',AuthorController::class);
        Route::resource('member',MemberController::class);
        // Route::resource('podcast',PodCastController::class);
        Route::resource('podcategory',PodCastCategoryController::class);
        Route::resource('podaudio',PodCastAudioController::class);
        Route::resource('speaker',SpeakerController::class);
        Route::resource('product',ProductController::class);
        Route::get('productselect',[ProductController::class,'select'])->name('product_selects');
        Route::get('productteacher',[ProductController::class,'teacher'])->name('product_teachers');

        Route::resource('product_category',ProductCategoryController::class);
        Route::resource('product_sub_category',ProductSubCategoryController::class);
        Route::resource('product_teacher',ProductTeacherController::class);
        Route::resource('product_video',ProductVideoController::class);
        Route::resource('advertisement',AdvertisementController::class);
        Route::resource('advertisement_image',AdvertisementImageController::class);
        Route::resource('plan',PlanController::class);
        Route::resource('plan_category',PlanCategoryController::class);
        Route::resource('plan_description',PlanDescriptionController::class);
        Route::resource('send_price',SendPriceController::class);
        Route::get('package',[AdminAccountingController::class,'package'])->name('package');
        Route::get('paid',[AdminAccountingController::class,'paid'])->name('paid');
        Route::get('unpaid',[AdminAccountingController::class,'unpaid'])->name('unpaid');
    });


/*site route*/
Route::get('/',[IndexPagesController::class,'home'])->name('homePage');
Route::get('podcast-list',[IndexPagesController::class,'podList'])->name('podcastList');
Route::get('podcast-collection-{id}',[IndexPagesController::class,'podCol'])->name('podcastCollection');
Route::get('podcast-play-{id}',[ShowController::class,'podPlay'])->name('podcastPlay');
Route::get('blog-list-{href}',[IndexPagesController::class,'blogList'])->name('blogtList');
Route::get('blog-show-{id}',[ShowController::class,'blogShow'])->name('blogShow');
Route::get('free-video-list',[IndexPagesController::class,'fvList'])->name('fvList');
Route::get('free-video-show-{id}',[ShowController::class,'fvShow'])->name('fvShow');
Route::get('about-us',[IndexPagesController::class,'about'])->name('about');
Route::get('contact-us',[IndexPagesController::class,'contact'])->name('contact');
Route::get('faq-list',[IndexPagesController::class,'faq'])->name('faq_list');
Route::get('course-list-filtered-subCategory-{id}',[IndexPagesController::class,'courseSubList'])->name('courseFilterSubCate');



Route::resource('sitecourse',SiteCourseController::class);
Route::resource('account',AccountingController::class);
Route::get('city',[AccountingController::class,'select'])->name('cities');
Route::get('delete_account/{id}',[AccountingController::class,'delete']);
Route::get('load',[AccountingController::class,'load']);
Route::post('calculation',[AccountingController::class,'calculation'])->name('calculations');
Route::post('address',[AccountingController::class,'address']);
Route::post('comment',[CommentController::class,'store']);
Route::get('download/{name}',[Downloadcontroller::class,'download']);
Route::get('enter',[Controller::class,'enter']);
Route::get('about_us',[\App\Http\Controllers\Site\AboutUsController::class,'index']);
Route::get('contact_us',[SiteContactUsController::class,'index']);
Route::get('blog',[SiteBlogController::class,'index']);
Route::get('blog_det/{id}',[SiteBlogController::class,'show']);
Route::get('sitequestion',[SiteQuestionController::class,'show']);
Route::post('sitequestion_store',[SiteQuestionController::class,'store']);
Route::get('sitepodcast',[SitePodCastController::class,'index']);
Route::get('sitepodcast_det/{id}',[SitePodCastController::class,'show']);
Route::get('audio/{id}',[SitePodCastController::class,'audio']);
Route::get('indexprofile',[SiteUserController::class,'index']);
Route::get('siteslider',[SiteSliderController::class,'index']);
Route::get('site_product_category/{id}',[SiteProductController::class,'category']);
Route::get('site_product_sub_category/{id}',[SiteProductController::class,'sub_category']);
Route::get('site_advertisement',[SiteAdvertisementController::class,'index']);
Route::get('site_advertisement_det/{id}',[SiteAdvertisementController::class,'show']);
Route::get('site_product_det/{id}',[SiteProductController::class,'show']);
Route::get('site_plan',[SitePlanController::class,'index']);
Route::patch('profile',[SiteUserController::class,'update']);
Route::get('forget_password',[ForgetPasswordController::class,'index']);
Route::post('forget_password_phone',[ForgetPasswordController::class,'phone']);
Route::post('forget_password_token',[ForgetPasswordController::class,'token']);
Route::post('forget_password_pass',[ForgetPasswordController::class,'pass']);
Route::get('course_filter',[CourseFilterController::class,'filter']);
Route::get('product_filter',[ProductFilterController::class,'filter']);
Route::get('product_sub_filter',[ProductSubFilterController::class,'filter']);
Route::get('get_token',[PaymentController::class,'getToken']);















