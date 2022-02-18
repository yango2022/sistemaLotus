<?php

	$this->load->view('header');

	$this->load->view('menu');

	$this->load->view('sidebar');

	$this->load->view('pages/' . $contents);

    $this->load->view('footer2');
