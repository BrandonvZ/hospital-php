<?php

require(ROOT . "model/HomeModel.php");

function index()
{
	render("home/index", array(
	));	
}

function patients()
{
	render("home/patients", array(
		'patients' => getPatientsTable(),
	));
}

function clients()
{
	render("home/clients", array(
		'clients' => getClients()
	));
}

function species()
{
	render("home/species", array(
		'species' => getSpecies()
	));
}

function createPatient()
{
	render("home/createpatient", array(
		'species' => getSpecies(),
		'clients' => getClients()
	));
}

function addPatient()
{
	if(isset($_POST['Create'])) {
		$patient_name = $_POST['name'];
	    $species_id = $_POST['species'];
	    $client_id = $_POST['client'];
	    $patient_gender = $_POST['gender'];
	    $patient_status = $_POST['status'];

	    createNewPatient($patient_name, $species_id, $client_id, $patient_gender, $patient_status);
    }
}

function editPatient($id)
{
	render("home/editpatient", array(
		'id' => $id,
		'user' => getPatient($id),
		'species' => getSpecies(),
		'clients' => getClients()
    ));
}

function editPatientConfirm($id)
{
	$patient_name = $_POST['name'];
	$species_id = $_POST['species'];
	$client_id = $_POST['client'];
	$patient_gender = $_POST['gender'];
	$patient_status = $_POST['status'];

    confirmPatientEdit($id, $patient_name, $species_id, $client_id, $patient_gender, $patient_status);
}

function deletePatient($id)
{
	render("home/deletepatient", array(
		'id' => $id,
		'user' => getPatient($id)
	));
}

function createClient()
{
	render("home/createclient", array(
		'clients' => getClients()
	));
}

function addClient()
{
	if(isset($_POST['Create'])) {
		$client_firstname = $_POST['firstname'];
	    $client_lastname = $_POST['lastname'];

	    createNewClient($client_firstname, $client_lastname);
    }
}

function editClient($id)
{
	render("home/editclient", array(
		'id' => $id,
		'user' => getClient($id)
    ));
}

function editClientConfirm($id)
{
	$client_firstname = $_POST['firstname'];
	$client_lastname = $_POST['lastname'];

    confirmClientEdit($id, $client_firstname, $client_lastname);
}

function deleteClient($id)
{
	render("home/deleteclient", array(
		'id' => $id,
		'user' => getClient($id)
	));
}

function createSpecie()
{
	render("home/createspecie", array(
		'species' => getSpecies()
	));
}

function addSpecie()
{
	if(isset($_POST['Create'])) {
		$species_description = $_POST['speciename'];

	    createNewSpecie($species_description);
    }
}

function editSpecie($id)
{
	render("home/editspecie", array(
		'id' => $id,
		'user' => getSpecie($id)
    ));
}

function editSpecieConfirm($id)
{
	$species_description = $_POST['speciename'];

    confirmSpecieEdit($id, $species_description);
}

function deleteSpecie($id)
{
	render("home/deletespecie", array(
		'id' => $id,
		'user' => getSpecie($id)
	));
}