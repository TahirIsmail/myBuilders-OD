<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunElectricians  extends Seeder
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
                    'job_category_id' => 49,
                    'question' => 'What do you need an electricians help with?',
                    'slug' =>     'what-do-you-need-an-electricians-help-with',
                    'answers' => [
                        [
                            'answer' => 'Rewiring',
                            'slug' =>   'rewiring'
                        ],
                        [
                            'answer' => 'fuseboxes',
                            'slug' =>   'fuseboxes'
                        ],
                        [
                            'answer' => 'Electrical fittings & appliances',
                            'slug' =>   'electrical-fittings-and-appliances'
                        ],
                        [
                            'answer' => 'Safety check or certificate',
                            'slug' =>   'safety-check-or-certificate'
                        ],
                        [
                            'answer' => 'Electrical faults & repairs',
                            'slug' =>   'electrical-faults-and-repairs'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'Other'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'How much rewiring do you need?',
                    'slug' =>     'how-much-rewiring-do-you-need',
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
                    'job_category_id' => 49,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property',
                    'answers' => [
                        [
                            'answer' => 'Yes or I will',
                            'slug' =>   'yes-or-i-will'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'How big is your property?',
                    'slug' =>     'do-you-own-the-property',
                    'answers' => [
                        [
                            'answer' => 'Flat or 1-2 bed house',
                            'slug' =>   'flat-or-1-2-bed-house'
                        ],
                        [
                            'answer' => '3-4 bed house',
                            'slug' =>   '3-4-bed-house'
                        ],
                        [
                            'answer' => '5+ bed house',
                            'slug' =>   '5+-bed-house'


                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of fusebox job is it?',
                    'slug' =>     'what-type-of-fusebox-job-is-it',
                    'answers' => [
                        [
                            'answer' => 'Fusebox replacement - in the same location',
                            'slug' =>   'fusebox-replacement-in-the-same-location'
                        ],
                        [
                            'answer' => 'Fusebox replacement in a different location',
                            'slug' =>   'fusebox-replacement-in-a-different-location'
                        ],
                        [
                            'answer' => 'Brand new fusebox installation',
                            'slug' =>   'brand-new-fusebox-installation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'


                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Is the fusebox for your main house, an outbuilding or garage?',
                    'slug' =>     'is-the-fusebox-for-your-main-house-an-outbuilding-or-garage',
                    'answers' => [
                        [
                            'answer' => 'Main house',
                            'slug' =>   'main-house'
                        ],
                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'What do you want installed?',
                    'slug' =>     'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' => 'Electrical fittings',
                            'slug' =>    'electrical-fittings'
                        ],
                        [
                            'answer' => 'Appliances',
                            'slug' =>   'appliances'
                        ],
                        [
                            'answer' => 'Security systems',
                            'slug' =>  'security-systems'
                        ],
                        [
                            'answer' => 'Boilers & heating',
                            'slug' =>  'boilers-and-heating'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What do you want installed?',
                    'slug' =>     'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' => 'Lights, including outdoors',
                            'slug' =>    'lights-including-outdoors'
                        ],
                        [
                            'answer' => 'Sockets / switches',
                            'slug' =>  'sockets-/-switches'
                        ],
                        [
                            'answer' => 'Extractor fans',
                            'slug' =>  'extractor-fans'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>  'smoke-alarms'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'How many electrical fittings / appliances do you need installed? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Total number of switches, sockets, lights, etc.</span>',
                    'slug' =>     'how-many-electrical-fittings-/-appliances-do-you-need-installed?-<br>-total-number-of-switches,-sockets,-lights,-etc',
                    'answers' => [
                        [
                            'answer' => '1 to 5',
                            'slug' =>    '1-to-5'
                        ],
                        [
                            'answer' => '6 to 10',
                            'slug' =>  '6-to-10'
                        ],
                        [
                            'answer' => 'more than 10',
                            'slug' =>  'more-than-10'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'If you are fitting a dual fuel appliance or switching from one energy source to another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Jobs involving gas work will be sent to our Gas Safe registered tradespeople.</span>',
                    'slug' =>     'if-you-are-fitting-a-dual-fuel-appliance-or-switching-from-one-energy-source-to-another-(e.g.-gas-to-electricity)-you-will-have-to-post-an-additional-job-under-gas-engineers-for-the-gas-work.<br>-jobs-involving-gas-work-will-be-sent-to-our-gas-safe-registered-tradespeople',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>    'i-understand'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' => 'Security alarm system',
                            'slug' =>    'security-alarm-system'
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
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What service do you require?',
                    'slug' =>     'what-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service/Repair',
                            'slug' =>  'service/repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
                    'question' => 'What type of security camera service do you require?',
                    'slug' =>     'what-type-of-security-camera-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service/Repair',
                            'slug' =>  'service/repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of camera  system?',
                    'slug' =>     'what-type-of-camera-system',
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
                    'job_category_id' => 49,
                    'question' => 'Have you purchased the camera  already?',
                    'slug' =>     'have-you-purchased-the-camera-already',
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
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
                    'question' => 'Describe your security system job in detail <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.</span>',
                    'slug' =>     'describe-your-security-system-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted.',
                    
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'Is there a possibility that your job involves gas pipework? <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Jobs that involve gas will be sent to our Gas Safe registered tradespeople</span>',
                    'slug' =>     'is-there-a-possibility-that-your-job-involves-gas-pipework?-<br>-jobs-that-involve-gas-will-be-sent-to-our-gas-safe-registered-tradespeople',
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
                    'job_category_id' => 49,
                    'question' => 'What does your gas job involve?',
                    'slug' =>     'what-does-your-gas-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Gas safety check',
                            'slug' =>   'gas-safety-check'
                        ],
                        [
                            'answer' => 'Service boiler or appliance',
                            'slug' =>   'service-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Install or replace boiler or appliance',
                            'slug' =>   'install-or-replace-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Move or remove boiler or appliance',
                            'slug' =>   'move-or-remove-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Pipework only',
                            'slug' =>   'pipework-only'
                        ]
                        ,
                        [
                            'answer' => 'Problem or repair',
                            'slug' =>   'problem-or-repair'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What do you need certified?',
                    'slug' =>     'what-do-you-need-certified',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>   'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'Would you also like the boiler serviced?',
                    'slug' =>     'would-you-also-like-the-boiler-serviced',
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
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
                    'question' => 'What do you need serviced?',
                    'slug' =>     'what-do-you-need-serviced',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>   'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'Would you also like the appliances serviced?',
                    'slug' =>     'would-you-also-like-the-appliances-serviced',
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
                    'job_category_id' => 49,
                    'question' => 'What kind of appliance are you looking to have installed or replaced?',
                    'slug' =>     'what-kind-of-appliance-are-you-looking-to-have-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' => 'Gas boiler',
                            'slug' =>   'gas-boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ]
                        ,
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 49,
                    'question' => 'Do you want to remove a gas boiler?',
                    'slug' =>  'do-you-want-to-remove-a-gas-boiler?',
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
                    'job_category_id' => 49,
                    'question' => 'What needs to be changed with the pipework?',
                    'slug' =>     'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Disconnect or cap pipework',
                            'slug' =>  'disconnect-or-cap-pipework'
                        ],
                        [
                            'answer' => 'Install or alter pipework',
                            'slug' =>    'Install or alter pipework'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 49,
                    'question' => 'What appliance needs repairing?',
                    'slug' =>     'what-appliance-need-repairing?',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>  'boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Gas fireplace',
                            'slug' =>   'gas-fireplace'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What does your central heating job involve?',
                    'slug' =>     'what-dose-your-centarl=heating-job-involve?',
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
                        ]
                        ,
                        [
                            'answer' => 'Underfloor heating',
                            'slug' =>   'underfloor-heating'
                        ]
                        ,
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
                    'question' => 'Please describe your central heating job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Please provide as many details as possible about what you need doing to your radiator.</span>',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-please-provide-as-many-details-as-possible-about-what-you-need-doing-to-your-radiator.',
                   
                ],


                 [
                    'job_category_id' => 49,
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
                        ]
                        ,
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
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
                    'job_category_id' => 49,
                    'question' => 'Describe your electrical job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Is this a new installation or a repair? Where is the electrical job located in the property? Mention if you think new wiring will be needed.</span>',
                    'slug' =>     'describe-your-electrical-job-in-detail<br>good-descriptions-attract-good-tradespeople.-is-this-a-new-installation-or-a-repair?-where-is-the-electrical-job-located-in-the-property?-mention-if-you-think-new-wiring-will-be-needed.',
                   
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
