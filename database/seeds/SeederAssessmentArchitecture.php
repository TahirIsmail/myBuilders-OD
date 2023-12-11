<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentArchitecture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::transaction(function () {
            $data = [
                [
                    'job_category_id' => 38,
                    'question' => 'MyBuilder wants to support and promote qualified Architects and Technologists. <b>If you want to receive leads for this category you must provide proof of registration with:</b><br> <ul><li>The Architects Registration Board (ARB)</li><li>The Chartered Institute of Architectural Technologists (CIAT)</li><li>The Royal Institute of British Architects (RIBA)</li></ul>',
                    'slug'     => 'mybuilder-wants-to-support-and-promote-qualified-architects-and-technologists.-<b>if-you-want-to-receive-leads-for-this-category-you-must-provide-proof-of-registration-with:</b><br> <ul><li>the-architects-registration-board-(arb)</li><li>the-chartered-institute-of-architectural-technologists-(ciat)</li><li>the-royal-institute-of-british-architects-(riba)</li></ul>',
                   
                ],


                [
                    'job_category_id' => 38,
                    'question' => 'If you are a registered architect please provide your name, company name and ARB number.<br>Alternatively, if you are a member of the Chartered Institute of Architectural Technologists (CIAT) please provide your business name and registered postcode.',
                    'slug'     => 'if-you-are-a-registered-architect-please-provide-your-name,-company-name-and-arb-number.<br>alternatively,-if-you-are-a-member-of-the-chartered-institute-of-architectural-technologists-(ciat)-please-provide-your-business-name-and-registered-postcode.',
                   
                ],





            ];
            foreach ($data as $item) {
                $question = AssessmentQuestion::create([
                    'job_category_id' => $item['job_category_id'],
                    'question' => $item['question'],
                    'slug' => $item['slug'],
                ]);
                if (isset($item['answers'])) {
                    foreach ($item['answers'] as $answer) {
                        AssessmentAnswer::create([
                            'question_id' => $question->id,
                            'answer' => $answer['answer'],
                            'slug' => $answer['slug']
                        ]);
                    }
                } else {
                    continue;
                }
            }
        });
    }
}
