<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Permission;
use App\Admin;
use App\Vendor;
use App\Customer;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class PermissionsController extends Controller{

    public function check($admin_id) {
        return Permission::where("admin_id", $admin_id)->first();
     }
   
}
