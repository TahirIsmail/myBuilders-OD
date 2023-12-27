<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunPainters extends Seeder
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
                    'job_category_id' => 66,
                    'question' => 'Are the painting / decorating works inside or outside the house?',
                    'slug'     => 'are-the-painting-/-decorating-works-inside-or-outside-the-house?',
                    'answers' => [
                        [
                            'answer' => 'Inside',
                            'slug' =>   'inside'
                        ],
                        [
                            'answer' => 'Outside',
                            'slug' =>   'outside'
                        ],
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ],
                    ],
                ],


                [
                    'job_category_id' => 66,
                    'question' => 'Roughly, how much decorating work is it?',
                    'slug'     => 'roughly,-how-much-decorating-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Part of a room',
                            'slug' =>   'part-of-a-room'
                        ],
                        [
                            'answer' => '1 room',
                            'slug' =>   '1-room'
                        ],
                        [
                            'answer' => '2 rooms',
                            'slug' =>   '2-room'
                        ],

                        [
                            'answer' => '3 rooms',
                            'slug' =>   '3-room'
                        ],
                        [
                            'answer' => '4 rooms',
                            'slug' =>   '4-room'
                        ],
                        [
                            'answer' => '5+ rooms',
                            'slug' =>   '5+-room'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'Does this include your hallway, stairs and landing?',
                    'slug'     => 'does-this-include-your-hallway,-stairs-and-landing?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 66,
                    'question' => 'What do you want painted / decorated?',
                    'slug'     => 'what-do-you-want-painted-/-decorated?',
                    'answers' => [
                        [
                            'answer' => 'Exterior walls',
                            'slug' =>   'exterior-walls'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Fascias & soffits',
                            'slug' =>   'fascias-&-soffits'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'How many walls need painting?',
                    'slug'     => 'how-many-walls-need-painting?',
                    'answers' => [
                        [
                            'answer' => 'Only a small area',
                            'slug' =>   'only-a-small-area'
                        ],
                        [
                            'answer' => '1 wall',
                            'slug' =>   '1-wall'
                        ],
                        [
                            'answer' => '2-3 walls',
                            'slug' =>   '2-3-walls'
                        ],
                        [
                            'answer' => 'The whole house',
                            'slug' =>   'the-whole-house'
                        ],
                        [
                            'answer' => 'Multiple buildings / properties',
                            'slug' =>   'multiple-buildings-/-properties'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 66,
                    'question' => 'How many windows / doors need painting?',
                    'slug'     => 'how-many-windows-/-doors-need-painting?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2 to 5',
                            'slug' =>   '2-to-5'
                        ],
                        [
                            'answer' => 'more than 6',
                            'slug' =>   'more-than-6'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 66,
                    'question' => 'How extensive is your fascias & soffits painting job?',
                    'slug'     => 'how-extensive-is-your-fascias-&-soffits-painting-job?',
                    'answers' => [
                        [
                            'answer' => 'Small<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. only 1 side of the house</span>',
                            'slug' =>  'small<br>e.g.-only-1-side-of-the-house'
                        ],
                        [
                            'answer' => 'Medium<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. 2-3 sides of the house</span>',
                            'slug' =>   'medium<br>e.g.-2-3-sides-of-the-house'
                        ],
                        [
                            'answer' => 'Large<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. all fascias and/or soffits</span>',
                            'slug' =>   'large<br>e.g.-all-fascias-and/or-soffits'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'How extensive is your painting job?',
                    'slug'     => 'how-extensive-is-your-painting-job?',
                    'answers' => [
                        [
                            'answer' => 'Small decoration job<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. touch up paint on 1 wall and re-paint 1 window</span>',
                            'slug' =>   'small-decoration-job<br>e.g.-touch-up-paint-on-1-wall-and-re-paint-1-window'
                        ],
                        [
                            'answer' => 'Medium decoration job<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. paint fence, 2 windows and 1 fascia</span>',
                            'slug' =>   'medium-decoration-job<br>e.g.-paint-fence,-2-windows-and-1-fascia'
                        ],
                        [
                            'answer' => 'Large decoration job<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. paint 2 walls, all windows and fascias</span>',
                            'slug' =>   'large-decoration-job<br>e.g.-paint-2-walls-all-windows-and-fascias'
                        ],

                        [
                            'answer' => 'Very large decoration job<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. all external wall and all windows and doors</span>',
                            'slug' =>   'very-large-decoration-job<br>e.g.-all-external-wall-and-all-windows-and-doors'
                        ],
                    ],
                ],




                [
                    'job_category_id' => 66,
                    'question' => 'Internal painting / decorating<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Roughly, how much decorating work is it?</span>',
                    'slug'     => 'internal-painting-/-decorating<br>roughly,-how-much-decorating-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Part of a room',
                            'slug' =>   'part-of-a-room'
                        ],
                        [
                            'answer' => '1 room',
                            'slug' =>   '1-room'
                        ],
                        [
                            'answer' => '2 room',
                            'slug' =>   '2-room'
                        ],
                        [
                            'answer' => '3 room',
                            'slug' =>   '3-room'
                        ],
                        [
                            'answer' => '4 room',
                            'slug' =>   '4-room'
                        ],
                        [
                            'answer' => 'More than 5 room',
                            'slug' =>   'more-than-5-room'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'External painting<br>What painting / decorating do you need?',
                    'slug'     => 'external-painting<br>what-painting-/-decorating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Exterior walls',
                            'slug' =>   'exterior-walls'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Fascias & soffits',
                            'slug' =>   'fascias-&-soffits'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ],


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
