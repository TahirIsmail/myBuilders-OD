<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunFascias  extends Seeder
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
                    'job_category_id' => 51,
                    'question' => 'What does your job involve?',
                    'slug'     => 'what-does-your-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Guttering only',
                            'slug' =>   'guttering-only'
                        ],
                        [
                            'answer' => 'Fascias and/or soffits only',
                            'slug' =>   'fascias-and/or-soffits-only'
                        ],
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What guttering work do you require?',
                    'slug'     => 'what-guttering-work-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair (e.g. leak)',
                            'slug' =>   'repair-(e.g.-leak)'
                        ],
                        [
                            'answer' => 'Cleaning / blockages',
                            'slug' =>   'cleaning-/-blockages'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],

                [
                    'job_category_id' => 51,
                    'question' => 'How many sides of the property are involved?',
                    'slug'     => 'how-many-sides-of-the-property-are-involved?',
                    'answers' => [
                        [
                            'answer' => '1 to 2',
                            'slug' =>   '1-to-2'
                        ],
                        [
                            'answer' => '3 to 4',
                            'slug' =>  '3-to-4'
                        ],
                        [
                            'answer' => 'More than 4',
                            'slug' =>   'more-than-4'
                        ],
                        [
                            'answer' => 'Or a garage / outbuilding',
                            'slug' =>   'Or-a-garage-/-outbuilding'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What are you looking to have done to your fascias & soffits?',
                    'slug'     => 'what-are-you-looking-to-have-done-to-your-fascias-&-soffits?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'Roughly how large is the repair?',
                    'slug'     => 'roughly-how-large-is-the-repair?',
                    'answers' => [
                        [
                            'answer' => 'Single isolated area',
                            'slug' =>   'single-isolated-area'
                        ],
                        [
                            'answer' => 'Multiple areas of the property',
                            'slug' =>   'multiple-areas-of-the-property'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What are you looking to have done to your fascias,soffits & gutter?',
                    'slug'     => 'what-are-you-looking-to-have-done-to-your-fascias,soffits-&-gutter?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'How many sides of the property are involved?',
                    'slug'     => 'how-many-sides-of-the-property-are-involved?',
                    'answers' => [
                        [
                            'answer' => '1 to 2',
                            'slug' =>   '1-to-2'
                        ],
                        [
                            'answer' => '3 to 4',
                            'slug' =>   '3-to-4'
                        ],
                        [
                            'answer' => 'more than 4',
                            'slug' =>   'more-than-4'
                        ],
                        [
                            'answer' => 'Or a garage / outbuilding',
                            'slug' =>   'Or-a-garage-/-outbuilding'
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
