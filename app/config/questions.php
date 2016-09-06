<?php
return array(
    'digital-readiness' => array(
        'class' => 'sec1',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Digital Readiness',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'How important is business information in your company?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Information from all across the business is proactively gathered on a continual basis and passed to appropriate people',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Key business information is gathered and reviewed at least monthly by the senior leadership ',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Business information is gathered and reviewed quarterly by the senior leadership of the company',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Business information is reviewed every six months',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We don\'t measure business results on a regular basis',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Digital Readiness',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'checkbox',
                        'question'=>'What type of digital contact does your company have with its customers? Select all that apply',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Static web presence with HTML website',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Dynamic web presence with dedicated customer login pages',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Electronic outreach such as email newsletters',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actively managed social media channels (Linkedin, Facebook, YouTube, Twitter etc.)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Dynamic web presence with e-commerce/online shopping',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Online chat and 1-to-1 customer support',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Dedicated mobile / smartphone apps (Android, iOS, Windows etc.)',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Digital Readiness',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following data and analytics tools does your company mainly use to predict customer behaviour?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'We use a standard SQL database with contact information',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We run ad hoc queries on our SQL database',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a datawarehouse solution for analytics',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use real time analytics (SAP HANA, in-memory SQL databases) &amp;/or Hadoop &amp; no-SQL datasets for large Web data',
                                'value'=>7,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Digital Readiness',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'What policies are in place for the use of private technology devices for work (Bring Your Own Device)',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t support private device usage',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tolerate usage, but don\'t monitor or support it',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We limit usage to basic access (email, Web browsing)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We give them full access to core, secured applications',
                                'value'=>7,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Digital Readiness',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'checkbox',
                        'question'=>'What are the primary business challenges that your company is facing in 2015? Select all that apply',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Containing costs across the board',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Maintaining margins versus competitors',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Maintaining and improving quality levels of our product / services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Shortening time to market for new products/services',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Understanding and predicting our customers\' needs',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Adapting to a tough macroeconomic environment',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Expand into other countries or market segments',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Gaining market share',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Achieving a double digit revenue growth',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Acquiring and retaining customers',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC defines Digital Transformation as the process by which companies drive disruptive changes in their markets by leveraging digital competencies, resulting in better products and customer experiences. Being effective in communicating and understanding customers, and empowering employees to work smart are all signs of Digital Readiness. ',
                    'image'=>'img/techfit_icons_Q-A5.png'
                )
            )
        )
    ),
    'infrastructure-foundation' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'How would you best describe your server infrastructure?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'We have mostly standalone tower machines',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have consolidated most servers in cabinets or datacentres',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'The majority of our servers are x86 rack servers and are virtualized',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use complex server systems such as blade servers, UNIX servers and Linux',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a fully virtualized pool of servers with self-service capability',
                                'value'=>6,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC estimates that ~40% of all new servers sold in Europe in 2015 were virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your data storage architecture?',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'File servers and locally attached storage',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Shared storage supported by small NAS devices',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'High performance NAS / iSCSI',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a SAN environment for high-end applications',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have several hundreds of terabytes in unified storage environments',
                                'value'=>7,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'What facilities are used to host the majority of your hardware equipment?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'No dedicated facility',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Server closet in office environment',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Server room in office environment',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Server room with restricted access and cooling systems',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'One or more dedicated datacentre buildings',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'How future oriented is your technology infrastructure?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'It\'s already inadequate for our current needs and we\'re looking to expand.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It\'s adequate for our current needs, but will struggle to cope with any significant growth.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It\'s more than adequate for our current needs and has plenty of spare capacity.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It\'s adequate for our current needs and has in-built flexibility so that it can grow with us.',
                                'value'=>7,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'50% of your peers feel their infrastructure wouldn\'t be able to scale if demand was to grow. This is worrying: next generation applications such as rich e-commerce or Data Analytics are by nature less predictable. ',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            ),
            'page5' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e5'=>array(
                        'type'=>'checkbox',
                        'question'=>'How do you feel about IT investments in back-end hardware and software? Select all that apply',
                        'name'=>'e5',
                        'script'=>'
                            jQuery.each([$(\'#0-e5\'),$(\'#1-e5\'),$(\'#2-e5\'),$(\'#3-e5\'),$(\'#4-e5\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'They are expensive for our business',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'They are necessary to keep us running',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'If done right, they increase productivity',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'They should grow proportionally to company expansion',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'They are necessary to increase sales and acquire new customers',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Infrastructure Foundation',
                'questions' => array(
                    'e6'=>array(
                        'type'=>'checkbox',
                        'question'=>'What kind of workload do your largest servers support? Select all that apply',
                        'name'=>'e6',
                        'script'=>'
                            jQuery.each([$(\'#0-e6\'),$(\'#1-e6\'),$(\'#2-e6\'),$(\'#3-e6\'),$(\'#4-e6\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'File server and active directory management',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'File server and standard office applications such as Email, collaboration, Web front-end',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Static workloads such as machine outputs, data entry back-end',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Enterprise workloads with mid-availability (e.g. internal ERP systems)',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mission critical workloads with high-availability (e.g. billing systems, online store etc.)',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Strong foundation are a combination of high-control mission critical environments and flexible cloud spaces. IDC believes standardized IT components, solid data and application management and strong outward connectivity are paramount to enable hybrid cloud scenarios.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            )
        )
    ),
    'it-business-synergy' => array(
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'IT-Business Synergy',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'button',
                        'question'=>'How important are digital archives for you in achieving legal and regulatory compliance?',
                        'name'=>'c1',
                        'options'=>array(
                            array(
                                'label'=>'Not at all important',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Slightly important',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moderately important (i.e. moderate contributor)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very important (i.e. important contributor)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Critically important',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'IT-Business Synergy',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'How would you best describe your IT staffing situation?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t have dedicated IT staff',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'An IT person or team is responsible for all technology including PC, printer, server etc. .',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT staff are responsible for front office and back-office technology.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT staff have individual and well-defined responsibilities (e.g. client devices, server, storage, network etc.)',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'IT-Business Synergy',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'What is your organization`s TOP concern when it comes to IT as it supports your business?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Ability to change in a timely manner',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cost',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ease of Use',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Performance',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Reliability and uptime',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Security',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'IT-Business Synergy',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'In your opinion, how long could your company remain functional if all back-end IT systems were to go down?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Less than 30 minutes',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Two hours at best',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Four hours at best',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Eight hours at best',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Twenty-four hours at best',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'IT-Business Synergy',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'What percentage of your dedicated IT budget is allocated to cloud solutions in 2016?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'0% (No budget for cloud)',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1-2%',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'3-5%',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'6-9%',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10%-24%',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'25%-49%',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'50% or more',
                                'value'=>7,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Having good visibility on cloud initiatives is an indicator of healthy business - IT relationship. With virtually all of the business operations relying on IT, advanced, proactive organizations are those were synergy is embraced - and protected.  ',
                    'image'=>'img/techfit_icons_Q-C5.png'
                )
            )
        )
    )
);