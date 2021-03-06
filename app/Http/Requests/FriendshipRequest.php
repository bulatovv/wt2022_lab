<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FriendshipRequest extends FormRequest
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
                'required', 
                'exists:App\Models\User,id',
                function ($attribute, $value, $fail) {
                    if ($value == Auth::id()) {
                        $fail('The '.$attribute.' is invalid.');
                    }
                }
            ]
        ];
    }
}
