<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunDrivewayPavers  extends Seeder
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
                            'answer' => 'Dropped kerb<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (crossover)</span>',
                            'slug' =>   'dropped-kerb-(crossover)'
                        ],
                        [
                            'answer' => 'Repair a driveway <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. Minor cracks, a few loose blocks</span>',
                            'slug' =>   'repair-a-driveway-<br>-e.g.-minor-cracks,-a-few-loose-blocks'
                        ],
                        [
                            'answer' => 'Paving, patios and paths <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Repair, install new or replace (including steps & small walls)</span>',
                            'slug' =>   'paving,-patios-and-paths-<br>-repair,-install-new-or-replace-(including-steps-&-small-walls)'
                        ],
                    ],
                ],
                [
                    'job_category_id' => 48,
                    'question' => 'What surface material do you need?',
                    'slug' =>     'what-services-material-do-you-need?',
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
                            'answer' => 'I am not sure, need help deciding',
                            'slug' =>   'i-am-not-sure,-need-help-deciding'
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
                            'slug' =>   'Large-(4-or-more-cars)'
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
                            'slug' =>   'small-<br>-up-to-15m²-/-150-sq-ft'
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
                            'slug' =>   'X-Large-<br>-Over-60m²-/-600 sq ft'
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
