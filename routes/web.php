<?php
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

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SdashboardController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\VehicleAssignmentController;
use App\Http\Controllers\VehicleMeterHistoryController;
use App\Http\Controllers\ChargingHistoryController;
use App\Http\Controllers\FuelHistoryController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverHistoryController;
use App\Http\Controllers\ServiceEntryController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\WorkTicketController;
use App\Models\User;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectionItemController;
use App\Http\Controllers\ReportController;



Route::get('signin',            [CustomAuthController::class, 'index'])->name('signin');
Route::post('custom-login',     [CustomAuthController::class, 'customSignin'])->name('signin.custom');
Route::get('register',          [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-register',  [CustomAuthController::class, 'customRegister'])->name('register.custom');


Route::get('signout',           [CustomAuthController::class, 'signOut'])->name('signout');




Route::get('/', function () {
     Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return view('login');
})->name('login');
Route::get('/login', function () {
     Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return view('login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::resource('vehicles', VehicleController::class);
    Route::resource('assignments', VehicleAssignmentController::class);
    Route::resource('meter-histories', VehicleMeterHistoryController::class);
    Route::resource('expenses', ExpensesController::class);
    Route::resource('fuel_histories', FuelHistoryController::class);
    Route::resource('charging_histories', ChargingHistoryController::class);
    Route::resource('issues', IssuesController::class);
    Route::prefix('driver-history')->group(function () {
        Route::get('/', [DriverHistoryController::class, 'index'])->name('driver-history.index');
        Route::get('/{driver}', [DriverHistoryController::class, 'show'])->name('driver-history.show');
    });
    Route::resource('services', ServiceEntryController::class);
    Route::get('services/issues/{vehicleId}', [ServiceEntryController::class, 'getIssues']);
    Route::resource('work_orders', WorkOrderController::class);
    Route::resource('work_tickets', WorkTicketController::class);
    Route::post('/work_tickets/{ticket}/approve', [WorkTicketController::class, 'approve'])->name('work_tickets.approve');
    Route::post('/work_tickets/{ticket}/reject', [WorkTicketController::class, 'reject'])->name('work_tickets.reject');
    Route::get('/work_tickets/{ticket}/download', [WorkTicketController::class, 'download'])
    ->name('work_tickets.download');
    Route::resource('inspections', InspectionController::class);
    Route::get('/failures', [InspectionItemController::class, 'failures'])
        ->name('failures');
    Route::get('/schedules', [InspectionController::class, 'schedules'])
        ->name('schedules');
    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('reports.index');
        Route::get('/vehicles', [ReportController::class, 'vehicles'])->name('reports.vehicles');
        Route::get('/drivers', [ReportController::class, 'drivers'])->name('reports.drivers');
        Route::get('/vehicle-assignments', [ReportController::class, 'vehicleAssignments'])->name('reports.vehicle_assignments');
        Route::get('/inspections', [ReportController::class, 'inspections'])->name('reports.inspections');
        Route::get('/inspections/failures', [ReportController::class, 'inspectionsFailures'])->name('reports.inspections_failures');
        Route::get('/issues', [ReportController::class, 'issues'])->name('reports.issues');
        Route::get('/service', [ReportController::class, 'service'])->name('reports.service');
        Route::get('/work-orders', [ReportController::class, 'workOrders'])->name('reports.work_orders');
        Route::get('/work-orders/vehicle', [ReportController::class, 'workOrdersByVehicle'])->name('reports.work_orders_vehicle');
        Route::get('/fuel', [ReportController::class, 'fuel'])->name('reports.fuel');
    });

    Route::get('index/', [DashboardController::class, 'index'])->name('index.index');


    Route::prefix('transport')->group(function () {
        // Routes Management
        Route::get('/routes', [TransportController::class, 'index'])->name('transport');
        Route::post('/routes', [TransportController::class, 'storeRoute'])->name('transport.routes.store');
        Route::get('/routes/{id}/edit', [TransportController::class, 'editRoute'])->name('transport.routes.edit');
        Route::put('/routes/{id}', [TransportController::class, 'updateRoute'])->name('transport.routes.update');
        Route::delete('/routes/{id}', [TransportController::class, 'destroyRoute'])->name('transport.routes.destroy');

        Route::get('/transport/dashboard-counters', [TransportController::class, 'getDashboardCounters'])->name('transport.dashboard.counters');
        Route::get('/transport/initial-data', [TransportController::class, 'getInitialData'])->name('transport.initial.data');

       // Vehicles Management
        Route::post('/vehicles', [TransportController::class, 'storeVehicle'])->name('transport.vehicles.store');
        Route::get('/vehicles/{id}/edit', [TransportController::class, 'editVehicle'])->name('transport.vehicles.edit');
        Route::put('/vehicles/{id}', [TransportController::class, 'updateVehicle'])->name('transport.vehicles.update');
        Route::delete('/vehicles/{id}', [TransportController::class, 'destroyVehicle'])->name('transport.vehicles.destroy');

        // Driver Assignments
        Route::get('/vehicles/{vehicleId}/driver', [TransportController::class, 'getDriver'])->name('transport.driver.get');
        Route::post('/drivers', [TransportController::class, 'assignDriver'])->name('transport.driver.assign');

        // Student Transport
        Route::post('/students', [TransportController::class, 'storeStudentTransport'])->name('transport.students.store');
        Route::get('/students/{id}/edit', [TransportController::class, 'editStudentTransport'])->name('transport.students.edit');
        Route::put('/students/{id}', [TransportController::class, 'updateStudentTransport'])->name('transport.students.update');
        Route::delete('/students/{id}', [TransportController::class, 'destroyStudentTransport'])->name('transport.students.destroy');

        // Payments
        Route::get('/students/{id}/payment', [TransportController::class, 'getPaymentInfo'])->name('transport.payment.info');
        Route::post('/students/{id}/payment', [TransportController::class, 'recordPayment'])->name('transport.payment.record');

        // ✅ Updated Attendance Routes
        Route::get('/attendance', [TransportController::class, 'getAttendance'])->name('transport.attendance.get');
        Route::post('/attendance', [TransportController::class, 'saveAttendance'])->name('transport.attendance.save');
        Route::put('/attendance/{id}', [TransportController::class, 'updateAttendance'])->name('transport.attendance.update');

        // Reports
        Route::get('/reports', [TransportController::class, 'generateReport'])->name('transport.reports');
        Route::get('/reports-search', [TransportController::class, 'report'])->name('transport.reports.search');
        Route::get('/reports/export', [TransportController::class, 'exportReport'])->name('transport.reports.export');
    });


    Route::get('/general-settings', function () {
        return view('general-settings');
    })->name('general-settings');

    Route::get('/department-grid', [DepartmentController::class, 'index'])->name('department-grid');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::put('/department/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::post('/department/delete', [DepartmentController::class, 'destroy'])->name('department.delete');

    Route::get('/shift', [ShiftController::class, 'index'])->name('shift');
    Route::post('/shift/store', [ShiftController::class, 'store'])->name('shift.store');
    Route::put('/shift/update', [ShiftController::class, 'update'])->name('shift.update');
    Route::post('/shift/delete', [ShiftController::class, 'destroy'])->name('shift.delete');

    Route::resource('drivers', DriverController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/delete', [UserController::class, 'destroy'])->name('users.delete');
        Route::post('/users/upgrade', [UserController::class, 'upgrade'])->name('users.upgrade');


    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');



    Route::get('/roles-permissions', [RoleController::class, 'index'])->name('roles-permissions');
    Route::post('/roles-permissions', [RoleController::class, 'store'])->name('roles-permissions.store');
    Route::delete('/roles-permissions/{id}', [RoleController::class, 'destroy'])->name('roles-permissions.destroy');
    Route::patch('/roles-permissions/{id}/toggle', [RoleController::class, 'toggleStatus'])->name('roles-permissions.toggle');
    Route::delete('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');
    Route::post('/permissions/set-role', [PermissionController::class, 'setRole'])->name('permissions.setRole');
    Route::put('/roles-permissions/{role}', [PermissionController::class, 'update'])->name('roles.permissions.update');










});

Route::get('/under-maintenance', function () {
    $userId = session('force_update_user');

    $user = $userId ? User::find($userId) : null;

    return view('under-maintenance', compact('user'));
})->name('under-maintenance');
Route::post('/under-maintenance', [CustomAuthController::class, 'updateCredentials'])->name('update.credentials');

Route::get('/register-2', function () {
    return view('register-2');
})->name('register-2');

Route::get('/php', function () {
    return view('php');
})->name('php');
