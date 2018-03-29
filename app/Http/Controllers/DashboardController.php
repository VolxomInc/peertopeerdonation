<?php
namespace App\Http\Controllers;

use App\Http\Libraries\Utilities;
use App\Models\Commitment;
use App\Models\ProvideHelp;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    //sign up function which is dealing to register
    public function provideUserHelp()
    {
        $request = Input::all();
        $data['user_id'] = Auth::id();
        $data['amount'] = $request['amount-input'];
        $data['phone_number'] = $request->phone_number;
        $data['currency'] = $request->currency;
        $data['tigo_cash'] = $request->tigo_cash;
        $data['mobile_money_name'] = $request->mobile_money_name;
        $data['mobile_money_number'] = $request->mobile_money_number;
        $data['bitcoin_address'] = $request->bitcoin_address;
        $data['referrer_email'] = $request->referrer_email;
        $data['manager_email'] = $request->manager_email;
        $data['password'] = bcrypt($data['password']);
        $data['role_id'] = 3;
        $data['status'] = 0;

        $phelp = new ProvideHelp($data);
        $phelp->save();

        return redirect("/user-dashboard");
    }

    public function commitmentsPool() {
        $request = Input::all();
        $data['user_id'] = Auth::id();
        $data['amount'] = $request['amount-input'];

        $commitment = new Commitment($data);
        $commitment->save();

        return redirect("/user-dashboard");
    }
}
