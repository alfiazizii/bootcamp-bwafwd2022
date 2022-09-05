<?php

namespace App\Http\Requests\DetailUser;

use App\Model\ManagementAccess\DetailUser;
// use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

use Illuminate\Validation\Rule;

class UpdateDetailUserRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => [
                'required', 'integer',
            ],
            'type_user_id' => [
                'required', 'integer',
            ],
            'contact' => [
                'required', 'string', 'max:255',
            ],
            'address' => [
                'required', 'string', 'max:255',
            ],
            'photo' => [
                'nullable', 'string', 'max:10000',
            ],
            'gender' => [
                'required', Rule::in([1,2]),
            ],
        ];
    }
}
