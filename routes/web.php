<?php

use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\OtherTransactionController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\SalaryController;
use App\Http\Controllers\Web\TeacherController;

use App\Http\Controllers\Web\ClassController;
use App\Http\Controllers\Web\VideoController;

use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TutesAndBookController;
use App\Http\Controllers\Web\TimeTableController;
use App\Http\Controllers\Web\ClassPaperController;
use App\Http\Controllers\Web\StudentTalentController;
use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\OnlineExamController;
use App\Http\Controllers\Web\StudentAttendanceController;
use App\Http\Controllers\Web\NoteAndPaperController;
use App\Http\Controllers\Web\LearningManagementController;
use App\Http\Controllers\Web\ItemShopController;
use App\Http\Controllers\Web\AnalysisReportController;
use App\Http\Controllers\Web\TeacherSubjectController;
use App\Http\Controllers\Web\AuthController;
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



Route::get('/', [AuthController::class, 'loginView'])->name('web.index');
Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::post('/login', [AuthController::class, 'login'])->name('api.staffs.login');
// profile
Route::middleware(['check.authorization'])->group(function () {
Route::get('/home', [HomeController::class, 'index'])->name('web.home');
Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');



// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class-pending', [FeesController::class, 'feesClassPending'])->name('web.fees.class_pending');
Route::get('/fees/class-fees', [FeesController::class, 'classFees'])->name('web.fees.class_fess');

Route::get('/fees/cash', [FeesController::class, 'classFeesCash'])->name('web.fees.class_fess_cash');
Route::get('/fees/pos', [FeesController::class, 'classFeesPos'])->name('web.fees.class_fess_Pos');

Route::get('/fees/monthly-card-payment', [FeesController::class, 'classFeesMonthlyCardPayment'])->name('web.fees.class_fees_monthly_card_payment');
Route::get('/fees/card-payment', [FeesController::class, 'classFeesCardPayment'])->name('web.fees.class_fess_card_payment');
Route::get('/fees/error-payment', [FeesController::class, 'classFeesErrorPayment'])->name('web.fees.class_fess_error_payment');

Route::get('/fees/monthly-bank-payment', [FeesController::class, 'classFeesMonthlyBankPayment'])->name('web.fees.class_fees_monthly_bank_payment');
Route::get('/fees/bank-payment', [FeesController::class, 'classFeesBankPayment'])->name('web.fees.class_fess_bank_payment');

Route::get('/fees/payment-history', [FeesController::class, 'paymentHistory'])->name('web.fees.payment_history');



// OtherTransactionsController
Route::get('/other_transactions/view', [OtherTransactionController::class, 'View'])->name('web.other_transactions.view');
Route::get('/other_transactions/add-transaction',
[OtherTransactionController::class, 'addTransaction'])->name('web.other_transactions.add_transaction');
Route::get('/other_transactions/cash',
[OtherTransactionController::class, 'cash'])->name('web.other_transactions.cash');
Route::get('/other_transactions/all_payment',
[OtherTransactionController::class, 'allPayment'])->name('web.other_transactions.all_payment');



// LIVE CLASSES
Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view');


// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/student-lms', [VideoController::class, 'videoStudentLms'])->name('web.video.student_lms');
Route::get('/video/teacher-lms', [VideoController::class, 'videoTeacherLms'])->name('web.video.teacher_lms');
Route::get('/video/admin-lms', [VideoController::class, 'videoAdminLms'])->name('web.video.admin_lms');
Route::get('/video/super-admin-lms', [VideoController::class, 'videoSuperAdminLms'])->name('web.video.super_admin_lms');


// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');
Route::get('/birthday-list', [NoticeBoardController::class, 'birthdayList'])->name('web.notice.birthday_list');





// AuthController


Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('web.forgot_password');





// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');

// NoteAndPaperController
Route::get('/note-paper-ansewer', [NoteAndPaperController::class, 'notePaper'])->name('web.note-paper.ansewer');
Route::get('/note-paper-ansewer-list', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');


// Student Attendance ATTENDANCE

Route::get('/student-attendance', [StudentAttendanceController::class, 'studentAttendance'])->name('web.student.attendance');
 Route::get('/student-attendance-check',
  [StudentAttendanceController::class, 'studentAttendanceCheck'])->name('web.student_attendance.check');



// cash balance Controller
Route::get('/cash-balance', [SalaryController::class, 'cashBalance'])->name('web.salary.cash_balance');
Route::get('/my-salary', [SalaryController::class, 'mySalary'])->name('web.salary.my_salary');
Route::get('/salary-compare', [SalaryController::class, 'compareSalary'])->name('web.salary.compare_salary');
Route::get('/my-leaves', [SalaryController::class, 'myLeaves'])->name('web.salary.my_leaves');





// ItemShopController
Route::get('/item-shop-view', [ItemShopController::class, 'itemShopView'])->name('web.item-shop-view');
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');
Route::get('/single-item', [ItemShopController::class, 'singleItem'])->name('web.single-item');
Route::get('/order-history', [ItemShopController::class, 'orderHistory'])->name('web.order-history');
Route::get('/order-cart', [ItemShopController::class, 'orderCart'])->name('web.order-cart');


Route::get('/add-order', [ItemShopController::class, 'addOrder'])->name('web.add-order');
Route::get('/pending-items', [ItemShopController::class, 'pendingItems'])->name('web.pending-items');
Route::get('/pending-delivery', [ItemShopController::class, 'pendingDelivery'])->name('web.pending-delivery');
Route::get('/pending-pickUp', [ItemShopController::class, 'pendingPickUp'])->name('web.pending-pickUp');


Route::get('/pending-dispatched', [ItemShopController::class, 'pendingDispatched'])->name('web.pending-dispatched');
Route::get('/dispatched', [ItemShopController::class, 'dispatched'])->name('web.dispatched');
Route::get('/item-offers', [ItemShopController::class, 'itemOffers'])->name('web.items-offers');
Route::get('/add-items', [ItemShopController::class, 'addItems'])->name('web.add-items');
Route::get('/add-offers', [ItemShopController::class, 'addOffers'])->name('web.add-offers');

Route::get('/shop-payments', [ItemShopController::class, 'shopPayments'])->name('web.shop-payments');
Route::get('/view-analytics', [ItemShopController::class, 'viewAnalytics'])->name('web.view-analytics');




// STUDENT TALENTS
Route::get('/student-talents', [StudentTalentController::class, 'studentTalent'])->name('web.student.talents');
Route::get('/student-details', [StudentTalentController::class, 'studentDetails'])->name('web.student.details');
Route::get('/inactive-accounts', [StudentTalentController::class, 'inactiveAccounts'])->name('web.inactive.accounts');
Route::get('/non-paid-accounts', [StudentTalentController::class, 'nonPaidAccounts'])->name('web.non_paid.accounts');
Route::get('/scholarship-details', [StudentTalentController::class, 'scholarshipDetails'])->name('web.scholarship.details');
Route::get('/add-scholarship', [StudentTalentController::class, 'scholarshipAdd'])->name('web.scholarship.add');

Route::get('/rec-access', [StudentTalentController::class, 'recAccess'])->name('web.rec.access');
Route::get('/add-rec-access', [StudentTalentController::class, 'AddRecAccess'])->name('web.rec.add_rec');


// ADD CERTIFICATES AND TALENT VIDEOS


Route::get('/all_certificate', [StudentTalentController::class, 'allCertificate'])->name('web.certificate.all_certificate');

Route::get('/pending_certificate', [StudentTalentController::class, 'pendingCertificate'])->name('web.certificate.pending_certificate');
Route::get('/approved_certificate', [StudentTalentController::class, 'approvedCertificate'])->name('web.certificate.approved_certificate');
Route::get('/all_approved_certificate',
 [StudentTalentController::class, 'allApprovedCertificate'])->name('web.certificate.all_approved_certificate');
 Route::get('/subjectwise_videos', [StudentTalentController::class, 'subjectwiseVideos'])->name('web.certificate.subjectwise_videos');
 Route::get('/other_talent', [StudentTalentController::class, 'otherTalent'])->name('web.certificate.other_talent');
 Route::get('/all_other_talent',
  [StudentTalentController::class, 'allOtherTalent'])->name('web.certificate.all_other_talent');





// Teachers paper
Route::get('/teachers-section', [TeacherController::class, 'teachersSection'])->name('web.teachers.section');
Route::get('/class-issues', [TeacherController::class, 'classIssues'])->name('web.teachers.class_issues');
Route::get('/class-issues-view', [TeacherController::class, 'classIssuesView'])->name('web.teachers.class_issues_view');
Route::get('/video-issues', [TeacherController::class, 'videoIssues'])->name('web.teachers.video_issues');
Route::get('/video-view', [TeacherController::class, 'videoIssuesView'])->name('web.teachers.video_issues_view');
Route::get('/teacher-reviews', [TeacherController::class, 'teacherReviews'])->name('web.teachers.teacher_views');
Route::get('/class-video-report', [TeacherController::class, 'classAndVideoReport'])->name('web.teachers.class_video_report');
Route::get('/class-video-analysing', [TeacherController::class, 'classAndVideoAnalysing'])->name('web.teachers.class_video_analysing');
Route::get('/class-video-summery', [TeacherController::class, 'classAndVideoSummery'])->name('web.teachers.class_video_summery');
Route::get('/video-time-tables', [TeacherController::class, 'videoTimeTables'])->name('web.teachers.video_time_tables');
Route::get('/gradewise-time-tables', [TeacherController::class, 'gradewiseTimeTables'])->name('web.teachers.gradewise_time_tables');
Route::get('/teacher-payment', [TeacherController::class, 'teacherPayment'])->name('web.teachers.teacher_payment');
Route::get('/teacher-payment-view', [TeacherController::class, 'teacherPaymentView'])->name('web.teachers.teacher_payment_view');
Route::get('/payment-analysing', [TeacherController::class, 'paymentAnalysing'])->name('web.teachers.payment_analysing');
Route::get('/payment-analysing-graph', [TeacherController::class, 'paymentAnalysingGraph'])->name('web.teachers.payment_analysing_graph');
Route::get('/our-teacher', [TeacherController::class, 'ourTeacher'])->name('web.teachers.our_teacher');

Route::get('/schedule-class', [TeacherController::class, 'scheduleClass'])->name('web.teachers.schedule_class');
Route::get('/schedule-class-view', [TeacherController::class, 'scheduleClassView'])->name('web.teachers.schedule_class_view');

Route::get('/add-grade', [TeacherController::class, 'addGrade'])->name('web.teachers.add_grade');
Route::get('/add-subject', [TeacherController::class, 'addSubject'])->name('web.teachers.add_subject');

Route::post('/payment-approve', [FeesController::class, 'approve'])->name('approve');
Route::post('/payment-reject', [FeesController::class, 'reject'])->name('reject');
Route::post('/payment-add-remark', [FeesController::class, 'addRemark'])->name('addRemark');
Route::get('/payment-history', [FeesController::class, 'paymentHistory'])->name('paymentHistory');


Route::post('/payment-history-search', [FeesController::class, 'paymentHistorysearch'])->name('web.fees.history_fees');

});