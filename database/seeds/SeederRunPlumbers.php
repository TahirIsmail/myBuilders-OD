<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunPlumbers extends Seeder
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
                    'job_category_id' => 68,
                    'question' => 'What do you need a plumbers help with?',
                    'slug'     => 'what-do-you-need-a-plumbers-help-with?',
                    'answers' => [
                        [
                            'answer' => 'Radiators<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Radiators installation, repairs, etc.</span>',
                            'slug' =>   'radiators<br>radiators-installation,-repairs,-etc.'
                        ],
                        [
                            'answer' => 'Boilers<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Central heating systems, boiler installation, etc.</span>',
                            'slug' =>   'boilers<br>central-heating-systems,-boiler-installation,-etc.'
                        ],
                        [
                            'answer' => 'Appliances<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Dishwasher, washing machine, etc.</span>',
                            'slug' =>   'appliances<br>dishwasher,-washing-machine,-etc.'
                        ],
                        [
                            'answer' => 'Fixtures<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Shower, toilet, sink, etc.</span>',
                            'slug' =>   'fixtures<br>shower,-toilet,-sink,-etc.'
                        ],
                        [
                            'answer' => 'Pipework, taps & drainage<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Pipe alterations, blockages, leaks, macerator, etc.</span>',
                            'slug' =>   'pipework,-taps-&-drainage<br>pipe-alterations,-blockages,-leaks,-macerator,-etc.'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'What needs doing?',
                    'slug'     => 'what-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Minor issue <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(e.g. leaking, bleeding, banging)</span>',
                            'slug' =>   'minor-issue-(e.g.-leaking,-bleeding,-banging)'
                        ],
                        [
                            'answer' => 'Moving or replacing',
                            'slug' =>   'moving-or-replacing'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 68,
                    'question' => 'How many radiators are affected?',
                    'slug'     => 'how-many-radiators-are-affected?',
                    'answers' => [
                        [
                            'answer' => 'Single',
                            'slug' =>   'single'
                        ],
                        [
                            'answer' => 'Multiple',
                            'slug' =>   'multiple'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 68,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 68,
                    'question' => 'How many radiators would you like to move or replace?',
                    'slug'     => 'how-many-radiators-would-you-like-to-move-or-replace?',
                    'answers' => [
                        [
                            'answer' => '1 radiator',
                            'slug' =>   '1-radiator'
                        ],
                        [
                            'answer' => '2 to 4 radiators',
                            'slug' =>   '2-to-4 radiators'
                        ],
                        [
                            'answer' => '5 radiators',
                            'slug' =>   '5-radiators'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 68,
                    'question' => 'What kind of boiler do you have?',
                    'slug'     => 'what-kind-of-boiler-do-you-have?',
                    'answers' => [
                        [
                            'answer' => 'Gas',
                            'slug' =>   'gas'
                        ],
                        [
                            'answer' => 'Oil',
                            'slug' =>   'oil'
                        ],
                        [
                            'answer' => 'Electric',
                            'slug' =>   'electric'
                        ],
                        [
                            'answer' => 'Other or i am not sure',
                            'slug' =>   'other-or-i-am-not-sure'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 68,
                    'question' => 'What needs doing to the boiler?',
                    'slug'     => 'what-needs-doing-to-the-boiler?',
                    'answers' => [
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Gas safety certificate',
                            'slug' =>   'gas-safety-certificate'
                        ],
                        [
                            'answer' => 'Gas boiler service',
                            'slug' =>   'gas-boiler-service'
                        ],
                        [
                            'answer' => 'Installation / replacement',
                            'slug' =>   'installation-/-replacement'
                        ],
                        [
                            'answer' => 'Removal only',
                            'slug' =>   'removal-only'
                        ],

                    ],
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'Is this for a domestic or commercial property?',
                    'slug' =>     'is-this-for-a-domestic-or-commercial-property',
                    'answers' => [
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ],
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'What needs doing to the boiler?',
                    'slug'     => 'what-needs-doing-to-the-boiler?',
                    'answers' => [
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Service',
                            'slug' =>   'service'
                        ],

                        [
                            'answer' => 'Installation / replacement',
                            'slug' =>   'installation-/-replacement'
                        ],
                        [
                            'answer' => 'Removal only',
                            'slug' =>   'removal-only'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 68,
                    'question' => 'Please describe your central heating job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. What does your job involve?</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail<br>good-descriptions-attract-good-tradespeople.-what-does-your-job-involve?',
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'How many appliances do you need installed or replaced?',
                    'slug'     => 'how-many-appliances-do-you-need-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' => '1 item',
                            'slug' =>   '1-item'
                        ],
                        [
                            'answer' => '2 to 3 items',
                            'slug' =>   '2-to-3-items'
                        ],
                        [
                            'answer' => '4 or more items',
                            'slug' =>   '4-or-more-items'
                        ],

                    ],
                ],






                [
                    'job_category_id' => 68,
                    'question' => 'How can a plumber help you with your fixtures?',
                    'slug'     => 'how-can-a-plumber-help-you-with-your-fixtures?',
                    'answers' => [
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 68,
                    'question' => 'Do you require any additional works?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. painting, tiling, electrics, lighting, new floors or ceilings.</span>',
                    'slug'     => 'do-you-require-any-additional-works?<br>e.g.-painting-tiling-electrics-lighting-new-floors-or-ceilings.',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],

                    ],
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'How many items do you need installed or replaced?',
                    'slug'     => 'how-many-items-do-you-need-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' => '1 item',
                            'slug' =>   '1-item'
                        ],
                        [
                            'answer' => '2 to 3 items',
                            'slug' =>  '2-to-3-items'
                        ],
                        [
                            'answer' => '4 or more items',
                            'slug' =>  '4-or-more-items'
                        ],

                    ],
                ],





                [
                    'job_category_id' => 68,
                    'question' => 'Which fixtures require installation / replacement?',
                    'slug'     => 'which-fixture-require-installation-/-replacement',
                    'answers' => [
                        [
                            'answer' => 'Bath',
                            'slug' =>   'bath'
                        ],
                        [
                            'answer' => 'Shower',
                            'slug' =>  'shower'
                        ],
                        [
                            'answer' => 'Toilet',
                            'slug' =>  'toilet'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'Is it a leak?',
                    'slug'     => 'is-it-a-leak?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'Have you identified the source of the leak?',
                    'slug'     => 'have-you-identified-the-source-of-the-leak?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'How many fixtures / appliances do you need repaired?',
                    'slug'     => 'how-many-fixtures/appliances-do-you-need-repaired?',
                    'answers' => [
                        [
                            'answer' => 'One item',
                            'slug' =>  'one-item'
                        ],
                        [
                            'answer' => 'Multiple items',
                            'slug' =>  'multiple-items'
                        ],

                    ],
                ],





                [
                    'job_category_id' => 68,
                    'question' => 'Is there a possibility that your job involves gas pipework?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Jobs that involve gas will be sent to our Gas Safe registered tradespeople</span>',
                    'slug'     => 'is-there-a-possibility-that-your-job-involves-gas-pipework?<br>jobs-that-involve-gas-will-be-sent-to-our-gas-safe-registered-tradespeople',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],

                    ],
                ],





                [

                    'job_category_id' => 68,
                    'question' =>  'What does your gas job involve?',
                    'slug'     =>  'what-does-your-gas-job-involve?',
                    'answers' => [
                        [
                            'answer' =>  'Gas safety check',
                            'slug' =>    'gas-safety-check'
                        ],
                        [
                            'answer' => 'Service boiler or appliance',
                            'slug' =>   'service-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Install or replace boiler or appliance',
                            'slug' =>   'install-or-replace-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Move or remove boiler or appliance',
                            'slug' =>   'move-or-remove-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Pipework only',
                            'slug' =>   'pipework-only'
                        ],
                        [
                            'answer' => 'Problem or repair',
                            'slug' =>   'problem-or-repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],




                [

                    'job_category_id' => 68,
                    'question' =>  'What do you need certified?',
                    'slug'     => 'what-do-you-need-certified?',
                    'answers' => [
                        [
                            'answer' =>  'Boiler',
                            'slug' =>    'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ],
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]

                    ]
                ],


                [

                    'job_category_id' => 68,
                    'question' =>  'Would you also like the boiler serviced?',
                    'slug'     =>  'would-you-also-like-the-boiler-serviced?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'Is this for a domestic or commercial property?',
                    'slug' =>     'is-this-for-a-domestic-or-commercial-property',
                    'answers' => [
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ],
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],






                [
                    'job_category_id' => 68,
                    'question' => 'What can a plumber help you with?',
                    'slug' =>     'what-can-a-plumber-help-you-with?',
                    'answers' => [
                        [
                            'answer' => 'Pipes',
                            'slug' =>   'pipes'
                        ],
                        [
                            'answer' => 'Taps',
                            'slug' =>   'taps'
                        ],
                        [
                            'answer' => 'Leaks or blockages',
                            'slug' =>   'leaks-or-blockages'
                        ],
                        [
                            'answer' => 'Septic tank',
                            'slug' =>   'septic-tank'
                        ],
                        [
                            'answer' => 'Macerator',
                            'slug' =>   'macerator'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 68,
                    'question' => 'The pipes need to be.',
                    'slug' =>     'the-pipes-need-to-be.',
                    'answers' => [
                        [
                            'answer' => 'Installed or altered',
                            'slug' =>   'installed-or-altered'
                        ],
                        [
                            'answer' => 'Repaired or assessed',
                            'slug' =>   'repaired-or-assessed'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 68,
                    'question' => 'How much work needs doing?',
                    'slug' =>     'how-much-work-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Small plumbing job<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. install an outdoor tap, or drainage for a sink</span>',
                            'slug' =>   'small-plumbing-job<br>e.g.-install-an-outdoor-tap,-or-drainage-for-a-sink'
                        ],
                        [
                            'answer' => 'New room<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. plumbing for a new bathroom or kitchen</span>',
                            'slug' =>  'new-room<br>e.g.-plumbing-for-a-new-bathroom-or-kitchen'
                        ],
                        [
                            'answer' => 'New extension',
                            'slug' =>   'new-extension'
                        ],
                        [
                            'answer' => 'Entire house',
                            'slug' =>    'entire-house'
                        ],
                        [
                            'answer' => 'Large commercial property',
                            'slug' =>   'large-commercial-property'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 68,
                    'question' => 'What do you need?',
                    'slug' =>     'what-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Single tap',
                            'slug' =>   'single-tap'
                        ],
                        [
                            'answer' => 'Multiple taps',
                            'slug' =>  'multiple-taps'
                        ],
                        [
                            'answer' => 'Outdoor tap',
                            'slug' =>   'outdoor-tap'
                        ]



                    ],
                ],


                [
                    'job_category_id' => 68,
                    'question' => 'What problem are you experiencing?',
                    'slug' =>     'what-problem-are-you-experiencing',
                    'answers' => [
                        [
                            'answer' => 'Blockage',
                            'slug' =>   'blockage'
                        ],
                        [
                            'answer' => 'Leak',
                            'slug' =>   'leak'
                        ],
                        [
                            'answer' =>  'Toilet not flushing',
                            'slug' =>    'toilet-not-flushing'
                        ],
                        [
                            'answer' => 'Dripping tap',
                            'slug' =>   'dripping-tap'
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
