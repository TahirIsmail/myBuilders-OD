<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return ['job_information.jobHeadline' => 'required|string|max:255',
        'job_information.postcode' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'job_information.JobQuestionAnswer' => 'required|array|min:1',
        'job_information.JobQuestionAnswer.*.id' => 'required|integer',
        'job_information.JobQuestionAnswer.*.question_id' => 'required|integer',
        'job_information.JobQuestionAnswer.*.answer' => 'required|string|max:255',
        'job_information.JobQuestionAnswer.*.type' => 'nullable|string|max:255',
        'job_information.JobQuestionAnswer.*.slug' => 'required|string|max:255',
        'job_information.JobQuestionAnswer.*.leads_to_question_id' => 'required|integer',
        'job_information.SelectedCategory' => 'required|array',
        'job_information.SelectedCategory.id' => 'required|integer',
        'job_information.SelectedCategory.name' => 'required|string|max:255',
        'job_information.JobDescription' => 'required|string',
        'user_type' => 'required|string',
        'fullName' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'newsletter' => 'required|boolean',
        'terms' => 'required|boolean',
    ];
    }
}
