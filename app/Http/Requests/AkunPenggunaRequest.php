<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class AkunPenggunaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
			'hak_akses.required' => ':attribute belum dipilih',
		];
	}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		if($this->isMethod('post')){
			return [
          	  	'nama_depan' => 'required',
				'nama_belakang' => 'required',
				'username' => 'required|alpha_dash|unique:users',
				'email' => 'required|unique:users',
				'password' => ['required', Password::min(8)->letters()
					->mixedCase()->numbers()->symbols()
				],
				'hak_akses' => 'required'
     		];
		}else {
			return [
            		'nama_depan' => 'required',
				'nama_belakang' => 'required',
				'username' => 'required|alpha_dash|unique:users,id,'. $this->id,
				'email' => 'required|unique:users,id,'. $this->id,
				'password' => ['nullable', Password::min(8)->letters()
					->mixedCase()->numbers()->symbols()
				],
				'hak_akses' => 'required'
     		];
		}
        
    }
}
