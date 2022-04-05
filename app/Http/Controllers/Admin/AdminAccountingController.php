<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accounting;
use Illuminate\Http\Request;

class AdminAccountingController extends Controller
{
    public function package()
    {
        $packages=Accounting::all()->where('category','پکیج');
      return view('admin.pages.accounting.package')->with('packages',$packages);
    }

    public function paid()
    {
        $accounts=Accounting::all()->whereNotIn('category','پکیج')->where('condition','1');
        return view('admin.pages.accounting.paid_items')->with('accounts',$accounts);
    }

    public function unpaid()
    {
        $accounts=Accounting::all()->whereNotIn('category','پکیج')->where('condition','0');
        return view('admin.pages.accounting.unpaid_item')->with('accounts',$accounts);
    }
}
