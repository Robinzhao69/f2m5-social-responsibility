<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getAllBlogs() {
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `blogs` ORDER BY `Titel` ASC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function createBlog($titel, $subtitel, $tekst){
	$connection = dbConnect();
	$sql = "INSERT INTO `blogs` (`Titel`, `Subtitel`, `Tekst`) VALUES (:Titel, :Subtitel, :Tekst )";
	$statement = $connection->prepare($sql);
	$params =[
		'Titel' => $titel,
		'Subtitel' => $subtitel,
		'Tekst' => $tekst,
	];
	$statement->execute($params);
}

