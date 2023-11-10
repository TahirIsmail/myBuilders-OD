<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
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
                    'question' => 'What type of service do you need?',
                    'slug' => 'what-type-of-service-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Basic outline plans (for quotes and planning application)',
                            'slug' => 'basic-outline-plans-for-quotes-and-planning-application'
                        ],
                        [
                            'answer' => 'Full regulation plans (for builders & building regs)',
                            'slug' => 'full-regulation-plans-for-builders-and-building-regs'
                        ],
                        [
                            'answer' => 'Structural calculations',
                            'slug' => 'structural-calculations'
                        ],
                        [
                            'answer' => 'I\'m not sure',
                            'slug' => 'im-not-sure'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 38,
                    'question' => 'What type of project are you planning?',
                    'slug' => 'what-type-of-project-are-you-planning',
                    'answers' => [
                        [
                            'answer' => 'Extension',
                            'slug' => 'extension'
                        ],
                        [
                            'answer' => 'Loft conversion',
                            'slug' => 'loft-conversion'
                        ],
                        [
                            'answer' => 'Renovation',
                            'slug' => 'renovation'
                        ],
                        [
                            'answer' => 'New build',
                            'slug' => 'new-build'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' => 'other'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 38,
                    'question' => 'Add a description to your job?',
                    'slug' => 'add-a-description-to-your-job',
                ]
                // Add more questions and answers here as needed
            ];

            foreach ($data as $item) {
                $question = Question::create([
                    'job_category_id' => $item['job_category_id'],
                    'question' => $item['question'],
                    'slug' => $item['slug'],
                ]);
                if(isset($item['answers'])){
                    foreach ($item['answers'] as $answer) {
                        Answer::create([
                            'question_id' => $question->id,
                            'answer' => $answer['answer'],
                            'slug' => $answer['slug']
                        ]);
                    }
                }
                else {
                    continue;
                }
                
            }
        });
    }
}
