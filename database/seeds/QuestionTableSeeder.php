<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
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
                    'job_category_id' => 38,
                    'question' => 'What type of service do you need?',
                    'slug' => 'what-type-of-service-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Basic outline plans (for quotes and planning application)',
                            'slug' => 'basic-outline-plans-for-quotes-and-planning-application'
                        ],
                        [
                            'answer' => 'Full regulation plans (for builders & building regs)',
                            'slug' => 'full-regulation-plans-for-builders-and-building-regs'
                        ],
                        [
                            'answer' => 'Structural calculations',
                            'slug' => 'structural-calculations'
                        ],
                        [
                            'answer' => 'I\'m not sure',
                            'slug' => 'im-not-sure'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 38,
                    'question' => 'What type of project are you planning?',
                    'slug' => 'what-type-of-project-are-you-planning',
                    'answers' => [
                        [
                            'answer' => 'Extension',
                            'slug' => 'extension'
                        ],
                        [
                            'answer' => 'Loft conversion',
                            'slug' => 'loft-conversion'
                        ],
                        [
                            'answer' => 'Renovation',
                            'slug' => 'renovation'
                        ],
                        [
                            'answer' => 'New build',
                            'slug' => 'new-build'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' => 'other'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 38,
                    'question' => 'Add a description to your job?',
                    'slug' => 'add-a-description-to-your-job',
                ]
                // Add more questions and answers here as needed question 40
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What type of service do you need?',
                    'slug' => 'what-type-of-service-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Doors, windows & floors (Installing or repairing doors, windows, and floors, including floor joists, floorboards, skirting, etc.)',
                            'slug' =>   'doors,-windows-&-floors-(Installing-or-repairing-doors,-windows,-and-floors,-including-floor-joists,-floorboards,-skirting,-etc.)'
                        ],
                        [
                            'answer' => 'Furniture making, assembly & repairs (Building, repairing or assembling furniture such as wardrobes, storage units, etc.)',
                            'slug' => 'furniture-making,-assembly-&-repairs-(Building,-repairing-or-assembling-furniture-such-as-wardrobes,-storage-units,-etc.)'
                        ],
                        [
                            'answer' => 'Kitchen units & worktops (Fitting, repairing, or building kitchen worktops and units)',
                            'slug' =>   'kitchen-units-&-worktops-(fitting,-repairing,-or-building-kitchen-worktops-and-units)'
                        ],
                        [
                            'answer' => 'Decking (Building or repairing a new or existing deck)',
                            'slug' => 'decking-(building-or-repairing-a-new-or-existing-deck)'
                        ],
                        [
                            'answer' => 'Other carpentry work (Loft hatches, outdoor structures, skirting, stud walls, stairs, handrails, etc.)',
                            'slug' =>   'other-carpentry-work-(loft-hatches,-outdoor-structures,-skirting,-stud-walls,-stairs,-handrails,-etc.)'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 40,
                    'question' => 'Which of the following can a carpenter help you with?',
                    'slug' => 'which-of-the-following-can-a-carpenter-help-you-with?',
                    'answers' => [
                        [
                            'answer' => 'Internal doors',
                            'slug' =>   'internal-doors'
                        ],
                        [
                            'answer' => 'External doors',
                            'slug' => 'external-doors'
                        ],
                        [
                            'answer' => 'Windows',
                            'slug' => 'windows'
                        ],
                        [
                            'answer' => 'Floors',
                            'slug' =>   'floors'
                        ],
                        [
                            'answer' => 'Skirting & Architraves',
                            'slug' => ' skirting-&-architraves'
                        ],
                        [
                            'answer' => 'Several of the above',
                            'slug' =>   'several-of-the-above'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'What help do you need with your door(s)?',
                    'slug' => 'what-help-do-you-need-with-your-door(s)?',
                    'answers' => [
                        [
                            'answer' => 'Replace existing doors (A door has been installed in the door frame before)',
                            'slug' =>   'replace-existing-doors-(a-door-has-been-installed-in-the-door-frame-before)'
                        ],
                        [
                            'answer' => 'Install new doors (A door has never been installed in the door frame before)',
                            'slug' => 'install-new-doors-(a-door-has-never-been-installed-in-the-door-frame-before)'
                        ],
                        [
                            'answer' => 'Repair doors (Repair the surface, catch, or other mechanisms)',
                            'slug' =>   'repair-doors-(repair-the-surface,-catch,-or-other-mechanisms)'
                        ],
                        [
                            'answer' => 'Alter doors (Alter a doors edges or hinges so it will close properly)',
                            'slug' =>   'alter-doors-(alter-a-doors-edges-or-hinges-so-it-will-close-properly)'
                        ],
                        [
                            'answer' => 'Several of the above',
                            'slug' =>   'several-of-the-above'
                        ],
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What type of doors need fitting?',
                    'slug' =>     'what-type-of-doors-need-fitting',
                    'answers' => [
                        [
                            'answer' => 'Single door (standard)',
                            'slug' =>   'single-door-(standard)'
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
                            'answer' => 'Sliding door (e.g. Bypass doors, pocket doors, barn doors, etc.)',
                            'slug' =>   'sliding-door-(e.g.-bypass-doors,-pocket-doors,-barn-doors,-etc.)'
                        ],
                        [
                            'answer' => 'More than one type of door (You can provide more details on the next screen)',
                            'slug' =>   'more-than-one-type-of-door-(you-can-provide-more-details-on-the-next-screen)'
                        ],
                    ],
                ]





                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Who is supplying the door(s)?',
                    'slug' =>     'who-is-supplying-the-door(s)',
                    'answers' => [
                        [
                            'answer' => 'I am supplying the door(s)',
                            'slug' =>   'i-am-supplying-the-door(s)'
                        ],
                        [
                            'answer' => 'I would like the tradesperson to supply the door(s)',
                            'slug' =>   'i-would-like-the-tradesperson-to-supply-the-door(s)'
                        ],
                      
                    ],
                ]


                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many new doors do you need fitted?',
                    'slug' =>     'how-many-new-doors-do-you-need-fitted',
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
                            'answer' => 'More than 5',
                            'slug' =>   'more-than-5'
                        ],

                      
                    ],
                ]


                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What type of door(s) do you need fitted?',
                    'slug' =>     'what-type-of-door(s)-do-you-need-fitted',
                    'answers' => [
                        [
                            'answer' => 'Standard door(s)(E.g. hollow core)',
                            'slug' =>   'standard-door(s)(e.g.-hollow-core)'
                        ],
                        [
                            'answer' => 'Solid wood or glazed door(s)',
                            'slug' =>   'solid-wood-or-glazed-door(s)'
                        ],
                        [
                            'answer' => 'Fire rated door(s)',
                            'slug' =>   'fire-rated-door(s)'
                        ],
                        [
                            'answer' => 'A combination of different types of doors',
                            'slug' =>   'a-combination-of-different-types-of-doors'
                        ],
                        [
                            'answer' => 'Other materials / I dont know',
                            'slug' =>   'other-materials-/-i-dont-know'
                        ],
                      

                      
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Additional information about your job',
                    'slug' =>     'additional-information-about-your-job',
                    'answers' => [
                       
                      
                    ],
                ]

                
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many doors do you need fitted?',
                    'slug' =>     'how-many-doors-do-you-need-fitted',
                    'answers' => [
                       
                      
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
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
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many doors do you need hanging?',
                    'slug' =>     'how-many-doors-do-you-need-hanging',
                    'answers' => [
                        [
                            'answer' => 'A single door',
                            'slug' =>   'a-single-door'
                        ],
                        [
                            'answer' => 'Multiple doors',
                            'slug' =>   'multiple-doors'
                        ],
                      
                      

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What help do you need with your doors?',
                    'slug' =>     'what-help-do-you-need-with-your-doors',
                    'answers' => [
                        [
                            'answer' => 'Hang doors',
                            'slug' =>   'hang-doors'
                        ],
                        [
                            'answer' => 'Repair / alter doors',
                            'slug' =>   'repair-/-alter-doors'
                        ],
                      
                      

                      
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What service do you require?',
                    'slug' =>     'what-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'New windows',
                            'slug' =>   'new-windows'
                        ],
                        [
                            'answer' => 'Small window repair',
                            'slug' =>   'small-window-repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                      
                      

                      
                    ],
                ] ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many doors do you need hanging?',
                    'slug' =>     'how-many-windows-need-replacing',
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
                        ]
                        ,
                        [
                            'answer' => '10 or more',
                            'slug' =>   '10-or-more'
                        ]
                        
                      

                      
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Describe your window fitting job in detail(Good descriptions attract good tradespeople. Mention the property type and age.Is any special glazing required (e.g. frosted bathroom windows)?)',
                    'slug' =>     'describe-your-window-fitting-job-in-detail(good-descriptions-attract-good-tradespeople.-mention-the-property-type-and-age.is-any-special-glazing-required-(e.g.-frosted-bathroom-windows)?)',
                    'answers' => [
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'What flooring work do you need a carpenter to do?',
                    'slug' =>     'what-flooring-work-do-you-need-a-carpenter-to-do',
                    'answers' => [
                        [
                            'answer' => 'Install floor joists',
                            'slug' =>   'install-floor-joists'
                        ],
                        [
                            'answer' => 'Install floorboards',
                            'slug' =>   'install-floorboards'
                        ],
                        [
                            'answer' => 'Install, sand, or repair a new floor(New floor finish on top of floorboards)',
                            'slug' =>   'install,-sand,-or-repair-a-new-floor(new-floor-finish-on-top-of-floorboards)'
                        ]
                        
                        
                      

                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Where do you need flooring joists installed?',
                    'slug' =>     'where-do-you-need-flooring-joists-installed',
                    'answers' => [
                        [
                            'answer' => 'Small area',
                            'slug' =>   'small-area'
                        ],
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ]
                        ,
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'more-than-5-rooms'
                        ]
                        
                      

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How large an area do the floorboards cover?',
                    'slug' =>     'how-large-an-area-do-the-floorboards-cover',
                    'answers' => [
                        [
                            'answer' => 'Small area',
                            'slug' =>   'small-area'
                        ],
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ]
                        ,
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'more-than-5-rooms'
                        ]
                        
                      

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What type of flooring work do you need?',
                    'slug' =>     'what-type-of-flooring-work-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Small area',
                            'slug' =>   'small-area'
                        ],
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ]
                        ,
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'more-than-5-rooms'
                        ]
                        
                      

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What kind of flooring do you need fitted?',
                    'slug' =>     'what-kind-of-flooring-do-you-need-fitted',
                    'answers' => [
                        [
                            'answer' => 'Engineered',
                            'slug' =>   'engineered'
                        ],
                        [
                            'answer' => 'Solid wood',
                            'slug' =>   'solid-wood'
                        ],
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ]
                        ,
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ]
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many rooms need flooring?(A hallway should be counted as 1 room)',
                    'slug' =>     'how-many-rooms-need-flooring?(a-hallway-should-be-counted-as-1-room)',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ]
                        ,
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'Commercial-property'
                        ]
                    ],
                ]
                
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Do you have the flooring already?',
                    'slug' =>     'do-you-have-the-flooring-already',
                    'answers' => [
                        [
                            'answer' => 'Yes, I have the flooring',
                            'slug' =>   'yes-i-have-the-flooring'
                        ],
                        [
                            'answer' => 'No, I dont have the flooring',
                            'slug' =>   'no-i-dont-have-the-flooring'
                        ]
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What kind of flooring do you need sanded / restored?',
                    'slug' =>     'what-kind-of-flooring-do-you-need-sanded/restored',
                    'answers' => [
                        [
                            'answer' => 'Engineered',
                            'slug' =>   'engineered'
                        ],
                        [
                            'answer' => 'Solid wood',
                            'slug' =>   'solid-wood'
                        ],
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'Other'
                        ]
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many rooms need sanding / restoring?',
                    'slug' =>     'how-many-rooms-need-sanding-/-restoring',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ]
                        ,
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'Commercial-property'
                        ]
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What kind of flooring do you need repaired?',
                    'slug' =>     'what-kind-of-flooring-do-you-need-repaired',
                    'answers' => [
                        [
                            'answer' => 'Engineered',
                            'slug' =>   'engineered'
                        ],
                        [
                            'answer' => 'Solid wood',
                            'slug' =>   'solid-wood'
                        ],
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'Other'
                        ]
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Describe your flooring job (Good descriptions attract good tradespeople.State what rooms are involved and even better if you have the room sizes. Also mention if you require supply and fit or fit only. Do you need underlay and beading installing?)',
                    'slug' =>     'describe-your-flooring-job(good-descriptions-attract-good-tradespeople.-state-what-rooms-are-involved-and-even-better-if-you-have-the-room-sizes.-also-mention-if-you-require-supply-and-fit-or-fit-only.-do-you-need-underlay-and-beading-installing)',
                    'answers' => [
                     
                    ],
                ]


                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Do you need skirting, architraves, or both?',
                    'slug' =>     'do-you-need-skirting-architraves-or-both?',
                    'answers' => [
                        [
                            'answer' => 'Architraves(Decorative moulding around the door)',
                            'slug' =>   'architraves(decorative-moulding-around-the-door)'
                        ],
                        [
                            'answer' => 'Skirting(Decorative boards between the wall and the floor)',
                            'slug' =>   'skirting(decorative-boards-between-the-wall-and-the-floor)'
                        ],
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ]
                        
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many doors needs architraves?',
                    'slug'     => 'how-many-doors-need-architraves?',
                    'answers' => [
                        [
                            'answer' => 'A single door',
                            'slug' =>   'a-single-door'
                        ],
                        [
                            'answer' => '2-3 doors',
                            'slug' =>   '2-3-doors'
                        ],
                        [
                            'answer' => '4 or more doors',
                            'slug' =>   '4-or-more-doors'
                        ],
                        
                      

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How much skirting do you need?',
                    'slug'     => 'how-much-skirting-do-you-need?',
                    'answers' => [
                        [
                            'answer' => '1 to 4 walls',
                            'slug' =>   '1-to-4-walls'
                        ],
                        [
                            'answer' => '2 to 3 rooms',
                            'slug' =>   '2-to-3-rooms'
                        ],
                        [
                            'answer' => '4 to 5 rooms',
                            'slug' =>   '4-to-5-rooms'
                        ],
                        
                        [
                            'answer' => 'More than 6 rooms',
                            'slug' =>   'more-than-6-rooms'
                        ],

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'In how many rooms do you need skirting & architraves?',
                    'slug'     => 'in-how-many-rooms-do-you-need-skirting-architraves?',
                    'answers' => [
                        [
                            'answer' => '1 to 4 walls',
                            'slug' =>   '1-to-4-walls'
                        ],
                        [
                            'answer' => '2 to 3 rooms',
                            'slug' =>   '2-to-3-rooms'
                        ],
                        [
                            'answer' => '4 to 5 rooms',
                            'slug' =>   '4-to-5-rooms'
                        ],
                        
                        [
                            'answer' => 'More than 6 rooms',
                            'slug' =>   'more-than-6-rooms'
                        ],

                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'Describe your carpentry job in detail(Good descriptions attract good tradespeople. What do you need doing, with which fixtures, and in which rooms? Include any materials, finishes and dimensions if you know them.)',
                    'slug' =>     'describe-your-carpentry-job-in-detail(good-descriptions-attract-good-tradespeople.-what-do-you-need-doing,-with-which-fixtures,-and-in-which-rooms?-include-any-materials,-finishes,-and-dimensions-if-you-know-them.)',
                    'answers' => [
                     
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What do you need?',
                    'slug'     => 'what-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'I need furniture made (custom / bespoke)',
                            'slug' =>   'i-need-furniture-made(custom/bespoke)'
                        ],
                        [
                            'answer' => 'I need furniture assembled (Ikea, etc.)',
                            'slug' =>   'i-need-furniture-assembled(ikea,-etc.)'
                        ],
                        [
                            'answer' => 'I need furniture repaired',
                            'slug' =>   'i-need-furniture-repaired'
                        ],
                        
                       
                      
                    ],
                ]

                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What kind of furniture do you need made?',
                    'slug'     => 'what-kind-of-furniture-do-you-need-made?',
                    'answers' => [
                        [
                            'answer' => 'Custom kitchen units',
                            'slug' =>   'custom-kitchen-units'
                        ],
                        [
                            'answer' => 'Custom storage(E.g. Shelving, cupboards, wardrobes, chest of drawers, other storage)',
                            'slug' =>   'custom-storage(e.g.-shelving,-cupboards,-wardrobes,-chest-of-drawers,-other-storage)'
                        ],
                        [
                            'answer' => 'Other custom furniture(E.g. Tables, chairs, bed, other, or multiple items)',
                            'slug' =>   'other-custom-furniture(e.g.-tables,-chairs,-bed,-other,-or-multiple-items)'
                        ],
                        
                       
                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'How many kitchen units do you need making?',
                    'slug'     => 'how-many-kitchen-units-do-you-need-making?',
                    'answers' => [
                        [
                            'answer' => '1 to 5 units',
                            'slug' =>   '1-to-5-units'
                        ],
                        [
                            'answer' => '6 to 11 units',
                            'slug' =>   '6-to-11-units'
                        ],
                        [
                            'answer' => 'More than 12 units',
                            'slug' =>   'more-than-12-units'
                        ],
                        
                       
                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What type of custom storage do you need?',
                    'slug'     => 'what-type-of-custom-storage-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Shelving',
                            'slug' =>   'shelving'
                        ],
                        [
                            'answer' => 'Cupboards / cabinets',
                            'slug' =>   'cupboards-/-cabinets'
                        ],
                        [
                            'answer' => 'Wardrobes/chest of drawers',
                            'slug' =>   'wardrobes/chest-of-drawers'
                        ],
                        [
                            'answer' => 'Other storage',
                            'slug' =>   'other-storage'
                        ]
                       
                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What do you need made?',
                    'slug'     => 'what-do-you-need-made?',
                    'answers' => [
                        [
                            'answer' => 'Tables or chairs',
                            'slug' =>   'tables-or-chairs'
                        ],
                        [
                            'answer' => 'Bed',
                            'slug' =>   'bed'
                        ],
                        [
                            'answer' => 'Several custom pieces',
                            'slug' =>   'several-custom=pieces'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                       
                      
                    ],
                ]
                ,
                [
                    'job_category_id' => 40,
                    'question' => 'What best describes your repair job?',
                    'slug'     => 'what-best-describes-your-repair-job?',
                    'answers' => [
                        [
                            'answer' => 'Simple furniture repair job(A handyman could probably fix it E.g. wobbly chairs, fix sliding door, repair small drawer of a cabinet)' ,
                            'slug' =>   'simple-furniture-repair-job(a-handyman-could-probably-fix-it-e.g.-wobbly-chairs,-fix-sliding-door,-repair-small-drawer-of-a-cabinet)'
                        ],
                        [
                            'answer' => 'Larger furniture repair job(I may need someone skilled in carpentry & joinery E.g. make a new chair leg, repair solid oak dining table, refurbish built-in wardrobes)',
                            'slug' =>   'larger-furniture-repair-job(i-may-need-someone-skilled-in-carpentry-&-joinery-e.g.-make-a-new-chair-leg,-repair-solid-oak-dining-table,-refurbish-built-in-wardrobes)'
                        ]                    
                      
                    ],
                ] ,
                [
                    'job_category_id' => 40,
                    'question' => 'What kitchen carpentry work do you need?',
                    'slug'     => 'what-kitchen-carpentry-work-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Fit wooden worktop',
                            'slug' =>   'fit-wooden-worktop'
                        ],
                        [
                            'answer' => 'Repair wooden worktop',
                            'slug' =>   'repair-wooden-worktop'
                        ],
                        [
                            'answer' => 'Install kitchen units',
                            'slug' =>   'install-kitchen-units'
                        ]
                        ,
                        [
                            'answer' => 'Build custom kitchen units',
                            'slug' =>   'build-custom-kitchen-units'
                        ]
                        ,
                        [
                            'answer' => 'Repair / adjust kitchen units',
                            'slug' =>   'repair-/-adjust-kitchen-units'
                        ]
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'How many kitchen units do you need making?',
                    'slug'     => 'how-many-kitchen-units-do-you-need-making?',
                    'answers' => [
                        [
                            'answer' => '1 to 5 units',
                            'slug' =>   '1-to-5-units'
                        ],
                        [
                            'answer' => '6 to 11 units',
                            'slug' =>   '6-to-11-units'
                        ],
                        [
                            'answer' => 'More than 12 units',
                            'slug' =>   'more-than-units'
                        ],
                        
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'What type of decking work do you require?',
                    'slug'     => 'what-type-of-decking-work-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Build a new deck' ,
                            'slug' =>   'build-a-new-deck'
                        ],
                        [
                            'answer' => 'Repair existing deck',
                            'slug' =>  'repair-existing-deck'
                        ]                    
                      
                    ],
                ] ,

                [
                    'job_category_id' => 40,
                    'question' => 'Roughly how large is the area to be decked?',
                    'slug'     => 'how-many-kitchen-units-do-you-need-making?',
                    'answers' => [
                        [
                            'answer' => 'Small(Up to 15m² / 150 sq ft)',
                            'slug' =>   'small(up-to-15m/150-sq-ft)'
                        ],
                        [
                            'answer' => 'Medium(15m² - 30m² / 150 - 300 sq ft)',
                            'slug' =>   'medium(15m-30m/150-300-sq-ft)'
                        ],
                        [
                            'answer' => 'Large(30m² - 60m² / 300 - 600 sq ft)',
                            'slug' =>   'large(30m-60m/300-600-sq-ft)'
                        ],
                        [
                            'answer' => 'X-Large(Over 60m² / 600 sq ft)',
                            'slug' =>   'x-large(over-60m/600-sq-ft)'
                        ],
                       
                      
                    ],
                ],
                
                [
                    'job_category_id' => 40,
                    'question' => 'What carpentry work is involved in your job?',
                    'slug'     => 'what-carpentry-work-is-involved-in-your-job?',
                    'answers' => [
                        [
                            'answer' => 'Boxing-in(For hiding exposed pipework, under a radiator for example.)',
                            'slug' =>   'boxing-in(for-hiding-exposed-pipework,-under-a-radiator-for-example.)'
                        ],
                        [
                            'answer' => 'Loft hatches',
                            'slug' =>   'loft-hatches'
                        ],
                        [
                            'answer' => 'Outdoor structure',
                            'slug' =>  'outdoor-structure'
                        ],
                        
                        [
                            'answer' => 'Roof',
                            'slug' =>   'roof'
                        ]
                        ,
                        [
                            'answer' => 'Shelving',
                            'slug' =>   'shelving'
                        ]
                        ,
                        [
                            'answer' => 'Skirting & Architraves',
                            'slug' =>   'skirting-&-architraves'
                        ]
                        ,
                        [
                            'answer' => 'Stud walls',
                            'slug' =>   'stud-walls'
                        ],
                        [
                            'answer' => 'Stairs / handrails',
                            'slug' =>   'stairs-/-handrails'
                        ]
                    ],
                ],  
                [
                    'job_category_id' => 40,
                    'question' => 'How can a carpenter help you with your loft hatch?',
                    'slug'     => 'how-can-a-carpenter-help-you-with-your-loft-hatch?',
                    'answers' => [
                        [
                            'answer' => 'Install a new loft hatch',
                            'slug' =>   'install-a-new-loft-hatch'
                        ],
                        [
                            'answer' => 'Alter or repair a loft hatch',
                            'slug' =>   'alter-or-repair-a-loft-hatch'
                        ],
                        [
                            'answer' => 'Change the size of my loft hatch',
                            'slug' =>   'change-the-size-of-my-loft-hatch'
                        ]
                       
                      
                    ],
                ],


                [
                    'job_category_id' => 40,
                    'question' => 'Roughly, how large is the structure?',
                    'slug'     => 'roughly,-how-large-is-the-structure?',
                    'answers' => [
                        [
                            'answer' => 'Small(e.g. bin store, shed, pergola)',
                            'slug' =>   'small(e.g.-bin-store,-shed,-pergola)'
                        ],
                        [
                            'answer' => 'Medium(e.g. car port, summer house)',
                            'slug' =>   'medium(e.g.-car-port,-summer-house)'
                        ],
                        [
                            'answer' => 'Large (e.g. garage or multiple structures)',
                            'slug' =>   'large(e.g.-garage-or-multiple-structures)'
                        ]
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Roughly, how large is the structure?',
                    'slug'     => 'roughly,-how-large-is-the-structure?',
                    'answers' => [
                        [
                            'answer' => 'Small(e.g. Shed, porch etc.)',
                            'slug' =>   'small(e.g.-Shed,-porch-etc.)'
                        ],
                        [
                            'answer' => 'Medium(e.g. extension, garage etc.)',
                            'slug' =>   'medium(e.g.-extension,-garage-etc.)'
                        ],
                        [
                            'answer' => 'Large(e.g. house, commercial property etc.)',
                            'slug' =>   'large(e.g.-house,-commercial-property-etc.)'
                        ]
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Do you want custom shelves built or pre-built shelves hung?',
                    'slug'     => 'do-you-want-custom-shelves-built-or-pre-built-shelves-hung?',
                    'answers' => [
                        [
                            'answer' => 'Hang shelves',
                            'slug' =>   'hang-shelves'
                        ],
                        [
                            'answer' => 'Build custom shelves',
                            'slug' =>   'build-custom-shelves'
                        ]
                       
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Do you need skirting, architraves, or both?',
                    'slug'     => 'do-you-want-custom-shelves-built-or-pre-built-shelves-hung?',
                    'answers' => [
                        [
                            'answer' => 'Architraves(Decorative moulding around the door)',
                            'slug' =>   'architraves(decorative-moulding-around-the-door)'
                        ],
                        [
                            'answer' => 'Skirting (Decorative boards between the wall and the floor)',
                            'slug' =>   'skirting(decorative-boards-between-the-wall-and-the-floor)'
                        ]
                        ,
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ]
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'How many doors needs architraves?',
                    'slug'     => 'how-many-doors-need-architraves',
                    'answers' => [
                        [
                            'answer' => 'A single door',
                            'slug' =>   'a-single-door'
                        ],
                        [
                            'answer' => '2 to 3 doors',
                            'slug' =>   '2-to-3-doors'
                        ]
                        ,
                        [
                            'answer' => 'More than 4 doors',
                            'slug' =>   'more-than-4-doors',
                        ]
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'How many stud walls?',
                    'slug'     => 'how-many-stud-walls?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2 to 3',
                            'slug' =>   '2-to-3'
                        ]
                        ,
                        [
                            'answer' => 'More than 4',
                            'slug' =>   'more-than-4',
                        ]
                      
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'What staircase work do you require?',
                    'slug'     => 'how-many-stud-walls?',
                    'answers' => [
                        [
                            'answer' => 'Minor repair / refurb (e.g. Replace handrail or some spindles)',
                            'slug' =>   'minor-repair-/-refurb(e.g.-replace-handrail-or-some-spindles)'
                        ],
                        [
                            'answer' => 'Major repair / refurbishment(e.g. Replace multiple steps, new handrail and multiple spindles)',
                            'slug' =>   'major-repair/refurbishment(e.g.-replace-multiple-steps,-new-handrail,-and-multiple-spindles)'
                        ]
                        ,
                        [
                            'answer' => 'Build / install new staircase',
                            'slug' =>   'build/install-new-staircase',
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
                if(isset($item['answers'])){
                    foreach ($item['answers'] as $answer) {
                        Answer::create([
                            'question_id' => $question->id,
                            'answer' => $answer['answer'],
                            'slug' => $answer['slug']
                        ]);
                    }
                }
                else {
                    continue;
                }
                
            }
        });
    }
}
