<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class QuestionSeederV3 extends Seeder
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
                            'answer' => 'Radiators<br>Radiators installation, repairs, etc.',
                            'slug' =>   'radiators<br>radiators-installation,-repairs,-etc.'
                        ],
                        [
                            'answer' => 'Boilers<br>Central heating systems, boiler installation, etc.',
                            'slug' =>   'boilers<br>central-heating-systems,-boiler-installation,-etc.'
                        ],
                        [
                            'answer' => 'Appliances<br>Dishwasher, washing machine, etc.',
                            'slug' =>   'appliances<br>dishwasher,-washing-machine,-etc.'
                        ],
                        [
                            'answer' => 'Fixtures<br>Shower, toilet, sink, etc.',
                            'slug' =>   'fixtures<br>shower,-toilet,-sink,-etc.'
                        ],
                        [
                            'answer' => 'Pipework, taps & drainage<br>Pipe alterations, blockages, leaks, macerator, etc.',
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
                            'answer' => 'Minor issue (e.g. leaking, bleeding, banging)',
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
                    'question' => 'Please describe your central heating job in detail<br>Good descriptions attract good tradespeople. What does your job involve?',
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
                    'question' => 'Do you require any additional works?<br>E.g. painting, tiling, electrics, lighting, new floors or ceilings.',
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
                    'slug'     => 'how-can-a-plumber-help-you-with-your-fixtures?',
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
                    'question' => 'Is there a possibility that your job involves gas pipework?<br>Jobs that involve gas will be sent to our Gas Safe registered tradespeople',
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
                            'answer' => 'Small plumbing job<br>e.g. install an outdoor tap, or drainage for a sink',
                            'slug' =>   'small-plumbing-job<br>e.g.-install-an-outdoor-tap,-or-drainage-for-a-sink'
                        ],
                        [
                            'answer' => 'New room<br>e.g. plumbing for a new bathroom or kitchen',
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
                    'slug' =>     'what-do-you-need',
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


                [
                    'job_category_id' => 7,
                    'question' => 'Please make sure you have read and understood the following:<br>This trade is for large jobs that require management and oversight. If you require multiple jobs that cover various trades, please post these separately in the appropriate trade categories.',
                    'slug' =>     'please-make-sure-you-have-read-and-understood-the-following:<br>this-trade-is-for-large-jobs-that-require-management-and-oversight.-if-you-require-multiple-jobs-that-cover-various-trades,-please-post-these-separately-in-the-appropriate-trade-categories.',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>   'i-understand'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 7,
                    'question' => 'Does your job involve changing the purpose or structure of a room?<br>e.g. converting a garage or removing a wall to combine rooms',
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
                    'job_category_id' => 7,
                    'question' => 'How extensive is your conversion job?',
                    'slug' =>     'how-extensive-is-your-conversion-job',
                    'answers' => [
                        [
                            'answer' => 'Single room conversion<br>e.g. join 2 rooms together, install necessary utilities',
                            'slug' =>   'single-room-conversion<br>e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion<br>e.g. convert small outbuilding to living space',
                            'slug' =>   'small-garage-/-outbuilding-conversion<br>e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding<br>e.g. convert a large detached garage into a self sufficient flat',
                            'slug' =>   'multiple-rooms-or-large-outbuilding<br>e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion<br>e.g. major conversion works to one or more property, including important structural changes',
                            'slug' =>   'whole-property-conversion<br>e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 7,
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
                    'job_category_id' => 7,
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
                    'job_category_id' => 7,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 7,
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
                    'job_category_id' => 7,
                    'question' => 'What type of job is it?',
                    'slug' =>     'what-type-of-job-is-it',
                    'answers' => [
                        [
                            'answer' => 'Small refurbishment<br>e.g. no more than one room needs refurbing',
                            'slug' =>   'small-refurbishment<br>e.g.-no-more-than-one-room-needs-refurbing'
                        ],
                        [
                            'answer' => 'Large refurbishment<br>e.g. more than one room or multiple jobs throughout property',
                            'slug' =>   'large-refurbishment<br>e.g.-more-than-one-room-or-multiple-jobs-throughout-property'
                        ],
                        [
                            'answer' => 'Full refurbishment<br>e.g. whole house needs refurbishing',
                            'slug' =>   'full-refurbishment<br>e.g.-whole-house-needs-refurbishing'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 7,
                    'question' => 'Describe your restoration / refurbishment project in detail<br>Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail<br>good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'What roofing service do you require?',
                    'slug' =>     'what-roofing-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'New or replacement roof',
                            'slug' =>   'new-or-replacement-roof'
                        ],
                        [
                            'answer' => 'Roof repair or assessment',
                            'slug' =>   'roof-repair-or-assessment'
                        ],
                        [
                            'answer' => 'Chimney work',
                            'slug' =>   'chimney-work'
                        ],
                        [
                            'answer' => 'Something else',
                            'slug' =>   'something-else'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof do you need?',
                    'slug' =>     'what-type-of-roof-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Pitched roof',
                            'slug' =>   'pitched-roof'
                        ],
                        [
                            'answer' => 'flat-roof',
                            'slug' =>   'flat-roof'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 72,
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


                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof is it?',
                    'slug' =>     'what-type-of-roof-is-it',
                    'answers' => [
                        [
                            'answer' => 'Porch or outhouse',
                            'slug' =>   'porch-or-outhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],





                [
                    'job_category_id' => 72,
                    'question' => 'Where are you looking to install or replace the roof?',
                    'slug' =>     'where-are-you-looking-to-install-or-replace-the-roof',
                    'answers' => [
                        [
                            'answer' => 'Porch or outhouse',
                            'slug' =>   'porch-or-outhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'What material do you want for the new roof?',
                    'slug' =>     'what-material-do-you-want-for-the-new-roof',
                    'answers' => [
                        [
                            'answer' => 'GRP (fibreglass)',
                            'slug' =>   'grp-(fibreglass)'
                        ],
                        [
                            'answer' => 'EPDM (rubber membrane)',
                            'slug' =>   'epdm-(rubber-membrane)'
                        ],
                        [
                            'answer' => 'Felt or bitumen',
                            'slug' =>   'felt-or-bitumen'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
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

                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof is it?',
                    'slug' =>     'what-type-of-roof-is-it',
                    'answers' => [
                        [
                            'answer' => 'Pitched roof',
                            'slug' =>   'pitched-roof'
                        ],
                        [
                            'answer' => 'Flat roof',
                            'slug' =>   'flat-roof'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'What can a roofer help you with?',
                    'slug' =>     'what-can-a-roofer-help-you-with',
                    'answers' => [
                        [
                            'answer' => 'leak',
                            'slug' =>   'leak'
                        ],
                        [
                            'answer' => 'Tiling repairs',
                            'slug' =>   'tiling-repairs'
                        ],
                        [
                            'answer' => 'Roof structure',
                            'slug' =>   'roof-structure'
                        ],

                        [
                            'answer' => 'Other repair or assessment',
                            'slug' =>   'other-repair-or-assessment'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'How extensive is the repair?',
                    'slug' =>     'how-extensive-is-the-repair?',
                    'answers' => [
                        [
                            'answer' => 'A single tile',
                            'slug' =>   'a-single-tile'
                        ],
                        [
                            'answer' => '2 to 5 tiles',
                            'slug' =>   '2-to-5-tiles'
                        ],
                        [
                            'answer' => '6 to 15 tiles',
                            'slug' =>   '6-to-15-tiles'
                        ],

                        [
                            'answer' => '16 to 30 tiles',
                            'slug' =>   '16-to-30-tiles'
                        ],

                        [
                            'answer' => 'More than 30 tiles',
                            'slug' =>   'more-than-30-tiles'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'What is the roof material?',
                    'slug' =>     'what-is-the-roof-material?',
                    'answers' => [
                        [
                            'answer' => 'GRP membrane',
                            'slug' =>   'grp-membrane'
                        ],
                        [
                            'answer' => 'Fibreglass',
                            'slug' =>   'fibreglass'
                        ],
                        [
                            'answer' => 'Felt or bitumen',
                            'slug' =>   'felt-or-bitumen'
                        ],

                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],


                    ],
                ],


                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof are you looking to repair?',
                    'slug' =>     'what-type-of-roof-are-you-looking-to-repair?',
                    'answers' => [
                        [
                            'answer' => 'Porch or summerhouse',
                            'slug' =>   'porch-or-summerhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What chimney work needs doing?',
                    'slug' =>     'what-chimney-work-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Install or rebuild new chimney',
                            'slug' =>   'install-or-rebuild-new-chimney'
                        ],
                        [
                            'answer' => 'Remove an existing chimney',
                            'slug' =>   'remove-an-existing-chimney'
                        ],
                        [
                            'answer' => 'Repair or repoint my chimney',
                            'slug' =>   'repair-or-repoint-my-chimney'
                        ],
                        [
                            'answer' => 'Chimney capping',
                            'slug' =>   'chimney-capping'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'Describe your roofing job in detail<br>Good descriptions attract good tradespeople. Are you replacing an existing roof or making a repair? Describe the roof type and shape. What type of roofing material would you prefer? Include the approximate age of the current roof if you know it.',
                    'slug' =>     'describe-your-roofing-job-in-detail<br>good-descriptions-attract-good-tradespeople.-are-you-replacing-an-existing-roof-or-making-a-repair?-describe-the-roof-type-and-shape.-what-type-of-roofing-material-would-you-prefer?-include-the-approximate-age-of-the-current-roof-if-you-know-it.',
                ],


                [
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
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
                            'slug' =>   'entry-system'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
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
                    'job_category_id' => 73,
                    'question' => 'Describe your security system job in detail<br>Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.',
                    'slug' =>     'describe-your-security-system-job-in-detail<br>good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted',
                ],

                [
                    'job_category_id' => 74,
                    'question' => 'What type of masonry service do you require?',
                    'slug' =>     'what-type-of-property-is-the-camera-for',
                    'answers' => [
                        [
                            'answer' => 'Building',
                            'slug' =>   'building'
                        ],
                        [
                            'answer' => 'Repairing',
                            'slug' =>   'repairing'
                        ],
                        [
                            'answer' => 'Repointing',
                            'slug' =>   'repointing'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you want?',
                    'slug' =>    'what-type-of-stonework-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar <br> Any type of finely dressed, shaped stone',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<br>Irregular shaped, non-dressed stone, built with mortar',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br>Irregular shaped stone boundary walls, built without mortar',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 74,
                    'question' => 'How large is the job?',
                    'slug' =>     'how-large-is-the-job?',
                    'answers' => [
                        [
                            'answer' => 'Small<br>E.g. garden walls, chimney, section of wall, etc.',
                            'slug' =>   'small<br>e.g.-garden-walls,-chimney,-section-of-wall,-etc.'
                        ],
                        [
                            'answer' => 'Medium<br>E.g. single wall, multiple areas, garage or outbuilding, etc.',
                            'slug' =>   'medium<br>e.g.-single-wall,-multiple-areas,-garage-or-outbuilding,-etc.'
                        ],
                        [
                            'answer' => 'Large<br>Multiple walls',
                            'slug' =>   'large<br>multiple-walls'
                        ],
                        [
                            'answer' => 'X-Large<br>Whole property',
                            'slug' =>   'x-large<br>whole-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 74,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you need repaired?',
                    'slug' =>     'what-type-of-stonework-do-you-need-repaired?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar <br> Any type of finely dressed, shaped stone',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<br>Irregular shaped, non-dressed stone, built with mortar',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br>Irregular shaped stone boundary walls, built without mortar',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you need repointed?',
                    'slug' =>     'what-type-of-stonework-do-you-need-repointed?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar <br> Any type of finely dressed, shaped stone',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<br>Irregular shaped, non-dressed stone, built with mortar',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br>Irregular shaped stone boundary walls, built without mortar',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 74,
                    'question' => 'Describe your stonemasonry job in detail<br>E.g. Rebuild stone wall at front of property. Approx 8m long and 1m high. The stone is still on site...',
                    'slug' =>     'describe-your-stonemasonry-job-in-detail<br>e.g.-rebuild-stone-wall-at-front-of-property.-approx-8m-long-and-1m-high.-the-stone-is-still-on-site...',
                ],



                [
                    'job_category_id' => 76,
                    'question' => 'What does your tiling job involve?',
                    'slug' =>     'what-does-your-tiling-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'New or replacement tiles',
                            'slug' =>   'new-or-replacement-tiles'
                        ],
                        [
                            'answer' => 'Repair / regrout tiles',
                            'slug' =>   'repair-/-regrout-tiles'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 76,
                    'question' => 'How many square metres need tiling?<br>We do not need an exact size, but please provide your best estimate...',
                    'slug' =>     'how-many-square-metres-need-tiling?<br>we-do-not-need-an-exact-size,-but-please-provide-your-best-estimate...',
                    'answers' => [
                        [
                            'answer' => 'Less than 2m²',
                            'slug' =>  'less-than-2m²'
                        ],
                        [
                            'answer' => '2 - 14m²',
                            'slug' =>   '2-14m²'
                        ],
                        [
                            'answer' => '15 - 30m²',
                            'slug' =>    '15-30m²'
                        ],
                        [
                            'answer' => '31 - 50m²',
                            'slug' =>  '31-50m²'
                        ],
                        [
                            'answer' => 'Over 50m²',
                            'slug' =>   'over-50m²'
                        ],
                        [
                            'answer' => 'Commercial or project<br>e.g. involves multiple large rooms or properties',
                            'slug' =>   'commercial-or-project-e.g.-involves-multiple-large-rooms-or-properties'
                        ],
                        [
                            'answer' => 'I do not know',
                            'slug' =>    'i-do-not-know'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 76,
                    'question' => 'Will you supply the tiles?',
                    'slug' =>     'will-you-supply-the-tiles?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 76,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],



                [
                    'job_category_id' => 76,
                    'question' => 'Roughly, how big is the affected area?',
                    'slug' =>     'roughly-how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small (less than 2m²)<br>A small area needs repairing and / or regrouting',
                            'slug' =>   'small-(less-than-2m²)<br>a-small-area-needs-repairing-and-/-or-regrouting'
                        ],
                        [
                            'answer' => 'Large (2m² or more)<br>Significant damage to more than a few tiles',
                            'slug' =>   'large-(2m²-or-more)<br>significant-damage-to-more-than-a-few-tiles'
                        ]
                    ],
                ],







                [
                    'job_category_id' => 76,
                    'question' => 'How would you describe the job?<br>We do not need an exact size, but please provide your best estimate..',
                    'slug' =>     'how-would-you-describe-the-job?<br>we-do-not-need-an-exact-size,-but-please-provide-your-best-estimate..',
                    'answers' => [
                        [
                            'answer' => 'Extra small<br>e.g. a few tiles for a splashback, doorstep or fireplace',
                            'slug' =>   'extra-small<br>e.g.-a-few-tiles-for-a-splashback,-doorstep-or-fireplace'
                        ],
                        [
                            'answer' => 'Small<br>e.g. a kitchen, bathroom, or hallway floor; a kitchen splashback or a small bathroom wall',
                            'slug' =>   'small<br>e.g.-a-kitchen,-bathroom,-or-hallway-floor;-a-kitchen-splashback-or-a-small-bathroom-wall'
                        ],
                        [
                            'answer' => 'Medium<br>e.g. bathroom walls, bathroom/kitchen floor plus a splashback, or floors of two rooms',
                            'slug' =>   'medium<br>e.g.-bathroom-walls,-bathroom/kitchen-floor-plus-a-splashback,-or-floors-of-two-rooms'
                        ],
                        [
                            'answer' => 'Large<br>e.g. a full bathroom; walls and floors, or floors across several rooms',
                            'slug' =>   'large<br>e.g.-a-full-bathroom;-walls-and-floors,-or-floors-across-several-rooms'
                        ],
                        [
                            'answer' => 'Extra large<br>e.g. multiple bathrooms need tiling or tiling throughout for a new build or refurbishment',
                            'slug' =>   'extra-large<br>e.g.-multiple-bathrooms-need-tiling-or-tiling-throughout-for-a-new-build-or-refurbishment'
                        ],
                        [
                            'answer' => 'Project or commercial<br>e.g. a large tiling job involving multiple rooms or properties',
                            'slug' =>   'project-or-commercial<br>e.g.-a-large-tiling-job-involving-multiple-rooms-or-properties'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 78,
                    'question' => 'What type of tree surgery service do you require?',
                    'slug' =>     'what-type-of-tree-surgery-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Trimming or topping',
                            'slug' =>   'trimming-or-topping'
                        ],
                        [
                            'answer' => 'Cutting down (felling)',
                            'slug' =>   'cutting-down-(felling)'
                        ],
                        [
                            'answer' => 'Stump removal only',
                            'slug' =>   'stump-removal-only'
                        ],
                        [
                            'answer' => 'Diagnosis / Assessment',
                            'slug' =>   'diagnosis-assessment'
                        ],
                        [
                            'answer' => 'Bushes, or other gardening tasks',
                            'slug' =>   'bushes,-or-other-gardening-tasks'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 78,
                    'question' => 'How many trees are involved?',
                    'slug' =>     'how-many-trees-are-involved?',
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
                            'answer' => '4 or more',
                            'slug' =>   '4-or-more'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 78,
                    'question' => 'How large is the tree?',
                    'slug' =>     'how-large-is-the-tree?',
                    'answers' => [
                        [
                            'answer' => 'Small  up to 3m (9 ft)',
                            'slug' =>   'small-up-to-3m-(9-ft)'
                        ],
                        [
                            'answer' => 'Medium  up to 8m (26 ft)',
                            'slug' =>   'medium-up-to-8m-(26-ft)'
                        ],
                        [
                            'answer' => 'Large  over 8m (over 26 ft)',
                            'slug' =>   'large-over-8m-(over-26-ft)'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 78,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'What is the height of the tallest tree?<br>Do not worry if you do not know the exact height, we only need a rough estimate',
                    'slug' =>     'what-is-the-height-of-the-tallest-tree?<br>do-not-worry-if-you-do-not-know-the-exact-height,-we-only-need-a-rough-estimate',
                    'answers' => [
                        [
                            'answer' => 'Small  up to 3m (9 ft)',
                            'slug' =>   'small-up-to-3m-(9-ft)'
                        ],
                        [
                            'answer' => 'Medium  up to 8m (26 ft)',
                            'slug' =>   'medium-up-to-8m-(26-ft)'
                        ],
                        [
                            'answer' => 'Large  over 8m (over 26 ft)',
                            'slug' =>   'large-over-8m-(over-26-ft)'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 78,
                    'question' => 'How many trees need to be cut down?',
                    'slug' =>     'how-many-trees-need-to-be-cut-down?',
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
                            'answer' => '3 or more',
                            'slug' =>   '3-or-more'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'How many stumps do you need removed?',
                    'slug' =>     'how-many-stumps-do-you-need-removed?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 stumps',
                            'slug' =>   '1-to-2-stumps'
                        ],
                        [
                            'answer' => '3 or more stumps',
                            'slug' =>   '3-or-more-stumps'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],



                [
                    'job_category_id' => 78,
                    'question' => 'Describe your gardening job in detail<br>Good descriptions attract good tradespeople. Provide a detailed description of the project including how many different materials you intend to use in what areas of the garden.',
                    'slug' =>     'describe-your-gardening-job-in-detail<br>good-descriptions-attract-good-tradespeople.-provide-a-detailed-description-of-the-project-including-how-many-different-materials-you-intend-to-use-in-what-areas-of-the-garden.',
                ],

                [
                    'job_category_id' => 78,
                    'question' => 'How many stumps do you need removed?',
                    'slug' =>     'how-many-stumps-do-you-need-removed?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 stumps',
                            'slug' =>   '1-to-2-stumps'
                        ],
                        [
                            'answer' => '3 or more stumps',
                            'slug' =>   '3-or-more-stumps'
                        ]

                    ],
                ],



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
                            'answer' => 'New doors (internal or external)',
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
                            'answer' => 'Single door (standard)',
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
                            'answer' => 'Sliding door<br>e.g. Bypass doors, pocket doors, barn doors, etc.',
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
                            'answer' => 'Standard door(s)<br>E.g. hollow core',
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
                    'question' => 'What type of doors need replacing? (select all that apply)',
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
                    'question' => 'What type of doors need replacing? (select all that apply)',
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
                    'question' => 'Describe your window fitting job in detail<br>Good descriptions attract good tradespeople. Mention the property type and age. Is any special glazing required (e.g. frosted bathroom windows)?',
                    'slug' =>     'describe-your-window-fitting-job-in-detail<br>good-descriptions-attract-good-tradespeople.-mention-the-property-type-and-age.-is-any-special-glazing-required-(e.g.-frosted-bathroom-windows)?',
                ],





                [
                    'job_category_id' => 81,
                    'question' => 'Does your job involve any of these trades?',
                    'slug' =>     'does-your-job-involve-any-of-these-trades?',

                    'answers' => [

                        [
                            'answer' => 'Handyman<br>Smaller jobs which can involve installation, assembly and repairs',
                            'slug' =>   'handyman<br>smaller-jobs-which-can-involve-installation,-assembly-and-repairs'
                        ],
                        [
                            'answer' => 'Restoration & refurbishment<br>Improve the existing space by upgrading house interior',
                            'slug' =>   'restoration-&-refurbishment<br>improve-the-existing-space-by-upgrading-house-interior'
                        ],
                        [
                            'answer' => 'Conversions<br>Convert an existing space for a different purpose, knocking down or putting up walls',
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
                    'question' => 'What do you need an electrician’s help with?',
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
                            'answer' => 'Fusebox replacement - in the same location',
                            'slug' =>    'fusebox-replacement-in-the-same-location'
                        ],

                        [
                            'answer' => 'Fusebox replacement - in a different location',
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
                    'question' => 'How many electrical fittings / appliances do you need installed?<br>Total number of switches, sockets, lights, etc.',
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
                    'question' => 'If you are fitting a dual fuel appliance or switching from one energy source to an another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br>Jobs involving gas work will be sent to our Gas Safe registered tradespeople.',
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
                            'slug' =>   'entry-system'
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
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'commercial-property'
                        ]
                        ,
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
                            'slug' =>   'entry-system'
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
                    'question' => 'Describe your security system job in detail<br>Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.',
                    'slug' =>     'describe-your-security-system-job-in-detail<br>good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted',
                ],
                
                [
                    'job_category_id' => 81,
                    'question' => 'Is there a possibility that your job involves gas pipework?<br>Jobs that involve gas will be sent to our Gas Safe registered tradespeople',
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
                    'question' =>  'Please describe your gas job <br> Good descriptions attract good tradespeople. Mention any appliances involved, including the make and model, and if anything needs to change with the existing pipework.',
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
                    'job_category_id' => 81,
                    'question' => 'What type of underfloor heating do you need?',
                    'slug' =>     'what-type-of-underfloor-heating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Boiler supplied (wet)',
                            'slug' =>   'boiler-supplied-(wet)'
                        ],
                        [
                            'answer' => 'Electrical (dry)',
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
                        ]
                        ,
                        [
                            'answer' => 'Entire house',
                            'slug' =>   'entire-house'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Please describe your central heating job in detail <br> Good descriptions attract good tradespeople. Please provide as many details as possible about what you need doing to your radiator.',
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
                        ]
                        ,
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
                            'answer' => 'Simple<br>E.g. Item which trips the electrics identified, issue with single appliance or a few sockets',
                            'slug' =>   'simple-e.g.-item-which-trips-the-electrics-identified-issue-with-single-appliance-or-a-few-sockets'
                        ],
                        [
                            'answer' => 'Complex<br>E.g. Multiple appliances affected, several issues',
                            'slug' =>   'complex-e.g.-multiple-appliances-affected-several-issues'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Describe your electrical job in detail<br>Good descriptions attract good tradespeople. Is this a new installation or a repair? Where is the electrical job located in the property? Mention if you think new wiring will be needed.',
                    'slug' =>     'describe-your-electrical-job-in-detail<br>good-descriptions-attract-good-tradespeople.-is-this-a-new-installation-or-a-repair?-where-is-the-electrical-job-located-in-the-property?-mention-if-you-think-new-wiring-will-be-needed.',
                   
                ],


                [
                    'job_category_id' => 81,
                    'question' => 'What type of job is it?',
                    'slug'     => 'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Fixtures / fittings<br>E.g. handrails, blinds, mirrors, shelves, TVs, etc.',
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
                        ]
                        ,
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
                    'question' => 'Describe your job for a handyman<br>A handyman can be skilled at a wide variety of tasks. Give as much detail as you can, including the number of items to be repaired or installed.',
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
                            'answer' => 'Small repair <br> E.g. replace some blown brickwork',
                            'slug' =>   'small-repair-<br>-e.g.-replace-some-blown-brickwork'
                        ],
                        [
                            'answer' => 'Medium repair <br> E.g. re-lay a few courses',
                            'slug' =>   'medium-repair-<br>-e.g.-re-lay-a-few-courses'
                        ],
                        [
                            'answer' => 'Large repair <br> E.g. rebuild wall section',
                            'slug' =>   'large-repair-<br>-e.g.-rebuild-wall-section'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 81,
                    'question' => 'Please make sure you have read and understood the following:<br>This trade is for large jobs that require management and oversight. If you require multiple jobs that cover various trades, please post these separately in the appropriate trade categories.',
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
                    'question' => 'Does your job involve changing the purpose or structure of a room?<br>e.g. converting a garage or removing a wall to combine rooms',
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
                            'answer' => 'Single room conversion<br>e.g. join 2 rooms together, install necessary utilities',
                            'slug' =>   'single-room-conversion<br>e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion<br>e.g. convert small outbuilding to living space',
                            'slug' =>   'small-garage-/-outbuilding-conversion<br>e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding<br>e.g. convert a large detached garage into a self sufficient flat',
                            'slug' =>   'multiple-rooms-or-large-outbuilding<br>e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion<br>e.g. major conversion works to one or more property, including important structural changes',
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
                            'answer' => 'Converting an existing space <br> e.g. a garage into a living space',
                            'slug' =>   'converting-an-existing-space-<br>-e.g.-a-garage-into-a-living-space'
                        ],
                        [
                            'answer' => 'Wall alteration <br> e.g. knocking through a wall, installing a window / door, etc.',
                            'slug' =>   'wall-alteration-<br>-e.g.-knocking-through-a-wall-installing-a-window/door-etc.'
                        ],
                        [
                            'answer' => 'Restoring or improving existing space <br> e.g. restoring a room or refurbishing a whole property',
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
                            'answer' => 'Loft conversion with structural changes <br> Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.',
                            'slug' =>  'loft-conversion-with-structural-changes-<br>-requires-a-change-to-the-roof-structure-e.g.-dormers-hip-to-gable-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes) <br> No alterations to the roof shape or structure.',
                            'slug' =>   'loft-conversion-(no-structural-changes)-<br>-no-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes <br> Creating an accessible space by boarding, decorating etc.',
                            'slug' =>   'loft-conversion-for-storage-purposes-<br>-creating-an-accessible-space-by-boarding-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight <br> Add one or more windows to the roof, e.g. velux windows.',
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
                    'question' => 'Your builder will probably require plans <br> Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.',
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
                            'answer' => 'Board out loft <br> Board out and pull down ladder; making loft accessible and suitable for storage.',
                            'slug' =>   'board-out-loft <br> board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work <br> Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.',
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
                            'answer' => 'Finishing work (plastering, painting & decorating)',
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
                            'answer' => 'Single room conversion <br> e.g. join 2 rooms together, install necessary utilities',
                            'slug' =>   'single-room-conversion <br> e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion <br> e.g. convert small outbuilding to living space',
                            'slug' =>   'small-garage-/outbuilding-conversion <br> e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding <br> e.g. convert a large detached garage into a self sufficient flat',
                            'slug' =>   'multiple-rooms-or-large-outbuilding <br> e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion <br> e.g. major conversion works to one or more property, including important structural changes',
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
                            'slug' =>   'window-or-door-installation-replacement'
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
                            'answer' => 'Small refurbishment <br> e.g. small project requiring a few days work',
                            'slug' =>   'small-refurbishment <br> e.g.-small-project-requiring-a-few-days-work'
                        ],
                        [
                            'answer' => 'Large refurbishment e.g. a large project that may take more than a week',
                            'slug' =>   'large-refurbishment e.g.-a-large-project-that-may-take-more-than-a-week'
                        ],
                        [
                            'answer' => 'Full refurbishment <br> e.g. a complex project or large space that requires full refurbishment',
                            'slug' =>   'full-refurbishment <br> e.g.-a-complex-project-or-large-space-that-requires-full-refurbishment'
                        ]
                    ],
                ],

                
                [
                    'job_category_id' => 81,
                    'question' => 'Describe your restoration / refurbishment project in detail<br>Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail<br>good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',
                ],
                [
                    'job_category_id' => 81,
                    'question' => 'Describe your job in detail<br>No worries if you are still not sure. Outline key details about the job and we will make sure we find the right tradesperson to complete the job.',
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
