<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class SeederRunRestoration extends Seeder
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
                    'job_category_id' => 7,
                    'question' => 'Please make sure you have read and understood the following:<span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;"><br>This trade is for large jobs that require management and oversight. If you require multiple jobs that cover various trades, please post these separately in the appropriate trade categories.</span>',
                    'slug' =>     'please-make-sure-you-have-read-and-understood-the-following:<br>this-trade-is-for-large-jobs-that-require-management-and-oversight.-if-you-require-multiple-jobs-that-cover-various-trades,-please-post-these-separately-in-the-appropriate-trade-categories.',
                    'answers' => [
                        [
                            'answer' => 'I understand',
                            'slug' =>   'i-understand'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 7,
                    'question' => 'Does your job involve changing the purpose or structure of a room?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. converting a garage or removing a wall to combine rooms</span>',
                    'slug' =>     'does-your-job-involve-changing-the-purpose-or-structure-of-a-room?<br>e.g.-converting-a-garage-or-removing-a-wall-to-combine-rooms',
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
                    'job_category_id' => 7,
                    'question' => 'How extensive is your conversion job?',
                    'slug' =>     'how-extensive-is-your-conversion-job',
                    'answers' => [
                        [
                            'answer' => 'Single room conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. join 2 rooms together, install necessary utilities</span>',
                            'slug' =>   'single-room-conversion<br>e.g.-join-2-rooms-together,-install-necessary-utilities'
                        ],
                        [
                            'answer' => 'Small garage / outbuilding conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. convert small outbuilding to living space</span>',
                            'slug' =>   'small-garage-/-outbuilding-conversion<br>e.g.-convert-small-outbuilding-to-living-space'
                        ],
                        [
                            'answer' => 'Multiple rooms or large outbuilding<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. convert a large detached garage into a self sufficient flat</span>',
                            'slug' =>   'multiple-rooms-or-large-outbuilding<br>e.g.-convert-a-large-detached-garage-into-a-self-sufficient-flat'
                        ],
                        [
                            'answer' => 'Whole property conversion<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. major conversion works to one or more property, including important structural changes</span>',
                            'slug' =>   'whole-property-conversion<br>e.g.-major-conversion-works-to-one-or-more-property,-including-important-structural-changes'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 7,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'I will / purchase in progress',
                            'slug' =>   'i-will-/-purchase-in-progress'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 7,
                    'question' => 'Select all the works that are required for your job:',
                    'slug' =>     'select-all-the-works-that-are-required-for-your-job:',
                    'answers' => [
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Central heating',
                            'slug' =>   'central-heating'
                        ],
                        [
                            'answer' => 'Plumbing',
                            'slug' =>   'plumbing'
                        ],

                        [
                            'answer' => 'Painting & decorating',
                            'slug' =>   'painting-&-decorating'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 7,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 7,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'I will,purchase in progress',
                            'slug' =>   'i-will,-purchase-in-progress'
                        ],
                        [
                            'answer' => 'No, I am posting on behalf of the property owner',
                            'slug' =>   'no,-i-am-posting-on-behalf-of-the-property-owner'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],



                [
                    'job_category_id' => 7,
                    'question' => 'What type of job is it?',
                    'slug' =>     'what-type-of-job-is-it',
                    'answers' => [
                        [
                            'answer' => 'Small refurbishment<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. no more than one room needs refurbing</span>',
                            'slug' =>   'small-refurbishment<br>e.g.-no-more-than-one-room-needs-refurbing'
                        ],
                        [
                            'answer' => 'Large refurbishment<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. more than one room or multiple jobs throughout property</span>',
                            'slug' =>   'large-refurbishment<br>e.g.-more-than-one-room-or-multiple-jobs-throughout-property'
                        ],
                        [
                            'answer' => 'Full refurbishment<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">e.g. whole house needs refurbishing</span>',
                            'slug' =>   'full-refurbishment<br>e.g.-whole-house-needs-refurbishing'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 7,
                    'question' => 'Describe your restoration / refurbishment project in detail<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Good descriptions attract good tradespeople. Include the project size, specification, fit and finish. What will the space be used for? Do you also need supply and fit of a kitchen or bathroom?</span>',
                    'slug' =>     'describe-your-restoration-/-refurbishment-project-in-detail<br>good-descriptions-attract-good-tradespeople.-include-the-project-size,-specification,-fit-and-finish.-what-will-the-space-be-used-for?-do-you-also-need-supply-and-fit-of-a-kitchen-or-bathroom?',
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
