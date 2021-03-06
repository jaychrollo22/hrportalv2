<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignHead extends Model
{
	protected $connection = "mysql";
	
    protected $fillable = [
    	'employee_id',
    	'employee_head_id',
    	'head_id'
	];
	
	public function approvers()
    {
        return $this->hasOne(AssignHead::class,'employee_id','employee_head_id')->whereIn('head_id',['3'])->select('employee_id','employee_head_id','head_id');
	}

	public function unders()
    {
        return $this->hasMany(AssignHead::class,'employee_head_id','employee_id')->where('head_id',3)->select('employee_id','employee_head_id','head_id');
    }

	public function approver_info()
    {
        return $this->belongsTo(Employee::class,'employee_head_id','id')->select('id','first_name','last_name','position','status');
    }
	
	public function employee_info()
    {
        return $this->hasOne(Employee::class,'id','employee_id')->select('id','first_name','last_name','position','status');
    }
}
