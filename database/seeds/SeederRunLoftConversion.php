<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunLoftConversion extends Seeder
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
                    'job_category_id' => 64,
                    'question' => 'What type of loft conversion do you want?',
                    'slug' =>     'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        
                            [
                                'answer' => 'Loft conversion with structural changes<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.</span>',
                                'slug' =>   'loft-conversion-with-structural-changes<br>requires-a-change-to-the-roof-structure,-e.g.-dormers,-hip-to-gable,-etc.',
                            ],
                            [
                                'answer' => 'Loft conversion (no structural changes)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">No alterations to the roof shape or structure.</span>',
                                'slug' =>   'loft-conversion-(no-structural-changes)<br>no-alterations-to-the-roof-shape-or-structure.'
                            ],
                            [
                                'answer' => 'Loft conversion for storage purposes<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Creating an accessible space by boarding, decorating etc.</span>',
                                'slug' =>   'loft-conversion-for-storage-purposes<br>creating-an-accessible-space-by-boarding-decorating-etc.'
                            ],
                            [
                                'answer' => 'Fit a skylight<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Add one or more windows to the roof, e.g. velux windows.</span>',
                                'slug' =>   'fit-a-skylight<br>add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                            ],

                        
                    ],
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug' =>     'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        
                            [
                                'answer' => 'Detached',
                                'slug' =>   'Detached',
                            ],
                            [
                                'answer' => 'Semi detached',
                                'slug' =>   'semi-detached'
                            ],
                            [
                                'answer' => 'Terraced',
                                'slug' =>   'terraced'
                            ],
                            [
                                'answer' => 'End of Terrace',
                                'slug' =>   'end-of-terrace'
                            ],
                            [
                                'answer' => 'Bungalow',
                                'slug' =>   'bungalow'
                            ],
                            [
                                'answer' => 'Other',
                                'slug' =>   'other'
                            ],
                        
                    ],
                ],



                [
                    'job_category_id' => 64,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'No ',
                            'slug' =>   'no'
                        ],
                        [
                            'answer' => 'I will / purchase in progress',
                            'slug' =>   'i-will-/-purchase-in-progress'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 64,
                    'question' => 'Have you had any plans drawn up?',
                    'slug' =>     'have-you-had-any-plans-drawn-up?',
                    'answers' => [
                        [
                            'answer' => 'Yes I have plans',
                            'slug' =>   'yes-i-have-plans'
                        ],
                        [
                            'answer' => 'Plans are being drawn up',
                            'slug' =>   'plans-are-being-drawn-up'
                        ],
                        [
                            'answer' => 'No plans have been drawn up',
                            'slug' =>   'no-plans-have-been-drawn-up'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 64,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'Your builder will probably require plans <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.</span>',
                    'slug' =>     'your-builder-will-probably-require-plans <br> loft-conversions-typically-require-building-regulations,-so-we-recommend-we-talk-to-an-architect-first-to-ensure-your-project-meets-any-relevant-regulatory-requirements.',
                    'answers' => [
                        [
                            'answer' => 'Okay, send my job to architects',
                            'slug' =>   'okay,-send-my-job-to-architects'
                        ],
                        [
                            'answer' => 'Continue posting this job without plans',
                            'slug' =>   'continue-posting-this-job-without-plans'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug'     => 'what-extra-work-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Fixed staircase',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Finishing work <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(plastering, painting & decorating)</span>',
                            'slug' =>   'finishing-work-(plastering,-painting-&-decorating)'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Velux windows',
                            'slug' =>   'velux-windows'
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
