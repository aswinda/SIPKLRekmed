<?php

class MahasiswaController extends BaseController {

	public function viewMahasiswa()
	{
		return View::make('home.index');
	}

	public function insertMahasiswa() {
		return View::make('insert_mahasiswa');
	}

}