<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunConservatory  extends Seeder
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
                    'job_category_id' => 43,
                    'question' => 'What do you need a conservatory installers help with?',
                    'slug' =>     'what-do-you-need-a-conservatory-installers-help-with?',
                    'answers' => [
                        [
                            'answer' => 'A new conservatory installation',
                            'slug' =>   'a-new-conservatory-installation'
                        ],
                        [
                            'answer' => 'Replace or improve an existing conservatory',
                            'slug' =>   'replace-or-improve-an-existing-conservatory'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 43,
                    'question' => 'What do you need to have done?',
                    'slug' =>     'what-do-you-need-to-have-done?',
                    'answers' => [
                        [
                            'answer' => 'Build the conservatory and base',
                            'slug' =>   'build-the-conservatory-and-base'
                        ],
                        [
                            'answer' => 'Erect conservatory only',
                            'slug' =>   'erect-conservatory-only'
                        ],
                        [
                            'answer' => 'Build base only',
                            'slug' =>   'build-base-only'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 43,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 43,
                    'question' => 'What needs doing?',
                    'slug' =>     'what-needs-doing',
                    'answers' => [
                        [
                            'answer' => 'Roof replacement',
                            'slug' =>  'roof-replacement'
                        ],
                        [
                            'answer' => 'Windows and doors replacement',
                            'slug' =>   'windows-and-doors-replacement'
                        ],
                        [
                            'answer' => 'Large refurbishment of existing conservatory',
                            'slug' =>   'large-refurbishment-of-existing-conservatory'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 43,
                    'question' => 'What is the issue?',
                    'slug' =>     'what-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Leak',
                            'slug' =>  'leak'
                        ],
                        [
                            'answer' => 'Roof',
                            'slug' =>   'roof'
                        ],
                        [
                            'answer' => 'Faulty door or windows',
                            'slug' =>   'faulty-door-or-windows'
                        ],
                        [
                            'answer' => 'Broken glass',
                            'slug' =>   'broken-glass'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
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
