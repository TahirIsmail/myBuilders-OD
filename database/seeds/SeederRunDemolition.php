<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunDemolition  extends Seeder
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
                    'job_category_id' => 47,
                    'question' => 'What type of service do you require?',
                    'slug' =>     'what-type-of-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Waste removal only <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Remove waste from property, including hazardous materials</span>',
                            'slug' =>   'waste-removal-only <br> remove-waste-from-property,-including-hazardous-materials'
                        ],
                        [
                            'answer' => 'Building / structure demolition <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Knock down and remove a whole structure</span>',
                            'slug' =>   'building-/-structure-demolition <br> knock-down-and-remove-a-whole-structure'
                        ],
                        [
                            'answer' => 'Knock down a wall <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Knock down and remove walls</span>',
                            'slug' =>   'knock-down-a-wall <br> knock-down-and-remove-walls'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 47,
                    'question' => 'How much waste do you need clearing?',
                    'slug' =>     'how-much-waste-do-you-need-clearing?',
                    'answers' => [
                        [
                            'answer' => 'Small van or car load',
                            'slug' =>   'small-van-or-car-load'
                        ],
                        [
                            'answer' => 'Medium van load',
                            'slug' =>   'Medium van load'
                        ],
                        [
                            'answer' => 'Large van load',
                            'slug' =>   'Large van load'
                        ],
                        [
                            'answer' => 'Full site clearance or more',
                            'slug' =>  'full-site-clearance-or-more'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 47,
                    'question' => 'Are there any hazardous materials that you know of? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. Asbestos, white goods, mattress, CRT TV or monitor, fluorescent tubes, tyres, oil, petrol, diesel, or paint</span>',
                    'slug' =>     'are-there-any-hazardous-materials-that-you-know-of?<br>e.g.-asbestos,-white-goods,-mattress,-crt-tv-or-monitor,-fluorescent-tubes,-tyres,-oil,-petrol,-diesel,-or-paint',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],
                        [
                            'answer' => 'i am not sure',
                            'slug' =>   'i-am-not-sure'
                        ],                        

                    ],
                ],

                [
                    'job_category_id' => 47,
                    'question' => 'Select the hazardous materials that you are aware of',
                    'slug' =>     'select-the-hazardous-materials-that-you-are-aware-of',
                    'answers' => [
                        [
                            'answer' => 'Asbestos',
                            'slug' =>   'asbestos'
                        ],
                        [
                            'answer' => 'White goods',
                            'slug' =>   'white-goods'
                        ],
                        [
                            'answer' => 'Mattress',
                            'slug' =>   'mattress'
                        ],
                        [
                            'answer' => 'CRT TV or monitor',
                            'slug' =>   'crt-tv-or-monitor'
                        ],
                        [
                            'answer' => 'Fluorescent tubes',
                            'slug' =>   'fluorescent-tubes'
                        ], [
                            'answer' => 'Tyres',
                            'slug' =>   'tyres'
                        ], [
                            'answer' => 'Oil, petrol, diesel or paint',
                            'slug' =>   'oil,-petrol,-diesel-or-paint'
                        ], [
                            'answer' => 'other',
                            'slug' =>   'other'
                        ],



                    ],
                ],
                [
                    'job_category_id' => 47,
                    'question' => 'Add a description to your job',
                    'slug' =>    'add-a-description-to-your-job',

                ],
                
                [
                    'job_category_id' => 47,
                    'question' => 'Roughly, how large is the structure that needs demolishing?',
                    'slug' =>     'roughly,-how-large-is-the-structure-that-needs-demolishing?',
                    'answers' => [
                        [
                            'answer' => 'Small <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. shed or porch</span>',
                            'slug' =>   'small-<br>-e.g.-shed-or-porch'
                        ],
                        [
                            'answer' => 'Medium <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. rip out a kitchen, bathroom or similar</span>',
                            'slug' =>   'medium-<br>-e.g.-rip-out-a-kitchen,-bathroom-or-similar'
                        ],
                        [
                            'answer' => 'Large <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. outbuilding or garage</span>',
                            'slug' =>   'large-<br>-e.g.-outbuilding-or-garage'
                        ],
                        [
                            'answer' => 'X-Large <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. a house or multiple properties</span>',
                            'slug' =>   'x-large-<br>-e.g.-a-house-or-multiple-properties'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 47,
                    'question' => 'What type of wall do you want to remove?',
                    'slug' =>     'what-type-of-wall-do-you-want-to-remove?',
                    'answers' => [
                        [
                            'answer' => 'Stud wall',
                            'slug' =>   'stud-wall'
                        ],
                        [
                            'answer' => 'Non-load bearing wall',
                            'slug' =>   'non-load-bearing-wall'
                        ],
                        [
                            'answer' => 'Load bearing wall',
                            'slug' =>   'load-bearing-wall'
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
