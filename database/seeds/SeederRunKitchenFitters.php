<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunKitchenFitters extends Seeder
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
                    'job_category_id' => 61,
                    'question' => 'What type of kitchen fitting service do you require?',
                    'slug' =>     'what-type-of-kitchen-fitting-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'New kitchen installation',
                            'slug' =>    'new-kitchen-installation'
                        ],
                        [
                            'answer' => 'Worktop installation',
                            'slug' =>   'worktop-installation'
                        ],
                        [
                            'answer' => 'Cabinet door refurbishment / replacement',
                            'slug' =>   'cabinet-door-refurbishment-/-replacement'
                        ],
                        [
                            'answer' => 'Fit appliance <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(sink, oven, dishwasher, etc.)</span>',
                            'slug' =>   'fit-appliance-sink-oven-dishwasher-etc'
                        ],
                        [
                            'answer' => 'Minor repair',
                            'slug' =>   'minor-repair'
                        ],
                        [
                            'answer' => 'Several of the above, or other',
                            'slug' =>   'several-of-the-above,-or-other'
                        ]


                    ],
                ],







                [
                    'job_category_id' => 61,
                    'question' => 'How big is your kitchen project?',
                    'slug' =>     'how-big-is-your-kitchen-project?',
                    'answers' => [
                        [
                            'answer' => 'Extensive kitchen refurb <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Including new tiling, lighting, flooring, or plumbing</span>',
                            'slug' =>   'extensive-kitchen-refurb-<br>-including-new-tiling,-lighting,-flooring,-or-plumbing'
                        ],
                        [
                            'answer' => 'Standard kitchen refit <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Upgrading units, worktops, sink without major layout changes</span>',
                            'slug' =>   'standard-kitchen-refit-<br>-upgrading-units,-worktops,-sink-without-major-layout-changes'
                        ],
                        [
                            'answer' => 'other',
                            'slug' =>   'other'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 61,
                    'question' => 'Have you purchased a kitchen already?',
                    'slug' =>     'have-you-purchased-a-kitchen-already?',
                    'answers' => [
                        [
                            'answer' => 'Yes, purchased everything already',
                            'slug' =>   'yes,-purchased-everything-already'
                        ],
                        [
                            'answer' => 'No, nothing purchased yet',
                            'slug' =>   'no,-nothing-purchased-yet'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'Do you require any structural work<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (e.g. removing walls)?</span>',
                    'slug' =>     'do-you-require-any-structural-work-(e.g.-removing-walls)?',
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
                    'job_category_id' => 61,
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
                    'job_category_id' => 61,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'What worktop material would you like?',
                    'slug' =>     'what-worktop-material-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Natural stone <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. granite or marble</span>',
                            'slug' =>   'natural-stone-<br>-e.g.-granite-or-marble'
                        ],
                        [
                            'answer' => 'Composite <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. quartz or corian</span>',
                            'slug' =>   'composite-<br>-e.g.-quartz-or-corian'
                        ],
                        [
                            'answer' => 'Solid wood <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. oak, walnut, beech, bamboo</span>',
                            'slug' =>   'solid-wood-<br>-e.g.-oak-walnut-beech-bamboo'
                        ],
                        [
                            'answer' => 'Laminate <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. wood, stone effect</span>',
                            'slug' =>   'laminate-<br>-e.g.-wood,-stone-effect'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],
                        [
                            'answer' => 'Not sure, need help deciding',
                            'slug' =>   'not-sure,-need-help-deciding'
                        ],
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' => 'What type of appliance do you require fitting?',
                    'slug' =>     'what-worktop-material-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Gas / dual-fuel cooker / oven',
                            'slug' =>   'gas-/-dual-fuel-cooker-/-oven'
                        ],
                        [
                            'answer' => 'Electric cooker / oven',
                            'slug' =>   'Electric cooker-/-oven'
                        ],
                        [
                            'answer' => 'Washing machine',
                            'slug' =>   'washing-machine'
                        ],
                        [
                            'answer' => 'Dishwasher',
                            'slug' =>   'dishwasher'
                        ],
                        [
                            'answer' => 'Sink',
                            'slug' =>   'sink'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'Describe your kitchen fitting job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Include if you need design, supply and fit or fit only. Describe the size and shape of the kitchen, or number of units required, along with any additional work required, i.e. plastering, tiling, electrics, etc.</span>',
                    'slug' =>     'describe-your-kitchen-fitting-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-include-if-you-need-design,-supply-and-fit-or-fit-only.-describe-the-size-and-shape-of-the-kitchen,-or-number-of-units-required,-along-with-any-additional-work-required,-i.e.-plastering,-tiling,-electrics,-etc.',
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
