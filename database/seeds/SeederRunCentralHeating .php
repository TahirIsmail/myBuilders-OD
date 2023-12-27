<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunCentralHeating extends Seeder
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
                    'job_category_id' => 59,
                    'question' => 'What does your central heating job involve?',
                    'slug' =>     'what-does-your-central-heating-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>   'boiler'
                        ],
                        [
                            'answer' => 'Pipework / supply',
                            'slug' =>   'pipework-/-supply'
                        ],
                        [
                            'answer' => 'Radiators',
                            'slug' =>   'radiators'
                        ]
                        ,
                        [
                            'answer' => 'Thermostat',
                            'slug' =>   'thermostat'
                        ]
                        ,
                        [
                            'answer' => 'Underfloor heating',
                            'slug' =>   'underfloor-heating'
                        ]
                        ,
                        [
                            'answer' => 'Full system installation',
                            'slug' =>   'full-system-installation'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 59,
                    'question' => 'Please describe your central heating job in detail<br<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. What does your job involve?</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail<br>good-descriptions-attract-good-tradespeople.-what-does-your-job-involve?',
                ],
                [
                    'job_category_id' => 59,
                    'question' => 'What kind of pipes need work?',
                    'slug'     => 'what-kind-of-pipes-need-work?',
                    'answers' => [
                        [
                            'answer' => 'Gas',
                            'slug' =>   'gas'
                        ],
                        [
                            'answer' => 'Water',
                            'slug' =>   'water'
                        ],
                        [
                            'answer' => 'Other or i am not sure',
                            'slug' =>   'other-or-i-am-not-sure'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 59,
                    'question' => 'What needs to be changed with the gas pipework?',
                    'slug'     => 'what-needs-to-be-changed-with-the-gas-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Disconnect or cap pipework',
                            'slug' =>  'disconnect-or-cap-pipework'
                        ],
                        [
                            'answer' => 'Install or alter pipework',
                            'slug' =>   'install-or-alter-pipework'
                        ],
                        [
                            'answer' => 'Other ',
                            'slug' =>   'other'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 59,
                    'question' => 'Please describe your central heating job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Provide relevant detail and consider whether the pipes are easy to access.</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail<br>good-descriptions-attract-good-tradespeople.-provide-relevant-detail-and-consider-whether-the-pipes-are-easy-to-access.',
                ],
                [
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
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
                    'job_category_id' => 59,
                    'question' => 'What type of underfloor heating do you need?',
                    'slug' =>     'what-type-of-underfloor-heating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Boiler supplied <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(wet)</span>',
                            'slug' =>   'boiler-supplied-(wet)'
                        ],
                        [
                            'answer' => 'Electrical<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (dry)</span>',
                            'slug' =>   'electrical-(dry)'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 59,
                    'question' => 'How many rooms require underfloor heating?',
                    'slug' =>     'how-many-rooms-require-underfloor-heating?',
                    'answers' => [
                        [
                            'answer' => 'One or two rooms',
                            'slug' =>   'one-or-two-rooms'
                        ],
                        [
                            'answer' => 'Three or four rooms',
                            'slug' =>   'three-or-four-rooms'
                        ]
                        ,
                        [
                            'answer' => 'Entire house',
                            'slug' =>   'entire-house'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 59,
                    'question' => 'What type of system do you have?',
                    'slug'     => 'what-type-of-system-do-you-have?',
                    'answers' => [
                        [
                            'answer' => 'Gas',
                            'slug' =>   'gas'
                        ],
                        [
                            'answer' => 'Water',
                            'slug' =>   'water'
                        ],
                        [
                            'answer' => 'Other or i am not sure',
                            'slug' =>   'other-or-i-am-not-sure'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 59,
                    'question' => 'Please describe your central heating job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Please provide as many details as possible about what you need doing to your radiator</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail<br>good-descriptions-attract-good-tradespeople.-please-provide-as-many-details-as-possible-about-what-you-need-doing-to-your-radiator',
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
