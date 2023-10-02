<?php

namespace App\Http\Requests;

use App\Rules\RecaptchaRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'user_type' => ['required', 'string'],
            'g-recaptcha-response' => [
                Rule::when(get_setting('google_recaptcha_activation_checkbox') == 1, ['required', new RecaptchaRule()], ['sometimes'])
            ],
            'condition' => ['required', 'string'],
        ];
    }

    /**
     * Get the validation messages of rules that applied to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'         => translate('Name field is required'),
            'name.string'           => translate('Name field must be string'),
            'name.max'              => translate('Name field Max 255 characters'),
            'email.required'        => translate('Email field is required'),
            'email.string'          => translate('Email field must be string'),
            'email.max'             => translate('Email field Max 255 characters'),
            'email.email'           => translate('Email field must be a valid email'),
            'user_type.required'    => translate('Must be selected a user type'),
            'condition.required'    => translate('You must agree to our terms and conditions.'),
        ];
    }
}
