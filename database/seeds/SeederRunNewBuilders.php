<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunNewBuilders extends Seeder
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
                    'job_category_id' => 65,
                    'question' => 'Do you own the land you plan to build on?',
                    'slug'     => 'do-you-own-the-land-you-plan-to-build-on?',
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
                            'answer' => 'I will, purchase in progress',
                            'slug' =>   'i-will,-purchase-in-progress'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 65,
                    'question' => 'Do you have planning permission?',
                    'slug'     => 'do-you-have-planning-permission?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'In progress',
                            'slug' =>   'in-progress'
                        ],
                        [
                            'answer' => 'Not applied for yet',
                            'slug' =>   'not-applied-for-yet'
                        ]


                    ],
                ],





                [
                    'job_category_id' => 65,
                    'question' => 'Roughly what is the budget?',
                    'slug'     => 'roughly-what-is-the-budget?',
                    'answers' => [
                        [
                            'answer' => 'Less than £200k',
                            'slug' =>   'less-than-£200k'
                        ],
                        [
                            'answer' => '£200k to £500k',
                            'slug' =>   '£200k-to-£500k'
                        ],
                        [
                            'answer' => '£500k to £1m',
                            'slug' =>   '£500k-to-£1m'
                        ],
                        [
                            'answer' => 'More than £1m',
                            'slug' =>   'more-than-£1m'
                        ],
                        [
                            'answer' => 'I do not know at this stage',
                            'slug' =>   'i-do-not-know-at-this-stage'
                        ],
                    ],
                ],






                [
                    'job_category_id' => 65,
                    'question' => 'Describe your new build project in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. How many flats/houses are planned, and how many bedrooms? Are you starting the project from the beginning or has some work been done? Do you also require project management?</span>',
                    'slug'     => 'describe-your-new-build-project-in-detail<br>good-descriptions-attract-good-tradespeople.-how-many-flats/houses-are-planned,-and-how-many-bedrooms?-are-you-starting-the-project-from-the-beginning-or-has-some-work-been-done?-do-you-also-require-project-management?',

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
