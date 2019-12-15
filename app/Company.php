<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['company_name', 'company_short_name', 'company_product', 'city_id', 'district_name', 'industry_park', 'company_tax', 'company_nationality', 'company_field', 'industry_id', 'company_operation_year', 'company_personnel_scale'];
    public $timestamps = false;
}
