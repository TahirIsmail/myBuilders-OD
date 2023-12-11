<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentBricklaying extends Seeder
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
                    'job_category_id' => 9,
                    'question' => 'We have got lots of jobs waiting for you!<br>But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\Bricklaying_new_intro.jpg',

                ],



                [
                    'job_category_id' => 9,
                    'question' => 'Engineering bricks are used for their aesthetic qualities',
                    'slug'     => 'engineering-bricks-are-used-for-their-aesthetic-qualities',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\bricks2.png',
                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'True'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'False'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 9,
                    'question' => 'A flexible DPC always needs to be used in garden walls.',
                    'slug'     => 'a-flexible-dpc-always-needs-to-be-used-in-garden-walls',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'True'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'False'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'A wall has 20 courses on one end and 19 on the other. What can this be a sign of?',
                    'slug'     => 'a-wall-has-20-courses-on-one-end-and-19-on-the-other.-what-can-this-be-a-sign-of?',

                    'answers' => [
                        [
                            'answer' => 'There is a nudge in it',
                            'slug' =>   'there-is-a-nudge-in-it'
                        ],
                        [
                            'answer' => 'There is a lift in it',
                            'slug' =>  'there-is-a-lift-in-it'
                        ],
                        [
                            'answer' => 'There is a boar in it',
                            'slug' =>   'there-is-a-boar-in-it'
                        ],
                        [
                            'answer' => 'There is a pig in it',
                            'slug' => 'there-is-a-pig-in-it'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'According to building regulations, what are the correct measurements for X and Y?<br>Select ALL that apply',
                    'slug'     => 'according-to-building-regulations,-what-are-the-correct-measurements-for-x-and-y?<br>select-all-that-apply',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\bricklaying_DPC_measures_reduced.png',
                    'answers' => [
                        [
                            'answer' => 'X should be at least 150mm',
                            'slug' =>   'x-should-be-at-least-150mm'
                        ],
                        [
                            'answer' => 'X should be at least 100mm',
                            'slug' =>  'x-should-be-at-least-100mm'
                        ],
                        [
                            'answer' => 'Y should be at least 225mm',
                            'slug' =>  'y-should-be-at-least-225mm'
                        ],
                        [
                            'answer' => 'Y should be at least 275mm',
                            'slug' =>  'y-should-be-at-least-275mm'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'A customer is concerned with their wall. What course of action would you recommend?',
                    'slug'     => 'a-customer-is-concerned-with-their-wall.-what-course-of-action-would-you-recommend?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\wall_white.png',
                    'answers' => [
                        [
                            'answer' => 'It is exposed; protect the wall from sunlight',
                            'slug' =>  'it-is-exposed;-protect-the-wall-from-sunlight'
                        ],
                        [
                            'answer' => 'It is toxic; treat the stain and paint over it',
                            'slug' =>  'it-is-toxic;-treat-the-stain-and-paint-over-it'
                        ],
                        [
                            'answer' => 'It is harmless; wait for it to wear off',
                            'slug' =>   'it-is-harmless;-wait-for-it-to-wear-off'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'When building a wall, what is the minimum mortar depth for each course?',
                    'slug'     => 'when-building-a-wall,-what-is-the-minimum-mortar-depth-for-each-course?',
                    'answers' => [
                        [
                            'answer' => '4mm',
                            'slug' =>   '4mm'
                        ],
                        [
                            'answer' => '7mm',
                            'slug' =>   '7mm'
                        ],
                        [
                            'answer' => '10mm',
                            'slug' =>   '10mm'
                        ],
                        [
                            'answer' => '12mm',
                            'slug' =>   '12mm'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 9,
                    'question' => 'What tool would you use to create this type of joint?',
                    'slug'     => 'what-tool-would-you-use-to-create-this-type-of-joint?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\bricklaying_grapevine_pointing.png',
                    'answers' => [
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_A2.png',
                            'slug' =>   'joint_tool_A2'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_B.jpeg',
                            'slug' =>   'joint_tool_b'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_C.jpeg',
                            'slug' =>   'joint_tool_c'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_D.jpeg',
                            'slug' =>   'joint_tool_D'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 9,
                    'question' => 'What is this type of joint called?',
                    'slug'     => 'what-is-this-type-of-joint-called?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\wRaked Joint Bricklaying.png',
                    'answers' => [
                        [
                            'answer' => 'Grapevine joint',
                            'slug' =>   'grapevine-joint'
                        ],
                        [
                            'answer' => 'Beaded joint',
                            'slug' =>   'beaded-joint'
                        ],
                        [
                            'answer' => 'Concave joint',
                            'slug' =>   'concave-joint'
                        ]
                        ,
                        [
                            'answer' => 'Raked joint',
                            'slug' =>   'raked-joint'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 9,
                    'question' =>  'What type of wall ties would you use in this cavity?',
                    'slug'     =>  'what-type-of-wall-ties-would-you-use-in-this-cavity?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\bricklaying_timber_inner_reduced.png',
                    'answers' => [
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\wall_tie_D.jpeg',
                            'slug' =>   'joint_tool_A2'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_B.jpeg',
                            'slug' =>   'joint_tool_b'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\wall_tie_C.png',
                            'slug' =>   'joint_tool_c'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\wall_tie_B.jpeg',
                            'slug' =>   'joint_tool_D'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'What tool would you use to create a recessed joint?',
                    'slug'     => 'what-tool-would-you-use-to-create-a-recessed-joint?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\bricklaying_grapevine_pointing.png',
                    'answers' => [
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_A2.png',
                            'slug' =>   'joint_tool_A2'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_B.jpeg',
                            'slug' =>   'joint_tool_b'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_C.jpeg',
                            'slug' =>   'joint_tool_c'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\joint_tool_D.jpeg',
                            'slug' =>   'joint_tool_D'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' =>  'Look at the red bricks. What are they called?',
                    'slug'     =>  'look-at-the-red-bricks.-what-are-they-called?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\brick1.png',
                    'answers' => [
                        [
                            'answer' =>  'Bullnose headers',
                            'slug' =>    'bullnose-headers'
                        ],
                        [
                            'answer' =>  'Squint bricks',
                            'slug' =>    'squint-bricks'
                        ],
                        [
                            'answer' =>  'External plinth',
                            'slug' =>    'external-plinth'
                        ],
                        [
                            'answer' =>  'Radial stretcher',
                            'slug' =>   'radial-stretcher'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' =>  'Which type of sand would you typically use to make mortar?',
                    'slug'     => 'which-type-of-sand-would-you-typically-use-to-make-mortar?',
                  
                    'answers' => [
                        [
                            'answer' =>  'Kiln dried sand',
                            'slug' =>    'kiln-dried-sand'
                        ],
                        [
                            'answer' =>  'Sharp sand',
                            'slug' =>    'sharp-sand'
                        ],
                        [
                            'answer' =>  'Soft sand',
                            'slug' =>    'soft-sand'
                        ],
                        [
                            'answer' =>  'Gypsum sand',
                            'slug' =>    'gypsum-sand'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'Which of the following are you most likely to use to spread mortar?',
                    'slug'     => 'which-of-the-following-are-you-most-likely-to-use-to-spread-mortar?',
                   
                    'answers' => [
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\trowelA.png',
                            'slug' =>   'trowela.png'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\trowelB.png',
                            'slug' =>    'trowelb.png'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\trowelC2.png',
                            'slug' =>   'trowelc2.png'
                        ],
                        [
                            'answer' =>  'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\trowelD.png',
                            'slug' =>   'troweld.png'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' =>  'How should you cut bricks?',
                    'slug'     => 'how-should-you-cut-bricks?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bricklayingImg\brick.png',
                    'answers' => [
                        [
                            'answer' =>  'With a bolster and chisel',
                            'slug' =>   'with-a-bolster-and-chisel'
                        ],
                        [
                            'answer' =>  'With power tools',
                            'slug' =>   'with-power-tools'
                        ],
                        [
                            'answer' =>  'With a brick saw',
                            'slug' =>    'with-a-brick-saw'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 9,
                    'question' =>  'After finishing a stepped garden wall job, a customer wants to pay you £200 less because they notice there are roughly 10% bricks left over and you are not responsible for removing waste.<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Which of the following responses would be the most appropriate?</span>',
                    'slug'     => 'after-finishing-a-stepped-garden-wall-job,-a-customer-wants-to-pay-you-£200-less-because-they-notice-there-are-roughly-10%-bricks-left-over-and-you-are-not-responsible-for-removing-waste.<br><span-style="color:rgb(121,-144,-174);font-size:0.875em;line-height:1.5em;font-weight:normal;">which-of-the-following-responses-would-be-the-most-appropriate?</span>',
                  
                    'answers' => [
                        [
                            'answer' =>  'It is an unreasonable demand, they have to pay in full',
                            'slug' =>    'it-is-an-unreasonable-demand,-they-have-to-pay-in-full'
                        ],
                        [
                            'answer' =>  'It is frustrating but you knock a small token sum off their bill as a good will gesture',
                            'slug' =>    'it-is-frustrating-but-you-knock-a-small-token-sum-off-their-bill-as-a-good-will-gesture'
                        ],
                        [
                            'answer' =>  'You empathise with the customer, so you remove the bricks from site as compensation',
                            'slug' =>    'you-empathise-with-the-customer,-so-you-remove-the-bricks-from-site-as-compensation'
                        ],
                        [
                            'answer' =>  'Offer to remove the leftover bricks, and refund the value from the invoice',
                            'slug' =>  'offer-to-remove-the-leftover-bricks,-and-refund-the-value-from-the-invoice'
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
