<?php
 
 
    class PdfController extends BaseController {
        var $pdf;
        var $margins;
        var $pdf_w;
        var $style_small_orange = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(243,157,30));
        var $style_small_dot_orange = array('width' => 0.3, 'cap' => 'round', 'join' => 'miter', 'dash' => '0,1', 'color' => array(239, 171, 30));
        var $rData;
        var $guest_name;
        var $guest_company;
		
		var $baseline;
		var $business_baseline;
        var $business_score;
        var $security_score;
        var $cloud_score;
        var $mobility_score;
        var $bigdataanalytics_score;
		var $overall_score;
		
		function PdfController(){
			$this->baseline = Config::get('baseline');
			
		}

        function pdf($report_id=false) 
        {
            $this->pdf = new Pdf;
            File::requireOnce(app_path().'/library/SVGGraph/SVGGraph.php');
            $this->margins = $this->pdf->getMargins();
            $this->pdf_w = $this->pdf->getPageWidth();

            //check if loading existing PDF

            if($report_id!==false){
                $report = json_decode(Report::with('answers')->find($report_id),true);

                if(count($report['answers'])!=6) return Redirect::route('assesment.page1');

                foreach ($report['answers'] as $answer) {
                    $answers = json_decode($answer['answers'],true);

                    if($answer['section']=='page1'){
                        $this->guest_name = $answers['s1'];
                        $this->guest_company = $answers['s2'];
                    }
                    if($answer['section']=='page2'){
                        $this->intent_score = $answers['intent_score'];
                    }
                    if($answer['section']=='page3'){
                        $this->data_score = $answers['data_score'];
                    }
                    if($answer['section']=='page4'){
                        $this->tech_score = $answers['technology_score'];
                    }
                    if($answer['section']=='page5'){
                        $this->people_score = $answers['people_score'];
                    }
                    if($answer['section']=='page6'){
                        $this->process_score = $answers['process_score'];
                    }
                }
            }else{
                $this->rData = Session::get('report');

                $this->guest_name = $this->rData['page1']['s1'];
                $this->guest_company = $this->rData['page1']['s2'];

                $this->intent_score = $this->rData['page2']['intent_score'];
                $this->data_score = $this->rData['page3']['data_score'];
                $this->tech_score = $this->rData['page4']['technology_score'];
                $this->people_score = $this->rData['page5']['people_score'];
                $this->process_score = $this->rData['page6']['process_score'];
            }
            

            $this->overall_score = ($this->intent_score+$this->data_score+$this->tech_score+$this->people_score+$this->process_score)/5;


            $this->getPDF();
        }

        private function calcResults($rData)
        {
            //intent
            $intent_total = $rData['page2']['i1']+$rData['page2']['i2']+$rData['page2']['i3']+$rData['page2']['i4']+$rData['page2']['i51']+$rData['page2']['i52']+$rData['page2']['i6'];
            if($intent_total<=0 && $intent_total<13.3) $this->intent_score = 1;
            if($intent_total<=13.3 && $intent_total<20) $this->intent_score = 2;
            if($intent_total<=20 && $intent_total<26.4) $this->intent_score = 3;
            if($intent_total<=26.4 && $intent_total<32.6) $this->intent_score = 4;
            if($intent_total>=32.6) $this->intent_score = 5;
            //echo 'intent '. $intent_total;

            //data
            $countd1 = isset($rData['page3']['d1']) ? count($rData['page3']['d1']): 0;
            if($countd1==0) $d1 = 0;
            if($countd1==1) $d1 = 2;
            if($countd1==2) $d1 = 4;
            if($countd1==3) $d1 = 5;

            $d2 = $rData['page3']['d21']+$rData['page3']['d22']+$rData['page3']['d23']+$rData['page3']['d24']+$rData['page3']['d25']+$rData['page3']['d26']+$rData['page3']['d27'];

            $d3_total = $rData['page3']['d31']+$rData['page3']['d32']+$rData['page3']['d33']+$rData['page3']['d34']+$rData['page3']['d35']+$rData['page3']['d36']+$rData['page3']['d37']+$rData['page3']['d38']+$rData['page3']['d39']+$rData['page3']['d310']+$rData['page3']['d311'];
            if($d3_total==0) $d3 = 1;
            if($d3_total==1) $d3 = 2;
            if($d3_total==2) $d3 = 2;
            if($d3_total==3) $d3 = 2;
            if($d3_total==4) $d3 = 2;
            if($d3_total==5) $d3 = 3;
            if($d3_total==6) $d3 = 3;
            if($d3_total==7) $d3 = 4;
            if($d3_total==8) $d3 = 4;
            if($d3_total==9) $d3 = 5;
            if($d3_total==10) $d3 = 5;
            if($d3_total==11) $d3 = 5;

            $data_total = $d1+$d2+$d3+$rData['page3']['d4']+$rData['page3']['d5']+$rData['page3']['d6'];
            if($data_total<=0 && $data_total<19) $this->data_score = 1;
            if($data_total<=19 && $data_total<29) $this->data_score = 2;
            if($data_total<=29 && $data_total<39) $this->data_score = 3;
            if($data_total<=39 && $data_total<49) $this->data_score = 4;
            if($data_total>=49) $this->data_score = 5;
            //echo 'data '. $data_total;


            //tech
            $tech_total = $rData['page4']['t1a']+$rData['page4']['t21']+$rData['page4']['t22']+$rData['page4']['t23']+$rData['page4']['t24']+$rData['page4']['t25']+$rData['page4']['t26']+$rData['page4']['t31']+$rData['page4']['t32']+$rData['page4']['t33']+$rData['page4']['t34']+$rData['page4']['t35']+$rData['page4']['t5']+$rData['page4']['t6']+$rData['page4']['t7'];
            if($tech_total<=0 && $tech_total<20) $this->tech_score = 1;
            if($tech_total<=20 && $tech_total<38) $this->tech_score = 2;
            if($tech_total<=38 && $tech_total<56) $this->tech_score = 3;
            if($tech_total<=56 && $tech_total<74) $this->tech_score = 4;
            if($tech_total>=74) $this->tech_score = 5;
            //echo 'tech '. $tech_total;

            //people
            $people_total = $rData['page5']['p1']+$rData['page5']['p21']+$rData['page5']['p22']+$rData['page5']['p23']+$rData['page5']['p24']+$rData['page5']['p25']+$rData['page5']['p26']+$rData['page5']['p27']+$rData['page5']['p28']+$rData['page5']['p31']+$rData['page5']['p32']+$rData['page5']['p33']+$rData['page5']['p34']+$rData['page5']['p35']+$rData['page5']['p36']+$rData['page5']['p37']+$rData['page5']['p38']+$rData['page5']['p41']+$rData['page5']['p42']+$rData['page5']['p43']+$rData['page5']['p44']+$rData['page5']['p45']+$rData['page5']['p46']+$rData['page5']['p51']+$rData['page5']['p52']+$rData['page5']['p53']+$rData['page5']['p54']+$rData['page5']['p55'];
            if($people_total<=0 && $people_total<63) $this->people_score = 1;
            if($people_total<=63 && $people_total<88) $this->people_score = 2;
            if($people_total<=88 && $people_total<113) $this->people_score = 3;
            if($people_total<=113 && $people_total<139) $this->people_score = 4;
            if($people_total>=139) $this->people_score = 5;
            //echo 'people '. $people_total;

            //process
            $process_total = $rData['page6']['r1']+$rData['page6']['r2']+$rData['page6']['r3']+$rData['page6']['r4']+$rData['page6']['r5']+$rData['page6']['r6'];
            if($process_total<=0 && $process_total<12) $this->process_score = 1;
            if($process_total<=12 && $process_total<17) $this->process_score = 2;
            if($process_total<=17 && $process_total<23) $this->process_score = 3;
            if($process_total<=23 && $process_total<29) $this->process_score = 4;
            if($process_total>=29) $this->people_score = 5;
            //echo 'process '. $process_total;
        }

        public function getPDF()
        {
            $time_start = microtime(true);

            $this->pdf->SetTitle('Assesment Report Results');
            $this->pdf->AddPage();
            //$this->pdf->SetFont(K_PATH_FONTS.'Latinotype - Arquitecta.otf');
            $this->pdf->mainGraph($this->guest_name,$this->guest_company,$this->intent_score,$this->data_score,$this->tech_score,$this->people_score,$this->process_score,$this->overall_score);
            $this->intentText();
            $this->dataText();
            $this->techText();
            $this->peopleText();
            $this->processText();
            
            $time_end = microtime(true);
            $execution_time = round($time_end - $time_start,2);
            $this->pdf->SetY($this->pdf->GetY()+10);
            //$this->pdf->cell(120,0, 'report took '.$execution_time.'seconds to generate. Intent: '.$this->intent_score.' Data: '.$this->data_score.' Tech: '.$this->tech_score.' People: '.$this->people_score.' Process: '.$this->process_score);
            $this->pdf->Output(str_replace(" ", "_", $this->guest_name).'_'.str_replace(" ", "_", $this->guest_company).'_Assesment_Report.pdf','D');

            //return Session::get('report');

        }

        public function intentText()
        {
            $settings = array(
              'back_colour' => '#FF0000',
              'stroke_colour' => '#ff0000',
              'back_stroke_width' => 0,
              'back_stroke_colour' => '#FF0000',
              'pad_right' => 20,
              'pad_left' => 20,
              'link_base' => '/',
              'link_target' => '_top',
              'show_labels' => false,
              'show_label_amount' => false,
              'label_font' => 'Arial',
              'label_font_size' => '20',
              'label_colour' => '#FFF',
              'units_before_label' => '',
              'sort' => false,

              'inner_radius' => 0.8,
              'start_angle' => -90,
              'inner_text' => '',
              'inner_text_font' => 'Impact',
              'inner_text_font_size' => 60,
              'inner_text_colour' => '#F39D1E'
            );
             
            $colours = array('#F39D1E','#FFF');

            $this->pdf->AddPage();
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY(), $this->pdf->getPageWidth()-$this->margins['left']-$this->margins['right'], 60, 1.75, '1111', 'F',array(), array(239, 171, 30));
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY()+1.25, $this->pdf_w - $this->margins['left'] - $this->margins['right'], 60, 1.75, '1111', 'F',array(), array(0));

            $this->pdf->setPageMark();

            
            $this->pdf->SetXY($this->pdf->GetX(), $this->pdf->GetY()+5);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'I', 7.5);
            $this->pdf->SetCellPaddings(5,0,0,0);
            
            $intent_text = '<h4>INTENT</h4> <em>Intent refers to the Big Data strategy, executive sponsorship, capital and operational budgets, performance metrics, and project justification. IDC research shows that organizations that have attained a higher overall Big Data readiness tend to have more executive advocates or sponsors who are rallying support and promoting the use of Big Data and analytics solutions adopted by the organization.
    In organizations that fall into the two most mature phases of Big Data readiness (i.e., managed or optimized), <strong>86%</strong> of respondents indicate that executive management is very involved in promoting and encouraging Big Data use.
    In organizations that fall into the two least mature phases of Big Data readiness (i.e., ad hoc or opportunistic), only <strong>14%</strong> of respondents indicate that executive management is very involved in promoting and encouraging Big Data use.</em>';
            $this->pdf->writeHTMLCell(95, 0,'','', $intent_text,array('R'=>$this->style_small_dot_orange),0);

            $cur_x = $this->pdf->GetX();

            $this->pdf->SetColor('text', 239,171,30);
            $this->pdf->SetFont('helvetica', 'B', 8);
            $this->pdf->MultiCell(90,0,'Percentage of Organizations Where Executive Management is Very Involved in Promoting and Encouraging Big Data Usage',0,'L');

            $settings['inner_text']='14% ';
            $graph = new SVGGraph(300, 300, $settings);
            $graph->colours = $colours;
            $values = array(14,86);
            $graph->Values($values);
            //first graph
            $output = $graph->fetch('DonutGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10, $this->pdf->GetY()+2, $w=35, $h='', '', $align='', $palign='', '', $fitonpage=false);

            $settings['inner_text']='86% ';
            $graph = new SVGGraph(300, 300, $settings);
            $graph->colours = $colours;
            $values = array(86,14);
            $graph->Values($values);
            //first graph
            $output = $graph->fetch('DonutGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10+40, $this->pdf->GetY()+2, $w=35, $h='', '', $align='', $palign='', '', $fitonpage=false);


            $this->pdf->SetXY($cur_x+5, $this->pdf->GetY()+37);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'B', 7.5);
            $this->pdf->SetCellPadding(2);
            //first graph Label
            $this->pdf->MultiCell(40,0,'Ad hoc and Opportunistic',0,'C',false,0);
            //second graph Label
            $this->pdf->MultiCell(40,0,'Managed and Optimized',0,'C');

            $this->pdf->SetXY($this->margins['left']+36, $this->pdf->GetY()+20);
            $this->pdf->SetCellPaddings(5,0,0,0);
            //defaultText
            $this->defaultText($this->pdf);
            $intent_text = '<h4>WE RECOMMEND THAT YOU:</h4>
                <h4>1. Put in place a "dynamic" Big Data strategy.</h4>
                This may already be in place, but it needs to be treated as a very dynamic and transparent concept, with constant updates from various stakeholders (from IT, the analytics team, business executives, and users) across the organization. It will require the leveraging of best practices from a leading department or business unit and replicating that approach into new areas. IT will need to be involved to ensure that the right governance model and integration capabilities are put in place up front. For example, in a recent discussion with a large bank, it became clear that a successful Big Data analytics project focused on risk-adjusted profitability for large corporate transactions could not be integrated with its existing CRM system because IT had not been involved from the outset. The Big Data strategy needs to address all five dimensions highlighted above (intent, data, people, process, technology) and, most importantly, needs to be signed off and supported by a C-level business executive.
                <h4>2. Note that every Big Data project needs a clear desired business outcome and business case.</h4>
                Getting this agreed to from the outset will shape all decisions going forward on your approach to analytics — traditional or Big Data. Securing buy-in from line-of-business and IT is a greater reality when both sides have agreed on the expected outcomes. As part of this, there is a requirement to consolidate the budget for the Big Data project across the wider organization, but with the flexibility of ad hoc funding for specific projects (potentially driven by identified business units) where appropriate. Where budgeting is uncoordinated and investments are done at the departmental or even business unit level, the organization will end up with multiple disparate Big Data technologies and skill sets. Once the budgeting approach is in place, each new Big Data project will require a business case which quantifies the outcomes into revenue gains, cost reduction, or risk reduction that can be used to determine how much investment is required. Using a standard calculation to estimate the return on investment (ROI) will allow executive sponsors to support the initiative, or not. Measuring ROI requires a high level of discipline to establish an "as is" state of the business and compare this with the post-deployment state. Although some organizations indicate that an ROI evaluation is not required for new Big Data projects, or that it is too difficult to do, it is an absolute necessity as a basis to secure future funding for new projects.
                <h4>3. Set up a Big Data competency center.</h4>
                If you already have a datawarehousing or business analytics competency center in place, then this can be the next iteration of that function. If not, you should look to create this group and ensure that it includes stakeholders from IT, business, and analytics functions. It should preferably sit in the business, under the COO or CEO if appropriate. This entity should bring together all components of a Big Data strategy including stakeholders, technology architecture, analytical skills, and vendor and service management. This will help raise the profile of Big Data projects internally and should be the driver for the strategy and budgeting process highlighted above. The competency center should also set goals around moving the organization to new levels of maturity by focusing on the five dimensions of Big Data readiness (intent, data, people, process, technology).
            ';
            $this->pdf->writeHTMLCell(0, 0,'','', $intent_text,array('L'=>$this->style_small_orange));
        }

        public function dataText()
        {
            $data_settings = array(
                'stroke_width'=>0,
                'stroke_colour' => '#FF0000',
                'show_grid'=>true,
                'show_grid_h'=>true,
                'show_grid_v'=>false,
                'grid_colour'=>'#7C7C7C',
                'group_space'=>5,
                'bar_space'=>30,
                'show_bar_labels'=>true,
                'bar_label_colour_above'=>'#FFF',
                'bar_label_space'=>20,
                'bar_label_font_weight'=>'bold',
                'bar_label_font_size'=>12,
                'units_label'=>'%',
                'show_axis_h'=>false,
                'show_axis_v'=>false,
                'axis_colour' => '#fff',
                'axis_overlap' => 0,
                'axis_font' => 'arial',
                'axis_font_size' => 12,
                'axis_text_position_v'=>-10,
                'axis_max_v'=>30,
                'grid_division_v' => 5,
                'pad_right' => 0,
                'pad_left' => 0,
                'legend_back_colour'=>'#000',
                'legend_entries'=>array('Complete', 'Actionable'),
                'legend_stroke_width'=>0,
                'legend_font_size'=>12,
                'legend_colour'=>'#FFF',
                'label_h'=>'Time taken to achieve ROI',
                'label_font_size'=>14,
                'label_font_weight'=>'bold',
                'label_colour'=>'#FFF'

            );
             
            $colours = array('#F39D1E','#43C7F4');

            $this->pdf->AddPage();

            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY(), $this->pdf->getPageWidth()-$this->margins['left']-$this->margins['right'], 75, 1.75, '1111', 'F',array(), array(239, 171, 30));
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY()+1.25, $this->pdf_w - $this->margins['left'] - $this->margins['right'], 75, 1.75, '1111', 'F',array(), array(0));

            $this->pdf->setPageMark();

            
            $this->pdf->SetXY($this->pdf->GetX(), $this->pdf->GetY()+5);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'I', 7.5);
            $this->pdf->SetCellPaddings(5,0,0,0);
            
            $data_text = '<h4>DATA</h4> <em>Data as a dimension can be defined as the quality, relevance, availability, trustworthiness, governance, security, and accessibility of multistructured data sourced from both internal and external sources. This would include data from an organization\'s transactional and sales systems, rich media, sensor data, mobile device data (text from social networks, for example), customer interaction data, and text from content repositories. These different sources and data types contribute to the "4Vs" of Big Data — volume, velocity, variety, and value — and are what underpins any Big Data analysis activities.<br/>
                IDC research shows that organizations that have access to more complete data sets (all the data needed from multiple sources and various types) achieve faster ROI on their Big Data projects.<br/>
                <strong>23%</strong> of organizations that deliver Big Data ROI in six months "completely agree" that data is "actionable" for effective decision making. If combined with organizations that "agree," <strong>77%</strong> were able to deliver ROI within six months.
                In organizations that take more than 12 months to deliver ROI, only <strong>10%</strong> "completely agree" that they have access to data that is "actionable" for effective decision making.
            ';
            $this->pdf->writeHTMLCell(95, 0,'','', $data_text,array('R'=>$this->style_small_dot_orange),0);

            $cur_x = $this->pdf->GetX();

            $this->pdf->SetColor('text', 239,171,30);
            $this->pdf->SetFont('helvetica', 'B', 8);
            $this->pdf->MultiCell(90,0,'Percentage of Organizations That Completely Agree That Complete and Actionable Information is Available to Support Decision Making',0,'L');

            $barGraph = new SVGGraph(437, 300, $data_settings);
            $barGraph->colours = $colours;
            $values = array(array('&lt; 6 Months'=>24,'Over 12 Months'=>16),array('&lt; 6 Months'=>23,'Over 12 Months'=>10));
            //$values = array(array(10,20),array(30,40));
            $barGraph->Values($values);
            //first graph
            $this->pdf->SetLineStyle($this->style_small_orange);
            $output = $barGraph->fetch('GroupedBarGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10, $this->pdf->GetY()+2, $w=80, $h='', '', $align='', $palign='', '', $fitonpage=false);


            $this->pdf->SetXY($cur_x+5, $this->pdf->GetY()+54);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'B', 7.5);
            $this->pdf->SetCellPadding(2);
            //first graph Label
            //$this->pdf->MultiCell(40,0,'Ad hoc and Opportunistic',0,'C',false,0);
            //second graph Label
            //$this->pdf->MultiCell(40,0,'Managed and Optimized',0,'C');

            $this->pdf->SetXY($this->margins['left']+36, $this->pdf->GetY()+20);
            $this->pdf->SetCellPaddings(5,0,0,0);
            //defaultText
            $this->defaultText($this->pdf);
            $data_text = '<h4>RECOMMENDATIONS:</h4>
                <h4>1. Map the right data sources to the relevant Big Data projects.</h4>
                The data sources in the new world of Big Data are often external to the traditional corporate IT systems. This makes it increasingly difficult to ensure the right data is being sourced for the right analysis, and involves significantly more data exploration and profiling. The IT department needs to be involved in this discussion to ensure that the data sourced fits into the broader data governance framework, especially from a regulatory standpoint around data protection and privacy. 
                <h4>2. Ensure that enterprisewide access to timely, trusted, comprehensive data sets is maintained over time.</h4>
                This is particularly important to sustain as new Big Data initiatives are devised and implemented. 23% of organizations that deliver Big Data ROI in six months "completely agree" that data needs to be "actionable" for effective decision making. Only 10% of organizations that take more than 12 months to deliver Big Data ROI "completely agree" that data needs to be "actionable" for effective decision making. 
                <h4>3. Getting actionable data to end users might include a "real-time" element, but often it does not.</h4>
                It is more about "right time" — and normally could be best served by historical data. The right approach in this respect is to monitor business use of the Big Data systems to understand when requirements change as it relates to accessing more timely data and ensuring that the underlying data processes change in parallel.
                <h4>4. Drive organizational excellence on data governance.</h4>
                No other area dictates the quality of all your Big Data projects as your data governance discipline. With the average analytics project consuming 70% of the costs in handling, managing, and preparing the data, this is by far the biggest effort you will undertake in your Big Data initiatives. Without strict enterprisewide control on how data is defined, specific to your industry and business, the results you get from any system will be of questionable value. At the same time, there needs to be enough flexibility to prevent business users from creating their own data silos as part of "shadow IT" initiatives. This is an ongoing process which will always involve cleaning data before it enters the system, and having a clear definition of how it gets transformed as it moves through the data management platform. As external data needs to be included in Big Data projects, the requirement to get the data governance right becomes even more critical. Invest in the technology but, more importantly, invest in the process.
            ';
            $this->pdf->writeHTMLCell(0, 0,'','', $data_text,array('L'=>$this->style_small_orange));
        }

        public function techText()
        {
            $settings = array(
              'back_colour' => '#FF0000',
              'stroke_colour' => '#ff0000',
              'back_stroke_width' => 0,
              'back_stroke_colour' => '#FF0000',
              'pad_right' => 20,
              'pad_left' => 20,
              'link_base' => '/',
              'link_target' => '_top',
              'show_labels' => false,
              'show_label_amount' => false,
              'label_font' => 'Arial',
              'label_font_size' => '20',
              'label_colour' => '#FFF',
              'units_before_label' => '',
              'sort' => false,

              'inner_radius' => 0.7,
              'start_angle' => -90,
              'inner_text' => '',
              'inner_text_font' => 'Impact',
              'inner_text_font_size' => 60,
              'inner_text_colour' => '#F39D1E'
            );
             
            $colours = array('#F39D1E','#FFF');

            $this->pdf->AddPage();
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY(), $this->pdf->getPageWidth()-$this->margins['left']-$this->margins['right'], 50, 1.75, '1111', 'F',array(), array(239, 171, 30));
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY()+1.25, $this->pdf_w - $this->margins['left'] - $this->margins['right'], 50, 1.75, '1111', 'F',array(), array(0));

            $this->pdf->setPageMark();

            
            $this->pdf->SetXY($this->pdf->GetX(), $this->pdf->GetY()+5);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'I', 7.5);
            $this->pdf->SetCellPaddings(5,0,0,0);
            
            $tech_text = '<h4>TECHNOLOGY</h4>
            <em>The technology measure includes attributes such as appropriateness, applicability, integration, support for standards, and performance of technology and IT architecture to the relevant Big Data workloads.<br/><br/>
                IDC research shows that organizations that use in-memory databases and advanced and predictive analytics tools show a higher propensity to use Big Data analytics as a central part of improving business processes and guiding business decisions.
            </em>';
            $this->pdf->writeHTMLCell(95, 0,'','', $tech_text,array('R'=>$this->style_small_dot_orange),0);

            $cur_x = $this->pdf->GetX();

            $this->pdf->SetColor('text', 239,171,30);
            $this->pdf->SetFont('helvetica', 'B', 8);
            $this->pdf->MultiCell(90,0,'Percentage of Organizations Using In-Memory Database',0,'L');

            $settings['inner_text']='81%';
            $graph = new SVGGraph(300, 300, $settings);
            $graph->colours = $colours;
            $values = array(81,19);
            $graph->Values($values);
            //first graph
            $output = $graph->fetch('DonutGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+25, $this->pdf->GetY(), $w=35, $h='', '', $align='', $palign='', '', $fitonpage=false);

            $this->pdf->SetXY($cur_x+5, $this->pdf->GetY()+32);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'B', 7.5);
            $this->pdf->SetCellPadding(2);
            //first graph Label
            $this->pdf->MultiCell(80,0,'81% of organizations that are using in-memory databases deliver Big Data ROI within 12 months.',0,'C',false,0);
        

            $this->pdf->SetXY($this->margins['left']+36, $this->pdf->GetY()+25);
            $this->pdf->SetCellPaddings(5,0,0,0);
            //defaultText
            $this->defaultText($this->pdf);
            $tech_text = '<h4>RECOMMENDATIONS FOR TECHNOLOGY:</h4>
                <h4>1. Align Big Data technologies to user analytical objectives.</h4>
                Which Big Data technology is best suited for which analytical use case? The answer is dependent on a number of variables. The type of data (unstructured, semistructured, or structured), the size of the data set, the number of potential concurrent users, how quickly users need to analyze the data, and the type of infrastructure required — these are a few of the many examples that play a role here. More importantly, it is critical to be aware of a major Big Data technology misconception relating to Hadoop. Though solutions based on Hadoop and MapReduce are growing rapidly, Big Data solutions are also built on datawarehouses based on relational databases. This is driving significant growth in the traditional data management technology world. There are a growing number of specialized relational and non-relational technologies for Big Data management, which include the aforementioned relational databases and Hadoop but also key value stores, graph databases, complex event processing tools, search engines, text analysis tools, predictive data analysis tools, visual discovery tools, and others. Getting access to the breadth of these technologies will become increasingly important to deal with the variety of Big Data use cases that continue to emerge. To effectively deploy these technologies, IDC recommends that organizations create the necessary business case (with associated metrics), assess customer references, and go through the relevant proofs-of-concept for these technologies.
                <h4>2. Assess the need for speed.</h4>
                Recent conversations with business executives indicate that being able to respond to changing market dynamics quicker is becoming a huge competitive differentiator. As such, the ability to get access to data and information in real time can have a significant impact on specific business outcomes. The use cases for real-time analytics have historically tended to be in the customer domain (for example, next best offer, personalized campaigns, etc.), but are also increasingly moving into the risk and compliance areas (fraud detection and regulatory compliance) as well as finance (profitability analysis and scenario planning). The availability of new types of data (e.g., geolocation or clickstream data) provides new inputs for different types of analysis, but, more importantly, the increasing availability of new technologies in the form of in-memory databases significantly improves performance of the analytical routines and is having a dramatic effect on traditional approaches to decision making. Organizations need to identify the key use cases where real-time analytics would drive the necessary competitive advantage and create the business case to deploy these technologies accordingly.
                <h4>3. Think about Big Data in the cloud.</h4>
                Although most current Big Data deployments are taking place on-premises, there is growing interest in running certain Big Data workloads in the cloud. There are Big Data use cases, such as those involving data "born in the cloud," where keeping it in the cloud for processing makes sense. In general, there is a trend toward techniques for bringing data and compute power closer together, to minimize the overhead of data movement. However, cloud deployments are not always feasible due to regulations. We have seen cases where an organization designs a Big Data system and creates a proof-of-concept in the cloud, but then deploys the production system on-premises to comply with specific data privacy and security regulations.
            ';
            $this->pdf->writeHTMLCell(0, 0,'','', $tech_text,array('L'=>$this->style_small_orange));
        }

        public function peopleText()
        {
            $settings = array(
              'back_colour' => '#FF0000',
              'stroke_colour' => '#ff0000',
              'back_stroke_width' => 0,
              'back_stroke_colour' => '#FF0000',
              'pad_right' => 20,
              'pad_left' => 20,
              'link_base' => '/',
              'link_target' => '_top',
              'show_labels' => false,
              'show_label_amount' => false,
              'label_font' => 'Arial',
              'label_font_size' => '20',
              'label_colour' => '#FFF',
              'units_before_label' => '',
              'sort' => false,

              'inner_radius' => 0.8,
              'start_angle' => -90,
              'inner_text' => '',
              'inner_text_font' => 'Impact',
              'inner_text_font_size' => 60,
              'inner_text_colour' => '#F39D1E'
            );
             
            $colours = array('#F39D1E','#FFF');

            $this->pdf->AddPage();
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY(), $this->pdf->getPageWidth()-$this->margins['left']-$this->margins['right'], 68, 1.75, '1111', 'F',array(), array(239, 171, 30));
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY()+1.25, $this->pdf_w - $this->margins['left'] - $this->margins['right'], 68, 1.75, '1111', 'F',array(), array(0));

            $this->pdf->setPageMark();

            
            $this->pdf->SetXY($this->pdf->GetX(), $this->pdf->GetY()+5);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'I', 7.5);
            $this->pdf->SetCellPaddings(5,0,0,0);
            
            $people_text = '<h4>PEOPLE</h4> <em>The people measure includes attributes such as technology and analytics skills, intra- and intergroup collaboration, and organizational structures, leadership, training, and cultural readiness. IDC research has shown that Big Data skills is a key challenge for most organizations, but also that organizations that have invested in developing or attaining these skills have benefited in terms of greater innovation.<br/><br/>
            <strong>66%</strong> of organizations that have implemented a Big Data strategy that is proactively used for business innovation either have all the necessary Big Data skills internally or have a broad set of internal skills, and also use external resources.<br/><br/>
            In comparison, only <strong>13%</strong> of organizations that use Big Data for pilot projects or validation activities feel they have the necessary Big Data skills internally or have a broad set of internal skills and use external resources.</em>';
            $this->pdf->writeHTMLCell(95, 0,'','', $people_text,array('R'=>$this->style_small_dot_orange),0);

            $cur_x = $this->pdf->GetX();

            $this->pdf->SetColor('text', 239,171,30);
            $this->pdf->SetFont('helvetica', 'B', 8);
            $this->pdf->MultiCell(90,0,'Percentage of organizations that have all the necessary internal Big Data skills or broad set of internal skills supplemented by external resources',0,'L');

            $settings['inner_text']='66%';
            $graph = new SVGGraph(300, 300, $settings);
            $graph->colours = $colours;
            $values = array(66,34);
            $graph->Values($values);
            //first graph
            $output = $graph->fetch('DonutGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10, $this->pdf->GetY()+2, $w=35, $h='', '', $align='', $palign='', '', $fitonpage=false);

            $settings['inner_text']='13%';
            $graph = new SVGGraph(300, 300, $settings);
            $graph->colours = $colours;
            $values = array(13,87);
            $graph->Values($values);
            //first graph
            $output = $graph->fetch('DonutGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10+40, $this->pdf->GetY()+2, $w=35, $h='', '', $align='', $palign='', '', $fitonpage=false);


            $this->pdf->SetXY($cur_x+5, $this->pdf->GetY()+37);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'B', 7.5);
            $this->pdf->SetCellPadding(2);
            //first graph Label
            $this->pdf->MultiCell(40,0,'Proactively use a Big Data Strategy for business innovation',0,'C',false,0);
            //second graph Label
            $this->pdf->MultiCell(40,0,'Businesses not equiped for Big Data',0,'C');

            $this->pdf->SetXY($this->margins['left']+36, $this->pdf->GetY()+20);
            $this->pdf->SetCellPaddings(5,0,0,0);
            //defaultText
            $this->defaultText($this->pdf);
            $people_text = '<h4>RECOMMENDATIONS TO IMPROVE PEOPLE METRICS:</h4>
                <h4>1. Put in place a "dynamic" Big Data strategy.</h4>
                This may already be in place, but it needs to be treated as a very dynamic and transparent concept, with constant updates from various stakeholders (from IT, the analytics team, business executives, and users) across the organization. It will require the leveraging of best practices from a leading department or business unit and replicating that approach into new areas. IT will need to be involved to ensure that the right governance model and integration capabilities are put in place up front. For example, in a recent discussion with a large bank, it became clear that a successful Big Data analytics project focused on risk-adjusted profitability for large corporate transactions could not be integrated with its existing CRM system because IT had not been involved from the outset. The Big Data strategy needs to address all five dimensions highlighted above (people, data, people, process, technology) and, most importantly, needs to be signed off and supported by a C-level business executive.
                <h4>2. Note that every Big Data project needs a clear desired business outcome and business case.</h4>
                Getting this agreed to from the outset will shape all decisions going forward on your approach to analytics — traditional or Big Data. Securing buy-in from line-of-business and IT is a greater reality when both sides have agreed on the expected outcomes. As part of this, there is a requirement to consolidate the budget for the Big Data project across the wider organization, but with the flexibility of ad hoc funding for specific projects (potentially driven by identified business units) where appropriate. Where budgeting is uncoordinated and investments are done at the departmental or even business unit level, the organization will end up with multiple disparate Big Data technologies and skill sets. Once the budgeting approach is in place, each new Big Data project will require a business case which quantifies the outcomes into revenue gains, cost reduction, or risk reduction that can be used to determine how much investment is required. Using a standard calculation to estimate the return on investment (ROI) will allow executive sponsors to support the initiative, or not. Measuring ROI requires a high level of discipline to establish an "as is" state of the business and compare this with the post-deployment state. Although some organizations indicate that an ROI evaluation is not required for new Big Data projects, or that it is too difficult to do, it is an absolute necessity as a basis to secure future funding for new projects.
                <h4>3. Set up a Big Data competency center.</h4>
                If you already have a datawarehousing or business analytics competency center in place, then this can be the next iteration of that function. If not, you should look to create this group and ensure that it includes stakeholders from IT, business, and analytics functions. It should preferably sit in the business, under the COO or CEO if appropriate. This entity should bring together all components of a Big Data strategy including stakeholders, technology architecture, analytical skills, and vendor and service management. This will help raise the profile of Big Data projects internally and should be the driver for the strategy and budgeting process highlighted above. The competency center should also set goals around moving the organization to new levels of maturity by focusing on the five dimensions of Big Data readiness (people, data, people, process, technology).
            ';
            $this->pdf->writeHTMLCell(0, 0,'','', $people_text,array('L'=>$this->style_small_orange));
        }

        public function processText()
        {
            $process_settings = array(
                'stroke_width'=>0,
                'stroke_colour' => '#FF0000',
                'show_grid'=>true,
                'show_grid_h'=>true,
                'show_grid_v'=>false,
                'grid_colour'=>'#7C7C7C',
                'group_space'=>5,
                'bar_space'=>30,
                'show_bar_labels'=>true,
                'bar_label_colour_above'=>'#FFF',
                'bar_label_space'=>20,
                'bar_label_font_weight'=>'bold',
                'bar_label_font_size'=>12,
                'units_label'=>'%',
                'show_axis_h'=>false,
                'show_axis_v'=>false,
                'axis_colour' => '#fff',
                'axis_overlap' => 0,
                'axis_font' => 'arial',
                'axis_font_size' => 12,
                'axis_text_position_v'=>-10,
                'axis_max_v'=>100,
                'grid_division_v' => 100,
                'pad_right' => 0,
                'pad_left' => 0,
                'legend_position'=>'top left 5 5',
                'legend_back_colour'=>'#000',
                'legend_entries'=>array('Ad Hoc and Opportunistic', 'Repeatable', 'Managed and Optimized'),
                'legend_stroke_width'=>0,
                'legend_font_size'=>12,
                'legend_colour'=>'#FFF',
                'label_h'=>'Big Data Maturity',
                'show_axis_text_h'=>false,
                'label_font_size'=>14,
                'label_font_weight'=>'bold',
                'label_colour'=>'#FFF'

            );
             
            $colours = array('#F39D1E','#43C7F4','#FFF');

            $this->pdf->AddPage();

            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY(), $this->pdf->getPageWidth()-$this->margins['left']-$this->margins['right'], 75, 1.75, '1111', 'F',array(), array(239, 171, 30));
            $this->pdf->RoundedRect($this->margins['left'],$this->pdf->GetY()+1.25, $this->pdf_w - $this->margins['left'] - $this->margins['right'], 75, 1.75, '1111', 'F',array(), array(0));

            $this->pdf->setPageMark();

            
            $this->pdf->SetXY($this->pdf->GetX(), $this->pdf->GetY()+5);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'I', 7.5);
            $this->pdf->SetCellPaddings(5,0,0,0);
            
            $process_text = '<h4>PROCESS</h4>
                <em>The process measure includes attributes such as processes for data collection, consolidation, integration, analysis, information dissemination and consumption, and decision making. <br/><br/>
                In organizations where Big Data maturity is ad hoc or opportunistic, only <strong>1%</strong> believe their Big Data, analytics, and decision support related measurement and management processes are in a continuous process of improvement, enabled by quantitative feedback for the process from piloting innovative new ideas.<br/><br/>
                In organizations where Big Data maturity is managed or optimized, <strong>86%</strong> believe their processes are continuously improving.</em>
            ';
            $this->pdf->writeHTMLCell(95, 0,'','', $process_text,array('R'=>$this->style_small_dot_orange),0);

            $cur_x = $this->pdf->GetX();

            $this->pdf->SetColor('text', 239,171,30);
            $this->pdf->SetFont('helvetica', 'B', 8);
            $this->pdf->MultiCell(90,0,'Percentage of organizations where continuous process improvement is enabled by quantitative feedback for the process from piloting innovative new ideas',0,'L');

            $barGraph = new SVGGraph(437, 300, $process_settings);
            $barGraph->colours = $colours;
            $values = array(1,16,86);
            //$values = array(array(10,20),array(30,40));
            $barGraph->Values($values);
            //first graph
            $this->pdf->SetLineStyle($this->style_small_orange);
            $output = $barGraph->fetch('BarGraph');
            $this->pdf->ImageSVG('@'.$output, $cur_x+10, $this->pdf->GetY()+2, $w=80, $h='', '', $align='', $palign='', '', $fitonpage=false);


            $this->pdf->SetXY($cur_x+5, $this->pdf->GetY()+54);
            $this->pdf->SetColor('text', 255,255,255);
            $this->pdf->SetFont('helvetica', 'B', 7.5);
            $this->pdf->SetCellPadding(2);
            //first graph Label
            //$this->pdf->MultiCell(40,0,'Ad hoc and Opportunistic',0,'C',false,0);
            //second graph Label
            //$this->pdf->MultiCell(40,0,'Managed and Optimized',0,'C');

            $this->pdf->SetXY($this->margins['left']+36, $this->pdf->GetY()+20);
            $this->pdf->SetCellPaddings(5,0,0,0);
            //defaultText
            $this->defaultText($this->pdf);
            $process_text = '<h4>IT IS IMPORTANT TO:</h4>
                <h4>1. Drive process repeatability based on user type.</h4>
                Ramp up efforts to monitor and document decision processes and outcomes to make the processes repeatable and to learn how decisions affected outcomes in previous situations. This could differ by type of user, whether that be an executive, a line-of-business manager, a business analyst, or a traditional user. Understanding how each of these users goes about the decision-making process will help to make those processes more repeatable and scalable across the broader organization.
                <h4>2. Categorize Big Data processes.</h4>
                Think about those data-driven decision processes that are most relevant to performance management, where decisions relate to business outcomes and exploration, where data is investigated to determine insights that could be one-time only or could demonstrate why the data should be integrated into performance management processes. As part of this, there should be an awareness that Big Data processes need to span the full spectrum of data collection, management, and analysis processes. 
                <h4>3. Drive process collaboration between various stakeholders.</h4>
                Work to improve collaboration between business units, analytical groups, and IT around Big Data. Generally, business units understand the nuances of the business requirements, while IT can play a valuable role in building systems on the principles of reusability, reducing the likelihood of creating silos. The analytics teams should aim to sit between IT and the business to help drive collaboration across the various departments. The Big Data competency center should play a coordinator role across these various sets of stakeholders.
            ';
            $this->pdf->writeHTMLCell(0, 0,'','', $process_text,array('L'=>$this->style_small_orange),1);
        }

        public function defaultText()
        {
            // Set font
            $this->pdf->SetFont('helvetica', '', 8);
            $this->pdf->SetColor('text', 88,88,91);
        }
 
    }