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
        return ['jobHeadline' => 'required|string|max:255',
        'postcode' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'JobQuestionAnswer' => 'required|array|min:1',
        'JobQuestionAnswer.*.id' => 'required|integer',
        'JobQuestionAnswer.*.question_id' => 'required|integer',
        'JobQuestionAnswer.*.answer' => 'required|string|max:255',
        'JobQuestionAnswer.*.type' => 'nullable|string|max:255',
        'JobQuestionAnswer.*.slug' => 'required|string|max:255',
        'JobQuestionAnswer.*.leads_to_question_id' => 'required|integer',
        'SelectedCategory' => 'required|array',
        'SelectedCategory.id' => 'required|integer',
        'SelectedCategory.name' => 'required|string|max:255',
        'SelectedCategory.parent_id' => 'required|integer',
        'SelectedCategory.photo' => 'nullable|string|max:255',
        'SelectedCategory.slug' => 'required|string|max:255',
        'SelectedCategory.created_at' => 'required|date',
        'SelectedCategory.updated_at' => 'required|date',
        'SelectedCategory.deleted_at' => 'nullable|date',
        'SelectedCategory.firstquestion' => 'required|array',
        'SelectedCategory.firstquestion.id' => 'required|integer',
        'SelectedCategory.firstquestion.job_category_id' => 'required|integer',
        'SelectedCategory.firstquestion.question' => 'required|string|max:255',
        'SelectedCategory.firstquestion.slug' => 'required|string|max:255',
        'SelectedCategory.firstquestion.created_at' => 'required|date',
        'SelectedCategory.firstquestion.updated_at' => 'required|date',
        'SelectedCategory.firstquestion.answers' => 'required|array|min:1',
        'setJobDescription' => 'required|string',
        'fullName' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'newsletter' => 'required|boolean',
        'terms' => 'required|boolean',
    ];
    }
}
