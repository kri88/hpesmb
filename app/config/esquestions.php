    <?php
return array(
    'screeners' => array(
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'Lo primero es lo primero. Un par de preguntas sobre usted y su empresa.',
                'questions' => array(
                    's1'=>array(
                        'type'=>'icon',
                        'question'=>'¿Cuál de estas opciones describe mejor su papel dentro de su empresa?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'ico-it',
                                'label'=>'Trabaja en el departamento de TI de su empresa.',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-o',
                                'label'=>'Trabaja cada día fuera del departamento de TI, pero puede influir en las políticas de TI.',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Una pregunta más antes de comenzar. ',
                'questions' => array(
                    's2'=>array(
                        'type'=>'icon',
                        'question'=>'¿De qué tamaño es la empresa para la que trabaja?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'ico-few',
                                'label'=>'0-9 empleados.',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-more',
                                'label'=>'10-99 empleados.',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-most',
                                'label'=>'Más de 100 empleados.',
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
                'title' => 'Capacidad de TI y eficacia de la empresa',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'¿Hasta qué punto son importantes las TI para sus objetivos empresariales, en particular, para mejorar el rendimiento empresarial y reducir sus costes de explotación? ',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'De suma importancia.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Factor importante.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Factor de importancia moderada.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Poca o ninguna importancia.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El 56 % de las pymes de Europa Occidental ven las TI como una importante aportación a los objetivos de la empresa. La reducción de los costes fue la principal prioridad de las pymes Europa Occidental en 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Capacidad de TI y eficacia de la empresa',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'button',
                        'question'=>'¿En qué medida son las TI importantes para el cumplimiento de leyes y normas?',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'De suma importancia.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Factor importante.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Factor de importancia moderada.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Poca o ninguna importancia.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'En la encuesta de IDC de 2014, las pymes de Europa Occidental valoraron el cumplimiento de las normas como su tercera prioridad empresarial más importante en 2014 y afirmaron que las TI desempeñan un papel fundamental.',
                    'image'=>'img/techfit_icons_Q-A2.png'
                )
            ),
            'page3' => array(
                'title' => 'Capacidad de TI y eficacia de la empresa',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'¿Ha sustituido o planea sustituir los documentos en formato impreso más importantes por alternativas digitales?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Los flujos de trabajo digitalizados reducen los costes y ofrecen una gestión superior del almacenamiento y la recuperación. Las encuestas de IDC realizadas a las pymes en Europa Occidental reflejan que solo una cuarta parte del 26 % de las pymes no tiene intención de sustituir sus sistemas basados en papel por las soluciones de software de flujos de trabajo de documentos. El resto ya lo ha hecho (más del 40 % en el caso de documentos de contabilidad) o planea hacerlo en un futuro próximo. ',
                    'image'=>'img/techfit_icons_Q-A3.png'
                )
            ),
            'page4' => array(
                'title' => 'Capacidad de TI y eficacia de la empresa',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'¿Utiliza alguna solución de gestión de gastos de telecomunicaciones inalámbricas para realizar un seguimiento de los costes y el uso de los dispositivos móviles de la empresa?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Las encuestas de IDC en Europa Occidental indican que el porcentaje de empresas que utiliza dispositivos móviles varía del 78 % en el sector de la atención sanitaria a casi el 95 % en el sector de las telecomunicaciones/medios de comunicación, donde se proporcionan dispositivos a aproximadamente el 24 % de los empleados. La adopción media es del 86 %. Sin embargo, su coste aumenta en gran medida por el uso. Por lo tanto, es fundamental controlar el coste de estos dispositivos. ',
                    'image'=>'img/techfit_icons_Q-A4.png'
                )
            ),
            'page5' => array(
                'title' => 'Capacidad de TI y eficacia de la empresa',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'button',
                        'question'=>'¿Documenta o controla quién utiliza las impresoras de la oficina y cuándo las utiliza?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Al controlar quién puede imprimir qué y dónde, puede conseguir un ahorro importante en costes, así como otras ventajas, como una privacidad y una seguridad mayores, lo que reduce los riesgos legales y empresariales. La investigación de IDC refleja que el 26 % de las pymes de Europa Occidental cuentan con opciones de generación de informes y de uso de dispositivos de impresión actualmente, mientras que el 24 % ha implementado soluciones de identificación y seguridad de dispositivos de impresión. ',
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
                'title' => 'Seguridad',
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'¿Va a actualizar la seguridad de TI actual para adaptarse a las amenazas nuevas o cambiantes?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente estamos actualizando la seguridad de nuestras TI.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No las estamos actualizando en estos momentos. ',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'En la encuesta a usuarios de TI más reciente de Europa Occidental realizada por IDC, el 93 % de los profesionales de las TI y la seguridad afirmó que la mejora de la seguridad de los empleados y los dispositivos era su principal prioridad en el ámbito de la seguridad. Entre las pymes, el gasto en todos los aspectos de seguridad de las TI es prioritario (especialmente para las soluciones de seguridad de redes y extremos). ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'Seguridad',
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'¿Está seguro de que desea que todos los dispositivos móviles de su empresa (incluidos los portátiles y las tarjetas de memoria) tengan cifrados todos los datos?',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'Sí, todos.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sí, algunos.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La prevención de las pérdidas de datos constituye un problema grave y recurrente para casi todas las organizaciones, tanto grandes como pequeñas. La protección de los datos confidenciales es el segundo objetivo empresarial más importante para las pymes de Europa Occidental en términos de puntuación media y el tercero en cuanto al número de encuestados que la valoró como importante o muy importante (60 % del total de encuestados). La pérdida de dispositivos con datos personales cifrados puede entenderse como una infracción de la legislación sobre protección de datos de la EU y se han impuesto multas.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'Seguridad',
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'¿Puede restringir la impresión a los momentos en que el propietario del documento se encuentre presente?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'Sí, podemos hacerlo. ',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Al limitar las impresiones a aquellos casos en los que se encuentre presente el propietario del documento se puede minimizar la pérdida de datos confidenciales a causa de la lectura/copia de documentos por personas no autorizadas. La pérdida de datos o la copia/lectura no autorizadas de documentos confidenciales pueden suponer un grave riesgo para la empresa y derivar en acciones legales. Aproximadamente el 30 % de las pymes ha implementado este tipo de soluciones actualmente.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'Seguridad',
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'¿Puede desactivar o borrar de forma remota dispositivos móviles si se pierden, los roban, no se utilizan correctamente, etc.?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'Sí, todos los dispositivos utilizados para actividades empresariales (incluidos los BYOD).',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Solo los dispositivos que pertenecen a la empresa.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La prevención de las pérdidas de datos es fundamental para el cumplimiento legal y su reputación como empresa (especialmente, cuando dicha información incluye datos personales de empleados o clientes). El 62 % de las empresas con menos de 1000 empleados ha adoptado o adoptará en los próximos 24 meses la gestión de dispositivos móviles.',
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
                'title' => 'Nube',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'checkbox',
                        'question'=>'¿Para cuáles de las siguientes opciones utiliza servicios en la nube? <span class="instruct">SELECCIONE TODAS LAS OPCIONES QUE PROCEDAN</span>',
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
                                'label'=>'Las actividades cotidianas de la empresa, como la incorporación de RR. HH., los partes de horas y los gastos. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Comunicación y colaboración.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Suministro de ventas en línea y sistemas de comercialización.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sistemas de seguridad de TI. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No está seguro.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'La nube ofrece flexibilidad, escalabilidad, trabajo remoto de forma más sencilla, eficiencia de "pago por uso", etc.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'Nube',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'¿Utiliza los servicios de almacenamiento "de sincronización y uso compartido" en la nube?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Sí, los hemos implementado.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Los estamos evaluando actualmente.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El almacenamiento en la nube facilita la colaboración, el trabajo móvil y puede ser más rentable. Asimismo, los usuarios finales lo solicitan en gran medida y, al no necesitar una solución en las instalaciones, se aumentan las "TI en la sombra" a medida que los usuarios adoptan soluciones de consumo (puede aumentar los riesgos empresariales a causa de la falta de control). La última encuesta de IDC sobre este tema en Europa Occidental refleja que aproximadamente el 20 % de las organizaciones había implementado una solución de uso compartido de archivos basada en la nube (principalmente, para un conjunto restringido de usuarios), mientras que el 37 % de las organizaciones estaba evaluando o planificando la implementación de una solución de este tipo.',
                    'image'=>'img/techfit_icons_Q-C2.png'
                )
            ),
            'page3' => array(
                'title' => 'Nube',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'¿Sabe dónde se almacenan sus datos en la nube y puede controlar dicha ubicación?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Podemos controlar la ubicación en la que se almacenan los datos.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Elegimos nuestros proveedores por su ubicación geográfica.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sabemos dónde se almacenan, pero no podemos cambiarlo.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No sabemos dónde se almacenan.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No utilizamos estos sistemas en la nube a causa del problema de la ubicación del almacenamiento.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No utilizamos sistemas en la nube por otras razones.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Todavía hay una gran controversia en relación con el control del acceso a los datos almacenados en la nube (sobre todo, los datos personales) a causa del conflicto entre los regímenes reguladores y una jurisprudencia que evoluciona rápidamente (especialmente,la batalla entre Microsoft y los tribunales estadounidenses en relación con el acceso a datos ubicados en Dublín, y la actualización de la UE de las disposiciones del llamado acuerdo Safe Harbor con los Estados Unidos).',
                    'image'=>'img/techfit_icons_Q-C3.png'
                )
            ),
            'page4' => array(
                'title' => 'Nube',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'¿Los usuarios pueden imprimir mediante la nube?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Actualmente, el 39 % de las empresas europeas admite la impresión en la nube. Aunque esto puede aumentar los riesgos empresariales si no se aplica correctamente, entre las ventajas potenciales se incluyen la productividad, la flexibilidad y reducción de la necesidad de infraestructuras locales (se implementan menos PC)',
                    'image'=>'img/techfit_icons_Q-C4.png'
                )
            ),
            'page5' => array(
                'title' => 'Nube',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'¿El uso de la nube ha cambiado su estrategia de seguridad de las TI?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Se está actualizando en estos momentos.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No creemos que sea necesario actualizarla actualmente.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El 70 % de las organizaciones encuestadas declaró que la mejora de la seguridad de las TI por el uso de la nube o SaaS suponía una parte muy importante o de suma importancia de la estrategia para los próximos 12 meses.',
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
                'title' => 'Movilidad',
                'questions' => array(
                    'm1'=>array(
                        'type'=>'button',
                        'question'=>'¿Permite que los empleados utilicen sus propios dispositivos para trabajar ("BYOD")?',
                        'name'=>'m1',
                        'options'=>array(
                            array(
                                'label'=>'Sí, les ofrecemos acceso completo a los sistemas de la empresa.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sí, pero limitamos el uso a aspectos básicos.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El 53 % de las empresas de todo el mundo tiene algún tipo de política acerca de BYOD, pero solo el 25 % tiene una formal. El acceso móvil al correo electrónico de la empresa está generalizado, pero esto ocurre en menor medida con otras aplicaciones. ',
                    'image'=>'img/techfit_icons_Q-D1.png'
                )
            ),
            'page2' => array(
                'title' => 'Movilidad',
                'questions' => array(
                    'm2'=>array(
                        'type'=>'button',
                        'question'=>'¿Crea aplicaciones para que los clientes de su empresa puedan acceder a sus productos y servicios?',
                        'name'=>'m2',
                        'options'=>array(
                            array(
                                'label'=>'Tenemos una aplicación para los clientes.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Los dispositivos móviles pueden utilizar el sitio web de la empresa.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Los dispositivos móviles no cuentan con una compatibilidad especial.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El 25 % ha lanzado, al menos, su primera aplicación móvil y el 5 % ha lanzado varias. Una de cada cuatro empresas planea implementar aplicaciones móviles en tabletas; más del 40 % planea utilizar herramientas HTLM5 para habilitar aplicaciones para varias plataformas.',
                    'image'=>'img/techfit_icons_Q-D2.png'
                )
            ),
            'page3' => array(
                'title' => 'Movilidad',
                'questions' => array(
                    'm3'=>array(
                        'type'=>'button',
                        'question'=>'¿Admite el uso de tabletas en su empresa?',
                        'name'=>'m3',
                        'options'=>array(
                            array(
                                'label'=>'Sí, lo admitimos y las proporcionamos a los empleados que las necesitan para trabajar.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Admitimos el uso de tabletas si el empleado utiliza una propia.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Las ofrecemos a los altos directivos que las solicitan.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Las tabletas pueden ser una herramienta eficaz para los empleados móviles (de ventas y servicios), para los trabajadores cualificados y para miembros de la dirección que deseen un acceso más adecuado a los informes. El estudio de IDC más reciente refleja que el 62 % de las empresas ha evaluado o ha implementado el uso de tabletas. ',
                    'image'=>'img/techfit_icons_Q-D3.png'
                )
            ),
            'page4' => array(
                'title' => 'Movilidad',
                'questions' => array(
                    'm4'=>array(
                        'type'=>'button',
                        'question'=>'¿Su empresa permite que el personal imprima directamente desde sus dispositivos móviles?',
                        'name'=>'m4',
                        'options'=>array(
                            array(
                                'label'=>'Sí, desde cualquier dispositivo.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sí, solo desde los dispositivos que sean propiedad de la empresa.',
                                'value'=>3,
                                'checked'=>false
                            ),

                            array(
                                'label'=>'Sí, solo para los portátiles de la empresa.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Se trata de una necesidad cada vez más solicitada por los usuarios de la empresa. El 85 % de las empresas lo permite actualmente [estudio de IDC]. Existen varias opciones, como la impresión inalámbrica (Wi-Fi), la impresión en la nube y las impresoras con Bluetooth.',
                    'image'=>'img/techfit_icons_Q-D4.png'
                )
            ),
            'page5' => array(
                'title' => 'Movilidad',
                'questions' => array(
                    'm5'=>array(
                        'type'=>'button',
                        'question'=>'¿Su empresa permite que el personal imprima desde fuera de la oficina mediante portátiles u otros dispositivos móviles?',
                        'name'=>'m5',
                        'options'=>array(
                            array(
                                'label'=>'Sí, cualquier dispositivo.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sí, solo los dispositivos que son propiedad de la empresa',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sí, BYOD y/o los dispositivos gestionados por la empresa.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Eficacia y efectividad mejoradas. El 68 % de las empresas admite la impresión desde fuera de la oficina.',
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
                'title' => 'Análisis de Big Data',
                'questions' => array(
                    'd1'=>array(
                        'type'=>'button',
                        'question'=>'¿Proporciona a sus empleados herramientas de visualización para que puedan explorar completamente los datos y crear informes?',
                        'name'=>'d1',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Los estamos evaluando actualmente.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'El uso de las herramientas de visualización está generalizado entre las organizaciones de Europa Occidental para la exploración y el análisis de datos interactivos. Además, para los trabajadores cualificados en concreto, dichas herramientas son un factor de éxito fundamental en su trabajo.',
                    'image'=>'img/techfit_icons_Q-E1.png'
                )
            ),
            'page2' => array(
                'title' => 'Análisis de Big Data',
                'questions' => array(
                    'd2'=>array(
                        'type'=>'button',
                        'question'=>'Teniendo en cuenta que el análisis de los datos en la empresa es cada vez más importante, ¿cuál es su estado en relación con los análisis basados en la nube?',
                        'name'=>'d2',
                        'options'=>array(
                            array(
                                'label'=>'Estamos utilizando un servicio de análisis basado en la nube.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hemos investigado, pero todavía no se han implementado análisis basados en la nube. ',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Encuesta sobre Europa Occidental de IDC: el 27 % de las empresas está invirtiendo en tecnologías de almacenamiento para mantener el ritmo de crecimiento de los datos.',
                    'image'=>'img/techfit_icons_Q-E2.png'
                )
            ),
            'page3' => array(
                'title' => 'Análisis de Big Data',
                'questions' => array(
                    'd3'=>array(
                        'type'=>'button',
                        'question'=>'¿Utiliza actualmente las tecnologías de Big Data en su negocio?',
                        'name'=>'d3',
                        'options'=>array(
                            array(
                                'label'=>'Actualmente utilizamos tecnologías de Big Data en la empresa.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Planeamos implementar tecnologías de Big Data en los próximos 6-18 meses.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente estamos investigando las posibilidades.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No está en nuestros planes.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Encuesta sobre Europa Occidental de IDC: el 21 % de los usuarios finales de las organizaciones europeas pueden acceder al Big Data, tanto a través de una fuente de un sistema de producción existente como de un sistema de producción específico de Big Data.',
                    'image'=>'img/techfit_icons_Q-E3.png'
                )
            ),
            'page4' => array(
                'title' => 'Análisis de Big Data',
                'questions' => array(
                    'd4'=>array(
                        'type'=>'button',
                        'question'=>'¿Dispone de procesos para ocuparse de las opiniones en las redes sociales?',
                        'name'=>'d4',
                        'options'=>array(
                            array(
                                'label'=>'Sí.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Actualmente en investigación.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No.',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Encuesta sobre Europa Occidental de IDC: el 15 % de las empresas utiliza Big Data para analizar o utilizar la información de las redes sociales.',
                    'image'=>'img/techfit_icons_Q-E4.png'
                )
            )
        )
    )
);