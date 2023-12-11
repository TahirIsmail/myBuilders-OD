<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentLandscaping extends Seeder
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
                    'job_category_id' => 62,
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\landscape_intro.jpeg',

                ],
                [
                    'job_category_id' => 62,
                    'question' => 'Lawns absorb more sound than patios.',
                    'slug'     => 'Lawns absorb more sound than patios.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\turf1.jpg',

                
                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ]
                        
                    ],
                ],


                [
                    'job_category_id' => 62,
                    'question' => 'What depth of MOT is required when building a patio for light foot traffic?',
                    'slug'     => 'what-depth-of-mot-is-required-when-building-a-patio-for-light-foot-traffic',
                  

                
                    'answers' => [
                        [
                            'answer' => '50mm',
                            'slug' =>   '50mm'
                        ],
                        [
                            'answer' => '100mm',
                            'slug' =>   '100mm'
                        ]
                        , [
                            'answer' => '200mm',
                            'slug' =>   '200mm'
                        ],
                        [
                            'answer' => '300mm',
                            'slug' =>   '300mm'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'When building a small pond, at what stage should you fill it?',
                    'slug'     => 'when-building-a-small-pond-at-what-stage-should-you-fill-it',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\pond2.jpg',

                
                    'answers' => [
                        [
                            'answer' => 'After laying the sand',
                            'slug' =>   'after-laying-the-sand'
                        ],
                        [
                            'answer' => 'After laying the underlay',
                            'slug' =>   'after-laying-the-underlay'
                        ],
                        [
                            'answer' => 'After laying the liner',
                            'slug' =>   'After laying the liner'
                        ],
                        [
                            'answer' => 'After laying the coping stones',
                            'slug' =>   'after-laying-the-coping-stones'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'You are building a stone patio and one of the slabs has a large irregularity on one side. What do you do?',
                    'slug'     => 'you-are-building-a-stone-patio-and-one-of-the-slabs-has-a-large-irregularity-on-one-side-what-do-you-do',
    

                
                    'answers' => [
                        [
                            'answer' => 'Turn it upside down',
                            'slug' => 'turn-it-upside-down'
                        ],
                        [
                            'answer' => 'Sand it down',
                            'slug' =>   'sand-it-down'
                        ],
                        [
                            'answer' => 'Hammer it down',
                            'slug' =>  'Hammer it down'
                        ],
                        [
                            'answer' => 'Use another slab',
                            'slug' =>   'use-another-slab'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'When laying turf, what action are you LEAST likely to take?',
                    'slug'     => 'when-laying-turf-what-action-are-you-least-likely-to-take',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\turf2.jpg',

                
                    'answers' => [
                        [
                            'answer' => 'Knitting the turf',
                            'slug' =>   'Knitting-the-turf'
                        ],
                        [
                            'answer' => 'Treating the turf',
                            'slug' =>   'Treating-the-turf'
                        ],
                        [
                            'answer' => 'Rolling the soil',
                            'slug' =>    'Rolling-the-soil'
                        ],
                        [
                            'answer' => 'Treating the soil',
                            'slug' =>   'treating-the-soil'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'Which of these features requires the LEAST maintenance?',
                    'slug'     => 'which-of-these-features-requires-the-least-maintenance',
                  

                
                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\wooden-deck.jpg',
                            'slug' =>   'wooden-deck'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\water_feature.jpg',
                            'slug' =>   'water_feature'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\firepit.jpg',
                            'slug' =>   'firepit'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\pond.jpg',
                            'slug' =>   'pond'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'What is the minimum value of X for this patio to be laid according to building regulations?',
                    'slug'     => 'what-is-the-minimum-value-of-x-for-this-patio-to-be-laid-according-to-building-regulations',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\Driveway_dpc_reduced.png',

                
                    'answers' => [
                        [
                            'answer' => '80mm',
                            'slug' =>   '80mm'
                        ],
                        [
                            'answer' => '150mm',
                            'slug' =>   '150mm'
                        ],
                        [
                            'answer' => '200mm',
                            'slug' =>   '200mm'
                        ],
                        [
                            'answer' => '250mm',
                            'slug' =>   '250mm'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 62,
                    'question' => 'Which of these materials would you recommend to a homeowner for their patio?',
                    'slug'     => 'which-of-these-materials-would-you-recommend-to-a-homeowner-for-their-patio',
                  

                
                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\floor1B.png',
                            'slug' =>   'floor1B'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\floor2B.png',
                            'slug' =>   'floor2B'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\floor3C.png',
                            'slug' =>   'floor3C'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\floor4C.png',
                            'slug' =>   'floor4C'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 62,
                    'question' => 'An R9 rated tile is suitable for a patio.',
                    'slug'     => 'an-r9-rated-tile-is-suitable-for-a-patio',
                    
                
                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ]
                        
                    ],
                ],


                [
                    'job_category_id' => 62,
                    'question' => 'Before installing this patio with 30mm thick slabs on a full bed of mortar, the team will have had to excavate to a depth of...',
                    'slug'     => 'before-installing-this-patio-with-30mm-thick-slabs-on-a-full-bed-of-mortar-the-team-will-have-had-to-excavate-to-a-depth-of',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\patio.jpg',

                
                    'answers' => [
                        [
                            'answer' => '100mm to 120mm',
                            'slug' =>  '100mm-to-120mm'
                        ],
                        [
                            'answer' => '130mm to 170mm',
                            'slug' =>  '130mm-to-170mm'
                        ],
                        [
                            'answer' => '180mm to 220mm',
                            'slug' =>  '180mm-to-220mm'
                        ],
                        [
                            'answer' => '230mm to 250mm',
                            'slug' =>  '230mm-to-250mm'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'If you can install a drainage channel in your patio, it eliminates the need for a slope.An R9 rated tile is suitable for a patio.',
                    'slug'     => 'if-you-can-install-a-drainage-channel-in-your-patio-it-eliminates-the-need-for-a-slope-an-r9-rated-tile-is-suitable-for-a-patio',
                    
                
                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'When laying a patio, which of these are you most likely to use?',
                    'slug'     => 'when-laying-a-patio-which-of-these-are-you-most-likely-to-use',
                  

                
                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\cut1B.png',
                            'slug' =>   'cut1B'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\cut2C.png',
                            'slug' =>   'cut2C'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\cut3B.png',
                            'slug' =>   'cut3B'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\LandscapingImg\cut4B.png',
                            'slug' =>   'cut4B'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 62,
                    'question' => 'According to building regulations, regardless of its location, a 1m tall garden wall should be at least…',
                    'slug'     => 'according-to-building-regulations-regardless-of-its-location-a-1m-tall-garden-wall-should-be-at-least',
                    
                
                    'answers' => [
                        [
                            'answer' => '½ brick thick',
                            'slug' =>   '½-brick-thick'
                        ],
                        [
                            'answer' => '1 brick thick',
                            'slug' =>   '1-brick-thick'
                        ],
                        [
                            'answer' => '1½ brick thick',
                            'slug' =>  '1½-brick-thick'
                        ],
                        [
                            'answer' => '2 bricks thick',
                            'slug' =>   '2-bricks-thick'
                        ]
                        
                    ],
                ],

                [
                    'job_category_id' => 62,
                    'question' => 'Which of these statements about garden boundaries are true?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     => 'which-of-these-statements-about-garden-boundaries-are-true-select-all-that-apply',
                    
                
                    'answers' => [
                        [
                            'answer' => 'You are allowed to access a neighbours garden for essential works without written agreement',
                            'slug' =>   'you-are-allowed-to-access-a-neighbours-garden-for-essential-works-without-written-agreement'
                        ],
                        [
                            'answer' => 'Footings can cross into a neighbours land',
                            'slug' =>   'footings-can-cross-into-a-neighbours-land'
                        ],
                        [
                            'answer' => 'The title deeds allow you to check where the garden boundary lies',
                            'slug' =>   'the-title-deeds-allow-you-to-check-where-the-garden-boundary-lies'
                        ],
                        [
                            'answer' => 'Boundary fencing is affected by the Party Wall Act',
                            'slug' =>  'boundary-fencing-is-affected-by-the-party-wall-act'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 62,
                    'question' => 'We know that dealing with clients can be tricky, and we would like to know the things that you value most in your client relationships. In your opinion, which are the TWO LEAST desirable characteristics a client can have?',
                    'slug'     => 'we-know-that-dealing-with-clients-can-be-tricky-and-we-would-like-to-know-the-things-that-you-value-most-in-your-client-relationships-in-your-opinion-which-are-the-two-least-desirable-characteristics-a-client-can-have',
                    
                
                    'answers' => [
                        [
                            'answer' => 'They demand high standards of work but willing to pay for it',
                            'slug' =>   'they-demand-high-standards-of-work-but-willing-to-pay-for-it'
                        ],
                        [
                            'answer' => 'Regularly asking for pictures to be taken showing progress of the job',
                            'slug' =>   'regularly-asking-for-pictures-to-be-taken-showing-progress-of-the-job'
                        ],
                        [
                            'answer' => 'Are rarely around to discuss the work in person',
                            'slug' =>   'are-rarely-around-to-discuss-the-work-in-person'
                        ],
                        [
                            'answer' => 'Not noticing when your team goes the extra mile',
                            'slug' =>   'not-noticing-when-your-team-goes-the-extra-mile'
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
