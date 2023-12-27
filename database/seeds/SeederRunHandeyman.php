<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunHandeyman extends Seeder
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

                    'job_category_id' => 58,
                    'question' =>  'Does your job include electrical works?',
                    'slug'     =>  'does-your-job-include-electrical-works?',
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

                    'job_category_id' => 58,
                    'question' =>  'What do you need an electricians help with?',
                    'slug'     =>  'what-do-you-need-an-electricians-help-with?',
                    'answers' => [
                        [
                            'answer' =>  'Rewiring',
                            'slug' =>    'rewiring'
                        ],
                        [
                            'answer' => 'Fuseboxes',
                            'slug' =>   'fuseboxes'
                        ],
                        [
                            'answer' => 'Electrical fittings & appliances',
                            'slug' =>   'electrical-fittings-&-appliances'
                        ],
                        [
                            'answer' => 'Safety check or certificate',
                            'slug' =>   'safety-check-or-certificate'
                        ],
                        [
                            'answer' => 'Electrical faults & repairs',
                            'slug' =>   'electrical-faults-&-repairs'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How much rewiring do you need?',
                    'slug'     =>  'how-much-rewiring-do-you-need?',
                    'answers' => [
                        [
                            'answer' =>  'Part of my property',
                            'slug' =>    'part-of-my-property'
                        ],
                        [
                            'answer' => 'Entire property',
                            'slug' =>   'entire-property'
                        ]


                    ]
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'Do you own the property?',
                    'slug'     =>  'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' =>  'Yes or I will',
                            'slug' =>    'yes-or-1-will'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How big is your property?',
                    'slug'     =>  'how-big-is-your-property?',
                    'answers' => [
                        [
                            'answer' =>  'Flat or 1 to 2 bed house',
                            'slug' =>    'flat-or-1-to-2-bed-house'
                        ],
                        [
                            'answer' => '3 to 4 bed house',
                            'slug' =>   '3-to-4-bed-house'
                        ],
                        [
                            'answer' => '5 bed house',
                            'slug' =>   '5-bed-house'
                        ]

                    ]
                ],


                [
                    'job_category_id' => 58,
                    'question' =>  'What type of fusebox job is it?',
                    'slug'     =>  'what-type-of-fusebox-job-is-it?',
                    'answers' => [
                        [
                            'answer' =>  'Fusebox replacement, in the same location',
                            'slug' =>    'fusebox-replacement,-in-the-same-location'
                        ],
                        [
                            'answer' => 'Fusebox replacement, in a different location',
                            'slug' =>   'fusebox-replacement,-in-a-different-location'
                        ],
                        [
                            'answer' => 'Brand new fusebox installation',
                            'slug' =>   'brand-new-fusebox-installation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ]
                ],



                [
                    'job_category_id' => 58,
                    'question' =>  'Is the fusebox for your main house, an outbuilding or garage?',
                    'slug'     =>  'is-the-fusebox-for-your-main-house,-an-outbuilding-or-garage',
                    'answers' => [
                        [
                            'answer' =>  'Main house',
                            'slug' =>    'main-house'
                        ],
                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage'
                        ]


                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What do you want installed?',
                    'slug'     =>  'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' =>  'Electrical fittings',
                            'slug' =>    'electrical-fittings'
                        ],
                        [
                            'answer' => 'Appliances',
                            'slug' =>   'appliances'
                        ],
                        [
                            'answer' => 'Security systems',
                            'slug' =>   'security-systems'
                        ],
                        [
                            'answer' => 'Boilers & heating',
                            'slug' =>   'Boilers & heating'
                        ]
                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What do you want installed?',
                    'slug'     =>  'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' =>  'Lights, including outdoors',
                            'slug' =>    'lights-including-outdoors'
                        ],
                        [
                            'answer' => 'Sockets / switches',
                            'slug' =>   'sockets-/-switches'
                        ],
                        [
                            'answer' => 'Extractor fans',
                            'slug' =>   'extractor-fans'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>   'smoke-alarms'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How many electrical fittings / appliances do you need installed? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Total number of switches, sockets, lights, etc.</span>',
                    'slug'     =>  'how-many-electrical-fittings-/-appliances-do-you-need-installed?-<br>-total-number-of-switches,-sockets,-lights,-etc.',
                    'answers' => [
                        [
                            'answer' =>  '1 to 5',
                            'slug' =>    '1-to-5'
                        ],
                        [
                            'answer' => '6 to 10',
                            'slug' =>   '6-to-10'
                        ],
                        [
                            'answer' => 'More than 10',
                            'slug' =>   'more-than-10'
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'If you are fitting a dual fuel appliance or switching from one energy source to an another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Jobs involving gas work will be sent to our Gas Safe registered tradespeople.</span>',
                    'slug'     =>  'if-you-are-fitting-a-dual-fuel-appliance-or-switching-from-one-energy-source-to-an-another-(e.g.-gas-to-electricity)-you-will-have-to-post-an-additional-job-under-gas-engineers-for-the-gas-work.<br>jobs-involving-gas-work-will-be-sent-to-our-gas-safe-registered-tradespeople',
                    'answers' => [
                        [
                            'answer' =>  'I understand',
                            'slug' =>    'i-understand'
                        ]
                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What type of security system?',
                    'slug'     =>  'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' =>  'Security alarm system',
                            'slug' =>     'security-alarm-system'
                        ],
                        [
                            'answer' => 'CCTV/Smart camera',
                            'slug' =>   'cctv-smart-camera'
                        ],
                        [
                            'answer' => 'Entry system',
                            'slug' =>   'entry-system'
                        ],
                        [
                            'answer' => 'smoke-alarms',
                            'slug' =>   'smoke-alarms'
                        ],
                        [
                            'answer' => 'Security lights',
                            'slug' =>   'security-lights'
                        ],
                        [
                            'answer' => 'Locks',
                            'slug' =>   'locks'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'What service do you require?',
                    'slug'     =>  'what-service-do-you-require',
                    'answers' => [
                        [
                            'answer' =>  'Installation',
                            'slug' =>    'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'Service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],

                [
                    'job_category_id' => 58,
                    'question' => 'What type of property is the camera for?',
                    'slug' =>     'what-type-of-property-is-the-camera-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What type of security camera service do you require?',
                    'slug'     =>  'what-type-of-security-camera-service-do-you-require',
                    'answers' => [
                        [
                            'answer' =>  'Installation',
                            'slug' =>    'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'Service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>   'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 58,
                    'question' => 'Have you purchased the system already?',
                    'slug' =>     'have-you-purchased-the-system-already',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'What type of property is the camera for?',
                    'slug' =>     'what-type-of-property-is-the-camera-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 58,
                    'question' => 'Describe your security system job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.</span>',
                    'slug' =>     'describe-your-security-system-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted.',

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
