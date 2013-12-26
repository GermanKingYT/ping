<?php

class CheckResult extends Eloquent
{
	protected $table = 'checks_results';

	protected $fillable = array(
		'check_id',
		'status_code',
		'rum',
		'success',
		'created_at',
	);
}