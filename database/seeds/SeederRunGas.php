<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunGas extends Seeder
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

                    'job_category_id' => 55,
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

                    'job_category_id' => 55,
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

                    'job_category_id' => 55,
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
                    'job_category_id' => 55,
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
                    'job_category_id' => 55,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'Would you also like the appliance serviced?',
                    'slug'     =>  'would-you-also-like-the-appliance-serviced?',
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

                    'job_category_id' => 55,
                    'question' =>  'What do you need serviced?',
                    'slug'     => 'what-do-you-need-serviced?',
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

                    'job_category_id' => 55,
                    'question' =>  'Would you also like the appliance certified?',
                    'slug'     =>  'would-you-also-like-the-appliance-certified?',
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

                    'job_category_id' => 55,
                    'question' =>  'What kind of appliance are you looking to have installed or replaced?',
                    'slug'     =>  'would-you-also-like-the-appliance-certified?',
                    'answers' => [
                        [
                            'answer' =>  'Gas boiler',
                            'slug' =>    'gas-boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]

                    ]
                ],

                [

                    'job_category_id' => 55,
                    'question' =>  'Do you want to remove a gas boiler?',
                    'slug'     =>  'do-you-want-to-remove-a-gas-boiler?',
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

                    'job_category_id' => 55,
                    'question' =>  'What needs to be changed with the pipework?',
                    'slug'     =>  'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' =>  'Disconnect or cap pipework',
                            'slug' =>    'disconnect-or-cap-pipework'
                        ],
                        [
                            'answer' => 'Install or alter pipework',
                            'slug' =>   'install-or-alter-pipework'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'What appliance needs repairing?',
                    'slug'     =>  'what-appliance-needs-repairing?',
                    'answers' => [
                        [
                            'answer' =>  'Boiler',
                            'slug' =>    'boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Gas fireplace',
                            'slug' =>   'gas-fireplace'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'Please describe your gas job <br> Good descriptions attract good tradespeople. Mention any appliances involved, including the make and model, and if anything needs to change with the existing pipework.',
                    'slug'     =>  'please-describe-your-gas-job-<br>-good-descriptions-attract-good-tradespeople.-mention-any-appliances-involved,-including-the-make-and-model,-and-if-anything-needs-to-change-with-the-existing-pipework.',

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
