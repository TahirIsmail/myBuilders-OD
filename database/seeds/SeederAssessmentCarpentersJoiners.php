<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentCarpentersJoiners extends Seeder
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
                    'job_category_id' => 40,
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\New_carpentry_intro.jpg',

                ],



                [
                    'job_category_id' => 40,
                    'question' => 'What step of the build marks the difference between first and second fix?',
                    'slug'     => 'what-step-of-the-build-marks-the-difference-between-first-and-second-fix?',

                    'answers' => [
                        [
                            'answer' => 'Plastering',
                            'slug' =>  'plastering'
                        ],
                        [
                            'answer' => 'Window fitting',
                            'slug' =>   'window-fitting'
                        ],
                        [
                            'answer' => 'Erecting partition walls',
                            'slug' =>   'erecting-partition-walls'
                        ], [
                            'answer' => 'Laying the DPC',
                            'slug' =>   'laying-the-dpc'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 40,
                    'question' => 'What type of square are you most likely to use for second fix carpentry?',
                    'slug'     =>'what-type-of-square-are-you-most-likely-to-use-for-second-fix-carpentry?',

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\combination_square.png',
                            'slug' =>  'combination_square'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\speed_square.png',
                            'slug' =>   'speed_square'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\tri-square.png',
                            'slug' =>   'tri-square'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\framing_square.png',
                            'slug' =>   'framing_square'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'What tool would you use to transfer any angle?',
                    'slug'     => 'what-tool-would-you-use-to-transfer-any-angle?',

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\framing_square.png',
                            'slug' =>   'framing_square'
                        ] 
                        ,[
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\combination_square.png',
                            'slug' =>  'combination_square'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\drywall square.png',
                            'slug' =>   'drywall_square'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\t-bevel.png',
                            'slug' =>   't-bevel'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Which saw are you most likely to use when cutting for rad tails?',
                    'slug'     => 'which-saw-are-you-most-likely-to-use-when-cutting-for-rad-tails?',

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\plunge_saw.png',
                            'slug' =>   'plunge_saw'
                        ] 
                        ,[
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\circular_saw.png',
                            'slug' =>  'circular_saw'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\hand_saw.png',
                            'slug' =>   'hand_saw'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\jig_saw.png',
                            'slug' =>   'jig_saw.png'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'With a plunge saw, you can cut a door while still on its hinges.',
                    'slug'     => 'with-a-plunge-saw,-you-can-cut-a-door-while-still-on-its-hinges',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ] 
                        ,[
                            'answer' => 'False',
                            'slug' =>  'false'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Which of these would you NOT use a router for?',
                    'slug'     => 'which-of-these-would-you-not-use-a-router-for?',

                    'answers' => [
                        [
                            'answer' => 'Cutting grooves',
                            'slug' =>   'cutting-grooves'
                        ] 
                        ,[
                            'answer' => 'Decorative flutings',
                            'slug' =>  'decorative-flutings'
                        ]
                        ,[
                            'answer' => 'Profile edges',
                            'slug' =>   'profile-edges'
                        ]
                        ,[
                            'answer' => 'Cutting along beveled edges',
                            'slug' =>  'cutting-along-beveled-edges'
                        ]
                        
                    ],
                ],

                [
                    'job_category_id' => 40,
                    'question' => 'Which one of these nail guns would you use for 1st fix carpentry?',
                    'slug'     => 'which-one-of-these-nail-guns-would-you-use-for-1st-fix-carpentry?',

                    'answers' => [
                        'answers' => 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\images.jpg',
                            'slug' =>   'images'
                        ] 
                        ,[
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagessl.jpg',
                            'slug' =>   'imagessl'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagesklu.jpg',
                            'slug' =>   'imagesklu'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagesjhg.jpg',
                            'slug' =>   'imagesjhg'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagespkjj.jpg',
                            'slug' =>   'imagespkjj'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagesgfc.jpg',
                            'slug' =>   'imagesgfc'
                        ],
                    
                    ],
                ],



                [
                    'job_category_id' => 40,
                    'question' => 'You can use softwood for the skirting board.<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">What do you think about this statement?</span>',
                    'slug'     => 'you-can-use-softwood-for-the-skirting-board.<br>what-do-you-think-about-this-statement?',

                    'answers' => [
                        [
                            'answer' => 'Yes you can',
                            'slug' =>   'yes-you-can'
                        ] 
                        ,[
                            'answer' => 'Yes, but it will need to be reinforced',
                            'slug' =>   'yes,-but-it-will-need-to-be-reinforced'
                        ]
                        ,[
                            'answer' => 'Yes, but you will need to use preservative',
                            'slug' =>   'yes,-but-you-will-need-to-use-preservative'
                        ]
                        ,[
                            'answer' => 'No you can not',
                            'slug' => 'no-you-can-not'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'When replacing skirting boards, which one of these is NOT needed?',
                    'slug'     => 'when-replacing-skirting-boards,-which-one-of-these-is-not-needed?',

                    'answers' => [
                        'answers' => 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imageRes.jpg',
                            'slug' =>   'imageRes'
                        ] 
                        ,[
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\images_gun.jpg',
                            'slug' =>   'images_gun'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\images_imple.jpg',
                            'slug' =>   'images_imple'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\images_cuter.jpg',
                            'slug' =>   'images_cuter'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\speed_square.png',
                            'slug' =>   'speed_square.png'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagestool.jpg',
                            'slug' =>   'imagestool.jpg'
                        ],
                    
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Which type of wood expands the least?',
                    'slug'     => 'which-type-of-wood-expands-the-least?',

                    'answers' => [
                        [
                            'answer' => 'Engineered timber',
                            'slug' =>   'engineered-timber'
                        ] 
                        ,[
                            'answer' => 'Natural oak',
                            'slug' =>   'natural-oak'
                        ]
                        ,[
                            'answer' => 'Redwood',
                            'slug' =>  'redwood'
                        ]
                        ,[
                            'answer' => 'Treated cedar',
                            'slug' =>  'treated-cedar'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Tap the square(s) where you are most likely to find birdsmouth joints<br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     => 'tap-the-square(s)-where-you-are-most-likely-to-find-birdsmouth-joints<br>select-all-that-apply',
                  
                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagesLetr.png',
                            'slug' =>   'imagesLetr'
                        ] 
                        
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'A rip cut describes cutting against the grain',
                    'slug'     => 'a-rip-cut-describes-cutting-against-the-grain',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ] 
                        ,[
                            'answer' => 'False',
                            'slug' =>  'false'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 40,
                    'question' => 'Tap the 2 squares where you would fit the TOP and the BOTTOM hinges',
                    'slug'     => 'tap-the-2-squares-where-you-would-fit-the-top-and-the-bottom-hinges',

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\imagesDoor.jpg',
                            'slug' =>   'imagesDoor'
                        ] 
                        
                        
                    ],
                ],

                [
                    'job_category_id' => 40,
                    'question' => 'Which parts of a staircase is hardwood sometimes used for?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     => 'which-parts-of-a-staircase-is-hardwood-sometimes-used-for?<br>select-all-that-apply',

                    'answers' => [
                        [
                            'answer' => 'Treads',
                            'slug' =>   'treads'
                        ],
                        [
                            'answer' => 'Risers',
                            'slug' =>   'risers'
                        ],
                        [
                            'answer' => 'Newel posts',
                            'slug' =>   'newel-posts'
                        ],
                        [
                            'answer' => 'Handrails',
                            'slug' =>   'handrails'
                        ],
                        
                        
                    ],
                ],

                [
                    'job_category_id' => 40,
                    'question' => 'Which of these could you use as a guide for a rip cut?',
                    'slug'     => 'which-of-these-could-you-use-as-a-guide-for-a-rip-cut?',

                    'answers' => [
                        'answers' => 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\jig.png',
                            'slug' =>   'jig'
                        ] 
                        ,[
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\timber.png',
                            'slug' =>   'timber'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\tape.png',
                            'slug' =>   'tape.'
                        ], 
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpentersJoinersImg\framing_square.png',
                            'slug' =>   'framing_square'
                        ],
                       
                    
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
