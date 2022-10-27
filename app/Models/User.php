<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class User{
	use HasFactory;

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public bool $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected array $fillable = [
		'email',
		'first_name',
		'last_name',
		'active',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected array $hidden = [];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected array $casts = [
	];
}
