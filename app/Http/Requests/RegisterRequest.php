<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
			'unique' => ':attribute ini sudah ada.',
			'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
			'same' => ':attribute tidak cocok.',
		];
	}

	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules() {
		return [
			'nama_depan' => 'required',
			'nama_belakang' => 'required',
			'username' => 'required|alpha_dash|unique:users',
			'email' => 'required|unique:users',
			'password' => ['required', Password::min(8)->letters()
				->mixedCase()->numbers()->symbols()->uncompromised()
			],
			'konfirmasi_password' => 'required|same:password',
			'terms' => 'required'
		];
	}
}