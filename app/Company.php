<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['CompanyName', 'CompanyShortName', 'CompanyProduct', 'city_id', 'CompanyDistrictName', 'CompanyIndustryPark', 'CompanyTax', 'country_id', 'CompanyField', 'industry_id', 'namhd_id', 'scale_id'];
    public $timestamps = false;
}
