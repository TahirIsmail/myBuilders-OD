<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class QuestionSeederV2 extends Seeder
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
                    'job_category_id' => 50,
                    'question' => 'What type of extension work are you planning?',
                    'slug'     => 'what-type-of-extension-work-are-you-planning?',
                    'answers' => [
                        [
                            'answer' => 'Property extension',
                            'slug' =>   'property-extension'
                        ],
                        [
                            'answer' => 'Loft conversion',
                            'slug' =>   'loft-conversion'
                        ],
                        [
                            'answer' => 'A porch',
                            'slug' =>   'a-porch',
                        ],
                        [
                            'answer' => 'Outbuilding<br>e.g. a garden room, office or studio',
                            'slug' =>   'outbuilding<br>e.g.-a-garden-room,-office-or-studio',
                        ],
                        [
                            'answer' => 'Internal alterations<br>e.g. creating an open-planned living space',
                            'slug' =>   'internal-alterations<br>e.g.-creating-an-open-planned-living-space',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ],
                ],



                [
                    'job_category_id' => 50,
                    'question' => 'What stage of the project are you currently at?',
                    'slug'     => 'what-stage-of-the-project-are-you-currently-at?',
                    'answers' => [
                        [
                            'answer' => 'I am ready / almost ready for the work to start',
                            'slug' =>   'i-am-ready-/-almost-ready-for-the-work-to-start'
                        ],
                        [
                            'answer' => 'I need help with design or planning before starting the work',
                            'slug' =>   'i-need-help-with-design-or-planning-before-starting-the-work'
                        ],
                        [
                            'answer' => 'I am not ready to build yet, I am still exploring options <br> e.g. considering an extension, looking for ideas and advice',
                            'slug' =>   'i-am-not-ready-to-build-yet,-i-am-still-exploring-options-<br>-e.g.-considering-an-extension,-looking-for-ideas-and-advice',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Describe the help you need with your extension project<br>Good descriptions attract good tradespeople. Give detail on the property purchase situation. Do you require an extension builder to accompany you on a house visit? Include the type of extension and sizes if known.',
                    'slug'     => 'describe-the-help-you-need-with-your-extension-project<br>good-descriptions-attract-good-tradespeople.-give-detail-on-the-property-purchase-situation.-do-you-require-an-extension-builder-to-accompany-you-on-a-house-visit?-include-the-type-of-extension-and-sizes-if-known',

                ],





                [
                    'job_category_id' => 50,
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
                    'job_category_id' => 50,
                    'question' => 'What type of loft conversion do you want?',
                    'slug'     => 'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        [
                            'answer' => 'Loft conversion with structural changes<br>Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.',
                            'slug' =>   'loft-conversion-with-structural-changes<br>requires-a-change-to-the-roof-structure,-e.g.-dormers,-hip-to-gable,-etc.'
                        ],
                        [
                            'answer' => 'Loft conversion (no structural changes)<br> No alterations to the roof shape or structure.',
                            'slug' =>   'Loft-conversion-(no-structural-changes)<br>-No-alterations-to-the-roof-shape-or-structure.'
                        ],
                        [
                            'answer' => 'Loft conversion for storage purposes<br>Creating an accessible space by boarding, decorating etc.',
                            'slug' =>   'Loft-conversion-for-storage-purposes<br>Creating-an-accessible-space-by-boarding,-decorating-etc.'
                        ],
                        [
                            'answer' => 'Fit a skylight<br>Add one or more windows to the roof, e.g. velux windows.',
                            'slug' =>   'Fit-a-skylight<br>Add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug'     => 'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        [
                            'answer' => 'Detached',
                            'slug' =>   'detached'
                        ],
                        [
                            'answer' => 'Semi/detached',
                            'slug' =>   'semi/detached'
                        ],
                        [
                            'answer' => 'Terraced',
                            'slug' =>   'terraced',
                        ],
                        [
                            'answer' => 'End of Terrace',
                            'slug' =>   'end-of-terrace',
                        ],
                        [
                            'answer' => 'Bungalow',
                            'slug' =>   'bungalow',
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other',
                        ]
                    ],
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Do you own the property?',
                    'slug'     => 'do-you-own-the-property?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'I will/purchase in progress',
                            'slug' =>   'i-will/purchase-in-progress'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no',
                        ]

                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'Have you had any plans drawn up?',
                    'slug'     => 'have-you-had-any-plans-drawn-up?',
                    'answers' => [
                        [
                            'answer' => 'Yes I have plans',
                            'slug' =>   'yes-i-have-plans'
                        ],
                        [
                            'answer' => 'Plans are being drawn up',
                            'slug' =>   'plans-are-being-drawn-up'
                        ],
                        [
                            'answer' => 'No plans have been drawn up',
                            'slug' =>   'no-plans-have-been-drawn-up',
                        ]

                    ],
                ],



                [
                    'job_category_id' => 50,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 50,
                    'question' => 'Your builder will probably require plans<br>Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.',
                    'slug'     => 'your-builder-will-probably-require-plans<br>loft-conversions-typically-require-building-regulations,-so-we-recommend-we-talk-to-an-architect-first-to-ensure-your-project-meets-any-relevant-regulatory-requirements.',
                    'answers' => [
                        [
                            'answer' => 'Okay - send my job to architects',
                            'slug' =>   'okay-send-my-job-to-architects'
                        ],
                        [
                            'answer' => 'Continue posting this job without plans',
                            'slug' =>   'continue-posting-this-job-without-plans'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'What do you need doing in your loft?',
                    'slug'     => 'what-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Board out loft<br>Board out and pull down ladder; making loft accessible and suitable for storage.',
                            'slug' =>   'board-out-loft<br>board-out-and-pull-down-ladder;-making-loft-accessible-and-suitable-for-storage.'
                        ],
                        [
                            'answer' => 'Boarding plus additional work<br> Making loft accessible including additional work such as a velux, painting & decorating, fixed staircase etc.',
                            'slug' =>   'boarding-plus-additional-work<br>making-loft-accessible-including-additional-work-such-as-a-velux,-painting-&-decorating,-fixed-staircase-etc.'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 50,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug'     => 'what-extra-work-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Fixed staircase',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Finishing work (plastering, painting & decorating)',
                            'slug' =>   'finishing-work-(plastering,-painting-&-decorating)'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Velux windows',
                            'slug' =>   'velux-windows'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 50,
                    'question' => 'What type of porch job is it?',
                    'slug'     => 'what-type-of-porch-job-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Just a new porch',
                            'slug' =>   'just-a-new-porch'
                        ],
                        [
                            'answer' => 'I need a new porch and some additional works<br>e.g. removal of an old porch, a new porch and a cloakroom',
                            'slug' =>   'i-need-a-new-porch-and-some-additional-works<br>e.g.-removal-of-an-old-porch,-a-new-porch-and-a-cloakroom'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 51,
                    'question' => 'What does your job involve?',
                    'slug'     => 'what-does-your-job-involve?',
                    'answers' => [
                        [
                            'answer' => 'Guttering only',
                            'slug' =>   'guttering-only'
                        ],
                        [
                            'answer' => 'Fascias and/or soffits only',
                            'slug' =>   'fascias-and/or-soffits-only'
                        ],
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What guttering work do you require?',
                    'slug'     => 'what-guttering-work-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair (e.g. leak)',
                            'slug' =>   'repair-(e.g.-leak)'
                        ],
                        [
                            'answer' => 'Cleaning / blockages',
                            'slug' =>   'cleaning-/-blockages'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',

                ],

                [
                    'job_category_id' => 51,
                    'question' => 'How many sides of the property are involved?',
                    'slug'     => 'what-guttering-work-do-you-require?',
                    'answers' => [
                        [
                            'answer' => '1 to 2',
                            'slug' =>   '1-to-2'
                        ],
                        [
                            'answer' => '3 to 4',
                            'slug' =>  '3-to-4'
                        ],
                        [
                            'answer' => 'More than 4',
                            'slug' =>   'more-than-4'
                        ],
                        [
                            'answer' => 'Or a garage / outbuilding',
                            'slug' =>   'Or-a-garage-/-outbuilding'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What are you looking to have done to your fascias & soffits?',
                    'slug'     => 'what-are-you-looking-to-have-done-to-your-fascias-&-soffits?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'Roughly how large is the repair?',
                    'slug'     => 'roughly-how-large-is-the-repair?',
                    'answers' => [
                        [
                            'answer' => 'Single isolated area',
                            'slug' =>   'single-isolated-area'
                        ],
                        [
                            'answer' => 'Multiple areas of the property',
                            'slug' =>   'multiple-areas-of-the-property'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]

                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'What are you looking to have done to your fascias,soffits & gutter?',
                    'slug'     => 'what-are-you-looking-to-have-done-to-your-fascias,soffits-&-gutter?',
                    'answers' => [
                        [
                            'answer' => 'Install / replace',
                            'slug' =>   'install-/-replace'
                        ],
                        [
                            'answer' => 'Repair',
                            'slug' =>   'repair'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 51,
                    'question' => 'How many sides of the property are involved?',
                    'slug'     => 'how-many-sides-of-the-property-are-involved?',
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
                            'answer' => 'Or a garage / outbuilding',
                            'slug' =>   'Or-a-garage-/-outbuilding'
                        ]
                    ],
                ],
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
                            'answer' => 'Panel fence <br> Standard pre-fabricated fence panels slotted between concrete or wooden posts',
                            'slug' =>   'panel-fence-<br>-standard-pre-fabricated-fence-panels-slotted-between-concrete-or-wooden-posts'
                        ],
                        [
                            'answer' => 'Feather edge fence <br> Custom built fence using vertical overlapping wooden pales secured to posts',
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
                    'question' => 'Roughly, how much fencing do you need? <br> One panel is 1.8m (6 ft) wide. Please provide your best estimate.',
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
                            'answer' => 'Made to measure gates <br> e.g. Double gates for a driveway, a bespoke gate, etc.',
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
                            'answer' => 'Made to measure gates <br> e.g. Double gates for a driveway, a bespoke gate, etc.',
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
                            'answer' => 'Minor repair <br> Only one or two fence panels or posts need repairing, a gate needs re-hanging...',
                            'slug' =>   'minor-repair-<br>-only-one-or-two-fence-panels-or-posts-need-repairing,-a-gate-needs-re-hanging...'
                        ],
                        [
                            'answer' => 'Larger repair <br> Multiple fence posts and / or fence panelling needs repairing, gate(s) need restoring...',
                            'slug' =>   'larger-repair-<br>-multiple-fence-posts-and/or-fence-panelling-needs-repairing,-gate(s)-need-restoring...'
                        ],

                    ],
                ],
                [
                    'job_category_id' => 56,
                    'question' =>  'What service do you require?',
                    'slug'     =>  'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'General gardening <br> Lawn mowing, hedge trimming, planting, weeding, etc.',
                            'slug' =>    'general-gardening-<br>-lawn-mowing,-hedge-trimming,-planting,-weeding,-etc.'
                        ],
                        [
                            'answer' => 'Landscaping <br>Changing garden layout, turfing, decking, patios and fencing',
                            'slug' =>   'landscaping-<br>changing-garden-layout,-turfing,-decking,-patios-and-fencing'
                        ],
                        [
                            'answer' => 'Tree Surgery <br> Cutting down and trimming trees',
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
                            'answer' =>  'One-off small gardening job <br> E.g. lawn mowing, planting a shrub',
                            'slug' =>    'one-off-small-gardening-job-<br>-e.g.-lawn-mowing,-planting-a-shrub'
                        ],
                        [
                            'answer' => 'One-off large gardening job <br> E.g. garden clearing, pruning of 5 trees',
                            'slug' =>   'one-off-large-gardening-job-<br>-e.g.-garden-clearing,-pruning-of-5-trees'
                        ],
                        [
                            'answer' => 'Small ongoing garden maintenance <br> E.g. recurrent lawnmowing, periodic weeding',
                            'slug' =>   'small-ongoing-garden-maintenance-<br>-e.g.-recurrent-lawnmowing,-periodic-weeding',
                        ], [
                            'answer' => 'Large ongoing garden maintenance <br> E.g. repeated garden clearing, pruning, very large lawn mowing',
                            'slug' =>   'large-ongoing-garden-maintenance-<br>-e.g.-repeated-garden-clearing,-pruning,-very-large-lawn-mowing'

                        ],
                    ]
                ],
                [

                    'job_category_id' => 56,
                    'question' =>  'Please select the tasks you need completing',
                    'slug'     =>  'which-of-the-following-best-describes-your-gardening-job?',
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
                            'answer' =>  'Garden repairs <br> Fix existing fences, decks, patios, etc.',
                            'slug' =>    'garden-repairs-<br>-fix-existing-fences,-decks,-patios,-etc.'
                        ],
                        [
                            'answer' => 'Add or replace elements <br> Add or replace fences, decks, patios or lawns, etc.',
                            'slug' =>   'add-or-replace-elements-<br>-add-or-replace-fences,-decks,-patios-or-lawns,-etc.'
                        ],
                        [
                            'answer' => 'Garden renovation / landscaping project<br>Make extensive changes, change the garden layout, etc',
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
                            'answer' =>  'Multiple items <br> Fix a combination of deck, patio, fence, etc..',
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
                            'answer' =>  'Minor repair <br> Only one or two fence panels or posts need repairing, a gate needs re-hanging...',
                            'slug' =>    'minor-repair-<br>-only-one-or-two-fence-panels-or-posts-need-repairing,-a-gate-needs-re-hanging...'
                        ],
                        [
                            'answer' => 'Larger repair<br>Multiple fence posts and / or fence panelling needs repairing, gate(s) need restoring..',
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
                            'answer' =>  'Multiple items <br> Add or replace a combination of lawn, deck, patio, etc.',
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
                            'answer' =>  'Small-<br>-Up to 50m² / 500 sq ft',
                            'slug' =>    'small-<b>-up-to-50m²-/-500-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br> 50m² to 100m² / 500 to 1000 sq ft',
                            'slug' =>   'medium-<br>-50m²-to-100m²-/-500-to-1000-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> over 100m² / 1000 sq ft',
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
                            'answer' =>  'Small-<br>-Up to 15m² / 150 sq ft',
                            'slug' =>    'small-<br>-up-to-15m²-/-150-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br> 15m² to 30m² / 150 to 300 sq ft',
                            'slug' =>   'medium-<br>-15m²-to-30m²-/-150-to-300-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> 30m² to 60m² / 300 to 600 sq ft',
                            'slug' =>   'large-<br>-30m²-to-60m²-/-300-to-600-sq-ft'
                        ],
                        [
                            'answer' => 'XLarge <br> over 60m² / 600 sq ft',
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
                            'answer' => 'Panel fence<br>Standard pre-fabricated fence panels slotted between concrete or wooden posts',
                            'slug' =>   'panel-fence<br>standard-pre-fabricated-fence-panels-slotted-between-concrete-or-wooden-posts'
                        ],
                        [
                            'answer' => 'Feather edge fence<br>Custom built fence using vertical overlapping wooden pales secured to posts',
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
                            'answer' =>  'Small-<br>-Up to 15m² / 150 sq ft',
                            'slug' =>    'small-<br>-up-to-15m²-/-150-sq-ft'
                        ],
                        [
                            'answer' => 'Medium <br> 15m² to 30m² / 150 to 300 sq ft',
                            'slug' =>   'medium-<br>-15m²-to-30m²-/-150-to-300-sq-ft'
                        ],
                        [
                            'answer' => 'Large <br> 30m² to 60m² / 300 to 600 sq ft',
                            'slug' =>   'large-<br>-30m²-to-60m²-/-300-to-600-sq-ft'
                        ],
                        [
                            'answer' => 'XLarge <br> over 60m² / 600 sq ft',
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




                [

                    'job_category_id' => 55,
                    'question' =>  'What do you need certified?',
                    'slug'     => 'what-do-you-need-certified?',
                    'answers' => [
                        [
                            'answer' =>  'Boiler',
                            'slug' =>    'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ],
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]

                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'Would you also like the boiler serviced?',
                    'slug'     =>  'would-you-also-like-the-boiler-serviced?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],
                [
                    'job_category_id' => 55,
                    'question' => 'Is this for a domestic or commercial property?',
                    'slug' =>     'is-this-for-a-domestic-or-commercial-property',
                    'answers' => [
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ],
                        [
                            'answer' => 'Domestic property',
                            'slug' =>   'Domestic-property'
                        ]
                    ],
                ],



                [
                    'job_category_id' => 55,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'Would you also like the appliance serviced?',
                    'slug'     =>  'would-you-also-like-the-appliance-serviced?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],
                [

                    'job_category_id' => 55,
                    'question' =>  'What do you need serviced?',
                    'slug'     => 'what-do-you-need-serviced?',
                    'answers' => [
                        [
                            'answer' =>  'Boiler',
                            'slug' =>    'boiler'
                        ],
                        [
                            'answer' => 'Single appliance',
                            'slug' =>   'single-appliance'
                        ],
                        [
                            'answer' => 'Multiple appliances',
                            'slug' =>   'multiple-appliances'
                        ]

                    ]
                ],
                [

                    'job_category_id' => 55,
                    'question' =>  'Would you also like the appliance certified?',
                    'slug'     =>  'would-you-also-like-the-appliance-certified?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'What kind of appliance are you looking to have installed or replaced?',
                    'slug'     =>  'would-you-also-like-the-appliance-certified?',
                    'answers' => [
                        [
                            'answer' =>  'Gas boiler',
                            'slug' =>    'gas-boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ]

                    ]
                ],

                [

                    'job_category_id' => 55,
                    'question' =>  'Do you want to remove a gas boiler?',
                    'slug'     =>  'do-you-want-to-remove-a-gas-boiler?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],

                [

                    'job_category_id' => 55,
                    'question' =>  'What needs to be changed with the pipework?',
                    'slug'     =>  'what-needs-to-be-changed-with-the-pipework?',
                    'answers' => [
                        [
                            'answer' =>  'Disconnect or cap pipework',
                            'slug' =>    'disconnect-or-cap-pipework'
                        ],
                        [
                            'answer' => 'Install or alter pipework',
                            'slug' =>   'install-or-alter-pipework'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'What appliance needs repairing?',
                    'slug'     =>  'what-appliance-needs-repairing?',
                    'answers' => [
                        [
                            'answer' =>  'Boiler',
                            'slug' =>    'boiler'
                        ],
                        [
                            'answer' => 'Gas hob or oven',
                            'slug' =>   'gas-hob-or-oven'
                        ],
                        [
                            'answer' => 'Gas fireplace',
                            'slug' =>   'gas-fireplace'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],


                [

                    'job_category_id' => 55,
                    'question' =>  'Please describe your gas job <br> Good descriptions attract good tradespeople. Mention any appliances involved, including the make and model, and if anything needs to change with the existing pipework.',
                    'slug'     =>  'please-describe-your-gas-job-<br>-good-descriptions-attract-good-tradespeople.-mention-any-appliances-involved,-including-the-make-and-model,-and-if-anything-needs-to-change-with-the-existing-pipework.',

                ],




                [

                    'job_category_id' => 54,
                    'question' =>  'What type of job is it?',
                    'slug'     =>  'what-type-of-job-is-it?',
                    'answers' => [
                        [
                            'answer' =>  'Foundations for a structure to be built <br>E.g. Foundations for extension, new build, outbuilding or shed',
                            'slug' =>    'foundations-for-a-structure-to-be-built-<br>e.g.-foundations-for-extension,-new-build,-outbuilding-or-shed'
                        ],
                        [
                            'answer' => 'Drainage & pipework <br> E.g. digging trenches and laying new pipes or drains',
                            'slug' =>   'drainage-&-pipework-<br>e.g.-digging-trenches-and-laying-new-pipes-or-drains'
                        ],
                        [
                            'answer' => 'General garden earthworks <br> E.g. level lawns, excavate for a pond or pool, dig grave, etc.',
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
                            'slug' =>   'drainage-&-pipework-<br>e.g.-digging-trenches-and-laying-new-pipes-or-drains'
                        ],
                        [
                            'answer' => ' Outbuilding or garage',
                            'slug' =>   'general-garden-earthworks-<br>e.g.-level-lawns,-excavate-for-a-pond-or-pool,-dig-grave,-etc.'
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
                    'question' => 'Describe your earthworks job in detail <br> Good descriptions attract good tradespeople. Describe what what you need doing in detail, including roughly how large an area is involved. How accessible is the site?',
                    'slug' =>     'describe-your-earthworks-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-describe-what-what-you-need-doing-in-detail,-including-roughly-how-large-an-area-is-involved.-how-accessible-is-the-site?',
                ],
                [
                    'job_category_id' => 54,
                    'question' => 'Describe your groundworks job in detail <br> Good descriptions attract good tradespeople. What needs to be done? Provide details of the tasks and size of the area involved. What kind of access is there for machinery.',
                    'slug' =>     'describe-your-groundworks-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-what-needs-to-be-done?-provide-details-of-the-tasks-and-size-of-the-area-involved.-what-kind-of-access-is-there-for-machinery.',
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'Does your job include electrical works?',
                    'slug'     =>  'does-your-job-include-electrical-works?',
                    'answers' => [
                        [
                            'answer' =>  'Yes',
                            'slug' =>    'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What do you need an electricians help with?',
                    'slug'     =>  'what-do-you-need-an-electricians-help-with?',
                    'answers' => [
                        [
                            'answer' =>  'Rewiring',
                            'slug' =>    'rewiring'
                        ],
                        [
                            'answer' => 'Fuseboxes',
                            'slug' =>   'fuseboxes'
                        ],
                        [
                            'answer' => 'Electrical fittings & appliances',
                            'slug' =>   'electrical-fittings-&-appliances'
                        ],
                        [
                            'answer' => 'Safety check or certificate',
                            'slug' =>   'safety-check-or-certificate'
                        ],
                        [
                            'answer' => 'Electrical faults & repairs',
                            'slug' =>   'electrical-faults-&-repairs'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]


                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How much rewiring do you need?',
                    'slug'     =>  'how-much-rewiring-do-you-need?',
                    'answers' => [
                        [
                            'answer' =>  'Part of my property',
                            'slug' =>    'part-of-my-property'
                        ],
                        [
                            'answer' => 'Entire property',
                            'slug' =>   'entire-property'
                        ]


                    ]
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'Do you own the property?',
                    'slug'     =>  'does-your-job-include-electrical-works?',
                    'answers' => [
                        [
                            'answer' =>  'Yes or I will',
                            'slug' =>    'yes-or-1-will'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How big is your property?',
                    'slug'     =>  'how-big-is-your-property?',
                    'answers' => [
                        [
                            'answer' =>  'Flat or 1 to 2 bed house',
                            'slug' =>    'flat-or-1-to-2-bed-house'
                        ],
                        [
                            'answer' => '3 to 4 bed house',
                            'slug' =>   '3-to-4-bed-house'
                        ],
                        [
                            'answer' => '5 bed house',
                            'slug' =>   '5-bed-house'
                        ]

                    ]
                ],


                [
                    'job_category_id' => 58,
                    'question' =>  'What type of fusebox job is it?',
                    'slug'     =>  'what-type-of-fusebox-job-is-it?',
                    'answers' => [
                        [
                            'answer' =>  'Fusebox replacement - in the same location',
                            'slug' =>    'fusebox-replacement-in-the-same-location'
                        ],
                        [
                            'answer' => 'Fusebox replacement, in a different location',
                            'slug' =>   'fusebox-replacement,-in-a-different-location'
                        ],
                        [
                            'answer' => 'Brand new fusebox installation',
                            'slug' =>   'brand-new-fusebox-installation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]

                    ]
                ],



                [
                    'job_category_id' => 58,
                    'question' =>  'Is the fusebox for your main house, an outbuilding or garage?',
                    'slug'     =>  'is-the-fusebox-for-your-main-house,-an-outbuilding-or-garage',
                    'answers' => [
                        [
                            'answer' =>  'Main house',
                            'slug' =>    'main-house'
                        ],
                        [
                            'answer' => 'Outbuilding or garage',
                            'slug' =>   'outbuilding-or-garage'
                        ]


                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What do you want installed?',
                    'slug'     =>  'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' =>  'Electrical fittings',
                            'slug' =>    'electrical-fittings'
                        ],
                        [
                            'answer' => 'Appliances',
                            'slug' =>   'appliances'
                        ],
                        [
                            'answer' => 'Security systems',
                            'slug' =>   'security-systems'
                        ],
                        [
                            'answer' => 'Boilers & heating',
                            'slug' =>   'Boilers & heating'
                        ]
                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What do you want installed?',
                    'slug'     =>  'what-do-you-want-installed',
                    'answers' => [
                        [
                            'answer' =>  'Lights, including outdoors',
                            'slug' =>    'lights-including-outdoors'
                        ],
                        [
                            'answer' => 'Sockets / switches',
                            'slug' =>   'sockets-/-switches'
                        ],
                        [
                            'answer' => 'Extractor fans',
                            'slug' =>   'extractor-fans'
                        ],
                        [
                            'answer' => 'Smoke alarms',
                            'slug' =>   'smoke-alarms'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'How many electrical fittings / appliances do you need installed? <br> Total number of switches, sockets, lights, etc.',
                    'slug'     =>  'how-many-electrical-fittings-/-appliances-do-you-need-installed?-<br>-total-number-of-switches,-sockets,-lights,-etc.',
                    'answers' => [
                        [
                            'answer' =>  '1 to 5',
                            'slug' =>    '1-to-5'
                        ],
                        [
                            'answer' => '6 to 10',
                            'slug' =>   '6-to-10'
                        ],
                        [
                            'answer' => 'More than 10',
                            'slug' =>   'more-than-10'
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'If you are fitting a dual fuel appliance or switching from one energy source to an another (e.g. gas to electricity) you will have to post an additional job under Gas Engineers for the gas work.<br>Jobs involving gas work will be sent to our Gas Safe registered tradespeople.',
                    'slug'     =>  'if-you-are-fitting-a-dual-fuel-appliance-or-switching-from-one-energy-source-to-an-another-(e.g.-gas-to-electricity)-you-will-have-to-post-an-additional-job-under-gas-engineers-for-the-gas-work.<br>jobs-involving-gas-work-will-be-sent-to-our-gas-safe-registered-tradespeople',
                    'answers' => [
                        [
                            'answer' =>  'I understand',
                            'slug' =>    'i-understand'
                        ]
                    ]
                ],

                [

                    'job_category_id' => 58,
                    'question' =>  'What type of security system?',
                    'slug'     =>  'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' =>  'Security alarm system',
                            'slug' =>     'security-alarm-system'
                        ],
                        [
                            'answer' => 'CCTV/Smart camera',
                            'slug' =>   'cctv-smart-camera'
                        ],
                        [
                            'answer' => 'Entry system',
                            'slug' =>   'entry-system'
                        ],
                        [
                            'answer' => 'smoke-alarms',
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
                        ]
                    ]
                ],
                [

                    'job_category_id' => 58,
                    'question' =>  'What service do you require?',
                    'slug'     =>  'what-service-do-you-require',
                    'answers' => [
                        [
                            'answer' =>  'Installation',
                            'slug' =>    'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'Service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],

                [
                    'job_category_id' => 58,
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

                    'job_category_id' => 58,
                    'question' =>  'What type of security camera service do you require?',
                    'slug'     =>  'what-type-of-security-camera-service-do-you-require',
                    'answers' => [
                        [
                            'answer' =>  'Installation',
                            'slug' =>    'installation'
                        ],
                        [
                            'answer' => 'Service repair',
                            'slug' =>   'Service-repair'
                        ],
                        [
                            'answer' => 'Removal',
                            'slug' =>   'removal'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ]
                ],
                [
                    'job_category_id' => 58,
                    'question' => 'What type of security system?',
                    'slug' =>     'what-type-of-security-system',
                    'answers' => [
                        [
                            'answer' => 'Wired',
                            'slug' =>   'wired'
                        ],
                        [
                            'answer' => 'Wireless',
                            'slug' =>   'wireless'
                        ],
                        [
                            'answer' => 'I am not sure',
                            'slug' =>   'i-am-not-sure'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 58,
                    'question' => 'Have you purchased the system already?',
                    'slug' =>     'have-you-purchased-the-system-already',
                    'answers' => [
                        [
                            'answer' => 'Already purchased, installation only',
                            'slug' =>   'already-purchased-installation-only'
                        ],
                        [
                            'answer' => 'I know what I want, need the installer to buy',
                            'slug' =>   'i-know-what-i-want-need-the-installer-to-buy'
                        ],
                        [
                            'answer' => 'No, I need help deciding',
                            'slug' =>   'no-i-need-help-deciding'
                        ]
                    ],
                ],
                [
                    'job_category_id' => 58,
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
                    'job_category_id' => 58,
                    'question' => 'Describe your security system job in detail <br> Good descriptions attract good tradespeople. Add as much detail as you can. If you know the make and model of the security system include that. Describe the property and how the security system is fitted.',
                    'slug' =>     'describe-your-security-system-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-make-and-model-of-the-security-system-include-that.-describe-the-property-and-how-the-security-system-is-fitted.',

                ],
                [
                    'job_category_id' => 60,
                    'question' => 'What type of insulation do you want?',
                    'slug' =>     'what-type-of-insulation-do-you-want',
                    'answers' => [
                        [
                            'answer' => 'Loft / roof insulation',
                            'slug' =>   'loft-roof-insulation'
                        ],
                        [
                            'answer' => 'Wall insulation',
                            'slug' =>   'wall-insulation'
                        ],
                        [
                            'answer' => 'Floor insulation',
                            'slug' =>   'floor-insulation'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ]
                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'How many walls need insulating?',
                    'slug' =>     'how-many-walls-need-insulating?',
                    'answers' => [
                        [
                            'answer' => '1 wall',
                            'slug' =>   'loft-roof-insulation'
                        ],
                        [
                            'answer' => 'Several walls',
                            'slug' =>   'wall-insulation'
                        ],
                        [
                            'answer' => ' Whole house',
                            'slug' =>   'floor-insulation'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 60,
                    'question' => 'How many rooms need insulating?',
                    'slug' =>     'how-many-rooms-need-insulating',
                    'answers' => [
                        [
                            'answer' => '1 to 2 rooms',
                            'slug' =>   '1-to-2-rooms'
                        ],
                        [
                            'answer' => '3 to 4 rooms',
                            'slug' =>   '3-to-4-rooms'
                        ],
                        [
                            'answer' => 'More than 5 rooms',
                            'slug' =>   'More-than-5-rooms'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 61,
                    'question' => 'What type of kitchen fitting service do you require?',
                    'slug' =>     'what-type-of-kitchen-fitting-service-do-you-require',
                    'answers' => [
                        [
                            'answer' => 'New kitchen installation',
                            'slug' =>    'new-kitchen-installation'
                        ],
                        [
                            'answer' => 'Worktop installation',
                            'slug' =>   'worktop-installation'
                        ],
                        [
                            'answer' => 'Cabinet door refurbishment / replacement',
                            'slug' =>   'cabinet-door-refurbishment-/-replacement'
                        ],
                        [
                            'answer' => 'Fit appliance (sink, oven, dishwasher, etc.)',
                            'slug' =>   'fit-appliance-sink-oven-dishwasher-etc'
                        ],
                        [
                            'answer' => 'Minor repair',
                            'slug' =>   'minor-repair'
                        ],
                        [
                            'answer' => 'Several of the above, or other',
                            'slug' =>   'several-of-the-above,-or-other'
                        ]


                    ],
                ],







                [
                    'job_category_id' => 61,
                    'question' => 'How big is your kitchen project?',
                    'slug' =>     'how-big-is-your-kitchen-project?',
                    'answers' => [
                        [
                            'answer' => 'Extensive kitchen refurb <br> Including new tiling, lighting, flooring, or plumbing',
                            'slug' =>   'extensive-kitchen-refurb-<br>-including-new-tiling,-lighting,-flooring,-or-plumbing'
                        ],
                        [
                            'answer' => 'Standard kitchen refit <br> Upgrading units, worktops, sink without major layout changes',
                            'slug' =>   'standard-kitchen-refit-<br>-upgrading-units,-worktops,-sink-without-major-layout-changes'
                        ],
                        [
                            'answer' => 'other',
                            'slug' =>   'other'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 61,
                    'question' => 'Have you purchased a kitchen already?',
                    'slug' =>     'have-you-purchased-a-kitchen-already?',
                    'answers' => [
                        [
                            'answer' => 'Yes, purchased everything already',
                            'slug' =>  'yes-purchased-everything-already'
                        ],
                        [
                            'answer' => 'No, nothing purchased yet',
                            'slug' =>   'no,-nothing-purchased-yet'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'Do you require any structural work (e.g. removing walls)?',
                    'slug' =>     'do-you-require-any-structural-work-(e.g.-removing-walls)?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>  'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 61,
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
                    'job_category_id' => 61,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'What worktop material would you like?',
                    'slug' =>     'what-worktop-material-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Natural stone <br> e.g. granite or marble',
                            'slug' =>   'natural-stone-<br>-e.g.-granite-or-marble'
                        ],
                        [
                            'answer' => 'Composite <br> e.g. quartz or corian',
                            'slug' =>   'composite-<br>-e.g.-quartz-or-corian'
                        ],
                        [
                            'answer' => 'Solid wood <br>e.g. oak, walnut, beech, bamboo',
                            'slug' =>   'solid-wood-<br>-e.g.-oak-walnut-beech-bamboo'
                        ],
                        [
                            'answer' => 'Laminate <br> e.g. wood, stone effect',
                            'slug' =>   'laminate-<br>-e.g.-wood,-stone-effect'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],
                        [
                            'answer' => 'Not sure, need help deciding',
                            'slug' =>   'not-sure,-need-help-deciding'
                        ],
                    ],
                ],


                [
                    'job_category_id' => 61,
                    'question' => 'What type of appliance do you require fitting?',
                    'slug' =>     'what-worktop-material-would-you-like?',
                    'answers' => [
                        [
                            'answer' => 'Gas / dual-fuel cooker / oven',
                            'slug' =>   'gas-/-dual-fuel-cooker-/-oven'
                        ],
                        [
                            'answer' => 'Electric cooker / oven',
                            'slug' =>   'composite-<br>-e.g.-quartz-or-corian'
                        ],
                        [
                            'answer' => 'Washing machine',
                            'slug' =>   'washing-machine'
                        ],
                        [
                            'answer' => 'Dishwasher',
                            'slug' =>   'dishwasher'
                        ],
                        [
                            'answer' => 'Sink',
                            'slug' =>   'sink'
                        ],
                        [
                            'answer' => 'Other',
                            'slug' =>   'other'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 61,
                    'question' => 'Describe your kitchen fitting job in detail <br> Good descriptions attract good tradespeople. Include if you need design, supply and fit or fit only. Describe the size and shape of the kitchen, or number of units required, along with any additional work required, i.e. plastering, tiling, electrics, etc.',
                    'slug' =>     'describe-your-kitchen-fitting-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-include-if-you-need-design,-supply-and-fit-or-fit-only.-describe-the-size-and-shape-of-the-kitchen,-or-number-of-units-required,-along-with-any-additional-work-required,-i.e.-plastering,-tiling,-electrics,-etc.',
                ],


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
                                'answer' => 'Other (e.g. locked out)',
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
                    'question' => 'Describe your locksmith job in detail <br> Good descriptions attract good tradespeople. Add as much detail as you can. If you know the type of lock include that. Also add the type of door or window it’s fitted to.',
                    'slug' =>     'describe-your-locksmith-job-in-detail-<br>-good-descriptions-attract-good-tradespeople.-add-as-much-detail-as-you-can.-if-you-know-the-type-of-lock-include-that.-also-add-the-type-of-door-or-window-it’s-fitted-to.',
                ],









                [
                    'job_category_id' => 64,
                    'question' => 'What type of loft conversion do you want?',
                    'slug' =>     'what-type-of-loft-conversion-do-you-want?',
                    'answers' => [
                        
                            [
                                'answer' => 'Loft conversion with structural changes<br>Requires a change to the roof structure, e.g. dormers, hip-to-gable, etc.',
                                'slug' =>   'loft-conversion-with-structural-changes<br>requires-a-change-to-the-roof-structure,-e.g.-dormers,-hip-to-gable,-etc.',
                            ],
                            [
                                'answer' => 'Loft conversion (no structural changes)<br>No alterations to the roof shape or structure.',
                                'slug' =>   'loft-conversion-(no-structural-changes)<br>no-alterations-to-the-roof-shape-or-structure.'
                            ],
                            [
                                'answer' => 'Loft conversion for storage purposes<br>Creating an accessible space by boarding, decorating etc.',
                                'slug' =>   'loft-conversion-for-storage-purposes<br>creating-an-accessible-space-by-boarding-decorating-etc.'
                            ],
                            [
                                'answer' => 'Fit a skylight<br>Add one or more windows to the roof, e.g. velux windows.',
                                'slug' =>   'fit-a-skylight<br>add-one-or-more-windows-to-the-roof,-e.g.-velux-windows.'
                            ],

                        
                    ],
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'What type of house is the loft conversion for?',
                    'slug' =>     'what-type-of-house-is-the-loft-conversion-for?',
                    'answers' => [
                        
                            [
                                'answer' => 'Detached',
                                'slug' =>   'Detached',
                            ],
                            [
                                'answer' => 'Semi detached',
                                'slug' =>   'semi-detached'
                            ],
                            [
                                'answer' => 'Terraced',
                                'slug' =>   'terraced'
                            ],
                            [
                                'answer' => 'End of Terrace',
                                'slug' =>   'end-of-terrace'
                            ],
                            [
                                'answer' => 'Bungalow',
                                'slug' =>   'bungalow'
                            ],
                            [
                                'answer' => 'Other',
                                'slug' =>   'other'
                            ],
                        
                    ],
                ],



                [
                    'job_category_id' => 64,
                    'question' => 'Do you own the property?',
                    'slug' =>     'do-you-own-the-property?',
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
                            'answer' => 'I will - purchase in progress',
                            'slug' =>   'i-will-purchase-in-progress'
                        ]


                    ],
                ],

                [
                    'job_category_id' => 64,
                    'question' => 'Have you had any plans drawn up?',
                    'slug' =>     'have-you-had-any-plans-drawn-up?',
                    'answers' => [
                        [
                            'answer' => 'Yes I have plans',
                            'slug' =>   'yes-i-have-plans'
                        ],
                        [
                            'answer' => 'Plans are being drawn up',
                            'slug' =>   'plans-are-being-drawn-up'
                        ],
                        [
                            'answer' => 'No plans have been drawn up',
                            'slug' =>   'no-plans-have-been-drawn-up'
                        ]


                    ],
                ],
                [
                    'job_category_id' => 64,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'Your builder will probably require plans <br> Loft conversions typically require building regulations, so we recommend we talk to an architect first to ensure your project meets any relevant regulatory requirements.',
                    'slug' =>     'your-builder-will-probably-require-plans <br> loft-conversions-typically-require-building-regulations,-so-we-recommend-we-talk-to-an-architect-first-to-ensure-your-project-meets-any-relevant-regulatory-requirements.',
                    'answers' => [
                        [
                            'answer' => 'Okay, send my job to architects',
                            'slug' =>   'okay,-send-my-job-to-architects'
                        ],
                        [
                            'answer' => 'Continue posting this job without plans',
                            'slug' =>   'continue-posting-this-job-without-plans'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 64,
                    'question' => 'What extra work do you need doing in your loft?',
                    'slug'     => 'what-extra-work-do-you-need-doing-in-your-loft?',
                    'answers' => [
                        [
                            'answer' => 'Fixed staircase',
                            'slug' =>   'fixed-staircase'
                        ],
                        [
                            'answer' => 'Finishing work (plastering, painting & decorating)',
                            'slug' =>   'finishing-work-(plastering,-painting-&-decorating)'
                        ],
                        [
                            'answer' => 'Electrics',
                            'slug' =>   'electrics'
                        ],
                        [
                            'answer' => 'Velux windows',
                            'slug' =>   'velux-windows'
                        ]
                    ],
                ],




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
                    'question' => 'Describe your new build project in detail<br>Good descriptions attract good tradespeople. How many flats/houses are planned, and how many bedrooms? Are you starting the project from the beginning or has some work been done? Do you also require project management?',
                    'slug'     => 'describe-your-new-build-project-in-detail<br>good-descriptions-attract-good-tradespeople.-how-many-flats/houses-are-planned,-and-how-many-bedrooms?-are-you-starting-the-project-from-the-beginning-or-has-some-work-been-done?-do-you-also-require-project-management?',

                ],



                [
                    'job_category_id' => 66,
                    'question' => 'Are the painting / decorating works inside or outside the house?',
                    'slug'     => 'are-the-painting-/-decorating-works-inside-or-outside-the-house?',
                    'answers' => [
                        [
                            'answer' => 'Inside',
                            'slug' =>   'inside'
                        ],
                        [
                            'answer' => 'Outside',
                            'slug' =>   'outside'
                        ],
                        [
                            'answer' => 'Both',
                            'slug' =>   'both'
                        ],
                    ],
                ],


                [
                    'job_category_id' => 66,
                    'question' => 'Roughly, how much decorating work is it?',
                    'slug'     => 'roughly,-how-much-decorating-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Part of a room',
                            'slug' =>   'inside'
                        ],
                        [
                            'answer' => '1 room',
                            'slug' =>   '1-room'
                        ],
                        [
                            'answer' => '2 rooms',
                            'slug' =>   '2-room'
                        ],

                        [
                            'answer' => '3 rooms',
                            'slug' =>   '3-room'
                        ],
                        [
                            'answer' => '4 rooms',
                            'slug' =>   '4-room'
                        ],
                        [
                            'answer' => '5+ rooms',
                            'slug' =>   '5+-room'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'Does this include your hallway, stairs and landing?',
                    'slug'     => 'does-this-include-your-hallway-stairs-and-landing?',
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
                    'job_category_id' => 66,
                    'question' => 'What do you want painted / decorated?',
                    'slug'     => 'what-do-you-want-painted-/-decorated?',
                    'answers' => [
                        [
                            'answer' => 'Exterior walls',
                            'slug' =>   'exterior-walls'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Fascias & soffits',
                            'slug' =>   'fascias-&-soffits'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'How many walls need painting?',
                    'slug'     => 'how-many-walls-need-painting?',
                    'answers' => [
                        [
                            'answer' => 'Only a small area',
                            'slug' =>   'only-a-small-area'
                        ],
                        [
                            'answer' => '1 wall',
                            'slug' =>   '1-wall'
                        ],
                        [
                            'answer' => '2-3 walls',
                            'slug' =>   '2-3-walls'
                        ],
                        [
                            'answer' => 'The whole house',
                            'slug' =>   'the-whole-house'
                        ],
                        [
                            'answer' => 'Multiple buildings / properties',
                            'slug' =>   'multiple-buildings-/-properties'
                        ],

                    ],
                ],




                [
                    'job_category_id' => 66,
                    'question' => 'How many windows / doors need painting?',
                    'slug'     => 'how-many-windows-/-doors-need-painting?',
                    'answers' => [
                        [
                            'answer' => '1',
                            'slug' =>   '1'
                        ],
                        [
                            'answer' => '2 to 5',
                            'slug' =>   '2-to-5'
                        ],
                        [
                            'answer' => 'more than 6',
                            'slug' =>   'more-than-6'
                        ],
                    ],
                ],



                [
                    'job_category_id' => 66,
                    'question' => 'How extensive is your fascias & soffits painting job?',
                    'slug'     => 'how-extensive-is-your-fascias-&-soffits-painting-job?',
                    'answers' => [
                        [
                            'answer' => 'Small<br>E.g. only 1 side of the house',
                            'slug' =>  'small<br>e.g.-only-1-side-of-the-house'
                        ],
                        [
                            'answer' => 'Medium<br>E.g. 2-3 sides of the house',
                            'slug' =>   'medium<br>e.g.-2-3-sides-of-the-house'
                        ],
                        [
                            'answer' => 'Large<br>E.g. all fascias and/or soffits',
                            'slug' =>   'large<br>e.g.-all-fascias-and/or-soffits'
                        ],
                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'How extensive is your painting job?',
                    'slug'     => 'how-extensive-is-your-painting-job?',
                    'answers' => [
                        [
                            'answer' => 'Small decoration job<br>E.g. touch up paint on 1 wall and re-paint 1 window',
                            'slug' =>   'small-decoration-job<br>e.g.-touch-up-paint-on-1-wall-and-re-paint-1-window'
                        ],
                        [
                            'answer' => 'Medium decoration job<br>E.g. paint fence, 2 windows and 1 fascia',
                            'slug' =>   'medium-decoration-job<br>e.g.-paint-fence-2-windows-and-1-fascia'
                        ],
                        [
                            'answer' => 'Large decoration job<br>E.g. paint 2 walls, all windows and fascias',
                            'slug' =>   'large-decoration-job<br>e.g.-paint-2-walls-all-windows-and-fascias'
                        ],

                        [
                            'answer' => 'Very large decoration job<br>E.g. all external wall and all windows and doors',
                            'slug' =>   'very-large-decoration-job<br>e.g.-all-external-wall-and-all-windows-and-doors'
                        ],
                    ],
                ],




                [
                    'job_category_id' => 66,
                    'question' => 'Internal painting / decorating<br>Roughly, how much decorating work is it?',
                    'slug'     => 'internal-painting-/-decorating<br>roughly,-how-much-decorating-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'Part of a room',
                            'slug' =>   'part-of-a-room'
                        ],
                        [
                            'answer' => '1 room',
                            'slug' =>   '1-room'
                        ],
                        [
                            'answer' => '2 room',
                            'slug' =>   '2-room'
                        ],
                        [
                            'answer' => '3 room',
                            'slug' =>   '3-room'
                        ],
                        [
                            'answer' => '4 room',
                            'slug' =>   '4-room'
                        ],
                        [
                            'answer' => 'More than 5 room',
                            'slug' =>   'more-than-5-room'
                        ],

                    ],
                ],

                [
                    'job_category_id' => 66,
                    'question' => 'External painting<br>What painting / decorating do you need?',
                    'slug'     => 'external-painting<br>what-painting-/-decorating-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Exterior walls',
                            'slug' =>   'exterior-walls'
                        ],
                        [
                            'answer' => 'Windows & doors',
                            'slug' =>   'windows-&-doors'
                        ],
                        [
                            'answer' => 'Fascias & soffits',
                            'slug' =>   'fascias-&-soffits'
                        ],
                        [
                            'answer' => 'Other or several of the above',
                            'slug' =>   'other-or-several-of-the-above'
                        ],


                    ],
                ],

                [
                    'job_category_id' => 67,
                    'question' => 'What service do you require?',
                    'slug'     => 'what-service-do-you-require?',
                    'answers' => [
                        [
                            'answer' => 'Plastering (indoors)',
                            'slug' =>   'plastering-(indoors)'
                        ],
                        [
                            'answer' => 'Rendering (outdoors)',
                            'slug' =>   'rendering-(outdoors)'
                        ]

                    ],
                ],

                [
                    'job_category_id' => 67,
                    'question' => 'What type of plastering do you need?',
                    'slug'     => 'what-type-of-plastering-do-you-need?',
                    'answers' => [
                        [
                            'answer' => 'Skim only<br>Plastering over existing plaster or over plasterboard',
                            'slug' =>   'skim-only<br>plastering-over-existing-plaster-or-over-plasterboard'
                        ],
                        [
                            'answer' => 'Plasterboard and skim<br>For new stud walls and ceilings',
                            'slug' =>   'plasterboard-and-skim<br>for-new-stud-walls-and-ceilings'
                        ],
                        [
                            'answer' => 'Other or I do not know',
                            'slug' =>   'other-or-i-do-not-know'
                        ]

                    ],
                ],



                [
                    'job_category_id' => 67,
                    'question' => 'Roughly, how much work is it?',
                    'slug'     => 'roughly,-how-much-work-is-it?',
                    'answers' => [
                        [
                            'answer' => 'A small area (less than one full wall or ceiling)',
                            'slug' =>   'a-small-area-(less-than-one-full-wall-or-ceiling)'
                        ],
                        [
                            'answer' => 'Up to 5 walls and / or ceilings',
                            'slug' =>   'up-to-5-walls-and/or-ceilings'
                        ],
                        [
                            'answer' => '6-to-10 walls and / or ceilings',
                            'slug' =>   '6-to-10-walls-and-/-or-ceilings'
                        ],
                        [
                            'answer' => '11-to-20 walls and / or ceilings',
                            'slug' =>   '11-to-20-walls-and-/-or-ceilings'
                        ],
                        [
                            'answer' => 'More than 20 walls and / or ceilings',
                            'slug' =>   'more-than-20-walls-and-/-or-ceilings'
                        ]

                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Is this area your hallway, stairs and landing?',
                    'slug'     => 'is-this-area-your-hallway,-stairs-and-landing?',
                    'answers' => [
                        [
                            'answer' => 'Yes',
                            'slug' =>   'yes'
                        ],
                        [
                            'answer' => 'No',
                            'slug' =>   'no'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Add a description to your job',
                    'slug' =>     'add-a-description-to-your-job',
                ],

                [
                    'job_category_id' => 67,
                    'question' => 'What do you need rendered?',
                    'slug'     => 'is-this-area-your-hallway,-stairs-and-landing?',
                    'answers' => [
                        [
                            'answer' => 'Exterior of house',
                            'slug' =>   'exterior-of-house'
                        ],
                        [
                            'answer' => 'Garden wall(s)',
                            'slug' =>   'garden-wall(s)'
                        ]


                    ],
                ],


                [
                    'job_category_id' => 67,
                    'question' => 'Roughly how large is your rendering job?',
                    'slug'     => 'roughly-how-large-is-your-rendering-job?',
                    'answers' => [
                        [
                            'answer' => 'Small area (less than one wall)<br>e.g. a crack or hole in an external wall',
                            'slug' =>   'small-area-(less-than-one-wall)<br>e.g.-a-crack-or-hole-in-an-external-wall'
                        ],
                        [
                            'answer' => '1 to 2 exterior walls',
                            'slug' =>   '1-to-2-exterior-walls'
                        ],
                        [
                            'answer' => '3 to 4 exterior walls',
                            'slug' =>   '3-to-4-exterior-walls'
                        ],
                        [
                            'answer' => 'More than exterior walls',
                            'slug' =>   'more-than-exterior-walls'
                        ]


                    ],
                ],



                [
                    'job_category_id' => 67,
                    'question' => 'Roughly how large is your rendering job?',
                    'slug'     => 'roughly-how-large-is-your-rendering-job?',
                    'answers' => [
                        [
                            'answer' => 'Repair a Small area',
                            'slug' =>   'repair-a-small-area'
                        ],
                        [
                            'answer' => 'Small (up to 10m²)',
                            'slug' =>   'small-(up-to-10m²)'
                        ],
                        [
                            'answer' => 'Medium (10-to-30m²)',
                            'slug' =>   'medium-(10-to-30m²)'
                        ],
                        [
                            'answer' => 'Large (over 30m²)',
                            'slug' =>   'large-(over-30m²)'
                        ]


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
