<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunSecuritySystem extends Seeder
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
                    'job_category_id' => 73,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Security alarm system',
                            'slug' =>  'security-alarm-system'
                        ],
                        [
                            'answer' => 'CCTV/Smart camera',
                            'slug' =>   'cctv/smart-camera'
                        ],
                        [
                            'answer' => 'Entry system',
                            'slug' =>   'entry-system'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>   'smoke-alarms'
                        ],
                        [
                            'answer' => 'Security lights',
                            'slug' =>   'security-lights'
                        ],
                        [
                            'answer' => 'Locks',
                            'slug' =>   'locks'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 73,
                    'question' => 'What service do you require?',
                    'slug' =>     'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Installation',
                            'slug' =>   'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],


                [
                    'job_category_id' => 73,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system?',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>  'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'Wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'entry-system'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 73,
                    'question' => 'Have you purchased the system already?',
                    'slug' =>     'have-you-purchased-the-system-already?',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased,-installation-only',
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want,-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no,-i-need-help-deciding'
                        ]

                    ],
                ],




                [
                    'job_category_id' => 73,
                    'question' => 'What type of property is the system for?',
                    'slug' =>     'what-type-of-property-is-the-system-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 73,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 73,
                    'question' => 'Have you purchased the camera already?',
                    'slug' =>     'have-you-purchased-the-camera-already?',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>  'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 73,
                    'question' => 'What type of property is the camera for?',
                    'slug' =>     'what-type-of-property-is-the-camera-for',
                    'answers' => [
                        [
                            'answer' => 'Residential home',
                            'slug' =>   'residential-home'
                        ],
                        [
                            'answer' => 'Commercial property',
                            'slug' =>   'commercial-property'
                        ]
                    ],
                ],




                [
                    'job_category_id' => 73,
                    'question' => 'Describe your security system job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.</span>',
                    'slug' =>     'describe-your-security-system-job-in-detail<br>good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted',
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
