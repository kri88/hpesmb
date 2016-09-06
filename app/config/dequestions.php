<?php
return array(
    'screeners' => array(
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'Zunächst einmal ein paar Fragen zu Ihnen und Ihrem Unternehmen.',
                'questions' => array(
                    's1'=>array(
                        'type'=>'icon',
                        'question'=>'Welche der folgenden Beschreibungen trifft auf Ihre Rolle am ehesten zu? ',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'ico-it',
                                'label'=>'Sie leiten bzw. arbeiten in der IT-Abteilung Ihres Unternehmens.',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-o',
                                'label'=>'Der Großteil Ihrer Aufgaben liegt außerhalb von IT, aber Sie beeinflussen die IT-Strategie.',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Noch eine Frage, bevor wir beginnen. ',
                'questions' => array(
                    's2'=>array(
                        'type'=>'icon',
                        'question'=>'Wie groß ist das Unternehmen, bei dem Sie tätig sind bzw. das Sie leiten?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'ico-few',
                                'label'=>'0–9 Mitarbeiter',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-more',
                                'label'=>'10–99 Mitarbeiter',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-most',
                                'label'=>'Mehr als 100 Mitarbeiter',
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
                'title' => 'Geschäftseffizienz Und It-kompetenz',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'Wie wichtig ist die IT für Ihre Geschäftsziele, insbesondere bei der Steigerung der Geschäftsleistung und der Senkung der Betriebskosten?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Ausschlaggebend',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wichtig',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Relativ wichtig',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wenig wichtig/Unbedeutend',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'56 % der KMU in Westeuropa betrachten die IT als bedeutenden Faktor für die Erfüllung geschäftlicher Zielsetzungen. Die Kostensenkung war 2014 die höchste Priorität der KMU in Westeuropa.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Geschäftseffizienz Und It-kompetenz',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'button',
                        'question'=>'Wie wichtig ist die IT bei Ihnen für die Erfüllung rechtlicher und behördlicher Auflagen? ',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Ausschlaggebend',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wichtig',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Relativ wichtig',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wenig wichtig/Unbedeutend',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'In der IDC-Umfrage 2014 stuften KMU in Westeuropa die Erfüllung aufsichtsrechtlicher Bestimmungen (Compliance) als dritthöchste geschäftliche Priorität ein, bei der IT von maßgeblicher Bedeutung ist.',
                    'image'=>'img/techfit_icons_Q-A2.png'
                )
            ),
            'page3' => array(
                'title' => 'Geschäftseffizienz Und It-kompetenz',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'Haben Sie wichtige Dokumente auf digitale Formate umgestellt oder diese Umstellung geplant?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Digitalisierte Workflows senken Kosten und vereinfachen den Abruf und die Ablageverwaltung. In Umfragen von IDC gaben lediglich 26 % der KMU in Westeuropa an, keine Umstellung papierbasierter Systeme auf Dokumenten-Workflow-Software zu planen – der Großteil der Unternehmen hat diesen Schritt bereits vollzogen (bei Buchhaltungsunterlagen > 40 %) oder für die nahe Zukunft geplant. ',
                    'image'=>'img/techfit_icons_Q-A3.png'
                )
            ),
            'page4' => array(
                'title' => 'Geschäftseffizienz Und It-kompetenz',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'Nutzen Sie eine Verwaltungslösung für Mobilfunkkosten, um die Kosten und die Nutzung unternehmenseigener Mobilgeräte zu erfassen?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC-Umfragen in Westeuropa ergaben, dass der Anteil von Unternehmen mit Mobilgeräten zwischen 78 % im Gesundheitswesen und nahezu 95 % im Sektor Telekommunikation/Medien liegt, wo rund 24 % der Mitarbeiter mit einem Mobilgerät ausgestattet werden. Die durchschnittliche Akzeptanzrate liegt bei 86 %. Die Kosten richten sich nach der Nutzung. Die Kostenkontrolle ist bei diesen Geräten daher äußerst wichtig. ',
                    'image'=>'img/techfit_icons_Q-A4.png'
                )
            ),
            'page5' => array(
                'title' => 'Geschäftseffizienz Und It-kompetenz',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'button',
                        'question'=>'Erfassen oder regeln Sie, wer Drucker im Büro wann nutzen darf?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Wenn Sie regeln, wer was wo drucken darf, sparen Sie nicht nur beträchtliche Kosten ein, sondern erhöhen auch den Datenschutz und die Sicherheit und senken die rechtlichen und geschäftlichen Risiken. Untersuchungen von IDC ergaben, dass bei 26 % der KMU in Westeuropa Kontrollen und Erfassungsverfahren für die Druckernutzung bestehen und bei 24 % Gerätesicherheits- und ID-Lösungen für die Druckernutzung eingeführt worden sind. ',
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
                'title' => 'Sicherheit'
,
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'Werten Sie die bestehende IT-Sicherheit auf, um veränderten oder neuen Gefahren zu begegnen?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Untersuchen derzeit unsere IT-Sicherheit',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Derzeit keine Upgrades vorgesehen ',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'In der neuesten Umfrage von IDC unter IT-Benutzern in Westeuropa nannten 93 % der IT- und Sicherheitsexperten die verbesserte Sicherheit für bestehende Mitarbeiter und Geräte als höchste Sicherheitspriorität. Bei KMU erhalten Ausgaben für alle Aspekte der Sicherheit Vorrang, insbesondere Sicherheitslösungen für Netzwerk- und Endpunktsicherheit. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'Sicherheit'
,
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'Sorgen Sie dafür, dass alle Daten auf allen bei Ihrem Unternehmen verwendeten Mobilgeräten – einschließlich Laptops und Speichersticks – verschlüsselt sind? ',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'Ja, alle',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ja, einige',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Nahezu alle Unternehmen jeder Größenordnung sehen sich immer wieder mit Datenverlusten konfrontiert. Der Schutz vertraulicher Daten erhält bei KMU in Westeuropa die zweithöchste Geschäftspriorität nach Mittelwert und die dritthöchste Priorität nach Anzahl der Befragten, die diesen Aspekt als wichtig oder sehr wichtig bewerten (60 % aller Teilnehmer). Der Verlust von Geräten mit unverschlüsselten personenbezogenen Daten kann als Verstoß gegen das EU-Datenschutzrecht mit Geldstrafen geahndet werden.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'Sicherheit'
,
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'Können Sie Druckvorgänge so einrichten, dass der Dokumentenverantwortliche anwesend sein muss?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'Ja, wir haben diese Funktion eingeführt ',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Wenn Druckvorgänge nur in Anwesenheit des Dokumentenverantwortlichen zulässig sind, wird die Gefahr verringert, dass Unbefugte vertrauliche Dokumente lesen oder kopieren. Datenverluste durch das unbefugte Lesen oder Kopieren von Dokumenten stellen ein schwerwiegendes Geschäftsrisiko mit potenziellen gerichtlichen Konsequenzen dar. Rund 30 % der KMU in Westeuropa haben daher bereits eine entsprechende Lösung eingeführt.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'Sicherheit'
,
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'Können Sie Mobilgeräte per Remote-Zugriff deaktivieren oder deren Daten löschen, wenn sie verloren/gestohlen/missbraucht werden?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'Ja, alle zu Unternehmenszwecken genutzten Geräte (auch BYOD)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nur unternehmenseigene Geräte',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Maßnahmen zum Schutz vor Datenverlusten sind unerlässlich, um den guten Ruf des Unternehmens zu schützen und die Einhaltung gesetzlicher Vorschriften zu gewährleisten (insbesondere, wenn es sich um personenbezogene Daten von Mitarbeitern oder Kunden handelt). 62 % der Unternehmen mit weniger als 1.000 Mitarbeitern haben daher bereits eine Lösung für die Verwaltung von Mobilgeräten eingeführt oder werden dies innerhalb der nächsten 24 Monate tun.',
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
                        'question'=>'Für welche dieser Aufgaben nutzen Sie Cloud-Services? <span class="instruct">BITTE ALLE ZUTREFFENDEN AUSWÄHLEN</span>',
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
                                'label'=>'Alltägliche Vorgänge wie Personal-Onboarding, Stundenzettel und Spesenabrechnung ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Kommunikation und Kooperation',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hosten von Online-Systemen für Vertrieb und Marketing',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Sicherheitssysteme ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nicht sicher',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Die Cloud bietet Flexibilität und Skalierbarkeit, erleichtert die Remote-Arbeit, ermöglicht die effiziente Zahlung gemäß tatsächlich erfolgter Nutzung usw.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'Nutzen Sie Cloud-Speicherdienste mit Synchronisierung und Freigabe?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Ja, bereits eingeführt',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Cloud-Speicherlösungen erleichtern die Kooperation sowie das mobile Arbeiten und können besonders kosteneffizient sein. Sie erfreuen sich großer Beliebtheit bei Endbenutzern, und wenn Unternehmen keine derartigen Lösungen bereitstellen, steigt die Gefahr, dass Benutzer Lösungen einsetzen, die nicht für Geschäftszwecke konzipiert sind. Diese "Schatten-IT" entzieht sich der Kontrolle des Unternehmens und birgt daher ein großes Risikopotenzial. Die neueste Umfrage von IDC zu diesem Thema in Westeuropa ergab, dass rund 20 % der Unternehmen eine cloudbasierte Lösung für die gemeinsame Nutzung von Dateien einsetzen – in der Regel für eine spezifische Benutzergruppe – und 37 % der Unternehmen derartige Lösungen derzeit untersuchen oder ihre Einführung planen.',
                    'image'=>'img/techfit_icons_Q-C2.png'
                )
            ),
            'page3' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'Wissen Sie, wo Ihre Cloud-Daten gespeichert sind, und haben Sie die Kontrolle über diesen Speicherort?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Wir haben die Kontrolle über den Speicherort der Daten.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir haben uns aufgrund des Standorts für unseren Anbieter entschieden.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir wissen, wo die Daten gespeichert sind, haben jedoch keinen Einfluss darauf.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir wissen nicht, wo die Daten gespeichert sind.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden aufgrund von Problemen mit dem Speicherort keine Cloud-Systeme.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden aus anderen Gründen keine Cloud-Systeme.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Die Zugangskontrolle bei in der Cloud gespeicherten Daten ist ein strittiges Thema. Insbesondere bei personenbezogenen Daten kämpfen Unternehmen mit widersprüchlichen regulatorischen Bestimmungen und Gerichtsurteilen. So streiten Microsoft und US-amerikanische Gerichte über den Zugang zu Daten, die in Dublin gespeichert sind, und die EU fordert neue Verhandlungen über die Bestimmungen des sogenannten "Safe Harbor"-Abkommens mit den USA.',
                    'image'=>'img/techfit_icons_Q-C3.png'
                )
            ),
            'page4' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'Können Ihre Benutzer Druckaufträge über die Cloud ausführen?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'39 % der europäischen Unternehmen gestatten Benutzern das Ausführen von Druckaufträgen über die Cloud. Eine fehlerhafte Implementierung kann zwar zu erhöhten Geschäftsrisiken führen, doch andererseits bieten sich Vorteile wie erhöhte Produktivität, Flexibilität und ein geringerer Bedarf an lokaler Infrastruktur (es sind weniger PCs erforderlich).',
                    'image'=>'img/techfit_icons_Q-C4.png'
                )
            ),
            'page5' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'Hat Ihre IT-Strategie sich aufgrund der Cloud-Nutzung geändert? ',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir sehen derzeit keine Notwendigkeit für ein Upgrade.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'70 % der befragten Unternehmen stuften die Verbesserung der IT-Sicherheit im Zusammenhang mit Cloud/SaaS als wichtigen oder sehr wichtigen Aspekt der Strategie für die nächsten 12 Monate ein.',
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
                'title' => 'MOBILITÄT',
                'questions' => array(
                    'm1'=>array(
                        'type'=>'button',
                        'question'=>'Gestatten Sie Ihren Mitarbeitern die Verwendung eigener Geräte für die Arbeit ("BYOD")?',
                        'name'=>'m1',
                        'options'=>array(
                            array(
                                'label'=>'Ja, wir geben Zugang zu allen Unternehmenssystemen.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ja, aber wir beschränken die Nutzung auf Grundfunktionen.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Bei 53 % der Unternehmen weltweit gibt es BYOD, aber nur 25 % verfügen über klare Richtlinien. Der Zugriff auf die Unternehmens-E-Mail über Mobilgeräte ist weit verbreitet, doch bei anderen Anwendungen ist die Nutzung geringer. ',
                    'image'=>'img/techfit_icons_Q-D1.png'
                )
            ),
            'page2' => array(
                'title' => 'MOBILITÄT',
                'questions' => array(
                    'm2'=>array(
                        'type'=>'button',
                        'question'=>'Erstellen Sie Apps, über die Ihre Kunden auf die Produkte und Dienste Ihres Unternehmens zugreifen können?',
                        'name'=>'m2',
                        'options'=>array(
                            array(
                                'label'=>'Wir haben eine App für Kunden.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Die Website unseres Unternehmens ist für Mobilgeräte geeignet.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Keine spezielle Unterstützung für Mobilgeräte',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'25 % der Unternehmen haben mindestens eine App für Mobilgeräte eingeführt, 5 % haben bereits mehr als eine App bereitgestellt. Jedes vierte Unternehmen plant mobile Apps für Tablets; mehr als 40 % beabsichtigen, HTML5-Tools für plattformübergreifende Anwendungen einzusetzen.',
                    'image'=>'img/techfit_icons_Q-D2.png'
                )
            ),
            'page3' => array(
                'title' => 'MOBILITÄT',
                'questions' => array(
                    'm3'=>array(
                        'type'=>'button',
                        'question'=>'Unterstützen Sie die geschäftliche Nutzung von Tablets?',
                        'name'=>'m3',
                        'options'=>array(
                            array(
                                'label'=>'Ja, wir unterstützen Tablets und stellen Geräte bereit, wenn dies für die Arbeit erforderlich ist.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir unterstützen Tablets, wenn Mitarbeiter ihre eigenen Geräte einsetzen.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir stellen diese Geräte für Führungskräfte auf Wunsch zur Verfügung.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Tablets sind ein leistungsstarkes Tool für mobile Mitarbeiter (in Vertrieb und Kundendienst), für Wissensarbeiter und für Führungskräfte, die besseren Zugang zu Berichtsfunktionen usw. wünschen. Die jüngste IDC-Untersuchung ergab, dass 62 % der Unternehmen Tablets evaluiert oder eingeführt haben. ',
                    'image'=>'img/techfit_icons_Q-D3.png'
                )
            ),
            'page4' => array(
                'title' => 'MOBILITÄT',
                'questions' => array(
                    'm4'=>array(
                        'type'=>'button',
                        'question'=>'Können Ihre Mitarbeiter Druckaufträge direkt von ihren Mobilgeräten ausführen?',
                        'name'=>'m4',
                        'options'=>array(
                            array(
                                'label'=>'Ja, von allen Geräten',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ja, nur von unternehmenseigenen Geräten',
                                'value'=>3,
                                'checked'=>false
                            ),

                            array(
                                'label'=>'Ja, nur von unternehmenseigenen Laptops',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Immer mehr Geschäftsanwender wünschen diese Funktion. 85 % der Unternehmen unterstützen dies bereits [Umfrage von IDC]. Zu den verfügbaren Optionen zählen kabelloses Drucken (WLAN), Drucken über die Cloud sowie Drucker mit Bluetooth-Verbindung.',
                    'image'=>'img/techfit_icons_Q-D4.png'
                )
            ),
            'page5' => array(
                'title' => 'MOBILITÄT',
                'questions' => array(
                    'm5'=>array(
                        'type'=>'button',
                        'question'=>'Können Ihre Mitarbeiter Druckaufträge von außerhalb des Büros über Laptops oder andere Mobilgeräte ausführen?',
                        'name'=>'m5',
                        'options'=>array(
                            array(
                                'label'=>'Ja, mit allen Geräten',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ja, nur mit unternehmenseigenen Geräten',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ja, mit BYOD- und/oder durch das Unternehmen verwalteten Geräten',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Erhöhte Effizienz und Effektivität. 68 % der Unternehmen ermöglichen es Mitarbeitern, Druckaufträge von außerhalb des Büros auszuführen.',
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
                'title' => 'Big Data-Analytik',
                'questions' => array(
                    'd1'=>array(
                        'type'=>'button',
                        'question'=>'Stellen Sie Visualisierungs-Tools bereit, damit Ihre Mitarbeiter Daten optimal auswerten und Berichte erstellen können?',
                        'name'=>'d1',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Visualisierungs-Tools für die interaktive Untersuchung und Analyse von Daten sind bei Unternehmen in Westeuropa inzwischen weit verbreitet. Gerade für Wissensarbeiter stellen diese Tools einen maßgeblichen Erfolgsfaktor dar.',
                    'image'=>'img/techfit_icons_Q-E1.png'
                )
            ),
            'page2' => array(
                'title' => 'Big Data-Analytik',
                'questions' => array(
                    'd2'=>array(
                        'type'=>'button',
                        'question'=>'Die unternehmensweite Datenanalyse wird immer wichtiger. Wie sieht es in Ihrem Unternehmen mit cloudbasierten Analysefunktionen aus?',
                        'name'=>'d2',
                        'options'=>array(
                            array(
                                'label'=>'Wir verwenden einen cloudbasierten Analysedienst.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir haben cloudbasierte Analysefunktionen untersucht, aber noch nicht eingeführt. ',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC-Umfrage in Westeuropa: 27 % der Unternehmen investieren in Speichertechnologien, um mit dem Datenwachstum Schritt zu halten.',
                    'image'=>'img/techfit_icons_Q-E2.png'
                )
            ),
            'page3' => array(
                'title' => 'Big Data-Analytik',
                'questions' => array(
                    'd3'=>array(
                        'type'=>'button',
                        'question'=>'Setzt Ihr Unternehmen derzeit Big Data-Technologien ein?',
                        'name'=>'d3',
                        'options'=>array(
                            array(
                                'label'=>'Unser Unternehmen setzt derzeit Big Data-Technologien ein.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir planen die Einführung von Big Data-Technologien in den nächsten 6–18 Monaten.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir untersuchen derzeit die Möglichkeiten.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Keine diesbezüglichen Pläne',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC-Umfrage in Westeuropa: 21 % der Endbenutzer in europäischen Unternehmen haben Zugang zu Big Data, ob als Feed für ein bestehendes Produktionssystem oder als Big Data-spezifisches Produktionssystem.',
                    'image'=>'img/techfit_icons_Q-E3.png'
                )
            ),
            'page4' => array(
                'title' => 'Big Data-Analytik',
                'questions' => array(
                    'd4'=>array(
                        'type'=>'button',
                        'question'=>'Verfügen Sie über ein Verfahren zur Einflussnahme in sozialen Medien?',
                        'name'=>'d4',
                        'options'=>array(
                            array(
                                'label'=>'Ja',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wird derzeit untersucht',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC-Umfrage in Westeuropa: 15 % der Unternehmen verwenden Big Data für die Analyse oder Nutzung sozialer Medien.',
                    'image'=>'img/techfit_icons_Q-E4.png'
                )
            )
        )
    )
);