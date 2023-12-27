<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class QuestionSeederV1 extends Seeder
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
                    'question' => 'What type of bricklaying services are you looking for?',
                    'slug' =>     'what-type-of-bricklaying-services-are-you-looking-for?',
                    'answers' => [
                        [
                            'answer' => 'Building a wall',
                            'slug' => 'building-a-wall'
                        ],
                        [
                            'answer' => 'Building a structure <br> Outbuilding, garage, extension, etc.',
                            'slug' =>   'building-a-structure-<br>-outbuilding,-garage,-extension,-etc.'
                        ],
                        [
                            'answer' => 'Building custom brickwork <br> Pillar, steps, etc.',
                            'slug' =>   'building-custom-brickwork-<br>-pillar,-steps,-etc.'
                        ],
                        [
                            'answer' => 'Wall alterations <br> Opening for windows and doors, knocking through, etc.',
                            'slug' =>   'wall-alterations-<br>-opening-for-windows-and-doors,-knocking-through,-etc.'
                        ],
                        [
                            'answer' => 'Repointing <br> Renewing the mortar on brickwork or natural stone',
                            'slug' =>   'repointing-<br>-renewing-the-mortar-on-brickwork-or-natural-stone'
                        ],
                        [
                            'answer' => 'Chimney work',
                            'slug' =>   'chimney-work'
                        ],
                        [
                            'answer' => 'Repairs',
                            'slug' =>   'repairs'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 9,
                    'question' => 'What type of wall are you looking to build?',
                    'slug' =>     'what-type-of-wall-are-you-looking-to-build?',
                    'answers' => [
                        [
                            'answer' => 'Small decorative wall <br> A few courses high',
                            'slug' =>   'small-decorative-wall-<br>-a-few-courses-high'
                        ],
                        [
                            'answer' => 'Small wall <br> For a garden or front yard',
                            'slug' =>   'small-wall-<br>-for-a-garden-or-front-yard'
                        ],
                        [
                            'answer' => 'Garden wall',
                            'slug' =>   'garden-wall'
                        ],
                        [
                            'answer' => 'Retaining wall <br> A large wall to support soil',
                            'slug' =>   'retaining-wall-<br>-a-large-wall-to-support-soil'
                        ],
                        [
                            'answer' => 'More than one wall',
                            'slug' =>   'more-than-one-wall'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 9,
                    'question' => 'What type of structure are you looking to build?',
                    'slug' =>     'what-type-of-structure-are-you-looking-to-build?',
                    'answers' => [
                        [
                            'answer' => 'Outbuilding',
                            'slug' =>   'Outbuilding'
                        ],
                        [
                            'answer' => 'Porch',
                            'slug' =>   'porch'
                        ],
                        [
                            'answer' => 'Garage',
                            'slug' =>   'garage'
                        ],
                        [
                            'answer' => 'Extension',
                            'slug' =>   'extension'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'What type of custom brickwork are you looking for?',
                    'slug' =>     'what-type-of-custom-brickwork-are-you-looking-for?',
                    'answers' => [
                        [
                            'answer' => 'Pillar',
                            'slug' =>   'piller'
                        ],
                        [
                            'answer' => 'Steps',
                            'slug' =>   'steps'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'Which of the following best describes your wall alteration job?',
                    'slug' =>     'which-of-the-following-best-describes-your-wall-alteration-job?',
                    'answers' => [
                        [
                            'answer' => 'Window or door installation / replacement',
                            'slug' =>   'window-or-door-installation-replacement'
                        ],
                        [
                            'answer' => 'Wall removal',
                            'slug' =>   'wall-removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'Is it a load bearing wall?',
                    'slug' =>     'is-it-a-load-bearing-wall?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],
                        [
                            'answer' => 'I don not know',
                            'slug' =>   'i-do-not-know'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'What type of repointing needs to be done?',
                    'slug' =>     'what-type-of-repointing-needs-to-be-done?',
                    'answers' => [
                        [
                            'answer' => 'Brickwork',
                            'slug' =>   'brickwork'
                        ],
                        [
                            'answer' => 'Natural stone',
                            'slug' =>   'natural-stone'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'How large is the repointing job?',
                    'slug' =>      'how-large-is-the-repointing-job?',
                    'answers' => [
                        [
                            'answer' => 'Small <br> E.g. garden walls, chimney, section of wall',
                            'slug' =>   'small-<br>-e.g.-garden-walls-chimney-section-of-wall'
                        ],
                        [
                            'answer' => 'Medium <br> E.g. single wall, multiple areas, garage or outbuilding',
                            'slug' =>   'medium-<br>-e.g.-single-wall-multiple-areas-garage-or-outbuilding'
                        ],
                        [
                            'answer' => 'Large <br> E.g. multiple walls',
                            'slug' =>   'large-<br>-e.g.-multiple-walls'
                        ],
                        [
                            'answer' => 'X-Large <br> E.g. whole property',
                            'slug' =>   'X-Large <br> E.g. whole property'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'What do you need doing to your chimney?',
                    'slug' =>     'what-do-you-need-doing-to-your-chimney?',
                    'answers' => [
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Rebuilding / major alterations',
                            'slug' =>   'rebuilding-major-alterations'
                        ],
                        [
                            'answer' => 'Repointing / repair',
                            'slug' =>   'repointing-repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 9,
                    'question' => 'How extensive is your repair job?',
                    'slug' =>     'how-extensive-is-your-repair-job?',
                    'answers' => [
                        [
                            'answer' => 'Small repair <br> E.g. replace some blown brickwork',
                            'slug' =>   'small-repair-<br>-e.g.-replace-some-blown-brickwork'
                        ],
                        [
                            'answer' => 'Medium repair <br> E.g. re-lay a few courses',
                            'slug' =>   'medium-repair-<br>-e.g.-re-lay-a-few-courses'
                        ],
                        [
                            'answer' => 'Large repair <br> E.g. rebuild wall section',
                            'slug' =>   'large-repair-<br>-e.g.-rebuild-wall-section'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 9,
                    'question' => 'What type of bricklaying services are you looking for?',
                    'slug' =>     'what-type-of-bricklaying-services-are-you-looking-for?',
                    'answers' => [
                        [
                            'answer' => 'Building a wall',
                            'slug' => 'building-a-wall'
                        ],
                        [
                            'answer' => 'Building a structure <br> Outbuilding, garage, extension, etc. ',
                            'slug' =>   'building-a-structure-<br>-outbuilding,-garage,-extension,-etc.'
                        ],
                        [
                            'answer' => 'Building custom brickwork <br> Pillar, steps, etc.',
                            'slug' =>   'building-custom-brickwork-<br>-pillar,-steps,-etc.'
                        ],
                        [
                            'answer' => 'Wall alterations <br> Opening for windows and doors, knocking through, etc.',
                            'slug' =>   'wall-alterations-<br>-opening-for-windows-and-doors,-knocking-through,-etc.'
                        ],
                        [
                            'answer' => 'Repointing <br> Renewing the mortar on brickwork or natural stone',
                            'slug' =>   'repointing-<br>-renewing-the-mortar-on-brickwork-or-natural-stone'
                        ],
                        [
                            'answer' => 'Chimney work',
                            'slug' =>   'chimney-work'
                        ],
                        [
                            'answer' => 'Repairs',
                            'slug' =>   'repairs'
                        ]
                    ],
                ],
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
                    'question' => 'How many rooms need flooring? <br> A hallway should be counted as 1 room',
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
                            'answer' => 'I have not - I need help sourcing',
                            'slug' =>   'i-have-not-i-need-help-sourcing'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'How many rooms need flooring? <br> A hallway should be counted as 1 room',
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
                    'question' => 'How many square metres need tiling? <br> We dont need an exact size, but please provide your best estimate',
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
                            'answer' => 'Commercial or project <br> e.g. involves multiple large rooms or properties',
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
                            'answer' => 'Small (less than 2m²) <br> A small area needs repairing and / or regrouting',
                            'slug' =>   'small-(less-than-2m²)-<br>-a-small-area-needs-repairing-and-/-or-regrouting'
                        ],
                        [
                            'answer' => 'Large (2m² or more) <br> Significant damage to more than a few tiles',
                            'slug' =>   'large-(2m²-or-more)-<br>-significant-damage-to-more-than-a-few-tiles'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 41,
                    'question' => 'Describe your flooring job <br> Good descriptions attract good tradespeople. State what rooms are involved and even better if you have the room sizes. Also mention if you require supply and fit or fit only. Do you need underlay and beading installing?',
                    'slug' =>     'describe-your-flooring-job-<br>-good-descriptions-attract-good-tradespeople.-state-what-rooms-are-involved-and-even-better-if-you-have-the-room-sizes.-also-mention-if-you-require-supply-and-fit-or-fit-only.-do-you-need-underlay-and-beading-installing',

                ],

                [
                    'job_category_id' => 42,
                    'question' => 'What does your job involve?',
                    'slug' =>     'what-does-your-job-involve',
                    'answers' => [
                        [
                            'answer' => 'Chimney <br> Removal, repairs, capping, and sweeping of a chimney or chimney breast',
                            'slug' =>   'chimney-<br>-removal-repairs-capping-and-sweeping-of-a-chimney-or-chimney-breast'
                        ],
                        [
                            'answer' => 'Fireplace <br> Installation or repair of any fireplace (gas, electric, solid fuel, etc.)',
                            'slug' =>   'fireplace-<br>-installation-or-repair-of-any-fireplace-gas-electric-solid-fuel-etc'
                        ],
                        [
                            'answer' => 'Flue <br> Installation, alteration or repair',
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
                    'question' => 'Describe your chimney job in detail <br> Good descriptions attract good tradespeople. How large is your chimney? Give a full description of the work you need doing including the type of fire / fuel.',
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
                            'answer' => 'Solid fuel (wood, coal burning stove etc.)',
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
                    'question' => 'Describe your job in detail <br> Good descriptions attract good tradespeople. Give a full description of the work you need doing including the type of fire involved. Supply and fit, or fit only? For repairs you can add a picture to you job after it has been posted.',
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



                [
                    'job_category_id' => 43,
                    'question' => 'What do you need a conservatory installers help with?',
                    'slug' =>     'what-do-you-need-a-conservatory-installers-help-with?',
                    'answers' => [
                        [
                            'answer' => 'A new conservatory installation',
                            'slug' =>   'a-new-conservatory-installation'
                        ],
                        [
                            'answer' => 'Replace or improve an existing conservatory',
                            'slug' =>   'replace-or-improve-an-existing-conservatory'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 43,
                    'question' => 'What do you need to have done?',
                    'slug' =>     'what-do-you-need-to-have-done?',
                    'answers' => [
                        [
                            'answer' => 'Build the conservatory and base',
                            'slug' =>   'build-the-conservatory-and-base'
                        ],
                        [
                            'answer' => 'Erect conservatory only',
                            'slug' =>   'erect-conservatory-only'
                        ],
                        [
                            'answer' => 'Build base only',
                            'slug' =>   'build-base-only'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 43,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 43,
                    'question' => 'What needs doing?',
                    'slug' =>     'what-needs-doing',
                    'answers' => [
                        [
                            'answer' => 'Roof replacement',
                            'slug' =>  'roof-replacement'
                        ],
                        [
                            'answer' => 'Windows and doors replacement',
                            'slug' =>   'windows-and-doors-replacement'
                        ],
                        [
                            'answer' => 'Large refurbishment of existing conservatory',
                            'slug' =>   'large-refurbishment-of-existing-conservatory'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 43,
                    'question' => 'What is the issue?',
                    'slug' =>     'what-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Leak',
                            'slug' =>  'leak'
                        ],
                        [
                            'answer' => 'Roof',
                            'slug' =>   'roof'
                        ],
                        [
                            'answer' => 'Faulty door or windows',
                            'slug' =>   'faulty-door-or-windows'
                        ],
                        [
                            'answer' => 'Broken glass',
                            'slug' =>   'broken-glass'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ],
                ],




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
                            'answer' => 'Converting an existing space <br> e.g. a garage into a living space',
                            'slug' =>   'converting-an-existing-space-<br>-e.g.-a-garage-into-a-living-space'
                        ],
                        [
                            'answer' => 'Wall alteration <br> e.g. knocking through a wall, installing a window / door, etc.',
                            'slug' =>   'wall-alteration-<br>-e.g.-knocking-through-a-wall-installing-a-window/door-etc.'
                        ],
                        [
                            'answer' => 'Restoring or improving existing space <br> e.g. restoring a room or refurbishing a whole property',
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
                            'answer' => 'Loft conversion with structural changes <br> Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.',
                            'slug' =>  'loft-conversion-with-structural-changes-<br>-requires-a-change-to-the-roof-structure-e.g.-dormers-hip-to-gable-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes) <br> No alterations to the roof shape or structure.',
                            'slug' =>   'loft-conversion-(no-structural-changes)-<br>-no-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes <br> Creating an accessible space by boarding, decorating etc.',
                            'slug' =>   'loft-conversion-for-storage-purposes-<br>-creating-an-accessible-space-by-boarding-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight <br> Add one or more windows to the roof, e.g. velux windows.',
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
                    'question' => 'Your builder will probably require plans <br> Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.',
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
                            'answer' => 'Board out loft <br> Board out and pull down ladder; making loft accessible and suitable for storage.',
                            'slug' =>   'board-out-loft <br> board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work <br> Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.',
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
                            'answer' => 'Finishing work (plastering, painting & decorating)',
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
                            'answer' => 'Single room conversion <br> e.g. join 2 rooms together, install necessary utilities',
                            'slug' =>   'single-room-conversion <br> e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion <br> e.g. convert small outbuilding to living space',
                            'slug' =>   'small-garage-/outbuilding-conversion <br> e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding <br> e.g. convert a large detached garage into a self sufficient flat',
                            'slug' =>   'multiple-rooms-or-large-outbuilding <br> e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion <br> e.g. major conversion works to one or more property, including important structural changes',
                            'slug' =>   'whole-property-conversion <br> e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
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
                            'answer' => 'Small refurbishment <br> e.g. small project requiring a few days work',
                            'slug' =>   'small-refurbishment <br> e.g.-small-project-requiring-a-few-days-work'
                        ],
                        [
                            'answer' => 'Large refurbishment e.g. a large project that may take more than a week',
                            'slug' =>   'large-refurbishment e.g.-a-large-project-that-may-take-more-than-a-week'
                        ],
                        [
                            'answer' => 'Full refurbishment <br> e.g. a complex project or large space that requires full refurbishment',
                            'slug' =>   'full-refurbishment <br> e.g.-a-complex-project-or-large-space-that-requires-full-refurbishment'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 44,
                    'question' => 'Describe your restoration / refurbishment project in detail <br> Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail <br> good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',

                ],

                [
                    'job_category_id' => 45,
                    'question' => 'Do you know what is causing your damp problem?',
                    'slug' =>     'do-you-know-what-is-causing-your-damp-problem?',
                    'answers' => [
                        [
                            'answer' => 'No,I need help investigating',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Yes,I just need help fixing the problem',
                            'slug' =>   'yes,I-just-need-help-fixing-the-problem'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 45,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 45,
                    'question' => 'How big is the affected area?',
                    'slug' =>     'how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small isolated area',
                            'slug' =>   'Small isolated area'
                        ],
                        [
                            'answer' => 'Widespread',
                            'slug' =>   'widespread'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 46,
                    'question' => 'What type of service do you require?',
                    'slug' =>     'what-type-of-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Waste removal only <br> Remove waste from property, including hazardous materials',
                            'slug' =>   'waste-removal-only <br> remove-waste-from-property,-including-hazardous-materials'
                        ],
                        [
                            'answer' => 'Building / structure demolition <br> Knock down and remove a whole structure',
                            'slug' =>   'building-/-structure-demolition <br> knock-down-and-remove-a-whole-structure'
                        ],
                        [
                            'answer' => 'Knock down a wall <br> Knock down and remove walls',
                            'slug' =>   'knock-down-a-wall <br> knock-down-and-remove-walls'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 46,
                    'question' => 'How much waste do you need clearing?',
                    'slug' =>     'how-much-waste-do-you-need-clearing?',
                    'answers' => [
                        [
                            'answer' => 'Small van or car load',
                            'slug' =>   'small-van-or-car-load'
                        ],
                        [
                            'answer' => 'Medium van load',
                            'slug' =>   'Medium van load'
                        ],
                        [
                            'answer' => 'Large van load',
                            'slug' =>   'Large van load'
                        ],
                        [
                            'answer' => 'Full site clearance or more',
                            'slug' =>  'full-site-clearance-or-more'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 46,
                    'question' => 'Select the hazardous materials that you are aware of',
                    'slug' =>     'select-the-hazardous-materials-that-you-are-aware-of',
                    'answers' => [
                        [
                            'answer' => 'Asbestos',
                            'slug' =>   'asbestos'
                        ],
                        [
                            'answer' => 'White goods',
                            'slug' =>   'white-goods'
                        ],
                        [
                            'answer' => 'Mattress',
                            'slug' =>   'mattress'
                        ],
                        [
                            'answer' => 'CRT TV or monitor',
                            'slug' =>   'crt-tv-or-monitor'
                        ],
                        [
                            'answer' => 'Fluorescent tubes',
                            'slug' =>   'fluorescent-tubes'
                        ], [
                            'answer' => 'Tyres',
                            'slug' =>   'tyres'
                        ], [
                            'answer' => 'Oil, petrol, diesel or paint',
                            'slug' =>   'oil,-petrol,-diesel-or-paint'
                        ], [
                            'answer' => 'other',
                            'slug' =>   'other'
                        ],



                    ],
                ],
                [
                    'job_category_id' => 46,
                    'question' => 'Add a description to your job',
                    'slug' =>    'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 46,
                    'question' => 'Are there any hazardous materials that you know of? <br> e.g. Asbestos, white goods, mattress, CRT TV or monitor, fluorescent tubes, tyres, oil, petrol, diesel, or paint',
                    'slug' =>     'how-much-waste-do-you-need-clearing?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],
                        [
                            'answer' => 'i am not sure',
                            'slug' =>   'i-am-not-sure'
                        ],
                        [
                            'answer' => 'Full site clearance or more',
                            'slug' =>  'full-site-clearance-or-more'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 46,
                    'question' => 'Roughly, how large is the structure that needs demolishing?',
                    'slug' =>     'roughly,-how-large-is-the-structure-that-needs-demolishing?',
                    'answers' => [
                        [
                            'answer' => 'Small <br> E.g. shed or porch',
                            'slug' =>   'small-<br>-e.g.-shed-or-porch'
                        ],
                        [
                            'answer' => 'Medium <br> E.g. rip out a kitchen, bathroom or similar',
                            'slug' =>   'medium-<br>-e.g.-rip-out-a-kitchen,-bathroom-or-similar'
                        ],
                        [
                            'answer' => 'Large <br> E.g. outbuilding or garage',
                            'slug' =>   'large-<br>-e.g.-outbuilding-or-garage'
                        ],
                        [
                            'answer' => 'X-Large <br> E.g. a house or multiple properties',
                            'slug' =>   'x-large-<br>-e.g.-a-house-or-multiple-properties'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 46,
                    'question' => 'What type of wall do you want to remove?',
                    'slug' =>     'what-type-of-wall-do-you-want-to-remove?',
                    'answers' => [
                        [
                            'answer' => 'Stud wall',
                            'slug' =>   'stud-wall'
                        ],
                        [
                            'answer' => 'Non-load bearing wall',
                            'slug' =>   'non-load-bearing-wall'
                        ],
                        [
                            'answer' => 'Load bearing wall',
                            'slug' =>   'load-bearing-wall'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'What services can we help you with?',
                    'slug' =>     'what-services-can-we-help-you-with?',
                    'answers' => [
                        [
                            'answer' => 'Install a driveway',
                            'slug' =>  'install-a-driveway'
                        ],
                        [
                            'answer' => 'Clean or reseal a driveway',
                            'slug' =>   'clean-or-reseal-a-driveway'
                        ],
                        [
                            'answer' => 'Dropped kerb (crossover)',
                            'slug' =>   'dropped-kerb-(crossover)'
                        ],
                        [
                            'answer' => 'Repair a driveway <br> e.g. Minor cracks, a few loose blocks',
                            'slug' =>   'repair-a-driveway-<br>-e.g.-minor-cracks,-a-few-loose-blocks'
                        ],
                        [
                            'answer' => 'Paving, patios and paths <br> Repair, install new or replace (including steps & small walls)',
                            'slug' =>   'paving,-patios-and-paths-<br>-repair,-install-new-or-replace-(including-steps-&-small-walls)'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'What surface material do you need?',
                    'slug' =>     'what-services-can-we-help-you-with?',
                    'answers' => [
                        [
                            'answer' => 'Block paving',
                            'slug' =>  'block-paving'
                        ],
                        [
                            'answer' => 'Gravel',
                            'slug' =>   'gravel'
                        ],
                        [
                            'answer' => 'Concrete',
                            'slug' =>   'concrete'
                        ],
                        [
                            'answer' => 'Tarmac or Resin',
                            'slug' =>   'tarmac-or-resin'
                        ],

                        [
                            'answer' => 'I am not sure - need help deciding',
                            'slug' =>   'i-am-not-sure-need-help-deciding'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 48,
                    'question' => 'Roughly how large is the driveway?',
                    'slug' =>     'roughly-how-large-is-the-driveway',
                    'answers' => [
                        [
                            'answer' => 'Small (1 car or less)',
                            'slug' => 'small-(1-car-or-less)'
                        ],
                        [
                            'answer' => 'Medium (2 - 3 cars)',
                            'slug' =>   'medium-(2-3-cars)'
                        ],
                        [
                            'answer' => 'Large (4 or more cars)',
                            'slug' =>   'Large (4 or more cars)'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'Add a description to your job',
                    'slug' =>    'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 48,
                    'question' => 'Do you have permission from the council to lower the kerb?',
                    'slug' =>     'do-you-have-permission-from-the-council-to-lower-the-kerb',
                    'answers' => [
                        [
                            'answer' => 'Yes, permission granted',
                            'slug' =>   'yes,-permission-granted'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'What surface material do you need repairing?',
                    'slug' =>     'what-surface-material-do-you-need-repairing',
                    'answers' => [
                        [
                            'answer' => 'Block paving',
                            'slug' =>   'block-paving'
                        ],
                        [
                            'answer' => 'Gravel',
                            'slug' =>   'gravel'
                        ],
                        [
                            'answer' => 'Concrete',
                            'slug' =>   'concrete'
                        ],
                        [
                            'answer' => 'Tarmac or Resin',
                            'slug' =>   'tarmac-or-resin'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'What type of work do you require?',
                    'slug' =>     'what-type-of-work-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'Lay or replace a patio',
                            'slug' =>   'lay-or-replace-a-patio'
                        ],
                        [
                            'answer' => 'Lay or replace a pathway',
                            'slug' =>   'lay-or-replace-a-pathway'
                        ],
                        [
                            'answer' => 'Repair paving, pathway or patio',
                            'slug' =>   'repair-paving-pathway-or-patio'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'Roughly how large is the patio area?',
                    'slug' =>     'roughly-how-large-is-the-patio-area',
                    'answers' => [
                        [
                            'answer' => 'Small <br> Up to 15m² / 150 sq ft',
                            'slug' =>   'small-up-to-15m²-150-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br> 15m² - 30m² / 150 - 300 sq ft',
                            'slug' =>   'medium-15m²-30m²-150-300-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> 30m² - 60m² / 300 - 600 sq ft',
                            'slug' =>   'large-30m²-60m²-300-600-sq-ft'
                        ],
                        [
                            'answer' => 'X-Large <br> Over 60m² / 600 sq ft',
                            'slug' =>   'X-Large <br> Over 60m² / 600 sq ft'
                        ],
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'What do you need an electricians help with?',
                    'slug' =>     'what-do-you-need-an-electricians-help-with',
                    'answers' => [
                        [
                            'answer' => 'Rewiring',
                            'slug' =>   'rewiring'
                        ],
                        [
                            'answer' => 'fuseboxes',
                            'slug' =>   'fuseboxes'
                        ],
                        [
                            'answer' => 'Electrical fittings & appliances',
                            'slug' =>   'electrical-fittings-and-appliances'
                        ],
                        [
                            'answer' => 'Safety check or certificate',
                            'slug' =>   'safety-check-or-certificate'
                        ],
                        [
                            'answer' => 'Electrical faults & repairs',
                            'slug' =>   'electrical-faults-and-repairs'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'Other'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'How much rewiring do you need?',
                    'slug' =>     'how-much-rewiring-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Part of my property',
                            'slug' =>   'part-of-my-property'
                        ],
                        [
                            'answer' => 'Entire property',
                            'slug' =>   'entire-property'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property',
                    'answers' => [
                        [
                            'answer' => 'Yes or I will',
                            'slug' =>   'yes-or-i-will'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'How big is your property?',
                    'slug' =>     'do-you-own-the-property',
                    'answers' => [
                        [
                            'answer' => 'Flat or 1-2 bed house',
                            'slug' =>   'flat-or-1-2-bed-house'
                        ],
                        [
                            'answer' => '3-4 bed house',
                            'slug' =>   '3-4-bed-house'
                        ],
                        [
                            'answer' => '5+ bed house',
                            'slug' =>   '5+-bed-house'


                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of fusebox job is it?',
                    'slug' =>     'what-type-of-fusebox-job-is-it',
                    'answers' => [
                        [
                            'answer' => 'Fusebox replacement - in the same location',
                            'slug' =>   'fusebox-replacement-in-the-same-location'
                        ],
                        [
                            'answer' => 'Fusebox replacement in a different location',
                            'slug' =>   'fusebox-replacement-in-a-different-location'
                        ],
                        [
                            'answer' => 'Brand new fusebox installation',
                            'slug' =>   'brand-new-fusebox-installation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'


                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Is the fusebox for your main house, an outbuilding or garage?',
                    'slug' =>     'is-the-fusebox-for-your-main-house-an-outbuilding-or-garage',
                    'answers' => [
                        [
                            'answer' => 'Main house',
                            'slug' =>   'main-house'
                        ],
                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'What do you want installed?',
                    'slug' =>     'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' => 'Electrical fittings',
                            'slug' =>    'electrical-fittings'
                        ],
                        [
                            'answer' => 'Appliances',
                            'slug' =>   'appliances'
                        ],
                        [
                            'answer' => 'Security systems',
                            'slug' =>  'security-systems'
                        ],
                        [
                            'answer' => 'Boilers & heating',
                            'slug' =>  'boilers-and-heating'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What do you want installed?',
                    'slug' =>     'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' => 'Lights, including outdoors',
                            'slug' =>    'lights-including-outdoors'
                        ],
                        [
                            'answer' => 'Sockets / switches',
                            'slug' =>  'sockets-/-switches'
                        ],
                        [
                            'answer' => 'Extractor fans',
                            'slug' =>  'extractor-fans'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>  'smoke-alarms'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'How many electrical fittings / appliances do you need installed? <br> Total number of switches, sockets, lights, etc.',
                    'slug' =>     'how-many-electrical-fittings-/-appliances-do-you-need-installed?-<br>-total-number-of-switches,-sockets,-lights,-etc',
                    'answers' => [
                        [
                            'answer' => '1 to 5',
                            'slug' =>    '1-to-5'
                        ],
                        [
                            'answer' => '6 to 10',
                            'slug' =>  '6-to-10'
                        ],
                        [
                            'answer' => 'more than 10',
                            'slug' =>  'more-than-10'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'If you are fitting a dual fuel appliance or switching from one energy source to another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br> Jobs involving gas work will be sent to our Gas Safe registered tradespeople.',
                    'slug' =>     'if-you-are-fitting-a-dual-fuel-appliance-or-switching-from-one-energy-source-to-another-(e.g.-gas-to-electricity)-you-will-have-to-post-an-additional-job-under-gas-engineers-for-the-gas-work.<br>-jobs-involving-gas-work-will-be-sent-to-our-gas-safe-registered-tradespeople',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>    'i-understand'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' => 'Security alarm system',
                            'slug' =>    'security-alarm-system'
                        ],
                        [
                            'answer' => 'CCTV/Smart camera',
                            'slug' =>   'cctv/smart-camera'
                        ],
                        [
                            'answer' => 'Entry system',
                            'slug' =>   'entry-system'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>   'smoke-alarms'
                        ],
                        [
                            'answer' => 'Security lights',
                            'slug' =>   'security-lights'
                        ],
                        [
                            'answer' => 'Locks',
                            'slug' =>   'locks'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What service do you require?',
                    'slug' =>     'what-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service/Repair',
                            'slug' =>  'service/repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>   'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 49,
                    'question' => 'Have you purchased the system already?',
                    'slug' =>     'have-you-purchased-the-system-already',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'What type of property is the system for?',
                    'slug' =>     'what-type-of-property-is-the-system-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What type of security camera service do you require?',
                    'slug' =>     'what-type-of-security-camera-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service/Repair',
                            'slug' =>  'service/repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>  'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What type of camera  system?',
                    'slug' =>     'what-type-of-camera-system',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>   'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Have you purchased the camera  already?',
                    'slug' =>     'have-you-purchased-the-camera-already',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What type of property is the camera for?',
                    'slug' =>     'what-type-of-property-is-the-camera-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Describe your security system job in detail <br> Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.',
                    'slug' =>     'describe-your-security-system-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted.',
                    
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'Is there a possibility that your job involves gas pipework? <br> Jobs that involve gas will be sent to our Gas Safe registered tradespeople',
                    'slug' =>     'is-there-a-possibility-that-your-job-involves-gas-pipework?-<br>-jobs-that-involve-gas-will-be-sent-to-our-gas-safe-registered-tradespeople',
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
                    'job_category_id' => 49,
                    'question' => 'What does your gas job involve?',
                    'slug' =>     'what-does-your-gas-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Gas safety check',
                            'slug' =>   'gas-safety-check'
                        ],
                        [
                            'answer' => 'Service boiler or appliance',
                            'slug' =>   'service-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Install or replace boiler or appliance',
                            'slug' =>   'install-or-replace-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Move or remove boiler or appliance',
                            'slug' =>   'move-or-remove-boiler-or-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Pipework only',
                            'slug' =>   'pipework-only'
                        ]
                        ,
                        [
                            'answer' => 'Problem or repair',
                            'slug' =>   'problem-or-repair'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'What do you need certified?',
                    'slug' =>     'what-do-you-need-certified',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>   'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'Would you also like the boiler serviced?',
                    'slug' =>     'would-you-also-like-the-boiler-serviced',
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
                    'job_category_id' => 49,
                    'question' => 'Is this for a domestic or commercial property?',
                    'slug' =>     'is-this-for-a-domestic-or-commercial-property',
                    'answers' => [
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ],
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What do you need serviced?',
                    'slug' =>     'what-do-you-need-serviced',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>   'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ]
                        ,
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'Would you also like the appliances serviced?',
                    'slug' =>     'would-you-also-like-the-appliances-serviced',
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
                    'job_category_id' => 49,
                    'question' => 'What kind of appliance are you looking to have installed or replaced?',
                    'slug' =>     'what-kind-of-appliance-are-you-looking-to-have-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' => 'Gas boiler',
                            'slug' =>   'gas-boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ]
                        ,
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 49,
                    'question' => 'Do you want to remove a gas boiler?',
                    'slug' =>  'do-you-want-to-remove-a-gas-boiler?',
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
                    'job_category_id' => 49,
                    'question' => 'What needs to be changed with the pipework?',
                    'slug' =>     'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Disconnect or cap pipework',
                            'slug' =>  'disconnect-or-cap-pipework'
                        ],
                        [
                            'answer' => 'Install or alter pipework',
                            'slug' =>    'Install or alter pipework'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 49,
                    'question' => 'What appliance needs repairing?',
                    'slug' =>     'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>  'boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Gas fireplace',
                            'slug' =>   'gas-fireplace'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'What does your central heating job involve?',
                    'slug' =>     'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' => 'Boiler',
                            'slug' =>  'boiler'
                        ],
                        [
                            'answer' => 'Radiators',
                            'slug' =>   'radiators'
                        ],
                        [
                            'answer' => 'Thermostat',
                            'slug' =>   'thermostat'
                        ]
                        ,
                        [
                            'answer' => 'Underfloor heating',
                            'slug' =>   'underfloor-heating'
                        ]
                        ,
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 49,
                    'question' => 'What type of underfloor heating do you need?',
                    'slug' =>     'what-type-of-underfloor-heating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Boiler supplied (wet)',
                            'slug' =>   'boiler-supplied-(wet)'
                        ],
                        [
                            'answer' => 'Electrical (dry)',
                            'slug' =>   'electrical-(dry)'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 49,
                    'question' => 'How many rooms require underfloor heating?',
                    'slug' =>     'how-many-rooms-require-underfloor-heating?',
                    'answers' => [
                        [
                            'answer' => 'One or two rooms',
                            'slug' =>   'one-or-two-rooms'
                        ],
                        [
                            'answer' => 'Three or four rooms',
                            'slug' =>   'three-or-four-rooms'
                        ]
                        ,
                        [
                            'answer' => 'Entire house',
                            'slug' =>   'entire-house'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 49,
                    'question' => 'Please describe your central heating job in detail <br> Good descriptions attract good tradespeople. Please provide as many details as possible about what you need doing to your radiator.',
                    'slug' =>     'please-describe-your-central-heating-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-please-provide-as-many-details-as-possible-about-what-you-need-doing-to-your-radiator.',
                   
                ],


                 [
                    'job_category_id' => 49,
                    'question' => 'What do you need checked or certified?',
                    'slug' =>     'what-do-you-need-checked-or-certified?',
                    'answers' => [
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ],
                        [
                            'answer' => 'Multiple appliances or full property',
                            'slug' =>   'multiple-appliances-or-full-property'
                        ]
                        ,
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 49,
                    'question' => 'Which best describes your issue?',
                    'slug' =>     'which-best-describes-your-issue?',
                    'answers' => [
                        [
                            'answer' => 'Simple<br>E.g. Item which trips the electrics identified, issue with single appliance or a few sockets',
                            'slug' =>   'simple-e.g.-item-which-trips-the-electrics-identified-issue-with-single-appliance-or-a-few-sockets'
                        ],
                        [
                            'answer' => 'Complex<br>E.g. Multiple appliances affected, several issues',
                            'slug' =>   'complex-e.g.-multiple-appliances-affected-several-issues'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 49,
                    'question' => 'Describe your electrical job in detail<br>Good descriptions attract good tradespeople. Is this a new installation or a repair? Where is the electrical job located in the property? Mention if you think new wiring will be needed.',
                    'slug' =>     'describe-your-electrical-job-in-detail<br>good-descriptions-attract-good-tradespeople.-is-this-a-new-installation-or-a-repair?-where-is-the-electrical-job-located-in-the-property?-mention-if-you-think-new-wiring-will-be-needed.',
                   
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
