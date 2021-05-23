<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	/**
	* Determine if the user is authorized to make this request.
	*
	* @return bool
	*/
	public function authorize() {
		return true;
	}

	/**
	* Get the error messages for the defined validation rules.
	*
	* 
	@return array */
	
	public function messages() {
		return [ 
			'required' => ':attribute tidak boleh kosong.',
			'exists' => ':attribute ini tidak tersedia.',
		];
	}
	
	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules() {
		return [
			'email' => 'required|exists:users',
			'password' => ['required', Password::min(8)->letters()
				->mixedCase()->numbers()->symbols()
			],
		];
	}
}