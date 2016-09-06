<?php
 
 
    class AssesmentController extends BaseController {

        var $numSections = false;
        var $quiz = false;
        var $menu = false;
        var $baseline = false;
		var $userid;
        var $howfit = false;
		var $report;


        public function loadQuestions(){
            $this->quiz=Session::get('questions');
            if(!$this->quiz) return Redirect::to('/');
            $this->numSections=count($this->quiz);
            $temp = array();
            foreach ($this->quiz as $key => $value) {
                $temp[$key]['display']=isset($value['display']) ? $value['display']:true;
                $temp[$key]['numpages']=count($value['pages']);
                $temp[$key]['class']=isset($value['class']) ? $value['class']:'sec1';
                $temp[$key]['complete']=isset($value['complete']) ? $value['complete']:false;
                $i = 1;
                foreach ($value['pages'] as $pkey => $page) {
                    $temp[$key]['pages'][$pkey]['done'] = isset($page['done'])? true : false;
                    $temp[$key]['pages'][$pkey]['progress'] = $i.' '.Lang::get('general.of').' '.$temp[$key]['numpages'];
                    $i++;
                }
            }
            $this->menu = $temp;
        }

        public function getPage($section=false, $page=false, $cunt=false)
        {
            if($section===false || $page===false) return Redirect::to('/');
            $this->loadQuestions();
            if(!isset($this->quiz[$section]['pages']['page'.$page])) return Redirect::to('/');

            $data = $this->quiz[$section];
            $sectionQuestions = $data['pages']['page'.$page];

            $script = false;
            foreach ($sectionQuestions['questions'] as $number => $question) {
                if(isset($question['script'])){
                    $script[]=$question['script'];
                }
            }
			$currentLocal = App::getLocale();
			$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
			$btnsize = '-small';
			if($localQuestions=='es'){
				$btnsize = '-small lang';
			}
            $vars = array(
                'questions' => $sectionQuestions['questions'],
                'heading' => $sectionQuestions['title'],
                'report' => isset($sectionQuestions['report']) ? $sectionQuestions['report']:false,
                'menu' => $this->menu,
                'class' => $data['class'],
                'section'=>$section,
                'page'=>$page,
                'script'=>$script,
				'btnsize'=>$btnsize
            );
            return View::make('question',$vars);
        }

        public function savePage($section=false, $page=false)
        {
            if($section===false || $page===false) return Redirect::to('/');
            $validate_data = Input::except('_token');
            
            Session::put('questions.'.$section.'.pages.page'.$page.'.questions.'.$validate_data['question'].'.selected', $validate_data['answer']);
            Session::put('questions.'.$section.'.pages.page'.$page.'.done', true);
			
			/*$new_step[$section]['pages']['page'.$page]['questions'][$validate_data['question']]['selected'] = $validate_data['answer'];
			$new_step[$section]['pages']['page'.$page]['done'] = true;
			if(Session::has('questions.'.$section.'.pages.page'.($page+1))){
				$new_step[$section]['complete'] = true;
			}
			
			if(Cookie::has('quiz_progress')){
				$progress_id = Cookie::get('quiz_progress');
				$progress = Progress::find($progress_id);
				if(!$progress){
					$cookie = Cookie::forget('quiz_progress');
					return Redirect::to('/')->withCookie($cookie);
				}
				$existing = json_decode($progress->progress,true);
				$new_progress = array_merge_recursive($existing, $new_step);
				$progress->progress = json_encode($new_progress);
				$progress->save();
			}else{
				$progress = new Progress;
				$progress->progress=json_encode($new_step);
				$progress->source=json_encode(Session::get('source'));
				$progress->save();
				$progress_id = $progress->id;
			}
			$bake = $progress_id;
			
			$cookie = Cookie::make('quiz_progress', $bake, 2880);*/
            if(Session::has('questions.'.$section.'.pages.page'.($page+1))){
                //$this->getPage($section,$page+1);
                //return Redirect::to('quiz/'.$section.'/page'.($page+1))->withCookie($cookie);
				return Redirect::to('quiz/'.$section.'/page'.($page+1));
            }else{
              				
                $questions = Session::get('questions');
                while (key($questions) !== $section  && key($questions) !== null) {
                    next($questions);
                }
                next($questions);
                //if(key($questions)==null) return Redirect::to('quiz/complete')->withCookie($cookie);
				if(key($questions)==null) return Redirect::to('quiz/complete');
                //return $this->getPage(key($questions),1);
                //return Redirect::to('quiz/'.key($questions).'/page1')->withCookie($cookie);
				return Redirect::to('quiz/'.key($questions).'/page1');
            }
        }

        public function getComplete()
        {
            $this->loadQuestions();
            $this->calcResults();
			$currentLocal = App::getLocale();
			$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
			$btnclass = '';
			if($localQuestions=='es' || $localQuestions=='fr' || $localQuestions=='de' || $localQuestions=='it'){
				$btnclass = 'lang';
			}
            $vars = array(
                'heading' => Lang::get('general.youre').' '.strtoupper(Lang::get('general.'.strtolower($this->howfit['overall']['rating']))),
                'sub1' => $this->baseline['overall']['types'][$this->howfit['overall']['rating']]['copy'],
                'class' => 'sec1',
                'quiz' => $this->quiz,
				'source' => Session::get('source'),
				'btnclass'=>$btnclass
            );
            return View::make('complete',$vars);
        }
        public function postComplete()
        {
            $this->loadQuestions();
            $this->howfit=Session::get('result');
            $this->baseline = Session::get('baseline');

            $validate_data = Input::except('_token');
            $rules = array(
                'fname'=>'required',
                'sname'=>'required',
                'email'=>'required',
                'company'=>'required',
				'country'=>'required',
                'terms'=>'required'
            );

            $validator = Validator::make($validate_data, $rules);

            if ($validator->passes()) {
                Session::put('user', $validate_data);
				
				//update source
				$currentLocal = App::getLocale();
				$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
				$source = array(
					'C_emailAddress'=>$validate_data['email'],
					'C_FirstName'=>$validate_data['fname'],
					'C_LastName'=>$validate_data['sname'],
					'C_Company'=>$validate_data['company'],
					'C_Country'=>$validate_data['country'],
					'C_BusPhone'=>$validate_data['phone'],
					'form_source'=>Input::get('form_source')
				);
				
				Session::put('source', $source);
				
				//save in db
				$user = new User;
				$user->fname = $validate_data['fname'];
				$user->lname = $validate_data['sname'];
				$user->email = $validate_data['email'];
				$user->company = $validate_data['company'];
				$user->country = $validate_data['country'];
				$user->tel = $validate_data['phone'];
				$user->quiz = json_encode($this->quiz);
				$user->result = json_encode($this->howfit);
				
				$user->save();
				$this->userid = $user->id;
				$validate_data['userid'] = $user->id;
				
				//generate report
				$this->generateReport();
				$curloc = App::getLocale();
				
				/*if(!App::isLocal()){
					//send guzzle request
					$client = new GuzzleHttp\Client();
					$url = 'https://s2048.t.eloqua.com/e/f2.aspx';
					//$url = 'http://www.google.com';
					try {
						$request = $client->createRequest('GET', $url);
						$query = $request->getQuery();
						$query['elqFormName'] = Lang::get('general.elqFormName');
						$query['elqSiteID'] = '2048';
						foreach($source as $key=>$item){
							$query[$key] = $item;
						}
										
						$response = $client->send($request);
					} catch (GuzzleHttp\Exception\RequestException $e) {
						
						Mail::queue('emails.errors', array('process'=>'Guzzle', 'message'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')), function($message)
						{
							$message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on HP Tech Quiz! ('.$curloc.')');
						});
					}
				}*/

				$subject = Lang::get('email.report');
				//send mail to user
                Mail::queue('emails.'.$curloc.'download', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'userid'=>$validate_data['userid']), function($message)  use ($validate_data, $subject, $curloc){

                    $message->to($validate_data['email'], $validate_data['fname'].' '.$validate_data['sname'])->subject($subject);
                });
				
				//send mail to notification people
				if(App::isLocal()){
					$emails = ['roarkmccolgan@gmail.com'];
				}else{
					$emails = ['roarkmccolgan@gmail.com'];
				}
				Mail::queue('emails.notification', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'email'=>$validate_data['email'], 'company'=>$validate_data['company'], 'phone'=>$validate_data['phone'], 'score'=>$this->howfit['overall']['score'], 'rating'=>$this->howfit['overall']['rating'], 'userid'=>$validate_data['userid']), function($message)  use ($validate_data, $emails, $curloc){

                    $message->to($emails)->subject('Agil-IT-y Assessment Completed ('.$curloc.')');
                });
				
				$vars = array(
                    'heading' => Lang::get('general.hi').' '.$validate_data['fname']." ".$validate_data['sname'].",",
                    'sub1' => Lang::get('general.soon'),
                    'tweet' => $this->baseline['overall']['types'][$this->howfit['overall']['rating']]['tweet'],
                    'class' => 'sec1',
                    'script' => ['
                        _gaq.push([\'_trackEvent\', \'Form Submit\', \'Registration\']);
                        '],
                    'quiz' => $this->quiz
                );
				/*if(Cookie::has('quiz_progress')){
					$progress_id = Cookie::get('quiz_progress');
					$progress = Progress::find($progress_id);
					if($progress) $progress->delete();
				}
				$cookie = Cookie::forget('quiz_progress');*/
				
                //return View::make('thankyou',$vars)->withCookie($cookie);
				return View::make('thankyou',$vars);
            }
            Input::flashExcept('_token');
            return Redirect::to('quiz/complete')->withErrors($validator);
        }
        public function getDownload($userid){
            //PDF file is stored under project/public/download/info.pdf
			$user = User::find($userid);
            $file= storage_path().'/reports/'.$user->id.'_'.str_replace(" ", "_", $user->fname).'_'.str_replace(" ", "_", $user->lname).'_Agility_Assessment_Report.pdf';
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, $user->id.'_'.str_replace(" ", "_", $user->fname).'_'.str_replace(" ", "_", $user->lname).'_Agility_Assessment_Report.pdf', $headers);
        }

        private function calcResults(){
            $this->baseline = Config::get('baseline');
            $result = array();
            $result['overall']['score'] = 0;
		
            foreach ($this->quiz as $key => $value) {
                if($key!=='screeners'){
                    foreach ($value['pages'] as $page => $props) {
                        foreach ($props['questions'] as $q => $details) {
                            if($details['type']=='checkbox' && is_array($details['selected'])){
                                $valHold = 0;
                                foreach ($details['selected'] as $selected) {
                                    $selected = explode('|', $selected);
                                    $selected = $selected[1];
                                    $valHold+=$selected;
                                }
                                $val = $valHold;
                                if(count($details['selected'])==1 && strrpos($details['selected'][0], "Unsure")!==false){
                                    $val = 1;
                                }elseif(count($details['selected'])==1 || count($details['selected'])==2){
                                    $val = 3;
                                }elseif(count($details['selected'])>=3){
                                    $val = 5;
                                }
                            }else{
                                $val = explode('|', $details['selected']);
                                $val = $val[1];
                            }
                            if (isset($result[$key]['score'])){
                                $result[$key]['score'] += $val;
                            } else {
                                $result[$key]['score'] = $val;
                            }
                        }
                        foreach ($this->baseline[$key]['types'] as $rating => $limits) {
                            if($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']){
                                $result[$key]['rating'] = $rating;
                                $result['overall']['score'] += $limits['total'];
                            }
                        }
                    }
                    //$result['overall']['score'] += $result[$key]['score'];
                    foreach ($this->baseline['overall']['types'] as $rating => $limits) {
                        if($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']){
                            $result['overall']['rating'] = $rating;
                        }
                    }
                }
            }
			
            Session::put('result', $result);
            Session::put('baseline', $this->baseline);
			$this->howfit = $result;
            
        }
		
		private function generateReport(){
			$this->baseline = Config::get('baseline');
            $this->report = new Pdf;
			
			$time_start = microtime(true);

            $this->report->SetTitle('Your Tech Fitness Report');
            $this->report->AddPage();
			$this->report->intro($this->howfit,$this->baseline,$this->quiz);
            //$this->pdf->SetFont(K_PATH_FONTS.'Latinotype - Arquitecta.otf');
            //$this->pdf->mainGraph($this->guest_name,$this->guest_company,$this->intent_score,$this->data_score,$this->tech_score,$this->people_score,$this->process_score,$this->overall_score);
            
            $time_end = microtime(true);
            $execution_time = round($time_end - $time_start,2);
            $this->report->SetY($this->report->GetY()+2);
            //$this->report->cell(120,0, 'report took '.$execution_time.'seconds to generate');
			$this->report->SetDisplayMode('fullpage'); 
            $this->report->Output(storage_path().'/reports/'.$this->userid.'_'.str_replace(" ", "_", Session::get('user.fname')).'_'.str_replace(" ", "_", Session::get('user.sname')).'_Agility_Assessment_Report.pdf','F');
        }
 
    }
