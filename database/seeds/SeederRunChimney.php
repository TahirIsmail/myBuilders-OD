<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunChimney extends Seeder
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
                    'job_category_id' => 42,
                    'question' => 'What does your job involve?',
                    'slug' =>     'what-does-your-job-involve',
                    'answers' => [
                        [
                            'answer' => 'Chimney <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Removal, repairs, capping, and sweeping of a chimney or chimney breast</span>',
                            'slug' =>   'chimney-<br>-removal-repairs-capping-and-sweeping-of-a-chimney-or-chimney-breast'
                        ],
                        [
                            'answer' => 'Fireplace <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Installation or repair of any fireplace (gas, electric, solid fuel, etc.)</span>',
                            'slug' =>   'fireplace-<br>-installation-or-repair-of-any-fireplace-gas-electric-solid-fuel-etc'
                        ],
                        [
                            'answer' => 'Flue <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Installation, alteration or repair</span>',
                            'slug' =>   'flue-<br>-installation-alteration-or-repair'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'

                        ]
                    ],
                ],


                [
                    'job_category_id' => 42,
                    'question' => 'What do you need doing to your chimney?',
                    'slug' =>     'What-do-you-need-doing-to-your-chimney?',
                    'answers' => [
                        [
                            'answer' => 'Capping',
                            'slug' =>   'capping'
                        ],
                        [
                            'answer' => 'Sweeping',
                            'slug' =>   'sweeping'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Rebuilding/major alterations',
                            'slug' =>   'rebuilding/major-alterations'
                        ],
                        [
                            'answer' => 'Repointing / repair',
                            'slug' =>   'repointing-/-repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Describe your chimney job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. How large is your chimney? Give a full description of the work you need doing including the type of fire / fuel.</span>',
                    'slug' =>     'describe-your-chimney-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-how-large-is-your-chimney?-give-a-full-description-of-the-work-you-need-doing-including-the-type-of-fire-/-fuel.',

                ],
                [
                    'job_category_id' => 42,
                    'question' => 'What type of fireplace does this involve?',
                    'slug' =>     'what-type-of-fireplace-does-this-involve?',
                    'answers' => [
                        [
                            'answer' => 'Gas',
                            'slug' =>   'gas'
                        ],
                        [
                            'answer' => 'Electric',
                            'slug' =>   'electric'
                        ],
                        [
                            'answer' => 'Solid fuel<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (wood, coal burning stove etc.)</span>',
                            'slug' =>   'solid-fuel-(wood,-coal-burning-stove-etc.)'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 42,
                    'question' => 'What needs doing to your gas fireplace?',
                    'slug' =>     'what-needs-doing-to-your-gas-fireplace?',
                    'answers' => [
                        [
                            'answer' => 'Install',
                            'slug' =>   'install'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Remove',
                            'slug' =>   'remove'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 42,
                    'question' => 'Does this include removal of an old fireplace?',
                    'slug' =>     'does-this-include-removal-of-an-old-fireplace?',
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
                    'job_category_id' => 42,
                    'question' => 'Does this include removal of an new fireplace?',
                    'slug' =>     'does-this-include-removal-of-an-new-fireplace?',
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
                    'job_category_id' => 42,
                    'question' => 'What needs doing to your electric fireplace?',
                    'slug' =>     'what-needs-doing-to-your-electric-fireplace?',
                    'answers' => [
                        [
                            'answer' => 'Install',
                            'slug' =>   'install'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Remove',
                            'slug' =>   'remove'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 42,
                    'question' => 'What needs doing to your solid fuel fireplace?',
                    'slug' =>     'what-needs-doing-to-your-solid-fuel-fireplace?',
                    'answers' => [
                        [
                            'answer' => 'Install',
                            'slug' =>   'install'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ],
                        [
                            'answer' => 'Remove',
                            'slug' =>   'remove'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 42,
                    'question' => 'What needs doing to your flue?',
                    'slug' =>     'what-needs-doing-to-your-flue?',
                    'answers' => [
                        [
                            'answer' => 'Install or alteration',
                            'slug' =>   'install-or-alteration'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 42,
                    'question' => 'Describe your job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Give a full description of the work you need doing including the type of fire involved. Supply and fit, or fit only? For repairs you can add a picture to you job after it has been posted.</span>',
                    'slug' =>     'describe-your-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-give-a-full-description-of-the-work-you-need-doing-including-the-type-of-fire-involved.-supply-and-fit,-or-fit-only?-for-repairs-you-can-add-a-picture-to-your-job-after-it-has-been-posted.',
                    'answers' => [
                        [
                            'answer' => 'Install or alteration',
                            'slug' =>   'install-or-alteration'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
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
