<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunRoofers extends Seeder
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
                    'job_category_id' => 72,
                    'question' => 'What roofing service do you require?',
                    'slug' =>     'what-roofing-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'New or replacement roof',
                            'slug' =>   'new-or-replacement-roof'
                        ],
                        [
                            'answer' => 'Roof repair or assessment',
                            'slug' =>   'roof-repair-or-assessment'
                        ],
                        [
                            'answer' => 'Chimney work',
                            'slug' =>   'chimney-work'
                        ],
                        [
                            'answer' => 'Something else',
                            'slug' =>   'something-else'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof do you need?',
                    'slug' =>     'what-type-of-roof-do-you-need',
                    'answers' => [
                        [
                            'answer' => 'Pitched roof',
                            'slug' =>   'pitched-roof'
                        ],
                        [
                            'answer' => 'flat-roof',
                            'slug' =>   'flat-roof'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'I will,-purchase in progress',
                            'slug' =>   'i-will, purchase-in-progress'
                        ],
                        [
                            'answer' => 'No, I am posting on behalf of the property owner',
                            'slug' =>   'no,-i-am-posting-on-behalf-of-the-property-owner'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof is it?',
                    'slug' =>     'what-type-of-roof-is-it',
                    'answers' => [
                        [
                            'answer' => 'Porch or outhouse',
                            'slug' =>   'porch-or-outhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],





                [
                    'job_category_id' => 72,
                    'question' => 'Where are you looking to install or replace the roof?',
                    'slug' =>     'where-are-you-looking-to-install-or-replace-the-roof',
                    'answers' => [
                        [
                            'answer' => 'Porch or outhouse',
                            'slug' =>   'porch-or-outhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'What material do you want for the new roof?',
                    'slug' =>     'what-material-do-you-want-for-the-new-roof',
                    'answers' => [
                        [
                            'answer' => 'GRP<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"> (fibreglass)</span>',
                            'slug' =>   'grp-(fibreglass)'
                        ],
                        [
                            'answer' => 'EPDM <span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">(rubber membrane)</span>',
                            'slug' =>   'epdm-(rubber-membrane)'
                        ],
                        [
                            'answer' => 'Felt or bitumen',
                            'slug' =>   'felt-or-bitumen'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'I will,-purchase in progress',
                            'slug' =>   'i-will, purchase-in-progress'
                        ],
                        [
                            'answer' => 'No, I am posting on behalf of the property owner',
                            'slug' =>   'no,-i-am-posting-on-behalf-of-the-property-owner'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof is it?',
                    'slug' =>     'what-type-of-roof-is-it',
                    'answers' => [
                        [
                            'answer' => 'Pitched roof',
                            'slug' =>   'pitched-roof'
                        ],
                        [
                            'answer' => 'Flat roof',
                            'slug' =>   'flat-roof'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],


                    ],
                ],
                [
                    'job_category_id' => 72,
                    'question' => 'What can a roofer help you with?',
                    'slug' =>     'what-can-a-roofer-help-you-with',
                    'answers' => [
                        [
                            'answer' => 'leak',
                            'slug' =>   'leak'
                        ],
                        [
                            'answer' => 'Tiling repairs',
                            'slug' =>   'tiling-repairs'
                        ],
                        [
                            'answer' => 'Roof structure',
                            'slug' =>   'roof-structure'
                        ],

                        [
                            'answer' => 'Other repair or assessment',
                            'slug' =>   'other-repair-or-assessment'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'How extensive is the repair?',
                    'slug' =>     'how-extensive-is-the-repair?',
                    'answers' => [
                        [
                            'answer' => 'A single tile',
                            'slug' =>   'a-single-tile'
                        ],
                        [
                            'answer' => '2 to 5 tiles',
                            'slug' =>   '2-to-5-tiles'
                        ],
                        [
                            'answer' => '6 to 15 tiles',
                            'slug' =>   '6-to-15-tiles'
                        ],

                        [
                            'answer' => '16 to 30 tiles',
                            'slug' =>   '16-to-30-tiles'
                        ],

                        [
                            'answer' => 'More than 30 tiles',
                            'slug' =>   'more-than-30-tiles'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 72,
                    'question' => 'What is the roof material?',
                    'slug' =>     'what-is-the-roof-material?',
                    'answers' => [
                        [
                            'answer' => 'GRP membrane',
                            'slug' =>   'grp-membrane'
                        ],
                        [
                            'answer' => 'Fibreglass',
                            'slug' =>   'fibreglass'
                        ],
                        [
                            'answer' => 'Felt or bitumen',
                            'slug' =>   'felt-or-bitumen'
                        ],

                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],


                    ],
                ],


                [
                    'job_category_id' => 72,
                    'question' => 'What type of roof are you looking to repair?',
                    'slug' =>     'what-type-of-roof-are-you-looking-to-repair?',
                    'answers' => [
                        [
                            'answer' => 'Porch or summerhouse',
                            'slug' =>   'porch-or-summerhouse'
                        ],
                        [
                            'answer' => 'Garage, extension, or part of the house',
                            'slug' =>   'garage,-extension,-or-part-of-the-house'
                        ],
                        [
                            'answer' => 'Whole house',
                            'slug' =>   'whole-house'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'What chimney work needs doing?',
                    'slug' =>     'what-chimney-work-needs-doing?',
                    'answers' => [
                        [
                            'answer' => 'Install or rebuild new chimney',
                            'slug' =>   'install-or-rebuild-new-chimney'
                        ],
                        [
                            'answer' => 'Remove an existing chimney',
                            'slug' =>   'remove-an-existing-chimney'
                        ],
                        [
                            'answer' => 'Repair or repoint my chimney',
                            'slug' =>   'repair-or-repoint-my-chimney'
                        ],
                        [
                            'answer' => 'Chimney capping',
                            'slug' =>   'chimney-capping'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 72,
                    'question' => 'Describe your roofing job in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Are you replacing an existing roof or making a repair? Describe the roof type and shape. What type of roofing material would you prefer? Include the approximate age of the current roof if you know it.</span>',
                    'slug' =>     'describe-your-roofing-job-in-detail<br>good-descriptions-attract-good-tradespeople.-are-you-replacing-an-existing-roof-or-making-a-repair?-describe-the-roof-type-and-shape.-what-type-of-roofing-material-would-you-prefer?-include-the-approximate-age-of-the-current-roof-if-you-know-it.',
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
