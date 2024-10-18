<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreObatsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
                'id_obat' => 'required|string|max:255',
                'nama_obat' => 'required|string|max:255',
                'stok' => 'required|integer', // Perbaikan tipe dari 'text' ke 'integer'
                'jenis_obat' => 'required|string|max:255',
        ];
    }
}
