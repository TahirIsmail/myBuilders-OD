<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunNotSure extends Seeder
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
                    'job_category_id' => 81,
                    'question' => 'Does your job involve any of these trades?',
                    'slug' =>     'does-your-job-involve-any-of-these-trades?',

                    'answers' => [

                        [
                            'answer' => 'Handyman<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Smaller jobs which can involve installation, assembly and repairs</span>',
                            'slug' =>   'handyman<br>smaller-jobs-which-can-involve-installation,-assembly-and-repairs'
                        ],
                        [
                            'answer' => 'Restoration & refurbishment<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Improve the existing space by upgrading house interior</span>',
                            'slug' =>   'restoration-&-refurbishment<br>improve-the-existing-space-by-upgrading-house-interior'
                        ],
                        [
                            'answer' => 'Conversions<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Convert an existing space for a different purpose, knocking down or putting up walls</span>',
                            'slug' =>   'conversions<br>convert-an-existing-space-for-a-different-purpose,-knocking-down-or-putting-up-walls'
                        ],
                        [
                            'answer' => 'I am still not sure',
                            'slug' =>   'i-am-still-not-sure'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'Does your job include electrical works?',
                    'slug' =>     'does-your-job-include-electrical-works?',

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
                    'job_category_id' => 81,
                    'question' => 'What do you need an electricians help with?',
                    'slug' =>     'what-do-you-need-an-electricians-help-with?',

                    'answers' => [

                        [
                            'answer' => 'Rewiring',
                            'slug' =>   'rewiring'
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
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'How much rewiring do you need?',
                    'slug' =>     'how-much-rewiring-do-you-need?',

                    'answers' => [

                        [
                            'answer' => 'Part of my property',
                            'slug' =>   'part-of-my-property'
                        ],
                        [
                            'answer' => 'Entire property',
                            'slug' =>   'entire-property'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',


                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],

                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'How big is your property?',
                    'slug'     => 'how-big-is-your-property?',
                    'answers' => [
                        [
                            'answer' => 'Flat or 1-2 bed house',
                            'slug' =>    'flat-or-1-2-bed-house'
                        ],

                        [
                            'answer' => '3-4 bed house',
                            'slug' =>   '3-4-bed-house',
                        ],

                        [
                            'answer' => 'More than 5 bed house',
                            'slug' =>    'more-than-5-bed-house',
                        ]
                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'What type of fusebox job is it?',
                    'slug'     => 'what-type-of-fusebox-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Fusebox replacement in the same location',
                            'slug' =>    'fusebox-replacement-in-the-same-location'
                        ],

                        [
                            'answer' => 'Fusebox replacement in a different location',
                            'slug' =>   'fusebox-replacement-in-a-different-location',
                        ],

                        [
                            'answer' => 'Brand new fusebox installation',
                            'slug' =>    'brand-new-fusebox-installation',
                        ],

                        [
                            'answer' =>  'Other',
                            'slug' =>    'other',
                        ]
                    ],
                ],



                [
                    'job_category_id' => 81,
                    'question' => 'Is the fusebox for your main house, an outbuilding or garage?',
                    'slug'     => 'is-the-fusebox-for-your-main-house,-an-outbuilding-or-garage?',
                    'answers' => [
                        [
                            'answer' => 'Main house',
                            'slug' =>    'main-house'
                        ],

                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage',
                        ],


                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'What do you want installed?',
                    'slug'     => 'what-do-you-want-installed?',
                    'answers' => [
                        [
                            'answer' => 'Electrical fittings',
                            'slug' =>    'electrical-fittings'
                        ],

                        [
                            'answer' => 'Appliances',
                            'slug' =>   'appliances',
                        ],

                        [
                            'answer' => 'Security systems',
                            'slug' =>   'security-systems',
                        ],
                        [
                            'answer' => 'Boilers & heating',
                            'slug' =>   'boilers-&-heating',
                        ],

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What do you want installed?',
                    'slug'     => 'what-do-you-want-installed?',
                    'answers' => [
                        [
                            'answer' => 'Lights, including outdoors',
                            'slug' =>   'lights,-including-outdoors'
                        ],

                        [
                            'answer' => 'Sockets / switches',
                            'slug' =>    'sockets-/-switches',
                        ],

                        [
                            'answer' => 'Extractor fans',
                            'slug' =>   'extractor-fans',
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>   'smoke-alarms',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ],

                    ],
                ],



                [
                    'job_category_id' => 81,
                    'question' => 'How many electrical fittings / appliances do you need installed?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Total number of switches, sockets, lights, etc.</span>',
                    'slug'     => 'how-many-electrical-fittings-/-appliances-do-you-need-installed?<br>total-number-of-switches,-sockets,-lights,-etc.',
                    'answers' => [
                        [
                            'answer' => '1 to 5',
                            'slug' =>   '1-to-5'
                        ],

                        [
                            'answer' => '6 to 10',
                            'slug' =>   '6-to-10'
                        ],

                        [
                            'answer' => 'More than 10',
                            'slug' =>   'More-than-10'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'If you are fitting a dual fuel appliance or switching from one energy source to an another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Jobs involving gas work will be sent to our Gas Safe registered tradespeople.</span>',
                    'slug'     => 'if-you-are-fitting-a-dual-fuel-appliance-or-switching-from-one-energy-source-to-an-another-(e.g.-gas-to-electricity)-you-will-have-to-post-an-additional-job-under-gas-engineers-for-the-gas-work.<br>jobs-involving-gas-work-will-be-sent-to-our-gas-safe-registered-tradespeople.',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>   'i-understand'
                        ],



                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Security alarm system',
                            'slug' =>  'security-alarm-system'
                        ],
                        [
                            'answer' => 'CCTV/Smart camera',
                            'slug' =>   'cctv/smart-camera'
                        ],
                        [
                            'answer' => 'Entry system',
                            'slug' =>   'entry-system'
                        ],
                        [
                            'answer' => 'Smoke alarms',
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
                        ],

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What service do you require?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>  'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'Wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Have you purchased the system already?',
                    'slug' =>     'have-you-purchased-the-system-already?',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'have-you-purchased-the-system-already?'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want,-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no,-i-need-help-deciding'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'What type of property is the system for?',
                    'slug' =>     'what-type-of-property-is-the-system-for',
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
                    'job_category_id' => 81,
                    'question' => 'What type of security camera service do you require?',
                    'slug' =>     'what-type-of-security-camera-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>  'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'Wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Have you purchased the camera already?',
                    'slug' =>     'have-you-purchased-the-camera-already?',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>  'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
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
                    'job_category_id' => 81,
                    'question' => 'Describe your security system job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.</span>',
                    'slug' =>     'describe-your-security-system-job-in-detail<br>good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted',
                ],

                [
                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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
                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
                    'question' =>  'What kind of appliance are you looking to have installed or replaced?',
                    'slug'     =>  'what-kind-of-appliance-are-you-looking-to-have-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' =>  'Gas boiler',
                            'slug' =>   'gas-boiler'
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
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

                    'job_category_id' => 81,
                    'question' =>  'Please describe your gas job <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Mention any appliances involved, including the make and model, and if anything needs to change with the existing pipework.</span>',
                    'slug'     =>  'please-describe-your-gas-job-<br>-good-descriptions-attract-good-tradespeople.-mention-any-appliances-involved,-including-the-make-and-model,-and-if-anything-needs-to-change-with-the-existing-pipework.',

                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What does your central heating job involve?',
                    'slug' =>     'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>  'boiler'
                        ],
                        [
                            'answer' => 'Radiators',
                            'slug' =>   'radiators'
                        ],
                        [
                            'answer' => 'Thermostat',
                            'slug' =>   'thermostat'
                        ],
                        [
                            'answer' => 'Underfloor heating',
                            'slug' =>   'underfloor-heating'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What type of underfloor heating do you need?',
                    'slug' =>     'what-type-of-underfloor-heating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Boiler supplied <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(wet)</span>',
                            'slug' =>   'boiler-supplied-(wet)'
                        ],
                        [
                            'answer' => 'Electrical <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(dry)</span>',
                            'slug' =>   'electrical-(dry)'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 81,
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
                        ],
                        [
                            'answer' => 'Entire house',
                            'slug' =>   'entire-house'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Please describe your central heating job in detail <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Please provide as many details as possible about what you need doing to your radiator.</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-please-provide-as-many-details-as-possible-about-what-you-need-doing-to-your-radiator.',

                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What do you need checked or certified?',
                    'slug' =>     'what-do-you-need-checked-or-certified?',
                    'answers' => [
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ],
                        [
                            'answer' => 'Multiple appliances or full property',
                            'slug' =>   'multiple-appliances-or-full-property'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Which best describes your issue?',
                    'slug' =>     'which-best-describes-your-issue?',
                    'answers' => [
                        [
                            'answer' => 'Simple<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. Item which trips the electrics identified, issue with single appliance or a few sockets</span>',
                            'slug' =>   'simple-e.g.-item-which-trips-the-electrics-identified-issue-with-single-appliance-or-a-few-sockets'
                        ],
                        [
                            'answer' => 'Complex<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. Multiple appliances affected, several issues</span>',
                            'slug' =>   'complex-e.g.-multiple-appliances-affected-several-issues'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Describe your electrical job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Is this a new installation or a repair? Where is the electrical job located in the property? Mention if you think new wiring will be needed.</span>',
                    'slug' =>     'describe-your-electrical-job-in-detail<br>good-descriptions-attract-good-tradespeople.-is-this-a-new-installation-or-a-repair?-where-is-the-electrical-job-located-in-the-property?-mention-if-you-think-new-wiring-will-be-needed.',

                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What type of job is it?',
                    'slug'     => 'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Fixtures / fittings<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. handrails, blinds, mirrors, shelves, TVs, etc.</span>',
                            'slug' => 'fixtures-/-fittings<br>e.g.-handrails,-blinds,-mirrors,-shelves,-tvs,-etc.'
                        ],
                        [
                            'answer' => 'Furniture assembling',
                            'slug' =>  'furniture-assembling',
                        ],
                        [
                            'answer' => 'Shed assembling',
                            'slug' =>   'shed-assembling'
                        ],
                        [
                            'answer' => 'Cleaning / powerwashing',
                            'slug' =>   'cleaning-/-powerwashing'
                        ],
                        [
                            'answer' => 'Carpentry / joinery',
                            'slug' =>   'carpentry-/-joinery'
                        ],
                        [
                            'answer' => 'Various small tasks',
                            'slug' => 'various-small-tasks'
                        ],
                        [
                            'answer' => 'Repairs',
                            'slug' =>   'repairs'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],






                [
                    'job_category_id' => 81,
                    'question' => 'How many fixtures / fittings?',
                    'slug' =>     'how-many-fixtures-/-fittings?',
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
                            'answer' => 'More than 6',
                            'slug' =>   'more-than-6'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What needs cleaning?',
                    'slug' =>     'what-needs-cleaning?',
                    'answers' => [
                        [
                            'answer' => 'Gutters, fascias or soffits',
                            'slug' =>   'gutters,-fascias-or-soffits'
                        ],
                        [
                            'answer' => 'Driveway',
                            'slug' =>  'driveway'
                        ],
                        [
                            'answer' => 'Patio / outdoors area',
                            'slug' =>   'patio-/-outdoors-area'
                        ]

                    ],
                ],





                [
                    'job_category_id' => 81,
                    'question' => 'Which of the following can a carpenter help you with?',
                    'slug' =>     'which-of-the-following-can-a-carpenter-help-you-with?',
                    'answers' => [
                        [
                            'answer' => 'Hang doors',
                            'slug' =>   'hang-doors'
                        ],
                        [
                            'answer' => 'Repair / alter doors',
                            'slug' =>  'repair-/-alter-doors'
                        ],
                        [
                            'answer' =>  'Door furniture',
                            'slug' =>    'door-furniture'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
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
                    'job_category_id' => 81,
                    'question' => 'How many tasks need doing?',
                    'slug' =>     'how-many-tasks-need-doing?',
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
                            'answer' => 'More than 6',
                            'slug' =>   'more-than-6'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'Describe your job for a handyman<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">A handyman can be skilled at a wide variety of tasks. Give as much detail as you can, including the number of items to be repaired or installed.</span>',
                    'slug' =>    'describe-your-job-for-a-handyman<br>a-handyman-can-be-skilled-at-a-wide-variety-of-tasks.-give-as-much-detail-as-you-can,-including-the-number-of-items-to-be-repaired-or-installed.',
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
                            'answer' => 'More than 6',
                            'slug' =>   'more-than-6'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'How extensive is your repair job?',
                    'slug' =>     'how-extensive-is-your-repair-job?',
                    'answers' => [
                        [
                            'answer' => 'Small repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. replace some blown brickwork</span>',
                            'slug' =>   'small-repair-<br>-e.g.-replace-some-blown-brickwork'
                        ],
                        [
                            'answer' => 'Medium repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. re-lay a few courses</span>',
                            'slug' =>   'medium-repair-<br>-e.g.-re-lay-a-few-courses'
                        ],
                        [
                            'answer' => 'Large repair <br> E.g. <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">rebuild wall section</span>',
                            'slug' =>   'large-repair-<br>-e.g.-rebuild-wall-section'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 81,
                    'question' => 'Please make sure you have read and understood the following:<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">This trade is for large jobs that require management and oversight. If you require multiple jobs that cover various trades, please post these separately in the appropriate trade categories.</span>',
                    'slug' =>     'please-make-sure-you-have-read-and-understood-the-following:<br>this-trade-is-for-large-jobs-that-require-management-and-oversight.-if-you-require-multiple-jobs-that-cover-various-trades,-please-post-these-separately-in-the-appropriate-trade-categories.',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>   'i-understand'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'Does your job involve changing the purpose or structure of a room?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. converting a garage or removing a wall to combine rooms</span>',
                    'slug' =>     'does-your-job-involve-changing-the-purpose-or-structure-of-a-room?<br>e.g.-converting-a-garage-or-removing-a-wall-to-combine-rooms',
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
                    'job_category_id' => 81,
                    'question' => 'How extensive is your conversion job?',
                    'slug' =>     'how-extensive-is-your-conversion-job',
                    'answers' => [
                        [
                            'answer' => 'Single room conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. join 2 rooms together, install necessary utilities</span>',
                            'slug' =>   'single-room-conversion<br>e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. convert small outbuilding to living space</span>',
                            'slug' =>   'small-garage-/-outbuilding-conversion<br>e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. convert a large detached garage into a self sufficient flat</span>',
                            'slug' =>   'multiple-rooms-or-large-outbuilding<br>e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. major conversion works to one or more property, including important structural changes</span>',
                            'slug' =>   'whole-property-conversion<br>e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 81,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'I will / purchase in progress',
                            'slug' =>   'i-will-/-purchase-in-progress'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'Select all the works that are required for your job:',
                    'slug' =>     'select-all-the-works-that-are-required-for-your-job:',
                    'answers' => [
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Central heating',
                            'slug' =>   'central-heating'
                        ],
                        [
                            'answer' => 'Plumbing',
                            'slug' =>   'plumbing'
                        ],

                        [
                            'answer' => 'Painting & decorating',
                            'slug' =>   'painting-&-decorating'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 81,
                    'question' => 'Please select what best describes your job',
                    'slug' =>     'please-select-what-best-describes-your-job',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion',
                            'slug' =>  'loft-conversion'
                        ],
                        [
                            'answer' => 'Converting an existing space <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a garage into a living space</span>',
                            'slug' =>   'converting-an-existing-space-<br>-e.g.-a-garage-into-a-living-space'
                        ],
                        [
                            'answer' => 'Wall alteration <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. knocking through a wall, installing a window / door, etc.</span>',
                            'slug' =>   'wall-alteration-<br>-e.g.-knocking-through-a-wall-installing-a-window/door-etc.'
                        ],
                        [
                            'answer' => 'Restoring or improving existing space <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. restoring a room or refurbishing a whole property</span>',
                            'slug' =>   'restoring-or-improving-existing-space-<br>-e.g.-restoring-a-room-or-refurbishing-a-whole-property'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What type of loft conversion do you want?',
                    'slug' =>     'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion with structural changes <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.</span>',
                            'slug' =>  'loft-conversion-with-structural-changes-<br>-requires-a-change-to-the-roof-structure-e.g.-dormers-hip-to-gable-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes) <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> No alterations to the roof shape or structure.</span>',
                            'slug' =>   'loft-conversion-(no-structural-changes)-<br>-no-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Creating an accessible space by boarding, decorating etc.</span>',
                            'slug' =>   'loft-conversion-for-storage-purposes-<br>-creating-an-accessible-space-by-boarding-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Add one or more windows to the roof, e.g. velux windows.</span>',
                            'slug' =>   'fit-a-skylight-<br>-add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug' =>     'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        [
                            'answer' => 'Detached',
                            'slug' =>  'detached'
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
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
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
                            'answer' => 'I will - purchase in progress',
                            'slug' =>   'i-will-purchase-in-progress'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 81,
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
                    'job_category_id' => 81,
                    'question' => 'Your builder will probably require plans <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.</span>',
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
                    'job_category_id' => 81,
                    'question' => 'What do you need doing in your loft?',
                    'slug' =>     'what-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Board out loft <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Board out and pull down ladder; making loft accessible and suitable for storage.</span>',
                            'slug' =>   'board-out-loft <br> board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.</span>',
                            'slug' =>   'boarding-plus-additional-work <br> making-loft-accessible-including-additional-work-such-as-a-velux,-painting-&-decorating,-fixed-staircase-etc.'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug' =>     'what-extra-work-do-you-need-doing-in-your-loft?',
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


                [
                    'job_category_id' => 81,
                    'question' => 'How extensive is your conversion job?',
                    'slug' =>     'how-extensive-is-your-conversion-job?',
                    'answers' => [
                        [
                            'answer' => 'Single room conversion<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> <br> e.g. join 2 rooms together, install necessary utilities</span>',
                            'slug' =>   'single-room-conversion <br> e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> <br> e.g. convert small outbuilding to living space</span>',
                            'slug' =>   'small-garage-/outbuilding-conversion <br> e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br> e.g. convert a large detached garage into a self sufficient flat</span>',
                            'slug' =>   'multiple-rooms-or-large-outbuilding <br> e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. major conversion works to one or more property, including important structural changes</span>',
                            'slug' =>   'whole-property-conversion <br> e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Select all the works that are required for your job:',
                    'slug' =>     'select-all-the-works-that-are-required-for-your-job:',
                    'answers' => [
                        [
                            'answer' => 'Central heating',
                            'slug' =>   'central-heating'
                        ],
                        [
                            'answer' => 'Plumbing',
                            'slug' =>   'plumbing'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Painting & decorating',
                            'slug' =>   'painting-&-decorating'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 81,
                    'question' => 'Which of the following best describes your wall alteration job?',
                    'slug' =>     'which-of-the-following-best-describes-your-wall-alteration-job?',
                    'answers' => [
                        [
                            'answer' => 'Window or door installation / replacement',
                            'slug' =>   'window-or-door-installation-/-replacement'
                        ],
                        [
                            'answer' => 'Wall removal',
                            'slug' =>   'wall-removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'Is it a load bearing wall?',
                    'slug' =>     'is-it-a-load-bearing-wall?',
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
                            'answer' => 'I don not know',
                            'slug' =>   'i-do-not-know'
                        ]

                    ],
                ],





                [
                    'job_category_id' => 81,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'I will,-purchase in progress',
                            'slug' =>   'i-will, purchase-in-progress'
                        ],
                        [
                            'answer' => 'No, I am posting on behalf of the property owner',
                            'slug' =>   'no,-i-am-posting-on-behalf-of-the-property-owner'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 81,
                    'question' => 'What type of job is it?',
                    'slug' =>     'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Small refurbishment <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. small project requiring a few days work</span>',
                            'slug' =>   'small-refurbishment <br> e.g.-small-project-requiring-a-few-days-work'
                        ],
                        [
                            'answer' => 'Large refurbishment <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. a large project that may take more than a week</span>',
                            'slug' =>   'large-refurbishment e.g.-a-large-project-that-may-take-more-than-a-week'
                        ],
                        [
                            'answer' => 'Full refurbishment <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. a complex project or large space that requires full refurbishment</span>',
                            'slug' =>   'full-refurbishment <br> e.g.-a-complex-project-or-large-space-that-requires-full-refurbishment'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'Describe your restoration / refurbishment project in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?</span>',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail<br>good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Describe your job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">No worries if you are still not sure. Outline key details about the job and we will make sure we find the right tradesperson to complete the job.</span>',
                    'slug' =>     'describe-your-job-in-detail<br>no-worries-if-you-are-still-not-sure.-outline-key-details-about-the-job-and-we-will-make-sure-we-find-the-right-tradesperson-to-complete-the-job.',
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
