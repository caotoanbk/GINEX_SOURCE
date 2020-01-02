<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/ssurvey/salary';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function authenticated($request , $user){
        if($user->role=='admin'){
            return redirect()->route('admin.dashboard') ;
        }
        return redirect()->route('ssurvey.index') ;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'CompanyName' => 'required',
            'CompanyShortName' => 'required',
            'city_id' => 'required',
            'CompanyDistrictName' => 'required',
            'CompanyIndustryPark' => 'required',
            'country_id' => 'required',
            'CompanyField' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $company = Company::create([
            'CompanyName' => $data['CompanyName'],
            'CompanyShortName' => $data['CompanyShortName'],
            'CompanyProduct' => $data['CompanyProduct'],
            'city_id' => $data['city_id'],
            'CompanyDistrictName' => $data['CompanyDistrictName'],
            'CompanyIndustryPark' => $data['CompanyIndustryPark'],
            'CompanyTax' => $data['CompanyTax'],
            'country_id' => $data['country_id'],
            'CompanyField' => $data['CompanyField'],
            'industry_id' => $data['industry_id'],
            'namhd_id' => $data['namhd_id'],
            'scale_id' => $data['scale_id']
        ]);
        return User::create([
            'name' => $data['name'],
            'position' => $data['position'],
            'mobile' => $data['mobile'],
            'type' => 1,
            'company_id' => $company->id,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
