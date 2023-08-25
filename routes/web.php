<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelTypeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\HotelAmenitiesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomBookingController;
use App\Http\Controllers\BookingStatusController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\BookingMemberController;
use App\Http\Controllers\HotelAccountController;
use App\Http\Controllers\HotelAllBookingController;
use App\Http\Controllers\HotelAuthenticationController;
use App\Http\Controllers\HotelBookingMemberController;
use App\Http\Controllers\HotelBookingStatusController;
use App\Http\Controllers\HotelMediaController;
use App\Http\Controllers\HotelOfferController;
use App\Http\Controllers\HotelReviewController;
use App\Http\Controllers\HotelRoomBookingController;
use App\Http\Controllers\HotelRoomController;
use App\Http\Controllers\HotelsAmenitiesController;
use App\Http\Controllers\UserHotelController;
use App\Http\Controllers\UserRoomController;
use App\Http\Controllers\UserHomeController;
use App\Http\Middleware\AdminLogin;
use App\Http\Middleware\HotelLogin;
use App\Models\Room;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::post('/checkLogin', [AuthenticationController::class, 'checkLogin']);
Route::get('/forgotPwd', [AuthenticationController::class, 'forgotPwd']);
Route::post('/checkEmail', [AuthenticationController::class, 'checkEmail']);

Route::middleware([AdminLogin::class])->group(function (){

// master
Route::get('/admin/dashboard',[AuthenticationController::class,'dashboard']);

// profile
Route::get('/admin/myProfile',[AuthenticationController::class,'myProfile']);
Route::get('/admin/editProfile',[AuthenticationController::class,'editProfile']);
Route::post('/admin/updateProfile',[AuthenticationController::class,'updateProfile']);

// Authentication
Route::get('/admin/changepwd',[AuthenticationController::class,'changepwd']);
Route::post('/admin/updatepwd',[AuthenticationController::class,'updatepwd']);

// Hotels
Route::get('/admin/addHotel',[HotelController::class,'addHotel']);
Route::get('/admin/viewHotel',[HotelController::class,'viewHotel']);
Route::get('/admin/viewmoreHotel/{id}',[HotelController::class,'viewmoreHotel']);
Route::get('/admin/viewHotelReport/{id}',[HotelController::class,'viewHotelReport']);
Route::post('/admin/insertHotel',[HotelController::class,'insertHotel']);
Route::get('/admin/editHotel/{id}',[HotelController::class,'editHotel']);
Route::post('/admin/updateHotel',[HotelController::class,'updateHotel']);
Route::POST('/admin/deleteHotel',[HotelController::class,'deleteHotel']);
Route::get('admin/hotelIsApprove/{id}/{status}',[HotelController::class,'hotelIsApprove']);
Route::get('admin/hotelIsBlock/{id}/{status}',[HotelController::class,'hotelIsBlock']);


// hotel type
Route::get('/admin/viewHotelType',[HotelTypeController::class,'viewHotelType']);
Route::get('/admin/addHotelType',[HotelTypeController::class,'addHotelType']);
Route::POST('/admin/insertHotelType',[HotelTypeController::class,'insertHotelType']);
Route::POST('/admin/deleteHotelType',[HotelTypeController::class,'deleteHotelType']);
Route::get('/admin/editHotelType/{id}',[HotelTypeController::class,'editHotelType']);
Route::POST('/admin/updateHotelType',[HotelTypeController::class,'updateHotelType']);
Route::get('/admin/hotelTypeIsBlock/{id}/{status}',[HotelTypeController::class,'hotelTypeIsBlock']);

// State
Route::get('/admin/viewState',[StateController::class,'viewState']);
Route::get('/admin/addState',[StateController::class,'addState']);
Route::POST('/admin/insertState',[StateController::class,'insertState']);
Route::get('/admin/editState/{id}',[StateController::class,'editState']);
Route::POST('/admin/deleteState',[StateController::class,'deleteState']);
Route::POST('/admin/updateState',[StateController::class,'updateState']);

// city
Route::get('/admin/viewCity',[CityController::class,'viewCity']);
Route::get('/admin/addCity',[CityController::class,'addCity']);
Route::POST('/admin/insertCity',[CityController::class,'insertCity']);
Route::get('/admin/editCity/{id}',[CityController::class,'editCity']);
Route::POST('/admin/deleteCity',[CityController::class,'deleteCity']);
Route::post('/admin/updateCity',[CityController::class,'updateCity']);

// Amenities
Route::get('/admin/viewAmenities',[AmenitiesController::class,'viewAmenities']);
Route::get('/admin/addAmenities',[AmenitiesController::class,'addAmenities']);
Route::POST('/admin/insertAmenities',[AmenitiesController::class,'insertAmenities']);
Route::post('/admin/deleteAmenities',[AmenitiesController::class,'deleteAmenities']);
Route::get('/admin/editAmenities/{id}',[AmenitiesController::class,'editAmenities']);
Route::get('/admin/amenitiesIsBlock/{id}/{status}',[AmenitiesController::class,'amenitiesIsBlock']);
Route::post('/admin/updateAmenities',[AmenitiesController::class,'updateAmenities']);

// Membership
Route::get('/admin/viewMembership',[MembershipController::class,'viewMembership']);
Route::get('/admin/addMembership',[MembershipController::class,'addMembership']);
Route::POST('/admin/insertMembership',[MembershipController::class,'insertMembership']);


// Media
Route::get('/admin/viewMedia',[MediaController::class,'viewMedia']);
Route::get('/admin/viewmoreHotelMedia/{id}',[MediaController::class,'viewmoreHotelMedia']);
Route::get('/admin/viewmoreRoomMedia/{id}',[MediaController::class,'viewmoreRoomMedia']);

Route::get('/admin/addMedia',[MediaController::class,'addMedia']);
Route::post('/admin/insertMedia',[MediaController::class,'insertMedia']);
Route::get('/admin/editMedia/{id}',[MediaController::class,'editMedia']);
Route::post('/admin/updateMedia',[MediaController::class,'updateMedia']);
Route::post('/admin/deleteMidea',[MediaController::class,'deleteMidea']);

// Hotel Amenities
Route::get('/admin/viewHotelAmenities',[HotelAmenitiesController::class,'viewHotelAmenities']);
Route::get('/admin/viewmoreHotelAmenities/{id}',[HotelAmenitiesController::class,'viewmoreHotelAmenities']);

// Rooms
Route::get('/admin/viewRoom',[RoomController::class,'viewRoom']);
Route::get('/admin/viewmoreRoom/{id}',[RoomController::class,'viewmoreRoom']);

// Places
Route::get('/admin/viewPlace',[PlaceController::class,'viewPlace']);
Route::get('/admin/viewmorePlace/{id}',[PlaceController::class,'viewmorePlace']);
Route::get('/admin/addPlace',[PlaceController::class,'addPlace']);
Route::POST('/admin/insertPlace',[PlaceController::class,'insertPlace']);
Route::POST('/admin/deletePlace',[PlaceController::class,'deletePlace']);
Route::get('/admin/editPlace/{id}',[PlaceController::class,'editPlace']);
Route::post('/admin/updatePlace',[PlaceController::class,'updatePlace']);

// User
Route::get('/admin/viewUser',[UserController::class,'viewUser']);
Route::get('admin/userIsVerified/{id}/{status}',[UserController::class,'userIsVerified']);

// All Bookings
Route::get('/admin/viewBooking',[BookingController::class,'viewBooking']);
Route::get('/admin/viewmoreBooking/{id}',[BookingController::class,'viewmoreBooking']);


// Room Bookings
Route::get('/admin/viewRoomBooking',[RoomBookingController::class,'viewRoomBooking']);

// Booking Status
Route::get('/admin/viewStatus',[BookingStatusController::class,'viewStatus']);
Route::get('/admin/bookingIscomplete/{id}/{status}',[BookingStatusController::class,'bookingIscomplete']);

// Booking Member
Route::get('/admin/viewBookingMember',[BookingMemberController::class,'viewBookingMember']);

// utility
// offers
Route::get('/admin/viewOffer',[OfferController::class,'viewOffer']);
Route::get('/admin/viewmoreOffer/{id}',[OfferController::class,'viewmoreOffer']);
Route::get('/admin/addOffer',[OfferController::class,'addOffer']);
Route::POST('/admin/insertOffer',[OfferController::class,'insertOffer']);
Route::POST('/admin/deleteOffer',[OfferController::class,'deleteOffer']);
Route::get('/admin/editOffer/{id}',[OfferController::class,'editOffer']);
Route::post('/admin/updateOffer',[OfferController::class,'updateOffer']);
Route::get('admin/offerIsActive/{id}/{status}',[OfferController::class,'offerIsActive']);
Route::get('admin/offerIsExpire/{id}/{status}',[OfferController::class,'offerIsExpire']);

// Ratting & Review
Route::get('/admin/viewReview',[ReviewController::class,'viewReview']);
Route::get('admin/reviewIsDisplay/{id}/{status}',[ReviewController::class,'reviewIsDisplay']);

// Feedback
Route::get('/admin/viewFeedback',[FeedbackController::class,'viewFeedback']);

// Complain
Route::get('/admin/viewComplain',[ComplainController::class,'viewComplain']);

// subscriber
Route::get('/admin/viewSubscriber',[SubscriberController::class,'viewSubscriber']);

// contactUs
Route::get('/admin/viewContactUs',[ContactUsController::class,'viewContactUs']);

// News
Route::get('/admin/viewNews',[NewsController::class,'viewNews']);
Route::get('/admin/viewmoreNews/{id}',[NewsController::class,'viewmoreNews']);
Route::get('/admin/addNews',[NewsController::class,'addNews']);
Route::post('/admin/insertNews',[NewsController::class,'insertNews']);
Route::post('/admin/deleteNews',[NewsController::class,'deleteNews']);
Route::get('/admin/editNews/{id}',[NewsController::class,'editNews']);
Route::post('/admin/updateNews',[NewsController::class,'updateNews']);
Route::get('admin/newsIsActive/{id}/{status}',[NewsController::class,'newsIsActive']);

// All Articles
Route::get('/admin/viewArticles',[ArticlesController::class,'viewArticles']);
Route::get('/admin/viewmoreArticles/{id}',[ArticlesController::class,'viewmoreArticles']);
Route::get('admin/articlesIsApprove/{id}/{status}',[ArticlesController::class,'articlesIsApprove']);

// Comments
Route::get('/admin/viewComment',[CommentController::class,'viewComment']);
Route::get('admin/commentIsDisplay/{id}/{status}',[CommentController::class,'commentIsDisplay']);

// Likes
Route::get('/admin/viewLike',[LikeController::class,'viewLike']);

// reports
Route::get('/admin/viewReport',[ReportController::class,'viewReport']);

// Coins
Route::get('/admin/viewCoin',[CoinController::class,'viewCoin']);

// Wallet
Route::get('/admin/viewWallet',[WalletController::class,'viewWallet']);

});

