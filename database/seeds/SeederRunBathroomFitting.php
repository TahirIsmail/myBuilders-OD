<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunBathroomFitting extends Seeder
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
                    'question' => 'What work are you looking to undertake?',
                    'slug' =>     'what-work-are-you-looking-to-undertake?',
                    'answers' => [
                        [
                            'answer' => 'Bathroom refurbishment / installation<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Completely change a bathroom, or replace a whole suite and redecorate</span>',
                            'slug' =>   'bathroom-refurbishment/installation<br>completely-change-a-bathroom,-or-replace-a-whole-suite-and-redecorate'
                        ],
                        [
                            'answer' => 'Install or replace a fixture<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. replace a shower, bath, toilet, sink, etc.</span>',
                            'slug' =>   'install-or-replace-a-fixture<br>e.g.-replace-a-shower,-bath,-toilet,-sink,-etc.'
                        ],
                        [
                            'answer' => 'Repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. pipework, blockages, leaks, drainage, etc.</span>',
                            'slug' =>   'repair<br>e.g.-pipework,-blockages,-leaks,-drainage,-etc.'
                        ]
                        ,
                        [
                            'answer' => 'Tiling<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. replacing existing tiles or laying new</span>',
                            'slug' =>   'tiling<br>e.g.-replacing-existing-tiles-or-laying-new'
                        ]

                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 8,
                    'question' => 'How many bathrooms need refurbishing/installing?',
                    'slug' =>     'how-many-bathrooms-need-refurbishing/installing?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2 or more',
                            'slug' =>   '2-or-more'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'What type of bathroom?',
                    'slug' =>     'what-type-of-bathroom?',
                    'answers' => [
                        [
                            'answer' => 'A main bathroom',
                            'slug' =>  'a-main-bathroom'
                        ],
                        [
                            'answer' => 'Ensuite',
                            'slug' =>   'ensuite'
                        ]
                        ,
                        [
                            'answer' => 'Toilet/cloakroom',
                            'slug' =>   'toilet/cloakroom'
                        ]
                        ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'How extensive are the works?',
                    'slug' =>     'how-extensive-are-the-works?',
                    'answers' => [
                        [
                            'answer' => 'Extensive bathroom refurb<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Replace the suite and anything else (i.e. tiles, floor, ceiling, electrics)</span>',
                            'slug' =>   'extensive-bathroom-refurb<br>replace-the-suite-and-anything-else-(i.e.-tiles,-floor,-ceiling,-electrics)'
                        ],
                        [
                            'answer' => 'Bathroom suite replacement<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Just replace the suite but no tiling, flooring, electrics, etc.</span>',
                            'slug' =>   'bathroom-suite-replacement<br>just-replace-the-suite-but-no-tiling,-flooring,-electrics,-etc.'
                        ]
                        ,
                        [
                            'answer' => 'Small amount of work<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Just replace a fixture, e.g. shower or bath</span>',
                            'slug' =>   'small-amount-of-work<br>just-replace-a-fixture,-e.g.-shower-or-bath'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Does your job involve any significant building work?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. removing the walls of the room, or adding new walls or entire bathrooms where there was none before. Simply changing a bathroom layout does not count as structural.</span>',
                    'slug' =>     'does-your-job-involve-any-significant-building-work?<br>e.g.-removing-the-walls-of-the-room,-or-adding-new-walls-or-entire-bathrooms-where-there-was-none-before.-simply-changing-a-bathroom-layout-does-not-count-as-structural.',
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
                    'job_category_id' => 8,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                   
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Do you require any additional works?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. painting, tiling, electrics, lighting, new floors or ceilings.</span>',
                    'slug' =>     'do-you-require-any-additional-works?<br>e.g.-painting,-tiling,-electrics,-lighting,-new-floors-or-ceilings.',
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
                    'job_category_id' => 8,
                    'question' => 'How many items do you need installed or replaced?',
                    'slug' =>     'how-many-items-do-you-need-installed-or-replaced?',
                    'answers' => [
                        [
                            'answer' => '1 item',
                            'slug' =>   '1-item'
                        ],
                        [
                            'answer' => '2 to 3 items',
                            'slug' =>   '2-to-3-items'
                        ]
                        ,
                        [
                            'answer' => '4 to more items',
                            'slug' =>   '4-to-more-items'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 8,
                    'question' => 'Which fixtures require installation / replacing?',
                    'slug' =>     'which-fixtures-require-installation-/-replacing?',
                    'answers' => [
                        [
                            'answer' => 'Bath',
                            'slug' =>   'bath'
                        ],
                        [
                            'answer' => 'Shower',
                            'slug' =>   'shower'
                        ]
                        ,
                        [
                            'answer' => 'Shower cubicle',
                            'slug' =>   'shower-cubicle'
                        ] ,
                        [
                            'answer' => 'Toilet',
                            'slug' =>   'toilet'
                        ] ,
                        [
                            'answer' => 'Sink',
                            'slug' =>   'sink'
                        ] ,
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'Is it a leak?',
                    'slug' =>     'is-it-a-leak?',
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
                    'job_category_id' => 8,
                    'question' => 'Have you identified the source of the leak?',
                    'slug' =>     'have-you-identified-the-source-of-the-leak?',
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
                    'job_category_id' => 8,
                    'question' => 'How many fixtures / appliances do you need repaired?',
                    'slug' =>    'how-many-fixtures/appliances-do-you-need-repaired?',
                    'answers' => [
                        [
                            'answer' => 'One item',
                            'slug' =>   'one-item'
                        ],
                        [
                            'answer' => 'Multiple items',
                            'slug' =>  'multiple-items'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 8,
                    'question' => 'What does your tiling job involve?',
                    'slug' =>     'what-does-your-tiling-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'New or replacement tiles',
                            'slug' =>  'new-or-replacement-tiles'
                        ],
                        [
                            'answer' => 'Repair / regrout tiles',
                            'slug' =>  'repair-/regrout-tiles'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                        
                    ],
                ],
                [
                    'job_category_id' => 8,
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
                    'job_category_id' => 8,
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
                    'job_category_id' => 8,
                    'question' => 'Roughly, how big is the affected area?',
                    'slug' =>     'roughly,-how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small (less than 2m²) <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> A small area needs repairing and / or regrouting</span>',
                            'slug' =>   'small-(less-than-2m²)-<br>-a-small-area-needs-repairing-and-/-or-regrouting'
                        ],
                        [
                            'answer' => 'Large (2m² or more) <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Significant damage to more than a few tiles</span>',
                            'slug' =>   'large-(2m²-or-more)-<br>-significant-damage-to-more-than-a-few-tiles'
                        ]

                    ],
                ],
                
                [
                    'job_category_id' => 76,
                    'question' => 'How would you describe the job?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">We do not need an exact size, but please provide your best estimate..</span>',
                    'slug' =>     'how-would-you-describe-the-job?<br>we-do-not-need-an-exact-size,-but-please-provide-your-best-estimate..',
                    'answers' => [
                        [
                            'answer' => 'Extra small<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a few tiles for a splashback, doorstep or fireplace</span>',
                            'slug' =>   'extra-small<br>e.g.-a-few-tiles-for-a-splashback,-doorstep-or-fireplace'
                        ],
                        [
                            'answer' => 'Small<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a kitchen, bathroom, or hallway floor; a kitchen splashback or a small bathroom wall</span>',
                            'slug' =>   'small<br>e.g.-a-kitchen,-bathroom,-or-hallway-floor;-a-kitchen-splashback-or-a-small-bathroom-wall'
                        ],
                        [
                            'answer' => 'Medium<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. bathroom walls, bathroom/kitchen floor plus a splashback, or floors of two rooms</span>',
                            'slug' =>   'medium<br>e.g.-bathroom-walls,-bathroom/kitchen-floor-plus-a-splashback,-or-floors-of-two-rooms'
                        ],
                        [
                            'answer' => 'Large<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a full bathroom; walls and floors, or floors across several rooms</span>',
                            'slug' =>   'large<br>e.g.-a-full-bathroom;-walls-and-floors,-or-floors-across-several-rooms'
                        ],
                        [
                            'answer' => 'Extra large<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. multiple bathrooms need tiling or tiling throughout for a new build or refurbishment</span>',
                            'slug' =>   'extra-large<br>e.g.-multiple-bathrooms-need-tiling-or-tiling-throughout-for-a-new-build-or-refurbishment'
                        ],
                        [
                            'answer' => 'Project or commercial<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. a large tiling job involving multiple rooms or properties</span>',
                            'slug' =>   'project-or-commercial<br>e.g.-a-large-tiling-job-involving-multiple-rooms-or-properties'
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
