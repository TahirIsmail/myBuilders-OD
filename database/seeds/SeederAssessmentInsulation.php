<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentInsulation extends Seeder
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
                    'job_category_id' => 60,
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\intro.jpg',

                ],



                [
                    'job_category_id' => 60,
                    'question' => 'Planning permission is normally required to fit insulation in lofts.',
                    'slug'     => 'planning-permission-is-normally-required-to-fit-insulation-in-lofts',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>  'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ],
                        
                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'Which of these statements about external wall insulation (EWI) is WRONG?',
                    'slug'     => 'which-of-these-statements-about-external-wall-insulation-(ewi)-is-wrong?',

                    'answers' => [
                        [
                            'answer' => 'EWI helps you conserve floor space',
                            'slug' =>  'ewi-helps-you-conserve-floor-space'
                        ],
                        [
                            'answer' => 'EWI is a good opportunity to improve the look of a property',
                            'slug' =>  'ewi-is-a-good-opportunity-to-improve-the-look-of-a-property'
                        ], 
                        [
                            'answer' => 'EWI is cheaper than internal insulation',
                            'slug' =>   'ewi-is-cheaper-than-internal-insulation'
                        ],
                        [
                            'answer' => 'EWI prevents penetrating damp',
                            'slug' =>   'ewi-prevents-penetrating-damp'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 60,
                    'question' => 'Solid walls can be insulated…',
                    'slug'     => 'solid-walls-can-be-insulated…',

                    'answers' => [
                        [
                            'answer' => 'On the inside of the building',
                            'slug' =>  'on-the-inside-of-the-building'
                        ],
                        [
                            'answer' => 'On the outside of the building',
                            'slug' =>   'on-the-outside-of-the-building'
                        ], 
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ],
                        [
                            'answer' => 'Solid walls do not warrant the need for insulation',
                            'slug' =>   'solid-walls-do-not-warrant-the-need-for-insulation'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 60,
                    'question' => 'When installing floor insulation before boarding a loft, which of the following statements is <b>WRONG?</b>',
                    'slug'     => 'when-installing-floor-insulation-before-boarding-a-loft,-which-of-the-following-statements-is-wrong?',

                    'answers' => [
                        [
                            'answer' => 'You will need to raise the floor level for the insulation to reach adequate thickness',
                            'slug' =>   'you-will-need-to-raise-the-floor-level-for-the-insulation-to-reach-adequate-thickness'
                        ],
                        [
                            'answer' => 'You should try to squash the mineral wool when fitting the boards on top',
                            'slug' =>   'you-should-try-to-squash-the-mineral-wool-when-fitting-the-boards-on-top'
                        ], 
                        [
                            'answer' => 'Insulating between the joists is a cheaper option than between the rafters',
                            'slug' =>  'insulating-between-the-joists-is-a-cheaper-option-than-between-the-rafters'
                        ],
                        [
                            'answer' => 'You should leave an air gap between the insulation and the boards',
                            'slug' =>   'you-should-leave-an-air-gap-between-the-insulation-and-the-boards'
                        ]
                    ],
                ], 
                [
                    'job_category_id' => 60,
                    'question' => 'Look at this roof schematic. Select the correct statements:<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>Select ALL that apply</span>',
                    'slug'     =>'look-at-this-roof-schematic.-select-the-correct-statements:select-all-that-apply',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\roof.png',

                    'answers' => [
                        [
                            'answer' => 'This is a cold roof',
                            'slug' =>   'this-is-a-cold-roof'
                        ],
                        [
                            'answer' => 'This is a warm roof',
                            'slug' =>   'this-is-a-warm-roof'
                        ], 
                        [
                            'answer' => 'This type of roof is amongst the most energy efficient types',
                            'slug' =>   'this-type-of-roof-is-amongst-the-most-energy-efficient-types'
                        ],
                        [
                            'answer' => 'This construction allows you to lower the level of the roof',
                            'slug' =>   'this-construction-allows-you-to-lower-the-level-of-the-roof'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 60,
                    'question' => 'Typically, the installation of adequate insulation on a detached house pays for itself within…',
                    'slug'     =>   'typically,-the-installation-of-adequate-insulation-on-a-detached-house-pays-for-itself-within…',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\saving.jpg',

                    'answers' => [
                        [
                            'answer' => '2 years',
                            'slug' =>  '2-years'
                        ],
                        [
                            'answer' => '4 years',
                            'slug' =>   '4-years'
                        ], 
                        [
                            'answer' => '6 years',
                            'slug' =>   '6-years'
                        ],
                        [
                            'answer' => '8 years',
                            'slug' =>   '8-years'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 60,
                    'question' => 'Which of the following is notifiable work?',
                    'slug'     =>  'which-of-the-following-is-notifiable-work?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\paperwork.jpg',

                    'answers' => [
                        [
                            'answer' => 'Installing cavity wall insulation',
                            'slug' =>  'installing-cavity-wall-insulation'
                        ],
                        [
                            'answer' => 'Insulating a solid wall',
                            'slug' =>   'insulating-a-solid-wall'
                        ], 
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ],
                        [
                            'answer' => 'Neither',
                            'slug' =>   'neither'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'Which of following can NOT be used to retrofit cavity wall insulation?',
                    'slug'     => 'which-of-following-can-not-be-used-to-retrofit-cavity-wall-insulation?',
            

                    'answers' => [
                        [
                            'answer' => 'Polystyrene boards',
                            'slug' => 'polystyrene-boards'
                        ],
                        [
                            'answer' => 'Polystyrene beads',
                            'slug' =>   'polystyrene-beads'
                        ], 
                        [
                            'answer' => 'Acrylic render',
                            'slug' =>  'acrylic-render'
                        ],
                        [
                            'answer' => 'Polyurethane foam',
                            'slug' =>   'polystyrene-foam'
                        ]
                    ],
                ],

                
                [
                    'job_category_id' => 60,
                    'question' => 'EPS is more likely to cause voids than mineral fibre.',
                    'slug'     => 'eps-is-more-likely-to-cause-voids-than-mineral-fibre',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>  'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ],
                        
                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' =>'When fitting a partial fill cavity insulation, where should the insulation be?',
                    'slug'     =>'when-fitting-a-partial-fill-cavity-insulation,-where-should-the-insulation-be?',
                    

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\cav1.png',
                            'slug' =>  'cav1'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\cav2.png',
                            'slug' =>   'cav2'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\cav3.png',
                            'slug' =>   'cav3'
                        ],
                        [
                            'answer' =>'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\cav4.png',
                            'slug' =>   'cav4'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 60,
                    'question' => 'What is the minimum recommended thickness for loft insulation?',
                    'slug'     => 'what-is-the-minimum-recommended-thickness-for-loft-insulation?',

                    'answers' => [
                        [
                            'answer' => '170mm',
                            'slug' =>  '170mm'
                        ],
                        [
                            'answer' => '270mm',
                            'slug' =>   '270mm'
                        ],
                        [
                            'answer' => '370mm',
                            'slug' =>   '370mm'
                        ],
                        [
                            'answer' => '470mm',
                            'slug' =>   '470mm'
                        ],
                        
                    ],
                ],


                [
                    'job_category_id' => 60,
                    'question' => 'A customers loft is insulated to a thickness inferior to the current recommendations. What is the simplest and cheapest solution you would recommend?',
                    'slug'     => 'a-customers-loft-is-insulated-to-a-thickness-inferior-to-the-current-recommendations.-what-is-the-simplest-and-cheapest-solution-you-would-recommend?',

                    'answers' => [
                        [
                            'answer' => 'Rigid-foam decking',
                            'slug' => 'rigid-foam-decking'
                        ],
                        [
                            'answer' => 'Cross-laying',
                            'slug' =>   'cross-laying'
                        ],
                        [
                            'answer' => 'Rafter insulation',
                            'slug' =>  'rafter-insulation'
                        ],
                        [
                            'answer' => 'Dry-lining',
                            'slug' =>   'dry-lining'
                        ],
                        
                    ],
                ],



                [
                    'job_category_id' => 60,
                    'question' => 'Where is most of the heat loss occurring?',
                    'slug'     =>'where-is-most-of-the-heat-loss-occurring?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\heat.png',

                    'answers' => [
                        [
                            'answer' => 'A',
                            'slug' =>  'A'
                        ],
                        [
                            'answer' => 'B',
                            'slug' =>   'b'
                        ], 
                        [
                            'answer' => 'C',
                            'slug' =>   'c'
                        ],
                        [
                            'answer' => 'D',
                            'slug' =>   'd'
                        ]
                    ],
                ],



                
                [
                    'job_category_id' => 60,
                    'question' => 'Which of these can be financed thanks to a government grant?',
                    'slug'     =>  'which-of-these-can-be-financed-thanks-to-a-government-grant?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\saving.jpg',

                    'answers' => [
                        [
                            'answer' => 'Loft insulation',
                            'slug' =>   'loft-insulation'
                        ],
                        [
                            'answer' => 'Internal wall insulation',
                            'slug' =>  'internal-wall-insulation'
                        ], 
                        [
                            'answer' => 'External wall insulation',
                            'slug' =>   'external-wall-insulation',
                        ],
                        [
                            'answer' => 'All of the above',
                            'slug' =>   'all-of-the-above'
                        ]
                        ,
                        [
                            'answer' => 'None of the above',
                            'slug' =>   'none-of-the-above'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 60,
                    'question' => 'Who should fill a grant application?',
                    'slug'     => 'who-should-fill-a-grant-application?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\InsulationImg\application.jpg',

                    'answers' => [
                        [
                            'answer' => 'The tradesperson',
                            'slug' =>  'the-tradesperson'
                        ],
                        [
                            'answer' => 'The homeowner',
                            'slug' =>   'the-homeowner'
                        ], 
                        [
                            'answer' => 'Both',
                            'slug' =>   'Both'
                        ],
                        [
                            'answer' => 'Either',
                            'slug' =>   'Either'
                        ]
                        
                    ],
                ],
            ];
            foreach ($data as $item) {
                $question = AssessmentQuestion::create([
                    'job_category_id' => $item['job_category_id'],
                    'question' => $item['question'],
                    'slug' => $item['slug'],
                    'image_path' => isset($item['image_path']) ? $item['image_path'] : NULL
                ]);
                if (isset($item['answers'])) {
                    foreach ($item['answers'] as $answer) {
                        AssessmentAnswer::create([
                            'question_id' => $question->id,
                            'answer' => $answer['answer'],
                            'slug' => $answer['slug'],
                            'type' =>  NULL

                        ]);
                    }
                } else {
                    continue;
                }
            }
        });
    }
}
