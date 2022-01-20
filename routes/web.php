<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SiteSettingController;

use App\Http\Controllers\MobiBrandController;
use App\Http\Controllers\MobiCatController;
use App\Http\Controllers\MobiRatingController;

use App\Http\Controllers\CameraController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SmartwatchController;
use App\Http\Controllers\TabletController;

// for front-end

use App\Http\Controllers\MobiViewController;


// end for front-end


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
// for front-end
Route::get('/', [MobiViewController::class, 'view_all_post']);
Route::get('/{postID}/{title}', [MobiViewController::class, 'view_single_post'])->name('single_post.view');



// end for front-end
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/admin-login', [AdminDashboardController::class, 'login']);

Route::get('/admin-logout',[AdminDashboardController::class, 'admin_logout'])->name('admin_logout');




Route::group(['middleware'=>['AuthCheck']], function(){
	Route::post('/admin-login', [AdminDashboardController::class, 'auth_check'])->name('admin.check');
	Route::get('/dashboard', [AdminDashboardController::class, 'view_dashboard'])->name('dashboard');

//to set 'dashboard' in url
	Route::group(['prefix' => 'dashboard'], function () {

		// start Site Settings routes -----------------
		Route::group(['prefix' => 'settings'], function(){

			// for title and meta
			Route::get('/title_meta', [SiteSettingController::class, 'title_meta'])->name('title_meta.show');
			Route::post('/title_meta', [SiteSettingController::class, 'save_title_meta'])->name('title_meta.save');

			// for website's Favicon
			Route::get('/favicon&logo', [SiteSettingController::class, 'show_favi_logo'])->name('favi_logo.show');
			Route::post('/favicon&logo', [SiteSettingController::class, 'save_favi_logo'])->name('favi_logo.save');

		});//end site settins ----------------------


	// Start admin -----------------------------
		Route::get('/add-new-admin', [AdminDashboardController::class, 'add_admin'])->name('add_new_admin.page');
		Route::post('/add-new-admin', [AdminDashboardController::class, 'save_admin'])->name('admin.save');
		Route::get('/all-admins', [AdminDashboardController::class, 'all_the_admins'])->name('all_admins.view');

		// to set 'profile' in url after 'dashboard'
		Route::group(['prefix' => 'profile'], function(){
			Route::get('/admin-profile', [AdminDashboardController::class, 'admin_profile'])->name('admin.profile');
		// profile password change page
		Route::get('/change-password', [AdminDashboardController::class, 'show_password'])->name('password.show');
	
		// change the password
		Route::post('/change-password', [AdminDashboardController::class, 'change_password'])->name('password.change');

		// view edit admin profile
		Route::get('/edit', [AdminDashboardController::class, 'show_edit_profile'])->name('edit_profile.show');
		Route::post('/edit', [AdminDashboardController::class, 'save_edit_profile'])->name('edit_profile.save');

		});


	//end admin --------------------------


// ====================== for all products =========================
	Route::group(['prefix' => 'product'], function(){
		// for Mobile route ===================================
		Route::group(['prefix' => 'mobile'], function(){
			Route::get('/all', [MobileController::class, 'all_mobile'])->name('mobile.all');
			// view add new mobile page
			Route::get('/add-new-product', [MobileController::class, 'add_mobile'])->name('mobile.add');
			// add new mobile post
			Route::post('/add-new-product', [MobileController::class, 'add_mobile_post'])->name('mobilepost.add');
			// View single post 
			Route::post('/{postID}/view', [MobileController::class, 'view_single_post'])->name('view_mobile_post.page');
			// edit Post according to post id
			Route::post('/{postID}/edit', [MobileController::class, 'edit_mobile_post_view'])->name('view_edit_mobile_post.page');
			// Save edited post
			Route::post('/edit/save', [MobileController::class, 'edit_mobile_post_save'])->name('edited_mobile_post.save');
			// delete Post according to post id
			Route::post('/{postID}/delete', [MobileController::class, 'delete_mobile_post'])->name('delete_post.mobile');
		// start mobile brands
			// view brands
			Route::get('/brands', [MobiBrandController::class, 'mobile_brand'])->name('mobile.brand');
			// add brand
			Route::post('/brands', [MobiBrandController::class, 'mobile_brand_save'])->name('mobile_brand.save');
			// edit brand 
			Route::post('brands/{brandID}/edit', [MobiBrandController::class, 'mobile_brand_edit'])->name('edit_mobile_brand.page');
			// save edited brand
			Route::post('brands/edit/save', [MobiBrandController::class, 'mobile_brand_edit_save'])->name('edit_mobile_brand.save');
			// delete brand
			Route::post('/brands/{brandID}/delete', [MobiBrandController::class, 'delete_mobile_brand'])->name('delete_brand.mobile');
		// end mobile brands

		// start mobile Category
			// view categories
			Route::get('/categories', [MobiCatController::class, 'mobile_category'])->name('mobile.category');
			// add category
			Route::post('/categories', [MobiCatController::class, 'mobile_category_save'])->name('mobile_category.save');
			// edit category 
			Route::post('categories/{categoryID}/edit', [MobiCatController::class, 'mobile_category_edit'])->name('edit_mobile_category.page');
			// save edited category
			Route::post('categories/edit/save', [MobiCatController::class, 'mobile_category_edit_save'])->name('edit_mobile_category.save');
			// delete category
			Route::post('categories/{categoryID}/delete', [MobiCatController::class, 'delete_mobile_category'])->name('delete_category.mobile');
		// end mobile category

		// start mobile ratings
			// view ratings
			Route::get('/ratings', [MobiRatingController::class, 'mobile_rating'])->name('mobile.rating');
			// add rating
			Route::post('/ratings', [MobiRatingController::class, 'mobile_rating_save'])->name('mobile_rating.save');
			// edit category 
			Route::post('ratings/{ratingID}/edit', [MobiRatingController::class, 'mobile_rating_edit'])->name('edit_mobile_rating.page');
			// save edited category
			Route::post('ratings/edit/save', [MobiRatingController::class, 'mobile_rating_edit_save'])->name('edit_mobile_rating.save');
			// delete ratting
			Route::post('/ratings/{ratingID}/delete', [MobiRatingController::class, 'delete_mobile_rating'])->name('delete_rating.mobile');
		// end mobile ratings

		});//end Mobile =======================================


		// for Camera route ==============================
		Route::group(['prefix' => 'camera'], function(){
			Route::get('/all', [CameraController::class, 'all_camera'])->name('camera.all');
			Route::get('/add-new-product', [CameraController::class, 'add_camera'])->name('camera.add');
			Route::post('/add-new-product', [CameraController::class, 'add_new_camera'])->name('newcamera.add');

		// start Camera brands
			// view brands
			Route::get('/brands', [BrandController::class, 'camera_brand'])->name('camera.brand');
			// add brand
			Route::post('/brands', [BrandController::class, 'camera_brand_save'])->name('camera_brand.save');
			// edit brand 
			Route::post('brands/{brandID}/edit', [BrandController::class, 'camera_brand_edit'])->name('edit_camera_brand.page');
			// save edited brand
			Route::post('brands/edit/save', [BrandController::class, 'camera_brand_edit_save'])->name('edit_camera_brand.save');
			// delete brand
			Route::post('/brands/{brandID}/delete', [BrandController::class, 'delete_camera_brand'])->name('delete_brand.camera');
		// end camera brands

		// start Camera Category
			// view categories
			Route::get('/categories', [CategoryController::class, 'camera_category'])->name('camera.category');
			// add category
			Route::post('/categories', [CategoryController::class, 'camera_category_save'])->name('camera_category.save');
			// edit category 
			Route::post('categories/{categoryID}/edit', [CategoryController::class, 'camera_category_edit'])->name('edit_camera_category.page');
			// save edited category
			Route::post('categories/edit/save', [CategoryController::class, 'camera_category_edit_save'])->name('edit_camera_category.save');
			// delete category
			Route::post('categories/{categoryID}/delete', [CategoryController::class, 'delete_camera_category'])->name('delete_category.camera');
		// end camera category

		// start Camera ratings
			// view ratings
			Route::get('/ratings', [RatingsController::class, 'camera_rating'])->name('camera.rating');
			// add rating
			Route::post('/ratings', [RatingsController::class, 'camera_rating_save'])->name('camera_rating.save');
			// edit category 
			Route::post('ratings/{ratingID}/edit', [RatingsController::class, 'camera_rating_edit'])->name('edit_camera_rating.page');
			// save edited category
			Route::post('ratings/edit/save', [RatingsController::class, 'camera_rating_edit_save'])->name('edit_camera_rating.save');
			// delete ratting
			Route::post('/ratings/{ratingID}/delete', [RatingsController::class, 'delete_camera_rating'])->name('delete_rating.camera');
		// end camera ratings

		});//end Camera =============================
	

		// for Laptop route ======================================= 
		Route::group(['prefix' => 'laptop'], function(){
			Route::get('/', [LaptopController::class, 'all_laptop'])->name('laptop.all');

			Route::get('/add-new-product', [LaptopController::class, 'add_laptop'])->name('laptop.add');

		// start laptop brands
			// view brands
			Route::get('/brands', [BrandController::class, 'laptop_brand'])->name('laptop.brand');
			// add brand
			Route::post('/brands', [BrandController::class, 'laptop_brand_save'])->name('laptop_brand.save');
			// edit brand 
			Route::post('brands/{brandID}/edit', [BrandController::class, 'laptop_brand_edit'])->name('edit_laptop_brand.page');
			// save edited brand
			Route::post('brands/edit/save', [BrandController::class, 'laptop_brand_edit_save'])->name('edit_laptop_brand.save');
			// delete brand
			Route::post('/brands/{brandID}/delete', [BrandController::class, 'delete_laptop_brand'])->name('delete_brand.laptop');
		// end laptop brands

		// start laptop Category
			// view categories
			Route::get('/categories', [CategoryController::class, 'laptop_category'])->name('laptop.category');
			// add category
			Route::post('/categories', [CategoryController::class, 'laptop_category_save'])->name('laptop_category.save');
			// edit category 
			Route::post('categories/{categoryID}/edit', [CategoryController::class, 'laptop_category_edit'])->name('edit_laptop_category.page');
			// save edited category
			Route::post('categories/edit/save', [CategoryController::class, 'laptop_category_edit_save'])->name('edit_laptop_category.save');
			// delete category
			Route::post('categories/{categoryID}/delete', [CategoryController::class, 'delete_laptop_category'])->name('delete_category.laptop');
		// end laptop category

		// start laptop ratings
			// view ratings
			Route::get('/ratings', [RatingsController::class, 'laptop_rating'])->name('laptop.rating');
			// add rating
			Route::post('/ratings', [RatingsController::class, 'laptop_rating_save'])->name('laptop_rating.save');
			// edit category 
			Route::post('ratings/{ratingID}/edit', [RatingsController::class, 'laptop_rating_edit'])->name('edit_laptop_rating.page');
			// save edited category
			Route::post('ratings/edit/save', [RatingsController::class, 'laptop_rating_edit_save'])->name('edit_laptop_rating.save');
			// delete ratting
			Route::post('/ratings/{ratingID}/delete', [RatingsController::class, 'delete_laptop_rating'])->name('delete_rating.laptop');
		// end laptop ratings

		});//end Laptop =======================================


		// for Smartphone route =======================================
		Route::group(['prefix' => 'smartwatch'], function(){
			Route::get('/', [SmartwatchController::class, 'all_smartwatch'])->name('smartwatch.all');

			Route::get('/add-new-product', [SmartwatchController::class, 'add_smartwatch'])->name('smartwatch.add');

		// start smartwatch brands
			// view brands
			Route::get('/brands', [BrandController::class, 'smartwatch_brand'])->name('smartwatch.brand');
			// add brand
			Route::post('/brands', [BrandController::class, 'smartwatch_brand_save'])->name('smartwatch_brand.save');
			// edit brand 
			Route::post('brands/{brandID}/edit', [BrandController::class, 'smartwatch_brand_edit'])->name('edit_smartwatch_brand.page');
			// save edited brand
			Route::post('brands/edit/save', [BrandController::class, 'smartwatch_brand_edit_save'])->name('edit_smartwatch_brand.save');
			// delete brand
			Route::post('/brands/{brandID}/delete', [BrandController::class, 'delete_smartwatch_brand'])->name('delete_brand.smartwatch');
		// end smartwatch brands

		// start smartwatch Category
			// view categories
			Route::get('/categories', [CategoryController::class, 'smartwatch_category'])->name('smartwatch.category');
			// add category
			Route::post('/categories', [CategoryController::class, 'smartwatch_category_save'])->name('smartwatch_category.save');
			// edit category 
			Route::post('categories/{categoryID}/edit', [CategoryController::class, 'smartwatch_category_edit'])->name('edit_smartwatch_category.page');
			// save edited category
			Route::post('categories/edit/save', [CategoryController::class, 'smartwatch_category_edit_save'])->name('edit_smartwatch_category.save');
			// delete category
			Route::post('categories/{categoryID}/delete', [CategoryController::class, 'delete_smartwatch_category'])->name('delete_category.smartwatch');
		// end smartwatch category

		// start smartwatch ratings
			// view ratings
			Route::get('/ratings', [RatingsController::class, 'smartwatch_rating'])->name('smartwatch.rating');
			// add rating
			Route::post('/ratings', [RatingsController::class, 'smartwatch_rating_save'])->name('smartwatch_rating.save');
			// edit category 
			Route::post('ratings/{ratingID}/edit', [RatingsController::class, 'smartwatch_rating_edit'])->name('edit_smartwatch_rating.page');
			// save edited category
			Route::post('ratings/edit/save', [RatingsController::class, 'smartwatch_rating_edit_save'])->name('edit_smartwatch_rating.save');
			// delete ratting
			Route::post('/ratings/{ratingID}/delete', [RatingsController::class, 'delete_smartwatch_rating'])->name('delete_rating.smartwatch');
		// end smartwatch ratings



		});//end Smartphone =======================================


		// for Tablet route =======================================
		Route::group(['prefix' => 'tablet'], function(){
			Route::get('/', [TabletController::class, 'all_tablet'])->name('tablet.all');

			Route::get('/add-new-product', [TabletController::class, 'add_tablet'])->name('tablet.add');

		// start tablet brands
			// view brands
			Route::get('/brands', [BrandController::class, 'tablet_brand'])->name('tablet.brand');
			// add brand
			Route::post('/brands', [BrandController::class, 'tablet_brand_save'])->name('tablet_brand.save');
			// edit brand 
			Route::post('brands/{brandID}/edit', [BrandController::class, 'tablet_brand_edit'])->name('edit_tablet_brand.page');
			// save edited brand
			Route::post('brands/edit/save', [BrandController::class, 'tablet_brand_edit_save'])->name('edit_tablet_brand.save');
			// delete brand
			Route::post('/brands/{brandID}/delete', [BrandController::class, 'delete_tablet_brand'])->name('delete_brand.tablet');
		// end tablet brands

		// start tablet Category
			// view categories
			Route::get('/categories', [CategoryController::class, 'tablet_category'])->name('tablet.category');
			// add category
			Route::post('/categories', [CategoryController::class, 'tablet_category_save'])->name('tablet_category.save');
			// edit category 
			Route::post('categories/{categoryID}/edit', [CategoryController::class, 'tablet_category_edit'])->name('edit_tablet_category.page');
			// save edited category
			Route::post('categories/edit/save', [CategoryController::class, 'tablet_category_edit_save'])->name('edit_tablet_category.save');
			// delete category
			Route::post('categories/{categoryID}/delete', [CategoryController::class, 'delete_tablet_category'])->name('delete_category.tablet');
		// end tablet category

		// start tablet ratings
			// view ratings
			Route::get('/ratings', [RatingsController::class, 'tablet_rating'])->name('tablet.rating');
			// add rating
			Route::post('/ratings', [RatingsController::class, 'tablet_rating_save'])->name('tablet_rating.save');
			// edit category 
			Route::post('ratings/{ratingID}/edit', [RatingsController::class, 'tablet_rating_edit'])->name('edit_tablet_rating.page');
			// save edited category
			Route::post('ratings/edit/save', [RatingsController::class, 'tablet_rating_edit_save'])->name('edit_tablet_rating.save');
			// delete ratting
			Route::post('/ratings/{ratingID}/delete', [RatingsController::class, 'delete_tablet_rating'])->name('delete_rating.tablet');
		// end tablet ratings
		});//end Tablet =======================================

		
	});

	// ======= End Products ========

		

	});
});