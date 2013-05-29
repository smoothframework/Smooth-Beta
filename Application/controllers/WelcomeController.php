<?php

	class WelcomeController extends Smooth\Controller
	{

		public function index()
		{
			$data = array('content' => 'WelcomeSmoothView');
			$this->render('includes/template', compact('data'));
		}

	}