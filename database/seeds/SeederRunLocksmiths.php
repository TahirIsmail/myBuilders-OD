<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunLocksmiths extends Seeder
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
                    'job_category_id' => 63,
                    'question' => 'What do you need a locksmith to do?',
                    'slug' =>    'what-do-you-need-a-locksmith-to-do?',
                    'answers' => [
                        
                            [
                                'answer' => 'Install new locks',
                                'slug' =>  'install-new-locks',
                            ],
                            [
                                'answer' => 'Repair locks',
                                'slug' =>   'repair-locks'
                            ],
                            [
                                'answer' => 'Other<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (e.g. locked out)</span>',
                                'slug' =>   'other-(e.g.-locked-out)'
                            ],

                        
                    ],
                ],


                [
                    'job_category_id' => 63,
                    'question' => 'How many locks do you require fitting?',
                    'slug' =>     'how-many-locks-do-you-require-fitting?',
                    'answers' => [
                        
                            [
                                'answer' => '1 lock',
                                'slug' =>   '1-lock',
                            ],
                            [
                                'answer' => '2 locks',
                                'slug' =>   '2-locks'
                            ],
                            [
                                'answer' => '3 or more locks',
                                'slug' =>   '3-or-more-locks'
                            ],

                        ],
                    
                ],


                [
                    'job_category_id' => 63,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],
                [
                    'job_category_id' => 63,
                    'question' => 'Describe your locksmith job in detail <br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> Good descriptions attract good tradespeople. Add as much detail as you can. If you know the type of lock include that. Also add the type of door or window it is fitted to.</span>',
                    'slug' =>     'describe-your-locksmith-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-type-of-lock-include-that.-also-add-the-type-of-door-or-window-it-is-fitted-to.',
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