// 
// front end
// user
// Route::middleware([UserLogin::class])->group(function (){
// });
// user login
Route::get('/user/login',[UserLoginController::class,'login']);
Route::post('/user/checkLogin', [UserLoginController::class, 'checkLogin']);
Route::post('/user/register', [UserLoginController::class, 'register']);
Route::get('/user/otpVerify', [UserLoginController::class, 'otpVerify']);
Route::post('/user/checkotp', [UserLoginController::class, 'checkotp']);
Route::get('/userlogout',[UserLoginController::class,'userlogout']);
Route::get('/user/error',[UserLoginController::class,'error']);

// forgot Password
Route::get('/user/forgotPwd',[UserLoginController::class,'forgotPwd']);
Route::post('/user/checkMail',[UserLoginController::class,'checkMail']);
Route::get('/user/forgotOtp',[UserLoginController::class,'forgotOtp']);
Route::post('/user/ForgotOTPVerify',[UserLoginController::class,'ForgotOTPVerify']);
Route::get('/user/newPassword',[UserLoginController::class,'newPassword']);
Route::post('/user/updatePassword',[UserLoginController::class,'updatePassword']);


// user
Route::get('/user/masterPage',[AboutController::class,'masterPage']);

// home
Route::get('/user/home',[UserHomeController::class,'home']);


