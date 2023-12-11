<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunExtension  extends Seeder
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
                    'job_category_id' => 50,
                    'question' => 'What type of extension work are you planning?',
                    'slug'     => 'what-type-of-extension-work-are-you-planning?',
                    'answers' => [
                        [
                            'answer' => 'Property extension',
                            'slug' =>   'property-extension'
                        ],
                        [
                            'answer' => 'Loft conversion',
                            'slug' =>   'loft-conversion'
                        ],
                        [
                            'answer' => 'A porch',
                            'slug' =>   'a-porch',
                        ],
                        [
                            'answer' => 'Outbuilding<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a garden room, office or studio</span>',
                            'slug' =>   'outbuilding<br>e.g.-a-garden-room,-office-or-studio',
                        ],
                        [
                            'answer' => 'Internal alterations<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. creating an open-planned living space</span>',
                            'slug' =>   'internal-alterations<br>e.g.-creating-an-open-planned-living-space',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ],
                ],



                [
                    'job_category_id' => 50,
                    'question' => 'What stage of the project are you currently at?',
                    'slug'     => 'what-stage-of-the-project-are-you-currently-at?',
                    'answers' => [
                        [
                            'answer' => 'I am ready / almost ready for the work to start',
                            'slug' =>   'i-am-ready-/-almost-ready-for-the-work-to-start'
                        ],
                        [
                            'answer' => 'I need help with design or planning before starting the work',
                            'slug' =>   'i-need-help-with-design-or-planning-before-starting-the-work'
                        ],
                        [
                            'answer' => 'I am not ready to build yet, I am still exploring options <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. considering an extension, looking for ideas and advice</span>',
                            'slug' =>   'i-am-not-ready-to-build-yet,-i-am-still-exploring-options-<br>-e.g.-considering-an-extension,-looking-for-ideas-and-advice',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Describe the help you need with your extension project<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Give detail on the property purchase situation. Do you require an extension builder to accompany you on a house visit? Include the type of extension and sizes if known.</span>',
                    'slug'     => 'describe-the-help-you-need-with-your-extension-project<br>good-descriptions-attract-good-tradespeople.-give-detail-on-the-property-purchase-situation.-do-you-require-an-extension-builder-to-accompany-you-on-a-house-visit?-include-the-type-of-extension-and-sizes-if-known',

                ],





                [
                    'job_category_id' => 50,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'I will / purchase in progress',
                            'slug' =>   'i-will-/-purchase-in-progress'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]
                    ],
                ],
                [
                    'job_category_id' => 50,
                    'question' => 'What type of loft conversion do you want?',
                    'slug'     => 'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion with structural changes<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.</span>',
                            'slug' =>   'loft-conversion-with-structural-changes<br>requires-a-change-to-the-roof-structure,-e.g.-dormers,-hip-to-gable,-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">No alterations to the roof shape or structure.</span>',
                            'slug' =>   'Loft-conversion-(no-structural-changes)<br>-No-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Creating an accessible space by boarding, decorating etc.</span>',
                            'slug' =>   'Loft-conversion-for-storage-purposes<br>Creating-an-accessible-space-by-boarding,-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Add one or more windows to the roof, e.g. velux windows.</span>',
                            'slug' =>   'Fit-a-skylight<br>Add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug'     => 'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        [
                            'answer' => 'Detached',
                            'slug' =>   'detached'
                        ],
                        [
                            'answer' => 'Semi/detached',
                            'slug' =>   'semi/detached'
                        ],
                        [
                            'answer' => 'Terraced',
                            'slug' =>   'terraced',
                        ],
                        [
                            'answer' => 'End of Terrace',
                            'slug' =>   'end-of-terrace',
                        ],
                        [
                            'answer' => 'Bungalow',
                            'slug' =>   'bungalow',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'I will/purchase in progress',
                            'slug' =>   'i-will/purchase-in-progress'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]

                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'Have you had any plans drawn up?',
                    'slug'     => 'have-you-had-any-plans-drawn-up?',
                    'answers' => [
                        [
                            'answer' => 'Yes I have plans',
                            'slug' =>   'yes-i-have-plans'
                        ],
                        [
                            'answer' => 'Plans are being drawn up',
                            'slug' =>   'plans-are-being-drawn-up'
                        ],
                        [
                            'answer' => 'No plans have been drawn up',
                            'slug' =>   'no-plans-have-been-drawn-up',
                        ]

                    ],
                ],



                [
                    'job_category_id' => 50,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Your builder will probably require plans<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.</span>',
                    'slug'     => 'your-builder-will-probably-require-plans<br>loft-conversions-typically-require-building-regulations,-so-we-recommend-we-talk-to-an-architect-first-to-ensure-your-project-meets-any-relevant-regulatory-requirements.',
                    'answers' => [
                        [
                            'answer' => 'Okay - send my job to architects',
                            'slug' =>   'okay-send-my-job-to-architects'
                        ],
                        [
                            'answer' => 'Continue posting this job without plans',
                            'slug' =>   'continue-posting-this-job-without-plans'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'What do you need doing in your loft?',
                    'slug'     => 'what-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Board out loft<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Board out and pull down ladder; making loft accessible and suitable for storage.</span>',
                            'slug' =>   'board-out-loft<br>board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work<br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.</span>',
                            'slug' =>   'boarding-plus-additional-work<br>making-loft-accessible-including-additional-work-such-as-a-velux,-painting-&-decorating,-fixed-staircase-etc.'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 50,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug'     => 'what-extra-work-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Fixed staircase',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Finishing work <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(plastering, painting & decorating)</span>',
                            'slug' =>   'finishing-work-(plastering,-painting-&-decorating)'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Velux windows',
                            'slug' =>   'velux-windows'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'What type of porch job is it?',
                    'slug'     => 'what-type-of-porch-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Just a new porch',
                            'slug' =>   'just-a-new-porch'
                        ],
                        [
                            'answer' => 'I need a new porch and some additional works<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. removal of an old porch, a new porch and a cloakroom</span>',
                            'slug' =>   'i-need-a-new-porch-and-some-additional-works<br>e.g.-removal-of-an-old-porch,-a-new-porch-and-a-cloakroom'
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
