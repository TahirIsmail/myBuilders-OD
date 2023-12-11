<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use Illuminate\Support\Facades\DB;


class SeederAssessmentKitchen extends Seeder
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
                    'job_category_id' => 61,
                    'question' => 'We have got lots of jobs waiting for you!<br> But first, please complete this short evaluation, it will only take a couple of minutes.',
                    'slug'     => 'we-have-got-lots-of-jobs-waiting-for-you!<br>but-first,-please-complete-this-short-evaluation,-it-will-only-take-a-couple-of-minutes.',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\intro.png',

                ],



                [
                    'job_category_id' => 61,
                    'question' =>   'What is the best way to fix a rattling washing machine?',
                    'slug'     =>   'what-is-the-best-way-to-fix-a-rattling-washing-machine?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\washing_machine.jpg',

                    'answers' => [
                        [
                            'answer' => 'Adjust its legs evenly',
                            'slug' =>   'adjust-its-legs-evenly'
                        ],
                        [
                            'answer' => 'Tilt it backwards slightly',
                            'slug' =>   'tilt-it-backwards-slightly'
                        ],
                        [
                            'answer' => 'Tilt it forward slightly',
                            'slug' =>   'tilt-it-forward-slightly'
                        ],
                        [
                            'answer' => 'Wrap the legs in gaffer tape',
                            'slug' =>   'wrap-the-legs-in-gaffer-tape'
                        ],
                        
                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' =>   'Which parts of kitchen refit projects are likely to require building regulations approval?<br><span style="color:rgb(121, 144, 174);font-size: 0.875em;line-height: 1.5em; font-weight: normal;">Select ALL that apply</span>',
                    'slug'     =>   'which-parts-of-kitchen-refit-projects-are-likely-to-require-building-regulations-approval?select-all-that-apply',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\Bregs.jpg.jpg',

                    'answers' => [
                        [
                            'answer' => 'Drainage',
                            'slug' =>  'drainage'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Flooring',
                            'slug' =>   'flooring'
                        ],
                        [
                            'answer' => 'Tanking',
                            'slug' =>   'tanking'
                        ],
                        
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' =>   'The working triangle refers to the space between…',
                    'slug'     =>   'the-working-triangle-refers-to-the-space-between…',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\Bregs.jpg.jpg',

                    'answers' => [
                        [
                            'answer' => 'The hob, the sink and the fridge',
                            'slug' =>   'the-hob,-the-sink-and-the-fridge'
                        ],
                        [
                            'answer' => 'The oven, the fridge and the sink',
                            'slug' =>   'the-oven,-the-fridge-and-the-sink'
                        ],
                        [
                            'answer' => 'The sink, the oven and the hob',
                            'slug' =>   'the-sink,-the-oven-and-the-hob'
                        ],
                        [
                            'answer' => 'The hob, the oven and the fridge',
                            'slug' =>   'the-hob,-the-oven-and-the-fridge'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'According to building regulations, what is the minimum value of X?',
                    'slug'     =>   'according-to-building-regulations,-what-is-the-minimum-value-of-x?',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\x.png',

                    'answers' => [
                        [
                            'answer' => '450mm',
                            'slug' =>  '450mm'
                        ],
                        [
                            'answer' => '650mm',
                            'slug' =>   '650mm'
                        ],
                        [
                            'answer' => '850mm',
                            'slug' =>   '850mm'
                        ],
                        [
                            'answer' => 'This distance is not covered by building regulations',
                            'slug' =>   'this-distance-is-not-covered-by-building-regulations'
                        ],
                        
                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' =>   'Ovens usually have to be fitted with a gap between the oven and the back wall the size of which is determined by…',
                    'slug'     =>   'ovens-usually-have-to-be-fitted-with-a-gap-between-the-oven-and-the-back-wall-the-size-of-which-is-determined-by...',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\oven.jpg',

                    'answers' => [
                        [
                            'answer' => 'Building regulations',
                            'slug' => 'building-regulations'
                        ],
                        [
                            'answer' => 'The manufacturers instructions',
                            'slug' =>  'the-manufacturers-instructions'
                        ],
                        [
                            'answer' => 'Common sense',
                            'slug' =>  'common-sense'
                        ],
                        [
                            'answer' => 'None of the above',
                            'slug' =>   'none-of-the-above'
                        ],
                        
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' =>   'According to building regulations, what should the minimum distance X be?',
                    'slug'     =>   'according-to-building-regulations-what-should-the-minimum-distance-x-be',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\distance_.png',

                    'answers' => [
                        [
                            'answer' => '250mm',
                            'slug' =>  '250mm'
                        ],
                        [
                            'answer' => '400mm',
                            'slug' =>   '400mm'
                        ],
                        [
                            'answer' => '550mm',
                            'slug' =>   '550mm'
                        ],
                        [
                            'answer' => 'This distance is not covered by building regulations, you should use your best judgement',
                            'slug' =>   'this-distance-is-not-covered-by-building-regulations-you-should-use-your-best-judgement'
                        ],
                        
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' =>   'When boxing in a boiler, you should leave a 1" air gap between box wall and boiler case.',
                    'slug'     =>   'when-boxing-in-a-boiler-you-should-leave-a-1-inch-air-gap-between-box-wall-and-boiler-case',
                   

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>  'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ],
                        
                        
                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' =>   'Fitting a kitchen appliance in a corner is something you would...',
                    'slug'     =>   'fitting-a-kitchen-appliance-in-a-corner-is-something-you-would',
                 

                    'answers' => [
                        [
                            'answer' => 'Strongly advise against',
                            'slug' =>   'strongly-advise-against'
                        ],
                        [
                            'answer' => 'Neither advise against nor recommend',
                            'slug' =>   'neither-advise-against-nor-recommend'
                        ],
                        [
                            'answer' => 'Strongly recommend',
                            'slug' =>   'strongly-recommend'
                        ],
                      
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'When fitting kitchen cabinets, which are the last 2 steps?',
                    'slug'     =>   'when-fitting-kitchen-cabinets-which-are-the-last-2-steps',
                   

                    'answers' => [
                        [
                            'answer' => 'Finding the studs',
                            'slug' =>   'finding-the-studs'
                        ],
                        [
                            'answer' => 'Fixing the units together',
                            'slug' =>   'fixing-the-units-together'
                        ],
                        [
                            'answer' => 'Hanging the units on the wall',
                            'slug' =>   'hanging-the-units-on-the-wall'
                        ],
                        [
                            'answer' => 'Fitting the door panel',
                            'slug' =>   'fitting-the-door-panel'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'Select a way of avoiding driving the screws too deep in the cabinet panels.',
                    'slug'     =>   'select-a-way-of-avoiding-driving-the-screws-too-deep-in-the-cabinet-panels',
                   

                    'answers' => [
                        [
                            'answer' => 'Countersinking them',
                            'slug' =>   'countersinking-them'
                        ],
                        [
                            'answer' => 'Driving the screws half by half',
                            'slug' =>   'driving-the-screws-half-by-half'
                        ],
                        [
                            'answer' => 'Driving the screws by hand',
                            'slug' =>  'driving-the-screws-by-hand'
                        ],
                        [
                            'answer' => 'Coating the screws in sealant',
                            'slug' =>  'coating-the-screws-in-sealant'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'Which of these would you fit first?',
                    'slug'     =>  'which-of-these-would-you-fit-first',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\kitchenUnits2.jpg',

                    'answers' => [
                        [
                            'answer' => 'Wall units',
                            'slug' =>  'wall-units'
                        ],
                        [
                            'answer' => 'Floor units',
                            'slug' =>   'floor-units'
                        ],
                        [
                            'answer' => 'Tall kitchen appliances',
                            'slug' =>   'Tall kitchen appliances'
                        ],
                        [
                            'answer' => 'Worktop',
                            'slug' =>   'worktop'
                        ],
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'You need to add 2 extra fixings when fitting wall units on a plasterboard stud wall.',
                    'slug'     =>   'you-need-to-add-2-extra-fixings-when-fitting-wall-units-on-a-plasterboard-stud-wall',
                    'image_path' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\kitchenUnits.jpg',

                    'answers' => [
                        [
                            'answer' => 'True',
                            'slug' =>  'true'
                        ],
                        [
                            'answer' => 'False',
                            'slug' =>   'false'
                        ],
                        
                        
                    ],
                ],
                [
                    'job_category_id' => 61,
                    'question' =>   'you-need-to-add-2-extra-fixings-when-fitting-wall-units-on-a-plasterboard-stud-wall',
                    'slug'     =>   'what-step-of-the-build-marks-the-difference-between-first-and-second-fix?',
                  

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\fixing1.png',
                            'slug' =>  'fixing1'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\fixing2.png',
                            'slug' =>   'fixing2'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\fixing3.png',
                            'slug' =>  'fixing3'
                        ],
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\fixing4.png',
                            'slug' =>   'fixing4'
                        ],
                        
                        
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' =>   'Tap the unit that would have to be fitted first',
                    'slug'     =>   'tap-the-unit-that-would-have-to-be-fitted-first',
                  

                    'answers' => [
                        [
                            'answer' => 'public\assets\frontend\default\img\mybuilderAssessmentImages\KitcheniImg\images.png',
                            'slug' =>  'images'
                        ],
                        
                        
                        
                    ],
                ],



                [
                    'job_category_id' => 61,
                    'question' =>   'The supplied kitchen is missing a couple of fill strips and the manufacturer can not supply replacements in time to meet the clients deadline. What would be your course of action?',
                    'slug'     =>   'the-supplied-kitchen-is-missing-a-couple-of-fill-strips-and-the-manufacturer-can-not-supply-replacements-in-time-to-meet-the-clients-deadline-what-would-be-your-course-of-action',
                

                    'answers' => [
                        [
                            'answer' => 'Make your own from off cuts',
                            'slug' =>  'make-your-own-from-off-cuts'
                        ],
                        [
                            'answer' => 'Source from somewhere else',
                            'slug' =>   'source-from-somewhere-else'
                        ],
                        [
                            'answer' => 'Delay the fitting until they arrive',
                            'slug' =>   'delay-the-fitting-until-they-arrive'
                        ],
                        [
                            'answer' => 'Discuss with the client and see what they would like to do',
                            'slug' =>   'discuss-with-the-client-and-see-what-they-would-like-to-do'
                        ],
                        
                    ],
                ],
            ];
            foreach ($data as $item) {
                $question = AssessmentQuestion::create([
                    'job_category_id' => $item['job_category_id'],
                    'question' => $item['question'],
                    'slug' => $item['slug'],
                    'image_path' => isset($item['image_path']) ? $item['image_path'] : NULL
                ]);
                if (isset($item['answers'])) {
                    foreach ($item['answers'] as $answer) {
                        AssessmentAnswer::create([
                            'question_id' => $question->id,
                            'answer' => $answer['answer'],
                            'slug' => $answer['slug'],
                            'type' =>  NULL

                        ]);
                    }
                } else {
                    continue;
                }
            }
        });
    }
}
