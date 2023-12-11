<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentBathRoom extends Seeder
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
                    'job_category_id' => 8,
                    'question' => 'We have got lots of jobs waiting for you!<br>But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',

                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Installing a RPBP is an efficient way to prevent backflow in a bathroom.',
                    'slug'     => 'installing-a-rpbp-is-an-efficient-way-to-prevent-backflow-in-a-bathroom.',
                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>   'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 8,
                    'question' => 'When fitting underfloor heating, where should you fit insulation?',
                    'slug'     => 'when-fitting-underfloor-heating,-where-should-you-fit-insulation?',
                    'answers' => [
                        [
                            'answer' => 'Under the heating system',
                            'slug' =>   'under-the-heating-system'
                        ],
                        [
                            'answer' => 'Over the heating system',
                            'slug' =>   'over-the-heating-system'
                        ],
                        [
                            'answer' => 'Both under and over the heating system',
                            'slug' =>   'both-under-and-over-the-heating-system'
                        ], [
                            'answer' => 'Neither under nor over the heating system',
                            'slug' =>   'neither-under-nor-over-the-heating-system'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 8,
                    'question' => 'Which of these statements about tanking is true?',
                    'slug'     => 'which-of-these-statements-about-tanking-is-true?',
                    'answers' => [
                        [
                            'answer' => 'Good tiles and grout are all you need to tank a bathroom properly',
                            'slug' =>   'good-tiles-and-grout-are-all-you-need-to-tank-a-bathroom-properly'
                        ],
                        [
                            'answer' => 'Tanking replaces the need for wall insulation',
                            'slug' =>   'tanking-replaces-the-need-for-wall-insulation'
                        ],
                        [
                            'answer' => 'Concrete and plasterboard can both be tanked',
                            'slug' =>   'concrete-and-plasterboard-can-both-be-tanked'
                        ],
                        [
                            'answer' => 'You can only use a tanking membrane to tank a bathroom',
                            'slug' =>   'you-can-only-use-a-tanking-membrane-to-tank-a-bathroom'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 8,
                    'question' => 'Look at these two appliances. Then pick the correct statement.',
                    'slug'     => 'look-at-these-two-appliances.-then-pick-the-correct-statement.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\AB2.png',
                    'answers' => [
                        [
                            'answer' => 'A is more susceptible to backflow than B',
                            'slug' =>   'a-is-more-susceptible-to-backflow-than-b'
                        ],
                        [
                            'answer' => 'B is more susceptible to backflow than A',
                            'slug' =>   'both-appliances-are-equally-susceptible-to-backflow'
                        ],
                        [
                            'answer' => 'Both appliances are equally susceptible to backflow',
                            'slug' =>   'both-appliances-are-equally-susceptible-to-backflow'
                        ],
                        [
                            'answer' => 'Neither of these appliances is susceptible to backflow',
                            'slug' =>   'neither-of-these-appliances-is-susceptible-to-backflow'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Cement boards (such as Hardibacker / AquaPanel / NoMorePly) are:',
                    'slug'     => 'cement-boards-(such-as-hardibacker-/-aquapanel-/-nomoreply)-are:',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\cement_board.jpg',
                    'answers' => [
                        [
                            'answer' => 'Waterproof',
                            'slug' =>   'true'
                        ],
                        [
                            'answer' => 'Water resistant',
                            'slug' =>   'false'
                        ],
                        [
                            'answer' => 'Water repellent',
                            'slug' =>   'false'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'If you were drilling through this 1m long, 200mm wide (8x2) joist, what would an acceptable value for X?',
                    'slug'     => 'if-you-were-drilling-through-this-1m-long,-200mm-wide-(8x2)-joist,-what-would-an-acceptable-value-for-x?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\hole_in_joist_X.png',
                    'answers' => [
                        [
                            'answer' => '100mm',
                            'slug' =>   '100mm'
                        ],
                        [
                            'answer' => '300mm',
                            'slug' =>   '300mm'
                        ],
                        [
                            'answer' => '500mm',
                            'slug' =>   '500mm'
                        ],
                        [
                            'answer' => '700mm',
                            'slug' =>   '700mm'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Which of these plasterboards is moisture resistant?',
                    'slug'     => 'which-of-these-plasterboards-is-moisture-resistant?',

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\blue_plastercopy.png',
                            'slug' =>   'blue-plastercopy'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\pink_plaster2copy.png',
                            'slug' =>   'pink_plaster2copy'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\green_plastercopy.png',
                            'slug' =>   'green_plastercopy'
                        ],

                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\yellow_plastercopy.png.png',
                            'slug' =>   'yellow_plastercopy'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'When applying silicone to seal a bath, which of the following is best practice?',
                    'slug'     => 'when-applying-silicone-to-seal-a-bath,-which-of-the-following-is-best-practice?',
                    'answers' => [
                        [
                            'answer' => 'Apply the silicone after installing the bath',
                            'slug' =>   'apply-the-silicone-after-installing-the-bath'
                        ],
                        [
                            'answer' => 'Apply the silicone before the bath is installed',
                            'slug' =>  'Apply the silicone before the bath is installed'
                        ],
                        [
                            'answer' => 'Install and clamp bath down, then apply the silicone',
                            'slug' =>   'install-and-clamp-bath-down,-then-apply-the-silicone'
                        ],
                        [
                            'answer' => 'Install and fill the bath with water, then apply the silicone',
                            'slug' =>  'install-and-fill-the-bath-with-water,-then-apply-the-silicone'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'If you were to install a light switch for these spotlights, where would you install it?',
                    'slug'     => 'if-you-were-to-install-a-light-switch-for-these-spotlights,-where-would-you-install-it?',
                   'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\bathroomFitingImg\light_switch.png',
                    'answers' => [
                        [
                            'answer' => 'Outside, in the corridor',
                            'slug' =>   'outside,-in-the-corridor'
                        ],
                        [
                            'answer' => 'By the door, opposite the shower',
                            'slug' =>   'by-the-door,-opposite-the-shower'
                        ],
                        [
                            'answer' => 'By the door, next to the shower',
                            'slug' =>   'by-the-door,-next-to-the-shower'
                        ],
                        [
                            'answer' => 'Next to the basin',
                            'slug' =>   'next-to-the-basin'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 8,
                    'question' => 'A loyal customer wants a tiled shower floor in their bathroom.<br>You advise fitting a tray instead because the floor timbers are bouncing, but they insist on the tiles. Two months after completion, it starts leaking because of the movement.<br>What would you proceed to do?',
                    'slug'     => 'a-loyal-customer-wants-a-tiled-shower-floor-in-their-bathroom.<br>you-advise-fitting-a-tray-instead-because-the-floor-timbers-are-bouncing,-but-they-insist-on-the-tiles.-two-months-after-completion,-it-starts-leaking-because-of-the-movement.<br>what-would-you-proceed-to-do?',
                    'answers' => [
                        [
                            'answer' => 'Ignore the customer, they did not listen to you',
                            'slug' =>   'ignore-the-customer,-they-did-not-listen-to-you'
                        ],
                        [
                            'answer' => 'Acknowledge the customer but do not rectify the work',
                            'slug' =>   'acknowledge-the-customer-but-do-not-rectify-the-work'
                        ],
                        [
                            'answer' => 'Fit a tray and cover the material and labour costs',
                            'slug' =>  'fit-a-tray-and-cover-the-material-and-labour-costs'
                        ],
                        [
                            'answer' => 'Charge them for materials and labour, you told them this could happen',
                            'slug' =>   'charge-them-for-materials-and-labour,-you-told-them-this-could-happen'
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
