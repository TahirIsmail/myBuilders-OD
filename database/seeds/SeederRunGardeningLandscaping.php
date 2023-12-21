<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunGardeningLandscaping extends Seeder
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
                    'job_category_id' => 56,
                    'question' =>  'What service do you require?',
                    'slug'     =>  'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'General gardening <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Lawn mowing, hedge trimming, planting, weeding, etc.</span>',
                            'slug' =>    'general-gardening-<br>-lawn-mowing,-hedge-trimming,-planting,-weeding,-etc.'
                        ],
                        [
                            'answer' => 'Landscaping <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Changing garden layout, turfing, decking, patios and fencing</span>',
                            'slug' =>   'landscaping-<br>changing-garden-layout,-turfing,-decking,-patios-and-fencing'
                        ],
                        [
                            'answer' => 'Tree Surgery <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Cutting down and trimming trees</span>',
                            'slug' =>   'tree-surgery-<br>cutting-down-and-trimming-trees'
                        ],

                    ],
                ],
                [



                    'job_category_id' => 56,
                    'question' =>  'Which of the following best describes your gardening job?',
                    'slug'     =>  'which-of-the-following-best-describes-your-gardening-job?',
                    'answers' => [
                        [
                            'answer' =>  'One-off small gardening job <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. lawn mowing, planting a shrub</span>',
                            'slug' =>    'one-off-small-gardening-job-<br>-e.g.-lawn-mowing,-planting-a-shrub'
                        ],
                        [
                            'answer' => 'One-off large gardening job <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. garden clearing, pruning of 5 trees</span>',
                            'slug' =>   'one-off-large-gardening-job-<br>-e.g.-garden-clearing,-pruning-of-5-trees'
                        ],
                        [
                            'answer' => 'Small ongoing garden maintenance <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. recurrent lawnmowing, periodic weeding</span>',
                            'slug' =>   'small-ongoing-garden-maintenance-<br>-e.g.-recurrent-lawnmowing,-periodic-weeding',
                        ], [
                            'answer' => 'Large ongoing garden maintenance <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> E.g. repeated garden clearing, pruning, very large lawn mowing</span>',
                            'slug' =>   'large-ongoing-garden-maintenance-<br>-e.g.-repeated-garden-clearing,-pruning,-very-large-lawn-mowing'

                        ],
                    ]
                ],
                [

                    'job_category_id' => 56,
                    'question' =>  'Please select the tasks you need completing',
                    'slug'     =>  'please-select-the-tasks-you-need-completing',
                    'answers' => [
                        [
                            'answer' =>  'Lawn mowing',
                            'slug' =>    'lawn-mowing'
                        ],
                        [
                            'answer' => 'Patio/Decking cleaning',
                            'slug' =>   'patio/decking-cleaning'
                        ],
                        [
                            'answer' => 'Weeding',
                            'slug' =>   'weeding',
                        ],
                        [
                            'answer' => 'Pruning',
                            'slug' =>   'pruning'

                        ],
                        [
                            'answer' => 'Planting/removing plants',
                            'slug' =>   'planting/removing-plants'

                        ],
                        [
                            'answer' => 'Garden clearing',
                            'slug' =>   'garden-clearing'

                        ],

                        [
                            'answer' => 'Other',
                            'slug' =>   'other'

                        ],
                    ]
                ],

                [

                    'job_category_id' => 56,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],
                [

                    'job_category_id' => 56,
                    'question' =>  'Which of the following best describes your landscaping job?',
                    'slug'     =>  'which-of-the-following-best-describes-your-landscaping-job?',
                    'answers' => [
                        [
                            'answer' =>  'Garden repairs <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Fix existing fences, decks, patios, etc.</span>',
                            'slug' =>    'garden-repairs-<br>-fix-existing-fences,-decks,-patios,-etc.'
                        ],
                        [
                            'answer' => 'Add or replace elements <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Add or replace fences, decks, patios or lawns, etc.</span>',
                            'slug' =>   'add-or-replace-elements-<br>-add-or-replace-fences,-decks,-patios-or-lawns,-etc.'
                        ],
                        [
                            'answer' => 'Garden renovation / landscaping project<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Make extensive changes, change the garden layout, etc</span>',
                            'slug' =>   'garden-renovation-/-landscaping-project<br>make-extensive-changes,-change-the-garden-layout,-etc',
                        ]
                    ]
                ],

                [

                    'job_category_id' => 56,
                    'question' =>  'What needs repairing?',
                    'slug'     =>  'what-needs-repairing?',
                    'answers' => [
                        [
                            'answer' =>  'Multiple items <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Fix a combination of deck, patio, fence, etc..</span>',
                            'slug' =>    'multiple-items-<br>-fix-a-combination-of-deck,-patio,-fence,-etc..'
                        ],
                        [
                            'answer' => 'A lawn',
                            'slug' =>   'a-lawn'
                        ],
                        [
                            'answer' => 'A patio',
                            'slug' =>   'a-patio',
                        ],
                        [
                            'answer' => 'Fencing',
                            'slug' =>   'fencing',
                        ],
                        [
                            'answer' => 'Decking',
                            'slug' =>   'decking',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ]
                ],


                [

                    'job_category_id' => 56,
                    'question' =>  'How big is the fencing repair?',
                    'slug'     =>  'how-big-is-the-fencing-repair?',
                    'answers' => [
                        [
                            'answer' =>  'Minor repair <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Only one or two fence panels or posts need repairing, a gate needs re-hanging...</span>',
                            'slug' =>    'minor-repair-<br>-only-one-or-two-fence-panels-or-posts-need-repairing,-a-gate-needs-re-hanging...'
                        ],
                        [
                            'answer' => 'Larger repair<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Multiple fence posts and / or fence panelling needs repairing, gate(s) need restoring..</span>',
                            'slug' =>   'larger-repair<br>multiple-fence-posts-and-/-or-fence-panelling-needs-repairing,-gate(s)-need-restoring...'
                        ]
                    ]
                ],


                [

                    'job_category_id' => 56,
                    'question' =>  'What do you wish to add or replace?',
                    'slug'     =>  'what-do-you-wish-to-add-or-replace?',
                    'answers' => [
                        [
                            'answer' =>  'Multiple items <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Add or replace a combination of lawn, deck, patio, etc.</span>',
                            'slug' =>    'multiple-items-<br>add-or-replace-a-combination-of-lawn,-deck,-patio,-etc.'
                        ],
                        [
                            'answer' => 'A lawn',
                            'slug' =>   'a-lawn'
                        ],
                        [
                            'answer' => 'A patio',
                            'slug' =>   'a-patio',
                        ],
                        [
                            'answer' => 'Fencing',
                            'slug' =>   'fencing',
                        ],
                        [
                            'answer' => 'Decking',
                            'slug' =>   'decking',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ]
                ],


                [

                    'job_category_id' => 56,
                    'question' =>  'What type of grass would you like on your lawn?',
                    'slug'     =>  'what-type-of-grass-would-you-like-on-your-lawn?',
                    'answers' => [
                        [
                            'answer' =>  'Natural grass',
                            'slug' =>    'natural-grass'
                        ],
                        [
                            'answer' => 'Artificial grass',
                            'slug' =>   'artificial-grass'
                        ]
                    ]
                ],


                [

                    'job_category_id' => 56,
                    'question' =>  'How large is the lawn?',
                    'slug'     =>  'how-large-is-the-lawn?',
                    'answers' => [
                        [
                            'answer' =>  'Small<br<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">>Up to 50m² / 500 sq ft</span>',
                            'slug' =>    'small-<b>-up-to-50m²-/-500-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">50m² to 100m² / 500 to 1000 sq ft</span>',
                            'slug' =>   'medium-<br>-50m²-to-100m²-/-500-to-1000-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">over 100m² / 1000 sq ft</span>',
                            'slug' =>   'large-<br>-over-100m²-/-1000-sq-ft'
                        ]
                    ]
                ],





                [

                    'job_category_id' => 56,
                    'question' =>  'Roughly how large is the patio area?',
                    'slug'     =>  'roughly-how-large-is-the-patio-area?',
                    'answers' => [
                        [
                            'answer' =>  'Small<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Up to 15m² / 150 sq ft</span>',
                            'slug' =>    'small-<br>-up-to-15m²-/-150-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> 15m² to 30m² / 150 to 300 sq ft</span>',
                            'slug' =>   'medium-<br>-15m²-to-30m²-/-150-to-300-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> 30m² to 60m² / 300 to 600 sq ft</span>',
                            'slug' =>   'large-<br>-30m²-to-60m²-/-300-to-600-sq-ft'
                        ],
                        [
                            'answer' => 'XLarge <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">over 60m² / 600 sq ft</span>',
                            'slug' =>   'Xlarge-<br>-over-60m²-/-600-sq-ft'
                        ]
                    ]
                ],
                [
                    'job_category_id' => 56,
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
                        ]
                    ],
                ],


                [
                    'job_category_id' => 56,
                    'question' => 'What type of fence would you like?',
                    'slug'     => 'what-type-of-fence-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Panel fence<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Standard pre-fabricated fence panels slotted between concrete or wooden posts</span>',
                            'slug' =>   'panel-fence<br>standard-pre-fabricated-fence-panels-slotted-between-concrete-or-wooden-posts'
                        ],
                        [
                            'answer' => 'Feather edge fence<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Custom built fence using vertical overlapping wooden pales secured to posts</span>',
                            'slug' =>   'feather-edge-fence<br>custom-built-fence-using-vertical-overlapping-wooden-pales-secured-to-posts'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],



                [

                    'job_category_id' => 56,
                    'question' =>  'Roughly how large is the area to be decked?',
                    'slug'     =>  'roughly-how-large-is-the-area-to-be-decked?',
                    'answers' => [
                        [
                            'answer' =>  'Small-<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Up to 15m² / 150 sq ft</span>',
                            'slug' =>    'small-<br>-up-to-15m²-/-150-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> 15m² to 30m² / 150 to 300 sq ft</span>',
                            'slug' =>   'medium-<br>-15m²-to-30m²-/-150-to-300-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">30m² to 60m² / 300 to 600 sq ft</span>',
                            'slug' =>   'large-<br>-30m²-to-60m²-/-300-to-600-sq-ft'
                        ],
                        [
                            'answer' => 'XLarge <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> over 60m² / 600 sq ft</span>',
                            'slug' =>   'Xlarge-<br>-over-60m²-/-600-sq-ft'
                        ]
                    ]
                ],






                [

                    'job_category_id' => 55,
                    'question' =>  'What does your gas job involve?',
                    'slug'     =>  'what-does-your-gas-job-involve?',
                    'answers' => [
                        [
                            'answer' =>  'Gas safety check',
                            'slug' =>    'gas-safety-check'
                        ],
                        [
                            'answer' => 'Service boiler or appliance',
                            'slug' =>   'service-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Install or replace boiler or appliance',
                            'slug' =>   'install-or-replace-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Move or remove boiler or appliance',
                            'slug' =>   'move-or-remove-boiler-or-appliance'
                        ],
                        [
                            'answer' => 'Pipework only',
                            'slug' =>   'pipework-only'
                        ],
                        [
                            'answer' => 'Problem or repair',
                            'slug' =>   'problem-or-repair'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
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
