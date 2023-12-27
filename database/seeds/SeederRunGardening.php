<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunGardening  extends Seeder
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

                    'job_category_id' => 54,
                    'question' =>  'What type of job is it?',
                    'slug'     =>  'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' =>  'Foundations for a structure to be built <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. Foundations for extension, new build, outbuilding or shed</span>',
                            'slug' =>    'foundations-for-a-structure-to-be-built-<br>e.g.-foundations-for-extension,-new-build,-outbuilding-or-shed'
                        ],
                        [
                            'answer' => 'Drainage & pipework <br> E.g.<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> digging trenches and laying new pipes or drains</span>',
                            'slug' =>   'drainage-&-pipework-<br>e.g.-digging-trenches-and-laying-new-pipes-or-drains'
                        ],
                        [
                            'answer' => 'General garden earthworks <br> <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">E.g. level lawns, excavate for a pond or pool, dig grave, etc.</span>',
                            'slug' =>   'general-garden-earthworks-<br>e.g.-level-lawns,-excavate-for-a-pond-or-pool,-dig-grave,-etc.'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],



                [

                    'job_category_id' => 54,
                    'question' =>  'What do you want foundations for?',
                    'slug'     =>  'what-do-you-want-foundations-for?',
                    'answers' => [
                        [
                            'answer' =>  'New house',
                            'slug' =>    'new-house'
                        ],
                        [
                            'answer' => 'House extension',
                            'slug' =>   'house-extension'
                        ],
                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage'
                        ],
                        [
                            'answer' => 'Shed',
                            'slug' =>   'shed'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ]
                ],
                [
                    'job_category_id' => 54,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],
                [
                    'job_category_id' => 54,
                    'question' => 'Describe your earthworks job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Describe what what you need doing in detail, including roughly how large an area is involved. How accessible is the site?</span>',
                    'slug' =>     'describe-your-earthworks-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-describe-what-what-you-need-doing-in-detail,-including-roughly-how-large-an-area-is-involved.-how-accessible-is-the-site?',
                ],
                [
                    'job_category_id' => 54,
                    'question' => 'Describe your groundworks job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. What needs to be done? Provide details of the tasks and size of the area involved. What kind of access is there for machinery.</span>',
                    'slug' =>     'describe-your-groundworks-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-what-needs-to-be-done?-provide-details-of-the-tasks-and-size-of-the-area-involved.-what-kind-of-access-is-there-for-machinery.',
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
