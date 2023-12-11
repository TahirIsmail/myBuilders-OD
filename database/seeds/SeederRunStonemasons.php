<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunStonemasons extends Seeder
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
                    'job_category_id' => 74,
                    'question' => 'What type of masonry service do you require?',
                    'slug' =>     'what-type-of-masonry-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Building',
                            'slug' =>   'building'
                        ],
                        [
                            'answer' => 'Repairing',
                            'slug' =>   'repairing'
                        ],
                        [
                            'answer' => 'Repointing',
                            'slug' =>   'repointing'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you want?',
                    'slug' =>    'what-type-of-stonework-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Any type of finely dressed, shaped stone</span>',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Irregular shaped, non-dressed stone, built with mortar</span>',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Irregular shaped stone boundary walls, built without mortar</span>',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],





                [
                    'job_category_id' => 74,
                    'question' => 'How large is the job?',
                    'slug' =>     'how-large-is-the-job?',
                    'answers' => [
                        [
                            'answer' => 'Small<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>E.g. garden walls, chimney, section of wall, etc.</span>',
                            'slug' =>   'small<br>e.g.-garden-walls,-chimney,-section-of-wall,-etc.'
                        ],
                        [
                            'answer' => 'Medium<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>E.g. single wall, multiple areas, garage or outbuilding, etc.</span>',
                            'slug' =>   'medium<br>e.g.-single-wall,-multiple-areas,-garage-or-outbuilding,-etc.'
                        ],
                        [
                            'answer' => 'Large<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>Multiple walls</span>',
                            'slug' =>   'large<br>multiple-walls'
                        ],
                        [
                            'answer' => 'X-Large<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>Whole property</span>',
                            'slug' =>   'x-large<br>whole-property'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 74,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you need repaired?',
                    'slug' =>     'what-type-of-stonework-do-you-need-repaired?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> <br> Any type of finely dressed, shaped stone</span>',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>Irregular shaped, non-dressed stone, built with mortar</span>',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Irregular shaped stone boundary walls, built without mortar</span>',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 74,
                    'question' => 'What type of stonework do you need repointed?',
                    'slug' =>     'what-type-of-stonework-do-you-need-repointed?',
                    'answers' => [
                        [
                            'answer' => 'Ashlar <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br> Any type of finely dressed, shaped stone</span>',
                            'slug' =>   'ashlar-<br>-any-type-of-finely-dressed,-shaped-stone'
                        ],
                        [
                            'answer' => 'Random rubble<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>Irregular shaped, non-dressed stone, built with mortar</span>',
                            'slug' =>   'random-rubble<br>irregular-shaped,-non-dressed-stone,-built-with-mortar'
                        ],
                        [
                            'answer' => 'Dry stone<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Irregular shaped stone boundary walls, built without mortar</span>',
                            'slug' =>   'dry-stone<br>irregular-shaped-stone-boundary-walls,-built-without-mortar'
                        ],
                        [
                            'answer' => 'Other / I am not sure',
                            'slug' =>   'other-/-i-am-not-sure'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 74,
                    'question' => 'Describe your stonemasonry job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. Rebuild stone wall at front of property. Approx 8m long and 1m high. The stone is still on site...</span>',
                    'slug' =>     'describe-your-stonemasonry-job-in-detail<br>e.g.-rebuild-stone-wall-at-front-of-property.-approx-8m-long-and-1m-high.-the-stone-is-still-on-site...',
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
