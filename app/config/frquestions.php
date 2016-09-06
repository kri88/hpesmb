<?php
return array(
    'screeners' => array(
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'Tout d\'abord, quelques questions sur vous et votre entreprise.',
                'questions' => array(
                    's1'=>array(
                        'type'=>'icon',
                        'question'=>'Lequel de ces énoncés décrit le mieux votre rôle au sein de l\'entreprise ?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'ico-it',
                                'label'=>'Vous travaillez au sein du service informatique de votre entreprise ou le dirigez',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-o',
                                'label'=>'Vous ne faites pas partie du service informatique, mais vous avez une influence sur la stratégie informatique',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Une dernière question avant de commencer.',
                'questions' => array(
                    's2'=>array(
                        'type'=>'icon',
                        'question'=>'Quelle est la taille de l\'entreprise pour laquelle vous travaillez ou que vous dirigez ?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'ico-few',
                                'label'=>'0 à 9 salariés',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-more',
                                'label'=>'10 à 99 salariés',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-most',
                                'label'=>'Plus de 100 salariés',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'business' => array(
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Efficacité Structurelle et Capacité Informatique',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'Quelle place tient l\'informatique dans les objectifs de l\'entreprise, et en particulier, en ce qui concerne l\'amélioration des performances et la réduction des coûts d\'exploitation ?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Extrêmement importante',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Très importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Relativement importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Peu ou pas importante',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'56 % des PME en Europe de l\'Ouest considèrent que l\'informatique contribue de manière très importante à leurs objectifs. En 2014, la rationalisation des coûts est la priorité absolue des PME d\'Europe de l\'Ouest.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Efficacité Structurelle et Capacité Informatique',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'button',
                        'question'=>'Quelle place tient l\'informatique dans la conformité juridique et réglementaire ? ',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Extrêmement importante',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Très importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Relativement importante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Peu ou pas importante',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Dans l\'enquête menée en 2014 par IDC, les PME d\'Europe de l\'Ouest indiquent que la conformité réglementaire est leur troisième priorité sur l\'année et que l\'informatique joue un rôle crucial à cet égard',
                    'image'=>'img/techfit_icons_Q-A2.png'
                )
            ),
            'page3' => array(
                'title' => 'Efficacité Structurelle et Capacité Informatique',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'Avez-vous remplacé, ou envisagez-vous de remplacer, vos principaux documents sur papier par des versions numériques ?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Les flux de travail numérisés réduisent les coûts et optimisent la gestion de la recherche et du stockage des données. Les enquêtes IDC menées auprès de PME en Europe de l\'Ouest montrent que sur 26 % de sociétés, seulement un quart n\'a aucune intention de remplacer les supports papier par des solutions logicielles de flux de travail de documents. Les autres entreprises l\'ont déjà fait (plus de 40 % pour ce qui est des documents comptables) ou envisagent de le faire prochainement. ',
                    'image'=>'img/techfit_icons_Q-A3.png'
                )
            ),
            'page4' => array(
                'title' => 'Efficacité Structurelle et Capacité Informatique',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'Disposez-vous d\'une solution de gestion des dépenses de télécommunications sans fil afin de suivre le coût et l\'utilisation des appareils mobiles de l\'entreprise ?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Les enquêtes IDC en Europe de l\'Ouest montrent que le pourcentage d\'entreprises utilisant des appareils mobiles va de 78 % dans le secteur de la santé à près de 95 % dans les secteurs des télécommunications/médias, où environ 24 % des employés reçoivent un appareil professionnel. Le taux d\'adoption moyen est de 86 %, mais les dépenses associées dépendent largement de l\'utilisation. Par conséquent, il est impératif de maîtriser le coût de ces appareils. ',
                    'image'=>'img/techfit_icons_Q-A4.png'
                )
            ),
            'page5' => array(
                'title' => 'Efficacité Structurelle et Capacité Informatique',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'button',
                        'question'=>'Est-ce que vous documentez ou effectuez un suivi de l\'utilisation des imprimantes de bureau et les périodes où elles sont utilisées ? ',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'En mettant en place des droits qui limitent le type et le lieu d\'impression selon les utilisateurs, vous êtes à même de générer des économies considérables. En outre, ce contrôle présente d\'autres avantages, notamment l\'optimisation de la confidentialité et de la sécurité, et une meilleure maîtrise des risques juridiques et commerciaux. Selon les recherches d\'IDC, 26 % des PME d\'Europe de l\'Ouest ont déjà déployé des fonctions de rapport et de contrôle d\'utilisation des imprimantes, et 24 % d\'entre elles ont mis en œuvre des solutions d\'identification et de sécurisation pour les impressions. ',
                    'image'=>'img/techfit_icons_Q-A5.png'
                )
            )
        )
    ),
    'security' => array(
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sécurité',
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'Mettez-vous à niveau votre sécurité informatique actuelle pour vous adapter à l\'évolution et à l\'émergence des nouvelles menaces ?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous réévaluons actuellement notre sécurité informatique',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Pas de mise à niveau en cours',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Lors de la dernière enquête d\'IDC en Europe de l\'Ouest, 93 % des professionnels de la sécurité et de l\'informatique ont déclaré que l\'amélioration de la sécurité pour les employés et les périphériques actuels était leur priorité absolue. La priorité des PME est d\'investir dans tous les aspects de la sécurité informatique, mais surtout dans des solutions de sécurité des réseaux et des nœuds d\'extrémité. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'Sécurité',
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'Tous les appareils mobiles utilisés dans votre entreprise (notamment les ordinateurs portables et les clés USB) sont-ils cryptés ?',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'Oui, tous',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Certains d\'entre eux',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La perte de données est un problème grave et récurrent pour presque toutes les entreprises, quelle que soit leur taille. La protection des données sensibles est le deuxième objectif le plus important des PME d\'Europe de l\'Ouest selon la moyenne des scores et le troisième en termes du nombre de personnes interrogées qui la considèrent comme importante ou très importante (60 % de toutes les personnes interrogées). La perte d\'appareils contenant des informations personnelles non cryptées peut être considérée comme une violation du droit européen sur la protection des données. Certaines sociétés ont donc dû faire face à des sanctions pécuniaires.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'Sécurité',
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'Êtes-vous en mesure de n\'autoriser l\'impression que si l\'utilisateur ayant lancé la tâche se trouve à côté de l\'imprimante ?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'Oui, nous avons accès à cette fonctionnalité ',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Il convient de n\'autoriser l\'impression que si l\'utilisateur ayant lancé la tâche se trouve à côté de l\'imprimante. Cela permet de limiter le risque de consultation ou de copie des données sensibles par des personnes non autorisées. La perte de données ou la copie et la consultation non autorisées de documents sensibles peuvent représenter un risque majeur, impliquant de possibles répercussions judiciaires. Environ 30 % des PME européennes disposent aujourd\'hui de ce type de solutions.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'Sécurité',
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'Pouvez-vous désactiver ou effacer à distance des appareils mobiles en cas de perte/vol/utilisation abusive, etc. ?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'Oui, tous les appareils utilisés à des fins professionnelles (y compris les appareils personnels : BYOD)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Uniquement, les appareils appartenant à l\'entreprise',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La prévention de la perte de données est essentielle en matière de réputation et de respect de la législation (en particulier lorsque ces informations comprennent des données personnelles concernant les salariés ou les clients). 62 % des entreprises de moins de 1 000 salariés ont adopté un logiciel de gestion des appareils mobiles, ou ont l\'intention de le faire dans les 24 prochains mois..',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            )
        )
    ),
    'cloud' => array(
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'checkbox',
                        'question'=>'Pour quelles fonctions utilisez-vous des services Cloud :  <span class="instruct">SÉLECTIONNER TOUTES LES RÉPONSES QUI S\'APPLIQUENT</span>',
                        'name'=>'c1',
                        'script'=>'
                            $(\'#4-c1\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-c1\').iCheck(\'uncheck\');
                                $(\'#1-c1\').iCheck(\'uncheck\');
                                $(\'#2-c1\').iCheck(\'uncheck\');
                                $(\'#3-c1\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-c1\'),$(\'#1-c1\'),$(\'#2-c1\'),$(\'#3-c1\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#4-c1\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Les activités quotidiennes telles que l\'accueil de nouveaux collaborateurs, les feuilles de présence et les notes de frais. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Communication et collaboration',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hébergement de systèmes de vente et de marketing en ligne',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Systèmes de sécurité informatique ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Pas sûr',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Le Cloud présente de nombreux avantages : flexibilité, évolutivité, simplicité du travail à distance, avantage du paiement à l\'usage, etc.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'Utilisez-vous un service Cloud offrant les fonctions « synchroniser et-partager » ? ',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Oui, nous avons déployé une solution de ce type',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Le stockage sur le Cloud facilite la collaboration et le travail mobile, et peut s\'avérer plus rentable. La demande de la part des utilisateurs finaux est en forte croissance. En conséquence, si une entreprise ne dispose d\'aucune solution Cloud, les utilisateurs peuvent prendre l\'initiative d\'adopter des solutions grand public, un phénomène appelé « Shadow IT ». Cela conduit à une augmentation du risque car il est difficile de contrôler la situation. La dernière enquête d\'IDC sur ce sujet en Europe de l\'Ouest révèle qu\'environ 20 % des entreprises ont mis en œuvre une solution de partage de fichiers sur le Cloud (en général pour un échantillon restreint d\'utilisateurs), alors que 37 % des entreprises envisagent d\'en déployer une.',
                    'image'=>'img/techfit_icons_Q-C2.png'
                )
            ),
            'page3' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'Savez-vous où vos données sur le Cloud sont stockées et avez-vous votre mot à dire sur cet emplacement ?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Nous avons notre mot à dire sur l\'emplacement de stockage des données',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons choisi nos fournisseurs en fonction de l\'emplacement de stockage',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous savons où nos données sont stockées, mais nous ne pouvons pas modifier l\'emplacement',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous ne savons pas où nos données sont stockées',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous n\'utilisons pas de services Cloud, justement en raison du problème de l\'emplacement de stockage',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous n\'utilisons pas de services Cloud pour d\'autres raisons',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Le contrôle de l\'accès aux données stockées sur le Cloud fait encore polémique, en particulier les données personnelles, à cause des conflits de lois et d\'une jurisprudence en rapide évolution. Pensez notamment au contentieux entre Microsoft et des tribunaux basés aux États-Unis au sujet de l\'accès à des données conservées à Dublin, sans oublier la réévaluation par l\'Union européenne des dispositions de l\'accord dit « Sphère de sécurité » conclu avec les États-Unis.',
                    'image'=>'img/techfit_icons_Q-C3.png'
                )
            ),
            'page4' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'Vos utilisateurs peuvent-ils imprimer depuis le Cloud ?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Aujourd\'hui, 39 % des entreprises européennes pratiquent l\'impression depuis le Cloud. Cette situation peut augmenter les risques si la mise en œuvre n\'est pas effectuée correctement, mais les avantages potentiels sont nombreux : productivité, flexibilité et réduction de l\'infrastructure locale nécessaire (moins d\'ordinateurs déployés)',
                    'image'=>'img/techfit_icons_Q-C4.png'
                )
            ),
            'page5' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'L\'utilisation du Cloud a-t-elle modifié votre stratégie de sécurité ? ',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous réévaluons actuellement notre stratégie',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous ne pensons pas avoir besoin d\'une mise à niveau en ce moment',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'70 % des entreprises interrogées ont déclaré que l\'amélioration de la sécurité informatique représente une partie très ou extrêmement importante de leur stratégie pour les 12 mois à venir, à cause de l\'utilisation du Cloud ou de solutions SaaS.',
                    'image'=>'img/techfit_icons_Q-C5.png'
                )
            )
        )
    ),
    'mobility' => array(
        'colour' => 'green',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Mobilité',
                'questions' => array(
                    'm1'=>array(
                        'type'=>'button',
                        'question'=>'Permettez-vous à vos employés d\'utiliser leurs propres appareils pour travailler (« BYOD ») ?',
                        'name'=>'m1',
                        'options'=>array(
                            array(
                                'label'=>'Oui, nous leur donnons un accès total aux systèmes de l\'entreprise',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oui, mais nous limitons l\'utilisation à des tâches élémentaires',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'53 % des entreprises internationales appliquent une règle informelle concernant l\'utilisation d\'appareils personnels sur le lieu de travail, mais 25 % seulement ont formalisé cette politique. L\'accès mobile à la messagerie d\'entreprise est largement répandu, mais l\'accès aux autres applications connait un développement plus modeste. ',
                    'image'=>'img/techfit_icons_Q-D1.png'
                )
            ),
            'page2' => array(
                'title' => 'Mobilité',
                'questions' => array(
                    'm2'=>array(
                        'type'=>'button',
                        'question'=>'Créez-vous des applications pour les clients de votre entreprise afin d\'accéder à vos produits et services ?',
                        'name'=>'m2',
                        'options'=>array(
                            array(
                                'label'=>'Nous avons une application pour les clients',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Le site Web de notre entreprise est utilisable depuis les appareils mobiles',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aucune prise en charge spéciale pour les appareils mobiles',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'25 % des entreprises interrogées ont au moins lancé leur première application mobile, et 5 % en ont lancé plus d\'une. Une entreprise sur quatre envisage de déployer des applications mobiles sur des tablettes ; plus de 40 % envisagent d\'utiliser des outils HTML5 pour activer des applications multi plates-formes',
                    'image'=>'img/techfit_icons_Q-D2.png'
                )
            ),
            'page3' => array(
                'title' => 'Mobilité',
                'questions' => array(
                    'm3'=>array(
                        'type'=>'button',
                        'question'=>'Prenez-vous en charge l\'utilisation de tablettes dans votre entreprise ?',
                        'name'=>'m3',
                        'options'=>array(
                            array(
                                'label'=>'Oui, nous prenons en charge et fournissons ces outils pour les salariés qui ont besoin de ce service',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous prenons en charge les tablettes personnelles des salariés',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous fournissons cette solution aux cadres supérieurs qui le souhaitent',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Les tablettes peuvent être des outils puissants pour les employés itinérants (intervenant dans des activités de ventes et de service), pour les travailleurs du savoir et pour les membres de la direction qui souhaitent un meilleur accès aux rapports, etc. L\'étude la plus récente d\'IDC montre que 62 % des entreprises ont évalué ou déployé des tablettes. ',
                    'image'=>'img/techfit_icons_Q-D3.png'
                )
            ),
            'page4' => array(
                'title' => 'Mobilité',
                'questions' => array(
                    'm4'=>array(
                        'type'=>'button',
                        'question'=>'Votre entreprise permet-elle aux membres du personnel d\'imprimer directement à partir de leurs appareils mobiles ?',
                        'name'=>'m4',
                        'options'=>array(
                            array(
                                'label'=>'Oui, à partir de n\'importe quel appareil',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oui, uniquement à partir d\'appareils appartenant à l\'entreprise',
                                'value'=>3,
                                'checked'=>false
                            ),

                            array(
                                'label'=>'Oui, uniquement les ordinateurs portables de l\'entreprise',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'C\'est une exigence de plus en plus demandée par les utilisateurs professionnels. 85 % des entreprises l\'autorisent actuellement [étude IDC]. Il existe plusieurs options, notamment l\'impression sans fil (Wi-Fi), l\'impression dans le Cloud et les imprimantes compatibles Bluetooth.',
                    'image'=>'img/techfit_icons_Q-D4.png'
                )
            ),
            'page5' => array(
                'title' => 'Mobilité',
                'questions' => array(
                    'm5'=>array(
                        'type'=>'button',
                        'question'=>'Votre entreprise permet-elle aux membres du personnel d\'imprimer quand ils sont en déplacement, depuis des ordinateurs portables ou autres appareils mobiles ?',
                        'name'=>'m5',
                        'options'=>array(
                            array(
                                'label'=>'Oui, sur n\'importe quel appareil',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oui, uniquement à partir d\'appareils appartenant à l\'entreprise',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oui, les appareils personnels et/ou ceux qui sont gérés par l\'entreprise',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Accroissement de l\'efficacité. 68 % des entreprises permettent aux employés d\'imprimer quand ils sont hors du bureau',
                    'image'=>'img/techfit_icons_Q-D5.png'
                )
            )
        )
    ),
    'bigdataanalytics' => array(
        'colour' => 'light-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Analyse du Big Data'
,
                'questions' => array(
                    'd1'=>array(
                        'type'=>'button',
                        'question'=>'Donnez-vous à vos employés les outils de visualisation nécessaires pour explorer pleinement les données et créer des rapports ?',
                        'name'=>'d1',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'L\'utilisation d\'outils de visualisation est désormais répandue parmi les entreprises d\'Europe occidentale, afin de leur permettre de bénéficier de fonctions interactives d\'exploration et d\'analyse des données. Spécifiquement pour les travailleurs du savoir, ces outils sont un facteur essentiel de réussite.',
                    'image'=>'img/techfit_icons_Q-E1.png'
                )
            ),
            'page2' => array(
                'title' => 'Analyse du Big Data'
,
                'questions' => array(
                    'd2'=>array(
                        'type'=>'button',
                        'question'=>'L\'analyse des données d\'entreprise devient de plus en plus importante. Dans ce contexte, quelle est votre position concernant l\'analyse basée sur le Cloud ? ',
                        'name'=>'d2',
                        'options'=>array(
                            array(
                                'label'=>'Nous utilisons un service d\'analyse sur le Cloud',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la possibilité de déployer des fonctions d’analyse sur le cloud.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Enquête IDC en Europe de l\'Ouest : 27 % des entreprises investissent dans des technologies de stockage pour répondre à la croissance des données',
                    'image'=>'img/techfit_icons_Q-E2.png'
                )
            ),
            'page3' => array(
                'title' => 'Analyse du Big Data'
,
                'questions' => array(
                    'd3'=>array(
                        'type'=>'button',
                        'question'=>'Utilisez-vous actuellement des technologies de Big Data dans votre entreprise ?',
                        'name'=>'d3',
                        'options'=>array(
                            array(
                                'label'=>'Nous utilisons actuellement des technologies de Big Data dans notre entreprise',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous envisageons de mettre en œuvre des technologies de Big Data dans les 6 à 18 mois à venir',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions actuellement les possibilités',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aucun projet dans ce sens',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Enquête IDC en Europe de l\'Ouest : 21 % des utilisateurs finaux des entreprises européennes ont accès aux Big Data, via un système de production existant ou un système spécifique de production de Big Data.',
                    'image'=>'img/techfit_icons_Q-E3.png'
                )
            ),
            'page4' => array(
                'title' => 'Analyse du Big Data'
,
                'questions' => array(
                    'd4'=>array(
                        'type'=>'button',
                        'question'=>'Avez-vous un processus de traitement de la réputation sur les réseaux sociaux ?',
                        'name'=>'d4',
                        'options'=>array(
                            array(
                                'label'=>'Oui',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous étudions la question',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Enquête IDC en Europe de l\'Ouest : 15 % des entreprises utilisent le Big Data pour analyser ou exploiter des informations sur les réseaux sociaux',
                    'image'=>'img/techfit_icons_Q-E4.png'
                )
            )
        )
    )
);