// About
Route::get('/user/about',[AboutController::class,'about']);

// hotels
Route::get('/user/viewHotel',[UserHotelController::class,'viewHotel']);
Route::post('/user/viewHotelSearch',[UserHotelController::class,'viewHotelSearch']);
Route::get('/user/hotelDetails/{id}',[UserHotelController::class,'hotelDetails']);

// Rooms
Route::get('/user/room',[UserRoomController::class,'room']);
Route::get('/user/roomDetails/{id}',[UserRoomController::class,'roomDetails']);
Route::post('/user/addreview',[UserRoomController::class,'addreview']);

// place
Route::get('/user/viewPlace',[UserPlaceController::class,'viewPlace']);
Route::get('/user/placeDetails/{id}',[UserPlaceController::class,'placeDetails']);


// Articles
Route::get('/user/articles',[UserArticlesController::class,'articles']);
Route::get('/user/articlesDetaile/{id}',[UserArticlesController::class,'articlesDetaile']);
Route::post('/user/addComment',[UserArticlesController::class,'addComment']);
Route::get('/user/addLike/{id}',[UserArticlesController::class,'addLike']);
Route::post('/user/addArticle',[UserArticlesController::class,'addArticle']);

// offers
Route::get('/user/offer',[UserOfferController::class,'offer']);

