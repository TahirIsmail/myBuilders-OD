<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunBricklaying extends Seeder
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
                            'answer' => 'Building a structure <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> <br> Outbuilding, garage, extension, etc.</span>',
                            'slug' =>   'building-a-structure-<br>-outbuilding,-garage,-extension,-etc.'
                        ],
                        [
                            'answer' => 'Building custom brickwork <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Pillar, steps, etc.</span>',
                            'slug' =>   'building-custom-brickwork-<br>-pillar,-steps,-etc.'
                        ],
                        [
                            'answer' => 'Wall alterations <br>  <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Opening for windows and doors, knocking through, etc.</span>',
                            'slug' =>   'wall-alterations-<br>-opening-for-windows-and-doors,-knocking-through,-etc.'
                        ],
                        [
                            'answer' => 'Repointing <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Renewing the mortar on brickwork or natural stone</span>',
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
                            'answer' => 'Small decorative wall<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> <br> A few courses high</span>',
                            'slug' =>   'small-decorative-wall-<br>-a-few-courses-high'
                        ],
                        [
                            'answer' => 'Small wall <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> For a garden or front yard</span>',
                            'slug' =>   'small-wall-<br>-for-a-garden-or-front-yard'
                        ],
                        [
                            'answer' => 'Garden wall',
                            'slug' =>   'garden-wall'
                        ],
                        [
                            'answer' => 'Retaining wall <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> A large wall to support soil</span>',
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
                            'answer' => 'Small <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. garden walls, chimney, section of wall</span>',
                            'slug' =>   'small-<br>-e.g.-garden-walls-chimney-section-of-wall'
                        ],
                        [
                            'answer' => 'Medium <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. single wall, multiple areas, garage or outbuilding</span>',
                            'slug' =>   'medium-<br>-e.g.-single-wall-multiple-areas-garage-or-outbuilding'
                        ],
                        [
                            'answer' => 'Large <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. multiple walls</span>',
                            'slug' =>   'large-<br>-e.g.-multiple-walls'
                        ],
                        [
                            'answer' => 'X-Large <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. whole property</span>',
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
                            'answer' => 'Small repair <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. replace some blown brickwork</span>',
                            'slug' =>   'small-repair-<br>-e.g.-replace-some-blown-brickwork'
                        ],
                        [
                            'answer' => 'Medium repair <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. re-lay a few courses</span>',
                            'slug' =>   'medium-repair-<br>-e.g.-re-lay-a-few-courses'
                        ],
                        [
                            'answer' => 'Large repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. rebuild wall section</span>',
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
                            'answer' => 'Building a structure <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Outbuilding, garage, extension, etc. </span>',
                            'slug' =>   'building-a-structure-<br>-outbuilding,-garage,-extension,-etc.'
                        ],
                        [
                            'answer' => 'Building custom brickwork <br>  <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Pillar, steps, etc.</span>',
                            'slug' =>   'building-custom-brickwork-<br>-pillar,-steps,-etc.'
                        ],
                        [
                            'answer' => 'Wall alterations <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Opening for windows and doors, knocking through, etc.</span>',
                            'slug' =>   'wall-alterations-<br>-opening-for-windows-and-doors,-knocking-through,-etc.'
                        ],
                        [
                            'answer' => 'Repointing <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Renewing the mortar on brickwork or natural stone</span>',
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
