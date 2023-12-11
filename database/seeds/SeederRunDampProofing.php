<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunDampProofing  extends Seeder
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
                    'job_category_id' => 45,
                    'question' => 'Do you know what is causing your damp problem?',
                    'slug' =>     'do-you-know-what-is-causing-your-damp-problem?',
                    'answers' => [
                        [
                            'answer' => 'No,I need help investigating',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Yes,I just need help fixing the problem',
                            'slug' =>   'yes,I-just-need-help-fixing-the-problem'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 45,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 45,
                    'question' => 'How big is the affected area?',
                    'slug' =>     'how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small isolated area',
                            'slug' =>   'Small isolated area'
                        ],
                        [
                            'answer' => 'Widespread',
                            'slug' =>   'widespread'
                        ]


                    ],
                ],  

            ];
            foreach ($data as $item) {
                $question = Question::create([
                    'job_category_id' => $item['job_category_id'],
                    'question' => $item['question'],
                    'slug' => $item['slug'],
                ]);
                if (isset($item['answers'])) {
                    foreach ($item['answers'] as $answer) {
                        Answer::create([
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
