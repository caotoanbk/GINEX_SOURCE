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
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'company_name' => 'required',
            'company_short_name' => 'required',
            'city_id' => 'required',
            'district_name' => 'required',
            'industry_park' => 'required',
            'company_nationality' => 'required',
            'company_field' => 'required',
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
            'company_name' => $data['company_name'],
            'company_short_name' => $data['company_short_name'],
            'company_product' => $data['company_product'],
            'city_id' => $data['city_id'],
            'district_name' => $data['district_name'],
            'industry_park' => $data['industry_park'],
            'company_tax' => $data['company_tax'],
            'company_nationality' => $data['company_nationality'],
            'company_field' => $data['company_field'],
            'industry_id' => $data['industry_id'],
            'company_operation_year' => $data['company_operation_year'],
            'company_personnel_scale' => $data['company_personnel_scale']
        ]);
        return User::create([
            'name' => $data['name'],
            'position' => $data['position'],
            'mobile' => $data['mobile'],
            'type' => 0,
            'company_id' => $company->id,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
