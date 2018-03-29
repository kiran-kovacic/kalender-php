<?php

require(ROOT . "model/CalendarModel.php");

function index()
{
	$birthdays = getAllBirthdays();

	render("calendar/index", array(
		'birthdays' => $birthdays)
	);
}

function create()
{
	render("calendar/create");
}

function createSave()
{
	if (createBirthday()) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function deletePage($id)
{
	$birthday = getBirthday($id);

	render("calendar/delete", array(
		"birthday" => $birthday
	));
}

function delete($id)
{
	if (deleteBirthday($id)) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();
	}
}

function editPage($id)
{
	$birthday = getBirthday($id);

	render("calendar/edit", array(
		"birthday" => $birthday
	));
}

function edit($id)
{
	if (editBirthday($id)) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}