// amenities
Route::get('/user/amenitiesDetails/{id}',[UserAmenitiesController::class,'amenitiesDetails']);

// Map
Route::get('/user/map',[UserMapController::class,'viewMap']);

// News
Route::get('/user/news',[UserNewsController::class,'news']);

// feedback
Route::get('/user/feedback',[UserFeedbackController::class,'feedback']);
Route::post('/user/insertfeedback',[UserFeedbackController::class,'insertfeedback']);

// contact us
Route::get('/user/ContactUS',[UserContactUsController::class,'ContactUS']);
Route::post('/user/addContactUS',[UserContactUsController::class,'addContactUS']);

// subcribe
Route::post('/user/addSubcribe',[UserHomeController::class,'addSubcribe']);

// User Booking
Route::get('/user/bookingForm/{id}',[UserBookingController::class,'bookingForm']);
Route::post('/checkcoupon',[UserBookingController::class,'checkcoupon']);
Route::get('/user/bookingDetails',[UserBookingController::class,'bookingDetails']);
Route::get('/user/viewInvoice/{id}',[UserBookingController::class,'viewInvoice']);
// member
Route::get('/user/addMember/{id}',[UserBookingController::class,'addMember']);
Route::POST('/user/addMemberDetails',[UserBookingController::class,'addMemberDetails']);

// User Detail
Route::get('/user/viewBooking',[UserDetailsController::class,'viewBooking']);
Route::get('/user/viewMorebooking/{id}',[UserDetailsController::class,'viewMorebooking']);
Route::get('/user/myAccount',[UserDetailsController::class,'myAccount']);
Route::get('/user/editAccount',[UserDetailsController::class,'editAccount']);
Route::get('/user/myMembership',[UserDetailsController::class,'myMembership']);
Route::post('/user/updateAccount',[UserDetailsController::class,'updateAccount']);
Route::get('/user/myArticle',[UserDetailsController::class,'myArticle']);
Route::get('/user/bookingCancel/{id}/{status}',[UserDetailsController::class,'bookingCancel']);

Route::get('/user/myCoins',[UserDetailsController::class,'myCoins']);
Route::get('/user/redeemCoin',[UserDetailsController::class,'redeemCoin']);

