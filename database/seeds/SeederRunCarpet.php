<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunCarpet extends Seeder
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
                    'question' => 'What does your flooring job involve?',
                    'slug' =>     'what-does-your-flooring-job-involve',
                    'answers' => [
                        [
                            'answer' => 'New or replacement flooring',
                            'slug' =>   'new-or-replacement-flooring'
                        ],
                        [
                            'answer' => 'Sanding / Restoration',
                            'slug' =>   'sanding-restoration'
                        ],
                        [
                            'answer' => 'Repair / Adjustment',
                            'slug' =>   'repair-adjustment'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'What kind of flooring do you need?',
                    'slug' =>     'what-kind-of-flooring-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Carpet',
                            'slug' =>   'carpet'
                        ],
                        [
                            'answer' => 'Linoleum (vinyl roll)',
                            'slug' =>   'linoleum-(vinyl-roll)'
                        ],
                        [
                            'answer' => 'Laminate',
                            'slug' =>   'laminate'
                        ],
                        [
                            'answer' => 'Luxury vinyl tile (LVT)',
                            'slug' =>   'luxury-vinyl-tile-(lvt)'
                        ],
                        [
                            'answer' => 'Tiled',
                            'slug' =>   'tiled'
                        ],
                        [
                            'answer' => 'Engineered',
                            'slug' =>   'engineered'
                        ],
                        [
                            'answer' => 'Solid wood',
                            'slug' =>   'solid-wood'
                        ],
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Do you need any staircases carpeting?',
                    'slug' =>     'what-does-your-flooring-job-involve',
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
                    'job_category_id' => 41,
                    'question' => 'How many rooms do you need need carpeting in addition to the staircase?',
                    'slug' =>    'how-many-rooms-do-you-need-carpeting-in-addition-to-the-staircase?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ],
                        [
                            'answer' => 'None',
                            'slug' =>   'none'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Do you have the carpet already?',
                    'slug' =>    'do-you-have-the-carpet-already?',
                    'answers' => [
                        [
                            'answer' => 'Yes, I have the carpet',
                            'slug' =>   'yes-i-have-the-carpet'
                        ],
                        [
                            'answer' => 'No, I do not have the carpet',
                            'slug' =>   'no-i-do-not-have-the-carpet'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Add a description to your job',
                    'slug' =>    'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 41,
                    'question' => 'How many rooms do you need need carpeting?',
                    'slug' =>     'how-many-rooms-do-you-need-carpeting?',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'How many rooms need flooring? <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">A hallway should be counted as 1 room</span>',
                    'slug' =>     'how-many-rooms-need-flooring?-<br>-a-hallway-should-be-counted-as-1-room',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Have you bought the lino flooring already?',
                    'slug' =>     'have-you-bought-the-lino-flooring-already',
                    'answers' => [
                        [
                            'answer' => 'I have',
                            'slug' =>   'i-have'
                        ],
                        [
                            'answer' => 'I have not-I need help sourcing',
                            'slug' =>   'i-have-not-i-need-help-sourcing'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'How many rooms need flooring? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> A hallway should be counted as 1 room</span>',
                    'slug' =>     'how-many-rooms-need-flooring?-<br>-a-hallway-should-be-counted-as-1-room',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Do you have the flooring already?',
                    'slug' =>    'do-you-have-the-flooring-already?',
                    'answers' => [
                        [
                            'answer' => 'Yes, I have the flooring',
                            'slug' =>   'yes-i-have-the-flooring'
                        ],
                        [
                            'answer' => 'No, I do not have the flooring',
                            'slug' =>   'no-i-do-not-have-the-flooring'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'How many square metres need tiling? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> We dont need an exact size, but please provide your best estimate</span>',
                    'slug' =>     'how-many-square-metres-need-tiling?-<br>-we-dont-need-an-exact-size,-but-please-provide-your-best-estimate',
                    'answers' => [
                        [
                            'answer' => 'Less than 2m²',
                            'slug' =>   'less-than-2m²'
                        ],
                        [
                            'answer' => '2 to 14m²',
                            'slug' =>   '2-to-14m²'
                        ],
                        [
                            'answer' => '15 to 30m²',
                            'slug' =>   '15-to-30m²'
                        ],
                        [
                            'answer' => '31 to 50m²',
                            'slug' =>   '31-to-50m²'
                        ],
                        [
                            'answer' => 'over 50m²',
                            'slug' =>   'over-50m²'
                        ],
                        [
                            'answer' => 'Commercial or project <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> e.g. involves multiple large rooms or properties</span>',
                            'slug' =>   'commercial-or-project-<br>-e.g.-involves-multiple-large-rooms-or-properties'
                        ],
                        [
                            'answer' => 'I do not know',
                            'slug' =>   'i-do-not-know'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Will you supply the tiles?',
                    'slug' =>     'will-you-supply-the-tiles?',
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
                    'job_category_id' => 41,
                    'question' => 'What kind of flooring do you need sanded / restored?',
                    'slug' =>     'what-kind-of-flooring-do-you-need-sanded-/-restored?',
                    'answers' => [
                        [
                            'answer' => 'Engineered',
                            'slug' =>   'engineered'
                        ],
                        [
                            'answer' => 'Solid wood',
                            'slug' =>   'solid-wood'
                        ],
                        [
                            'answer' => 'Parquet',
                            'slug' =>   'parquet'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 41,
                    'question' => 'Roughly, how big is the affected area?',
                    'slug' =>     'roughly,-how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small (less than 2m²) <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">A small area needs repairing and / or regrouting</span>',
                            'slug' =>   'small-(less-than-2m²)-<br>-a-small-area-needs-repairing-and-/-or-regrouting'
                        ],
                        [
                            'answer' => 'Large (2m² or more) <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Significant damage to more than a few tiles</span>',
                            'slug' =>   'large-(2m²-or-more)-<br>-significant-damage-to-more-than-a-few-tiles'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'Describe your flooring job <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. State what rooms are involved and even better if you have the room sizes. Also mention if you require supply and fit or fit only. Do you need underlay and beading installing?</span>',
                    'slug' =>     'describe-your-flooring-job-<br>-good-descriptions-attract-good-tradespeople.-state-what-rooms-are-involved-and-even-better-if-you-have-the-room-sizes.-also-mention-if-you-require-supply-and-fit-or-fit-only.-do-you-need-underlay-and-beading-installing',

                ]
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
