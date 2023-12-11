<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentHandymen extends Seeder
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
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\handyman_new_intro.jpg',

                ],



                [
                    'job_category_id' => 58,
                    'question' => 'Which of these tasks would you NOT undertake?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     => 'which-of-these-tasks-would-you-not-undertake?<br>select-all-that-apply',
                    
                    'answers' => [
                        [
                            'answer' => 'Fit a new RCD fuse',
                            'slug' =>   'fit-a-new-rcd-fuse'
                        ],
                        [
                            'answer' => 'Wall mount a large plasma screen',
                            'slug' =>   'wall-mount-a-large-plasma-screen'
                        ],
                        [
                            'answer' => 'Install a new gas hob',
                            'slug' =>   'install-a-new-gas-hob'
                        ], [
                            'answer' => 'Fit a new tap',
                            'slug' =>   'fit-a-new-tap'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'Which of these is the correct way to screw plasterboard onto studwork?',
                    'slug'     => 'which-of-these-is-the-correct-way-to-screw-plasterboard-onto-studwork?',
                    
                    'answers' => [
                        [
                            'answer' =>'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\plasterboard_screw_A.png',
                            'slug' =>   'plasterboard_screw_a'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\plasterboard_screw_B.png',
                            'slug' =>   'plasterboard_screw_b'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\plasterboard_screw_C.png',
                            'slug' =>   'plasterboard_screw_c'
                        ], [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\plasterboard_screw_D.png',
                            'slug' =>   'plasterboard_screw_d'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'What fixings would you use when hanging a cupboard to a plasterboard wall?',
                    'slug'     => 'what-fixings-would-you-use-when-hanging-a-cupboard-to-a-plasterboard-wall?',
                    
                    'answers' => [
                        [
                            'answer' =>'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\fixing1.png',
                            'slug' =>   'fixing1.png'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\fixing2.png',
                            'slug' =>   'fixing2.png'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\fixing3.png',
                            'slug' =>   'fixing3.png'
                        ], [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\fixing4.png',
                            'slug' =>   'fixing4.png'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'An HSS drill bit is suitable for drilling into masonry',
                    'slug'     => 'an-hss-drill-bit-is-suitable-for-drilling-into-masonry',
                    
                    'answers' => [
                        [
                            'answer' =>'True',
                            'slug' =>   'true',
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 58,
                    'question' => 'A customer would like this nail removed and the wall painted. How would you prepare this wall before applying paint?',
                    'slug'     => 'a-customer-would-like-this-nail-removed-and-the-wall-painted.-how-would-you-prepare-this-wall-before-applying-paint?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\nail.png',
                    'answers' => [
                        [
                            'answer' => 'Fibertape',
                            'slug' =>   'fibertape',
                        ],
                        [
                            'answer' => 'Filler',
                            'slug' =>   'filler'
                        ]
                        ,
                        [
                            'answer' => 'Caulk',
                            'slug' =>   'caulk'
                        ]
                        ,
                        [
                            'answer' => 'Plaster',
                            'slug' =>   'plaster'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 58,
                    'question' => 'A client wants their gutters clearing and they would like to know how to prevent further build up in the future.<br>What would you suggest?<br>Select <b>TWO<b>correct options',
                    'slug'     => 'a-client-wants-their-gutters-clearing-and-they-would-like-to-know-how-to-prevent-further-build-up-in-the-future.<br>what-would-you-suggest?<br>select-<b>two<b>-correct-options',
                    
                    'answers' => [
                        [
                            'answer' => 'Clean the moss from their roof',
                            'slug' =>   'clean-the-moss-from-their-roof',
                        ],
                        [
                            'answer' => 'Cut back overhanging trees',
                            'slug' =>  'cut-back-overhanging-trees'
                        ]
                        ,
                        [
                            'answer' => 'Treat the guttering',
                            'slug' =>   'treat-the-guttering'
                        ]
                        ,
                        [
                            'answer' => 'Use a leaf blower',
                            'slug' =>   'use-a-leaf-blower'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 58,
                    'question' => 'Select ALL the correct statements:',
                    'slug'     => 'select-all-the-correct-statements:',
                    
                    'answers' => [
                        [
                            'answer' => 'You should use the bottom valve to drain a radiator',
                            'slug' =>   'you-should-use-the-bottom-valve-to-drain-a-radiator',
                        ],
                        [
                            'answer' => 'You should use the top valve to drain a radiator',
                            'slug' =>   'you-should-use-the-top-valve-to-drain-a-radiator'
                        ]
                        ,
                        [
                            'answer' => 'You should use the bottom valve to bleed a radiator',
                            'slug' =>  'you-should-use-the-bottom-valve-to-bleed-a-radiator'
                        ]
                        ,
                        [
                            'answer' => 'You should use the top valve to bleed a radiator',
                            'slug' =>   'you-should-use-the-top-valve-to-bleed-a-radiator'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 58,
                    'question' => 'When applying silicone, you must ensure that...<br>Select <b>TWO<b> correct options',
                    'slug'     => 'when-applying-silicone,-you-must-ensure-that...<br>select-<b>two<b>-correct-options',
                    
                    'answers' => [
                        [
                            'answer' => 'Adjacent surfaces are flat',
                            'slug' =>   'adjacent-surfaces-are-flat',
                        ],
                        [
                            'answer' => 'Surfaces are clean before application',
                            'slug' =>   'surfaces-are-clean-before-application'
                        ]
                        ,
                        [
                            'answer' => 'A consistent pressure on the gun in application',
                            'slug' =>  'a-consistent-pressure-on-the-gun-in-application'
                        ]
                        ,
                        [
                            'answer' => 'You use a profile tool for the perfect finish',
                            'slug' =>   'you-use-a-profile-tool-for-the-perfect-finish'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 58,
                    'question' => 'Is this the correct way to open a stopcock?',
                    'slug'     => 'is-this-the-correct-way-to-open-a-stopcock?',
                    'image_path' => 'vedioooooo',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes',
                        ],
                        [
                            'answer' => 'No, you should open it more slowly',
                            'slug' =>  'no,-you-should-open-it-more-slowly'
                        ]
                        ,
                        [
                            'answer' => 'No, you should stop halfway, wait a few seconds and open it fully',
                            'slug' =>   'no,-you-should-stop-halfway,-wait-a-few-seconds-and-open-it-fully'
                        ]
                        ,
                        [
                            'answer' => 'No, you should open it fully, then close it for a quarter of a turn',
                            'slug' =>   'no,-you-should-open-it-fully,-then-close-it-for-a-quarter-of-a-turn'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'What time is it best to water the garden during hot summer days?',
                    'slug'     => 'what-time-is-it-best-to-water-the-garden-during-hot-summer-days?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\handaymenImg\mowing3.jpg',
                    'answers' => [
                        [
                            'answer' => 'Morning',
                            'slug' =>   'morning',
                        ],
                        [
                            'answer' => 'Evening',
                            'slug' =>   'evening'
                        ]
                        ,
                        [
                            'answer' => 'Morning and Evening',
                            'slug' =>   'morning-and-evening'
                        ]
                        ,
                        [
                            'answer' => 'Anytime',
                            'slug' =>   'anytime'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'Which jointing tape gives the strongest joint?',
                    'slug'     => 'which-jointing-tape-gives-the-strongest-joint?',
     
                    'answers' => [
                        [
                            'answer' => 'Fibre tape',
                            'slug' =>   'fibre-tape',
                        ],
                        [
                            'answer' => 'Masking tape',
                            'slug' =>   'masking-tape'
                        ]
                        ,
                        [
                            'answer' => 'Double sided tape',
                            'slug' =>   'double-sided-tape'
                        ]
                        ,
                        [
                            'answer' => 'Strapping tape',
                            'slug' =>   'strapping-tape'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'Butterfly fixings are amongst the strongest plasterboard fixings.',
                    'slug'     => 'butterfly-fixings-are-amongst-the-strongest-plasterboard-fixings',
                    
                    'answers' => [
                        [
                            'answer' =>'True',
                            'slug' =>   'true',
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 58,
                    'question' => 'A client wants a floor over-boarded, what do you need to consider?<br>Select TWO correct options',
                    'slug'     => 'a-client-wants-a-floor-over-boarded,-what-do-you-need-to-consider?<br>select-two-correct-options',
     
                    'answers' => [
                        [
                            'answer' => 'Wiring and Plumbing',
                            'slug' =>   'fibre-tape',
                        ],
                        [
                            'answer' => 'Skirting',
                            'slug' =>   'masking-tape'
                        ]
                        ,
                        [
                            'answer' => 'Floorboards',
                            'slug' =>   'floorboards'
                        ]
                        ,
                        [
                            'answer' => 'Studwork',
                            'slug' =>   'studwork'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 58,
                    'question' => 'Which of the following statements do you consider bad practice?',
                    'slug'     => 'which-of-the-following-statements-do-you-consider-bad-practice?',
     
                    'answers' => [
                        [
                            'answer' => 'Not wearing PPE when inspecting a skirting job',
                            'slug' =>  'not-wearing-ppe-when-inspecting-a-skirting-job',
                        ],
                        [
                            'answer' => 'Providing a higher quote to include unexpected costs',
                            'slug' =>   'providing-a-higher-quote-to-include-unexpected-costs'
                        ]
                        ,
                        [
                            'answer' => 'Handing off an unfinished job and leaving your materials behind',
                            'slug' =>  'handing-off-an-unfinished-job-and-leaving-your-materials-behind'
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
