<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunWindowDoorFitters extends Seeder
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
                    'job_category_id' => 80,
                    'question' => 'What service do you require?',
                    'slug' =>    'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'New windows',
                            'slug' =>   'new-windows'
                        ],
                        [
                            'answer' => 'New doors<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (internal or external)</span>',
                            'slug' =>   'new-doors-(internal-or-external)'
                        ],
                        [
                            'answer' => 'New windows and external doors',
                            'slug' =>   'new-doors-internal-or-external'
                        ],
                        [
                            'answer' => 'Replace glass',
                            'slug' =>   'replace-glass'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 80,
                    'question' => 'What kind of windows do you need?',
                    'slug' =>     'what-kind-of-windows-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'wooden',
                            'slug' =>   'wooden'
                        ],
                        [
                            'answer' => 'uPVC',
                            'slug' =>   'upvc'
                        ],
                        [
                            'answer' => 'Aluminium',
                            'slug' =>   'aluminium'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 80,
                    'question' => 'How many windows need replacing?',
                    'slug' =>     'how-many-windows-need-replacing?',
                    'answers' => [
                        [
                            'answer' => '1 to 2',
                            'slug' =>   '1-to-2'
                        ],
                        [
                            'answer' => '3 to 5',
                            'slug' =>   '3-to-5'
                        ],
                        [
                            'answer' => '5 to 10',
                            'slug' =>   '5-to-10'
                        ],
                        [
                            'answer' => 'More than 10',
                            'slug' =>   'more-than-10'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 80,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'What type of doors need fitting?',
                    'slug' =>     'what-type-of-doors-need-fitting?',
                    'answers' => [
                        [
                            'answer' => 'Single door <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(standard)</span>',
                            'slug' =>   'single-door-standard'
                        ],
                        [
                            'answer' => 'Double door',
                            'slug' =>   'double-door'
                        ],
                        [
                            'answer' => 'Bi-fold door',
                            'slug' =>   'bi-fold-door'
                        ],
                        [
                            'answer' => 'Sliding door<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. Bypass doors, pocket doors, barn doors, etc.</span>',
                            'slug' =>   'sliding-door<br>e.g.-bypass-doors,-pocket-doors,-barn-doors,-etc.'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 80,
                    'question' => 'Who is supplying the door(s)?',
                    'slug' =>     'who-is-supplying-the-doors',
                    'answers' => [
                        [
                            'answer' => 'I am supplying the door(s)',
                            'slug' =>   'i-am-supplying-the-doors'
                        ],
                        [
                            'answer' => 'I would like the tradesperson to supply the door(s)',
                            'slug' =>   'i-would-like-the-tradesperson-to-supply-the-door(s)'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'How many new doors do you need fitted?',
                    'slug' =>     'how-many-new-doors-do-you-need-fitted?',

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
                            'answer' => '4',
                            'slug' =>   '4'
                        ],
                        [
                            'answer' => '5',
                            'slug' =>   '5'
                        ],
                        [
                            'answer' => '6',
                            'slug' =>   '6'
                        ],
                        [
                            'answer' => 'More than 6',
                            'slug' =>   'More-than-6'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 80,
                    'question' => 'What type of door(s) do you need fitted?',
                    'slug' =>     'what-type-of-doors-do-you-need-fitted',
                    'answers' => [
                        [
                            'answer' => 'Standard door(s)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. hollow core</span>',
                            'slug' =>   'standard-doors-e.g.-hollow-core'
                        ],
                        [
                            'answer' => 'Solid wood or glazed door(s)',
                            'slug' =>   'solid-wood-or-glazed-doors'
                        ],
                        [
                            'answer' => 'Fire rated door(s)',
                            'slug' =>   'fire-rated-doors'
                        ],
                        [
                            'answer' => 'A combination of different types of doors',
                            'slug' =>   'a-combination-of-different-types-of-doors'
                        ],
                        [
                            'answer' => 'Other materials / I do not know',
                            'slug' =>   'other-materials-/-i-do-not-know'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'Additional information about your job',
                    'slug' =>     'additional-information-about-your-job',

                ],
                [
                    'job_category_id' => 80,
                    'question' =>  'How many doors do you need fitted?',
                    'slug' =>      'how-many-doors-do-you-need-fitted?',
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'How many doors do you need hanging?',
                    'slug' =>     'how-many-doors-do-you-need-hanging',
                    'answers' => [
                        [
                            'answer' => 'A single door',
                            'slug' =>   'a-single-door'
                        ],
                        [
                            'answer' => '2-4 doors',
                            'slug' =>   '2-4-doors'
                        ],
                        [
                            'answer' => '5 or more doors',
                            'slug' =>   '5-or-more-doors'
                        ],




                    ],
                ],
                [
                    'job_category_id' => 80,
                    'question' =>  'Tell us about the types and number of doors, plus any timeframe or other requirements',
                    'slug' =>      'tell-us-about-the-types-and-number-of-doors,-plus-any-timeframe-or-other-requirements',
                ],



                [
                    'job_category_id' => 80,
                    'question' => 'How many new doors need replacing?',
                    'slug' =>     'how-many-new-doors-need-replacing?',

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
                            'answer' => 'More than 3',
                            'slug' =>   'More-than-3'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'What type of doors need replacing?<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (select all that apply)</span>',
                    'slug' =>     'what-type-of-doors-need-replacing?-(select-all-that-apply)',

                    'answers' => [
                        [
                            'answer' => 'Single door',
                            'slug' =>   'single-door'
                        ],
                        [
                            'answer' => 'Double / french door',
                            'slug' =>   'double-/-french-door'
                        ],
                        [
                            'answer' => 'Sliding door',
                            'slug' =>   'sliding-door'
                        ],
                        [
                            'answer' => 'Bifold door',
                            'slug' =>   'bifold-door'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],


                [
                    'job_category_id' => 80,
                    'question' => 'What kind of door do you need?',
                    'slug' =>     'what-kind-of-door-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'wooden',
                            'slug' =>   'wooden'
                        ],
                        [
                            'answer' => 'uPVC',
                            'slug' =>   'upvc'
                        ],
                        [
                            'answer' => 'Aluminium',
                            'slug' =>   'aluminium'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'How many doors need replacing?',
                    'slug' =>     'how-many-doors-need-replacing?',

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
                            'answer' => 'More than 3',
                            'slug' =>   'More-than-3'
                        ],

                    ],
                ],


                [
                    'job_category_id' => 80,
                    'question' => 'What type of doors need replacing?<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (select all that apply)</span>',
                    'slug' =>     'what-type-of-doors-need-replacing?-(select-all-that-apply)',

                    'answers' => [

                        [
                            'answer' => 'Double door',
                            'slug' =>   'double-door'
                        ],
                        [
                            'answer' => '2-Single door',
                            'slug' =>   '2-single-door'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 80,
                    'question' => 'How many panes of glass need replacing?',
                    'slug' =>     'how-many-panes-of-glass-need-replacing?',

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
                            'answer' => 'More than 3',
                            'slug' =>   'More-than-3'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'What type of windows / doors need repair?',
                    'slug' =>     'what-type-of-windows-/-doors-need-repair?',
                    'answers' => [
                        [
                            'answer' => 'wooden',
                            'slug' =>   'wooden'
                        ],
                        [
                            'answer' => 'uPVC or metal',
                            'slug' =>   'upvc-or-metal'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 80,
                    'question' => 'What kind of repair are you looking for?',
                    'slug' =>     'what-kind-of-repair-are-you-looking-for?',

                    'answers' => [

                        [
                            'answer' => 'Single window or door',
                            'slug' =>   'single-window-or-door'
                        ],
                        [
                            'answer' => 'Several windows or doors',
                            'slug' =>   'several-windows-or-doors'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 80,
                    'question' => 'Describe your window fitting job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Mention the property type and age. Is any special glazing required (e.g. frosted bathroom windows)</span>?',
                    'slug' =>     'describe-your-window-fitting-job-in-detail<br>good-descriptions-attract-good-tradespeople.-mention-the-property-type-and-age.-is-any-special-glazing-required-(e.g.-frosted-bathroom-windows)?',
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
