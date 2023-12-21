<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunInsullation extends Seeder
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
                    'job_category_id' => 60,
                    'question' => 'What type of insulation do you want?',
                    'slug' =>     'what-type-of-insulation-do-you-want',
                    'answers' => [
                        [
                            'answer' => 'Loft / roof insulation',
                            'slug' =>   'loft-roof-insulation'
                        ],
                        [
                            'answer' => 'Wall insulation',
                            'slug' =>   'wall-insulation'
                        ],
                        [
                            'answer' => 'Floor insulation',
                            'slug' =>   'floor-insulation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'How many walls need insulating?',
                    'slug' =>     'how-many-walls-need-insulating?',
                    'answers' => [
                        [
                            'answer' => '1 wall',
                            'slug' =>   'loft-roof-insulation'
                        ],
                        [
                            'answer' => 'Several walls',
                            'slug' =>   'wall-insulation'
                        ],
                        [
                            'answer' => ' Whole house',
                            'slug' =>   'floor-insulation'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'How many rooms need insulating?',
                    'slug' =>     'how-many-rooms-need-insulating',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
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
