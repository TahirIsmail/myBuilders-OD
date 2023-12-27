<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunConversion  extends Seeder
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
                    'job_category_id' => 44,
                    'question' => 'Please select what best describes your job',
                    'slug' =>     'please-select-what-best-describes-your-job',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion',
                            'slug' =>  'loft-conversion'
                        ],
                        [
                            'answer' => 'Converting an existing space <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. a garage into a living space</span>',
                            'slug' =>   'converting-an-existing-space-<br>-e.g.-a-garage-into-a-living-space'
                        ],
                        [
                            'answer' => 'Wall alteration <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. knocking through a wall, installing a window / door, etc.</span>',
                            'slug' =>   'wall-alteration-<br>-e.g.-knocking-through-a-wall-installing-a-window/door-etc.'
                        ],
                        [
                            'answer' => 'Restoring or improving existing space <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. restoring a room or refurbishing a whole property</span>',
                            'slug' =>   'restoring-or-improving-existing-space-<br>-e.g.-restoring-a-room-or-refurbishing-a-whole-property'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 44,
                    'question' => 'What type of loft conversion do you want?',
                    'slug' =>     'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion with structural changes <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.</span>',
                            'slug' =>  'loft-conversion-with-structural-changes-<br>-requires-a-change-to-the-roof-structure-e.g.-dormers-hip-to-gable-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes) <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">No alterations to the roof shape or structure.</span>',
                            'slug' =>   'loft-conversion-(no-structural-changes)-<br>-no-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Creating an accessible space by boarding, decorating etc.</span>',
                            'slug' =>   'loft-conversion-for-storage-purposes-<br>-creating-an-accessible-space-by-boarding-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Add one or more windows to the roof, e.g. velux windows.</span>',
                            'slug' =>   'fit-a-skylight-<br>-add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 44,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug' =>     'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        [
                            'answer' => 'Detached',
                            'slug' =>  'detached'
                        ],
                        [
                            'answer' => 'Semi detached',
                            'slug' =>   'semi-detached'
                        ],
                        [
                            'answer' => 'Terraced',
                            'slug' =>   'terraced'
                        ],
                        [
                            'answer' => 'End of Terrace',
                            'slug' =>   'end-of-terrace'
                        ],
                        [
                            'answer' => 'Bungalow',
                            'slug' =>   'bungalow'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'No ',
                            'slug' =>   'no'
                        ],
                        [
                            'answer' => 'I will - purchase in progress',
                            'slug' =>   'i-will-purchase-in-progress'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'Have you had any plans drawn up?',
                    'slug' =>     'have-you-had-any-plans-drawn-up?',
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
                            'slug' =>   'no-plans-have-been-drawn-up'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],

                [
                    'job_category_id' => 44,
                    'question' => 'Your builder will probably require plans <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.</span>',
                    'slug' =>     'your-builder-will-probably-require-plans <br> loft-conversions-typically-require-building-regulations,-so-we-recommend-we-talk-to-an-architect-first-to-ensure-your-project-meets-any-relevant-regulatory-requirements.',
                    'answers' => [
                        [
                            'answer' => 'Okay, send my job to architects',
                            'slug' =>   'okay,-send-my-job-to-architects'
                        ],
                        [
                            'answer' => 'Continue posting this job without plans',
                            'slug' =>   'continue-posting-this-job-without-plans'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'What do you need doing in your loft?',
                    'slug' =>     'what-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Board out loft <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Board out and pull down ladder; making loft accessible and suitable for storage.</span>',
                            'slug' =>   'board-out-loft <br> board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.</span>',
                            'slug' =>   'boarding-plus-additional-work <br> making-loft-accessible-including-additional-work-such-as-a-velux,-painting-&-decorating,-fixed-staircase-etc.'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 44,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug' =>     'what-extra-work-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Fixed staircase',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Finishing work<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (plastering, painting & decorating)</span>',
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
                    'job_category_id' => 44,
                    'question' => 'How extensive is your conversion job?',
                    'slug' =>     'how-extensive-is-your-conversion-job?',
                    'answers' => [
                        [
                            'answer' => 'Single room conversion <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. join 2 rooms together, install necessary utilities</span>',
                            'slug' =>   'single-room-conversion <br> e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. convert small outbuilding to living space</span>',
                            'slug' =>   'small-garage-/outbuilding-conversion <br> e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. convert a large detached garage into a self sufficient flat</span>',
                            'slug' =>   'multiple-rooms-or-large-outbuilding <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. major conversion works to one or more property, including important structural changes</span>',
                            'slug' =>   'whole-property-conversion <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'Select all the works that are required for your job:',
                    'slug' =>     'select-all-the-works-that-are-required-for-your-job:',
                    'answers' => [
                        [
                            'answer' => 'Central heating',
                            'slug' =>   'central-heating'
                        ],
                        [
                            'answer' => 'Plumbing',
                            'slug' =>   'plumbing'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Painting & decorating',
                            'slug' =>   'painting-&-decorating'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'Which of the following best describes your wall alteration job?',
                    'slug' =>     'which-of-the-following-best-describes-your-wall-alteration-job?',
                    'answers' => [
                        [
                            'answer' => 'Window or door installation / replacement',
                            'slug' =>   'window-or-door-installation/replacement'
                        ],
                        [
                            'answer' => 'Wall removal',
                            'slug' =>   'wall-removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],
                        [
                            'answer' => 'Painting & decorating',
                            'slug' =>   'painting-&-decorating'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 44,
                    'question' => 'What type of job is it?',
                    'slug' =>     'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Small refurbishment <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. small project requiring a few days work</span>',
                            'slug' =>   'small-refurbishment <br> e.g.-small-project-requiring-a-few-days-work'
                        ],
                        [
                            'answer' => 'Large refurbishment<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. a large project that may take more than a week</span>',
                            'slug' =>   'large-refurbishment e.g.-a-large-project-that-may-take-more-than-a-week'
                        ],
                        [
                            'answer' => 'Full refurbishment <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. a complex project or large space that requires full refurbishment</span>',
                            'slug' =>   'full-refurbishment <br> e.g.-a-complex-project-or-large-space-that-requires-full-refurbishment'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 44,
                    'question' => 'Describe your restoration / refurbishment project in detail <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?</span>',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail <br> good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',

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
