<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunTilers extends Seeder
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
                    'job_category_id' => 76,
                    'question' => 'What does your tiling job involve?',
                    'slug' =>     'what-does-your-tiling-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'New or replacement tiles',
                            'slug' =>   'new-or-replacement-tiles'
                        ],
                        [
                            'answer' => 'Repair / regrout tiles',
                            'slug' =>   'repair-/-regrout-tiles'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 76,
                    'question' => 'How many square metres need tiling?<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>We do not need an exact size, but please provide your best estimate...</span>',
                    'slug' =>     'how-many-square-metres-need-tiling?<br>we-do-not-need-an-exact-size,-but-please-provide-your-best-estimate...',
                    'answers' => [
                        [
                            'answer' => 'Less than 2m²',
                            'slug' =>  'less-than-2m²'
                        ],
                        [
                            'answer' => '2 to 14m²',
                            'slug' =>   '2-to-14m²'
                        ],
                        [
                            'answer' => '15 to 30m²',
                            'slug' =>    '15-to-30m²'
                        ],
                        [
                            'answer' => '31 to 50m²',
                            'slug' =>  '31-to-50m²'
                        ],
                        [
                            'answer' => 'Over 50m²',
                            'slug' =>   'over-50m²'
                        ],
                        [
                            'answer' => 'Commercial or project<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. involves multiple large rooms or properties</span>',
                            'slug' =>   'commercial-or-project-e.g.-involves-multiple-large-rooms-or-properties'
                        ],
                        [
                            'answer' => 'I do not know',
                            'slug' =>    'i-do-not-know'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 76,
                    'question' => 'Will you supply the tiles?',
                    'slug' =>     'will-you-supply-the-tiles?',
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
                    'job_category_id' => 76,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],



                [
                    'job_category_id' => 76,
                    'question' => 'Roughly, how big is the affected area?',
                    'slug' =>     'roughly-how-big-is-the-affected-area?',
                    'answers' => [
                        [
                            'answer' => 'Small (less than 2m²)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">A small area needs repairing and / or regrouting</span>',
                            'slug' =>   'small-(less-than-2m²)<br>a-small-area-needs-repairing-and-/-or-regrouting'
                        ],
                        [
                            'answer' => 'Large (2m² or more)<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Significant damage to more than a few tiles</span>',
                            'slug' =>   'large-(2m²-or-more)<br>significant-damage-to-more-than-a-few-tiles'
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