Route::get('/user/myWallet',[UserDetailsController::class,'myWallet']);

// membership
Route::get('/user/addMembership',[UserMembershipController::class,'addMembership']);
Route::get('/user/insertMembership',[UserMembershipController::class,'insertMembership']);



// 
// Hotel Panel
// 

// Hotel Login 
Route::get('/login',[HotelAuthenticationController::class,'login']);
Route::get('/hotellogout',[HotelAuthenticationController::class,'logout']);
Route::post('/hotelLogin',[HotelAuthenticationController::class,'hotelLogin']);


Route::middleware([HotelLogin::class])->group(function (){
// Authentication
Route::get('/hotel/changepwd',[HotelAuthenticationController::class,'changepwd']);
Route::post('/hotel/updatepwd',[HotelAuthenticationController::class,'updatepwd']);

// Hotel MasterPage
Route::get('/hotel/masterPage',[AboutController::class,'hotelMasterPage']);

// Hotel Dashboard
Route::get('/hotel/hotelDashboard',[HotelAuthenticationController::class,'hotelDashboard']);

// Room
// Hotel Room
Route::get('/hotel/viewRoom',[HotelRoomController::class,'viewRoom']);
Route::get('/hotel/addRoom',[HotelRoomController::class,'addRoom']);
Route::post('/hotel/insertRoom',[HotelRoomController::class,'insertRoom']);
Route::get('/hotel/editRoom/{id}',[HotelRoomController::class,'editRoom']);
Route::post('/hotel/updateRoom',[HotelRoomController::class,'updateRoom']);
Route::post('/hotel/deleteRoom',[HotelRoomController::class,'deleteRoom']);
Route::get('hotel/roomIsBook/{id}/{status}',[HotelRoomController::class,'roomIsBook']);


// Media
Route::get('/hotel/viewMedia',[HotelMediaController::class,'viewMedia']);
Route::get('/hotel/addMedia',[HotelMediaController::class,'addMedia']);
Route::post('/hotel/insertMedia',[HotelMediaController::class,'insertMedia']);
Route::get('/hotel/editMedia/{id}',[HotelMediaController::class,'editMedia']);
Route::post('/hotel/updateMedia',[HotelMediaController::class,'updateMedia']);
Route::POST('/hotel/deleteMidea',[HotelMediaController::class,'deleteMidea']);

// Amenities
Route::get('/hotel/viewAmenities',[HotelsAmenitiesController::class,'viewAmenities']);
Route::get('/hotel/addAmenities',[HotelsAmenitiesController::class,'addAmenities']);
Route::post('/hotel/insertAmenities',[HotelsAmenitiesController::class,'insertAmenities']);
Route::get('/hotel/editAmenities/{id}',[HotelsAmenitiesController::class,'editAmenities']);
Route::post('/hotel/updateAmenities',[HotelsAmenitiesController::class,'updateAmenities']);
Route::post('/hotel/deleteAmenities',[HotelsAmenitiesController::class,'deleteAmenities']);

// Booking
// All Booking
Route::get('/hotel/viewBooking',[HotelAllBookingController::class,'viewBooking']);
Route::get('/hotel/viewmoreBooking/{id}',[HotelAllBookingController::class,'viewmoreBooking']);

//  Room Bookings
Route::get('/hotel/viewRoomBooking',[HotelRoomBookingController::class,'viewRoomBooking']);

// Booking Status
Route::get('/hotel/viewStatus',[HotelBookingStatusController::class,'viewStatus']);

// Booking Member
Route::get('/hotel/viewBookingMember',[HotelBookingMemberController::class,'viewBookingMember']);

// offer
Route::get('/hotel/viewOffer',[HotelOfferController::class,'viewOffer']);

// Ratting & Review
Route::get('/hotel/viewReview',[HotelReviewController::class,'viewReview']);

// Account
Route::get('/hotel/viewAccount',[HotelAccountController::class,'viewAccount']);

});