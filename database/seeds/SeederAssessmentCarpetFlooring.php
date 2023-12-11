<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentCarpetFlooring extends Seeder
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
                    'job_category_id' => 41,
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\intro.jpeg',

                ],



                [
                    'job_category_id' => 41,
                    'question' => 'When laying a click system laminate flooring you should try to...<br>Select<b> TWO </b>correct answers',
                    'slug'     => 'when-laying-a-click-system-laminate-flooring-you-should-try-to...<br>select-<b>two</b>-correct-answers',

                    'answers' => [
                        [
                            'answer' => 'Glue the laminate joints',
                            'slug' =>  'glue-the-laminate-joints'
                        ],
                        [
                            'answer' => 'Lay with the length of the room',
                            'slug' =>   'lay-with-the-length-of-the-room'
                        ],
                        [
                            'answer' => 'Lay towards the door',
                            'slug' =>   'lay-towards-the-door'
                        ], [
                            'answer' => 'Lay in the direction of the light source',
                            'slug' =>   'lay-in-the-direction-of-the-light-source'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'Why should you stagger the noggins?',
                    'slug'     => 'why-should-you-stagger-the-noggins?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\way3.png',

                    'answers' => [
                        [
                            'answer' => 'Because its easier to install',
                            'slug' =>   'because-its-easier-to-install'
                        ],
                        [
                            'answer' => 'It creates a stronger floor',
                            'slug' =>   'it-creates-a-stronger-floor'
                        ],
                        [
                            'answer' => 'To help with expansion and contraction',
                            'slug' =>   'to-help-with-expansion-and-contraction'
                        ], [
                            'answer' => 'To make it easier to install insulation',
                            'slug' =>  'to-make-it-easier-to-install-insulation'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Which boards are more prone to bow?',
                    'slug'     => 'which-boards-are-more-prone-to-bow?',

                    'answers' => [
                        [
                            'answer' => 'Radially sawn',
                            'slug' =>   'radially-sawn'
                        ],
                        [
                            'answer' => 'Quarter-sawn',
                            'slug' =>   'quarter-sawn'
                        ],
                        [
                            'answer' => 'Rift sawn',
                            'slug' =>   'rift-sawn'
                        ], [
                            'answer' => 'Plain sawn',
                            'slug' =>   'plain-sawn'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'How should board ends be fastened to a joist?',
                    'slug'     => 'how-should-board-ends-be-fastened-to-a-joist?',


                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\nail1.png',
                            'slug' =>   'nail1'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\nail3B.png',
                            'slug' =>   'nail3B'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\nail2',
                            'slug' =>   'nail2'
                        ], [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\nail4.png',
                            'slug' =>   'nail4'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Select the correct statement:<br> When removing an entire boarded floor…',
                    'slug'     => 'select-the-correct-statement:<br>when-removing-an-entire-boarded-floor…',


                    'answers' => [
                        [
                            'answer' => 'You must remove the skirting board',
                            'slug' =>   'you-must-remove-the-skirting-board'
                        ],
                        [
                            'answer' => 'You should remove the tongue-and-groove boards with a cold chisel',
                            'slug' =>  'you-should-remove-the-tongue-and-groove-boards-with-a-cold-chisel'
                        ],
                        [
                            'answer' => 'You should remove the tongue-and-groove with a bolster chisel',
                            'slug' =>   'you-should-remove-the-tongue-and-groove-with-a-bolster-chisel'
                        ], [
                            'answer' => 'You will need a floorboard saw to remove square-edged boards',
                            'slug' =>   'you-will-need-a-floorboard-saw-to-remove-square-edged-boards'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'To free the end of a board, you will often need to remove the skirting board.',
                    'slug'     => 'to-free-the-end-of-a-board,-you-will-often-need-to-remove-the-skirting-board',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\removeFloor.jpg',

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
                    'job_category_id' => 41,
                    'question' => 'Select TWO correct statements about chipboard flooring',
                    'slug'     => 'select-<b>two</b>-correct-statements-about-chipboard-flooring',


                    'answers' => [
                        [
                            'answer' => 'Square-edged boards should be laid along the joists',
                            'slug' =>   'square-edged-boards-should-be-laid-along-the-joists'
                        ],
                        [
                            'answer' => 'Square-edged boards should be laid across the joists',
                            'slug' =>   'square-edged-boards-should-be-laid-across-the-joists'
                        ],
                        [
                            'answer' => 'Tongue-and-groove boards should be laid along the joists',
                            'slug' =>   'tongue-and-groove-boards-should-be-laid-along-the-joists'
                        ], [
                            'answer' => 'Tongue-and-groove boards should be laid across the joists',
                            'slug' =>  'tongue-and-groove-boards-should-be-laid-across-the-joists'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Before laying a solid wood floor, the boards should be left to acclimatise for…',
                    'slug'     => 'before-laying-a-solid-wood-floor,-the-boards-should-be-left-to-acclimatise-for…',


                    'answers' => [
                        [
                            'answer' => '1 to 2 hours',
                            'slug' =>   '1-to-2-hours'
                        ],
                        [
                            'answer' => '12 to 24 hours',
                            'slug' =>   '12-to-24-hours'
                        ],
                        [
                            'answer' => '1 to 2 days',
                            'slug' =>   '1-to-2-days'
                        ], [
                            'answer' => '4 to 5 days',
                            'slug' =>   '4-to-5-days'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'Which saw would you use when cutting flooring to fit around radiator tails?',
                    'slug'     => 'which-saw-would-you-use-when-cutting-flooring-to-fit-around-radiator-tails?',


                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\tool_new1.png',
                            'slug' =>   'tool_new1'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\tool_new2.png',
                            'slug' =>   'tool_new2'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\hard_flooring_Q9_opt3.jpg',
                            'slug' =>   'hard_flooring_Q9_opt3'
                        ], [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\tool_new4.png',
                            'slug' =>   'tool_new4'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Before laying boards on a cement subfloor, where would you draw the chalk line?',
                    'slug'     => 'before-laying-boards-on-a-cement-subfloor,-where-would-you-draw-the-chalk-line?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\line.png',


                    'answers' => [
                        [
                            'answer' => 'A',
                            'slug' =>   'a'
                        ],
                        [
                            'answer' => 'B',
                            'slug' =>   'b'
                        ],
                        [
                            'answer' => 'C',
                            'slug' =>   'c'
                        ], [
                            'answer' => 'D',
                            'slug' =>   'd'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'Hardwood floors can be sanded to remove stains and imperfections.',
                    'slug'     => 'hardwood-floors-can-be-sanded-to-remove-stains-and-imperfections',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\hardFloor.jpg',

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
                    'job_category_id' => 41,
                    'question' => 'When renewing laminate flooring, it is common practice to reuse the existing underlay.',
                    'slug'     => 'when-renewing-laminate-flooring,-it-is-common-practice-to-reuse-the-existing-underlay',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\CarpetFlooringImg\laminateFloor.jpg',

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
                    'job_category_id' => 41,
                    'question' => 'Which of the following statements about hard flooring finishes are TRUE?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     => 'which-of-the-following-statements-about-hard-flooring-finishes-are-true?<br>select-all-that-apply',



                    'answers' => [
                        [
                            'answer' => 'Lacquer forms a protective layer at the top of the boards',
                            'slug' =>   'lacquer-forms-a-protective-layer-at-the-top-of-the-boards'
                        ],
                        [
                            'answer' => 'Oil forms a protective layer at the top of the boards',
                            'slug' =>   'oil-forms-a-protective-layer-at-the-top-of-the-boards'
                        ],
                        [
                            'answer' => 'Lacquer is a better choice for a floor that receives heavy foot traffic',
                            'slug' =>   'lacquer-is-a-better-choice-for-a-floor-that-receives-heavy-foot-traffic'
                        ], [
                            'answer' => 'Oil is a better choice for a floor that receives heavy foot traffic',
                            'slug' =>   'oil-is-a-better-choice-for-a-floor-that-receives-heavy-foot-traffic'
                        ]
                    ],
                ], [
                    'job_category_id' => 41,
                    'question' => 'Can you glue down wooden floors on 20 day cured concrete?',
                    'slug'     => 'can-you-glue-down-wooden-floors-on-20-day-cured-concrete?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'Yes, if you use the right adhesive',
                            'slug' =>   'yes,-if-you-use-the-right-adhesive'
                        ],
                        [
                            'answer' => 'Yes, if the boards are not too heavy',
                            'slug' =>   'yes,-if-the-boards-are-not-too-heavy'
                        ], [
                            'answer' => 'No, the concrete needs to be at least 60 days old',
                            'slug' =>   'no,-the-concrete-needs-to-be-at-least-60-days-old'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Which of the following is most important to establish with your customer before starting a job?',
                    'slug'     => 'which-of-the-following-is-most-important-to-establish-with-your-customer-before-starting-a-job?',


                    'answers' => [
                        [
                            'answer' => 'An agreed quote',
                            'slug' =>   'an-agreed-quote'
                        ],
                        [
                            'answer' => 'Time scale',
                            'slug' =>   'time-scale'
                        ],
                        [
                            'answer' => 'Their method of payment',
                            'slug' =>   'their-method-of-payment'
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
