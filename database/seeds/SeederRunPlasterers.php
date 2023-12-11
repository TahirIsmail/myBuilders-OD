<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunPlasterers extends Seeder
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
                    'job_category_id' => 67,
                    'question' => 'What service do you require?',
                    'slug'     => 'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Plastering <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(indoors)</span>',
                            'slug' =>   'plastering-(indoors)'
                        ],
                        [
                            'answer' => 'Rendering <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(outdoors)</span>',
                            'slug' =>   'rendering-(outdoors)'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 67,
                    'question' => 'What type of plastering do you need?',
                    'slug'     => 'what-type-of-plastering-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Skim only<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Plastering over existing plaster or over plasterboard</span>',
                            'slug' =>   'skim-only<br>plastering-over-existing-plaster-or-over-plasterboard'
                        ],
                        [
                            'answer' => 'Plasterboard and skim<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">For new stud walls and ceilings</span>',
                            'slug' =>   'plasterboard-and-skim<br>for-new-stud-walls-and-ceilings'
                        ],
                        [
                            'answer' => 'Other or I do not know',
                            'slug' =>   'other-or-i-do-not-know'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 67,
                    'question' => 'Roughly, how much work is it?',
                    'slug'     => 'roughly,-how-much-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'A small area <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(less than one full wall or ceiling)</span>',
                            'slug' =>   'a-small-area-(less-than-one-full-wall-or-ceiling)'
                        ],
                        [
                            'answer' => 'Up to 5 walls and / or ceilings',
                            'slug' =>   'up-to-5-walls-and/or-ceilings'
                        ],
                        [
                            'answer' => '6-to-10 walls and / or ceilings',
                            'slug' =>   '6-to-10-walls-and-/-or-ceilings'
                        ],
                        [
                            'answer' => '11-to-20 walls and / or ceilings',
                            'slug' =>   '11-to-20-walls-and-/-or-ceilings'
                        ],
                        [
                            'answer' => 'More than 20 walls and / or ceilings',
                            'slug' =>   'more-than-20-walls-and-/-or-ceilings'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Is this area your hallway, stairs and landing?',
                    'slug'     => 'is-this-area-your-hallway,-stairs-and-landing?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 67,
                    'question' => 'What do you need rendered?',
                    'slug'     => 'what-do-you-need-rendered',
                    'answers' => [
                        [
                            'answer' => 'Exterior of house',
                            'slug' =>   'exterior-of-house'
                        ],
                        [
                            'answer' => 'Garden wall(s)',
                            'slug' =>   'garden-wall(s)'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Roughly how large is your rendering job?',
                    'slug'     => 'roughly-how-large-is-your-rendering-job?',
                    'answers' => [
                        [
                            'answer' => 'Small area (less than one wall)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a crack or hole in an external wall</span>',
                            'slug' =>   'small-area-(less-than-one-wall)<br>e.g.-a-crack-or-hole-in-an-external-wall'
                        ],
                        [
                            'answer' => '1 to 2 exterior walls',
                            'slug' =>   '1-to-2-exterior-walls'
                        ],
                        [
                            'answer' => '3 to 4 exterior walls',
                            'slug' =>   '3-to-4-exterior-walls'
                        ],
                        [
                            'answer' => 'More than exterior walls',
                            'slug' =>   'more-than-exterior-walls'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 67,
                    'question' => 'Roughly how large is your rendering job?',
                    'slug'     => 'roughly-how-large-is-your-rendering-job?',
                    'answers' => [
                        [
                            'answer' => 'Repair a Small area',
                            'slug' =>   'repair-a-small-area'
                        ],
                        [
                            'answer' => 'Small (up to 10m²)',
                            'slug' =>   'small-(up-to-10m²)'
                        ],
                        [
                            'answer' => 'Medium (10-to-30m²)',
                            'slug' =>   'medium-(10-to-30m²)'
                        ],
                        [
                            'answer' => 'Large (over 30m²)',
                            'slug' =>   'large-(over-30m²)'
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
