<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunTreeSurgeons extends Seeder
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
                    'job_category_id' => 78,
                    'question' => 'What type of tree surgery service do you require?',
                    'slug' =>     'what-type-of-tree-surgery-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Trimming or topping',
                            'slug' =>   'trimming-or-topping'
                        ],
                        [
                            'answer' => 'Cutting down (felling)',
                            'slug' =>   'cutting-down-(felling)'
                        ],
                        [
                            'answer' => 'Stump removal only',
                            'slug' =>   'stump-removal-only'
                        ],
                        [
                            'answer' => 'Diagnosis / Assessment',
                            'slug' =>   'diagnosis-assessment'
                        ],
                        [
                            'answer' => 'Bushes, or other gardening tasks',
                            'slug' =>   'bushes,-or-other-gardening-tasks'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 78,
                    'question' => 'How many trees are involved?',
                    'slug' =>     'how-many-trees-are-involved?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2',
                            'slug' =>   '2'
                        ],
                        [
                            'answer' => '3',
                            'slug' =>   '3'
                        ],
                        [
                            'answer' => '4 or more',
                            'slug' =>   '4-or-more'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 78,
                    'question' => 'How large is the tree?',
                    'slug' =>     'how-large-is-the-tree?',
                    'answers' => [
                        [
                            'answer' => 'Small  <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">up to 3m (9 ft)</span>',
                            'slug' =>   'small-up-to-3m-(9-ft)'
                        ],
                        [
                            'answer' => 'Medium <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> up to 8m (26 ft)</span>',
                            'slug' =>   'medium-up-to-8m-(26-ft)'
                        ],
                        [
                            'answer' => 'Large <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> over 8m (over 26 ft)</span>',
                            'slug' =>   'large-over-8m-(over-26-ft)'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 78,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'What is the height of the tallest tree?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Do not worry if you do not know the exact height, we only need a rough estimate</span>',
                    'slug' =>     'what-is-the-height-of-the-tallest-tree?<br>do-not-worry-if-you-do-not-know-the-exact-height,-we-only-need-a-rough-estimate',
                    'answers' => [
                        [
                            'answer' => 'Small <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> up to 3m (9 ft)</span>',
                            'slug' =>   'small-up-to-3m-(9-ft)'
                        ],
                        [
                            'answer' => 'Medium <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> up to 8m (26 ft)</span>',
                            'slug' =>   'medium-up-to-8m-(26-ft)'
                        ],
                        [
                            'answer' => 'Large <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> over 8m (over 26 ft)</span>',
                            'slug' =>   'large-over-8m-(over-26-ft)'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 78,
                    'question' => 'How many trees need to be cut down?',
                    'slug' =>     'how-many-trees-need-to-be-cut-down?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2',
                            'slug' =>   '2'
                        ],
                        [
                            'answer' => '3 or more',
                            'slug' =>   '3-or-more'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'How many stumps do you need removed?',
                    'slug' =>     'how-many-stumps-do-you-need-removed?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 stumps',
                            'slug' =>   '1-to-2-stumps'
                        ],
                        [
                            'answer' => '3 or more stumps',
                            'slug' =>   '3-or-more-stumps'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],



                [
                    'job_category_id' => 78,
                    'question' => 'Describe your gardening job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Provide a detailed description of the project including how many different materials you intend to use in what areas of the garden.</span>',
                    'slug' =>     'describe-your-gardening-job-in-detail<br>good-descriptions-attract-good-tradespeople.-provide-a-detailed-description-of-the-project-including-how-many-different-materials-you-intend-to-use-in-what-areas-of-the-garden.',
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'How many stumps do you need removed?',
                    'slug' =>     'how-many-stumps-do-you-need-removed?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 stumps',
                            'slug' =>   '1-to-2-stumps'
                        ],
                        [
                            'answer' => '3 or more stumps',
                            'slug' =>   '3-or-more-stumps'
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
