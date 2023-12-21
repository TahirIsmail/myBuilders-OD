<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunFencing  extends Seeder
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
                    'job_category_id' => 52,
                    'question' => 'What does your fencing job involve?',
                    'slug'     => 'what-does-your-fencing-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Fencing',
                            'slug' =>   'fencing'
                        ],
                        [
                            'answer' => 'Gates',
                            'slug' =>   'gates'
                        ],
                        [
                            'answer' => 'Fencing and gates',
                            'slug' =>   'fencing-and-gates'
                        ],
                        [
                            'answer' => 'Repair a fence or gate',
                            'slug' =>   'repair-a-fence-or-gate'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'What type of fence would you like?',
                    'slug'     => 'what-type-of-fence-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Panel fence <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Standard pre-fabricated fence panels slotted between concrete or wooden posts</span>',
                            'slug' =>   'panel-fence-<br>-standard-pre-fabricated-fence-panels-slotted-between-concrete-or-wooden-posts'
                        ],
                        [
                            'answer' => 'Feather edge fence <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Custom built fence using vertical overlapping wooden pales secured to posts</span>',
                            'slug' =>   'feather-edge-fence-<br>-custom-built-fence-using-vertical-overlapping-wooden-pales-secured-to-posts'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'Roughly, how much fencing do you need? <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> One panel is 1.8m (6 ft) wide. Please provide your best estimate.</span>',
                    'slug'     => 'roughly,-how-much-fencing-do-you-need?<br>one-panel-is-1.8m-(6-ft)-wide.-please-provide-your-best-estimate.',
                    'answers' => [
                        [
                            'answer' => 'Up to 10m (32 ft)',
                            'slug' =>   'up-to-10m-(32-ft)'
                        ],
                        [
                            'answer' => '10-25m (32-82 ft)',
                            'slug' =>   '10-25m-(32-82-ft)'
                        ],
                        [
                            'answer' => '25-35m (82-115 ft)',
                            'slug' =>   '25-35m-(82-115-ft)'
                        ],
                        [
                            'answer' => 'Over 35m (115 ft)',
                            'slug'   => 'Over 35m (115 ft)'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [
                    'job_category_id' => 52,
                    'question' => 'How many gates do you need?',
                    'slug'     => 'how-many-gates-do-you-need?',
                    'answers' => [
                        [
                            'answer' => '1 to 2',
                            'slug' =>   '1-to-2'
                        ],
                        [
                            'answer' => '3 to 4',
                            'slug' =>   '3-to-4'
                        ],
                        [
                            'answer' => 'more than 4',
                            'slug' =>   'more-than-4'
                        ],
                        [
                            'answer' => 'Made to measure gates <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. Double gates for a driveway, a bespoke gate, etc.</span>',
                            'slug' =>   'made-to-measure-gates-<br>-e.g.-double-gates-for-a-driveway,-a-bespoke-gate,-etc.'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'Do you already have the gate(s)?',
                    'slug'     => 'do-you-already-have-the-gate(s)?',
                    'answers' => [
                        [
                            'answer' => 'I have the gate(s), I just need them fitted',
                            'slug' =>   'i-have-the-gate(s),-i-just-need-them-fitted'
                        ],
                        [
                            'answer' => 'I need the gate(s) sourced and fitted',
                            'slug' =>   'i-need-the-gate(s)-sourced-and-fitted'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'How many gates do you need?',
                    'slug'     => 'how-many-gates-do-you-need?',
                    'answers' => [
                        [
                            'answer' => '1 gate',
                            'slug' =>   '1-gate'
                        ],
                        [
                            'answer' => '2 gates',
                            'slug' =>   '2-gates'
                        ],

                        [
                            'answer' => 'Made to measure gates <br> e.g.<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Double gates for a driveway, a bespoke gate, etc.</span>',
                            'slug' =>   'made-to-measure-gates-<br>-e.g.-double-gates-for-a-driveway,-a-bespoke-gate,-etc.'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 52,
                    'question' => 'How big is the fencing or gate repair?',
                    'slug'     =>  'how-big-is-the-fencing-or-gate-repair?',
                    'answers' => [
                        [
                            'answer' => 'Minor repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Only one or two fence panels or posts need repairing, a gate needs re-hanging...</span>',
                            'slug' =>   'minor-repair-<br>-only-one-or-two-fence-panels-or-posts-need-repairing,-a-gate-needs-re-hanging...'
                        ],
                        [
                            'answer' => 'Larger repair <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Multiple fence posts and / or fence panelling needs repairing, gate(s) need restoring...</span>',
                            'slug' =>   'larger-repair-<br>-multiple-fence-posts-and/or-fence-panelling-needs-repairing,-gate(s)-need-restoring...'
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
