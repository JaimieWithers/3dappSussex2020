<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, modelDescription TEXT, galleryTitle TEXT, x3dModelTitle TEXT, x3dCreation TEXT, subtitleType TEXT, descriptionType TEXT, subtitleMaterials TEXT, descriptionMaterials TEXT, subtitleOrigin TEXT, descriptionOrigin TEXT, subtitleGallery TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(

			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (1, 'Find new styles', 'Gain insight into the unique styles of chair developed over the years', 'string_2', 'string_3','string_4','string_5', 'string_6','string_7','string_8', 'string_9','string_10','string_11', 'string_12'); ".
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (2, 'Explore the history of chairs', 'Understand the evolution of chair material', 'string_2', 'string_3','string_4','string_5', 'string_6','string_7','string_8', 'string_9','string_10','string_11', 'string_12'); " .
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (3, 'View a brief history of chairs', 'string_1', 'From Thomas Chippendales grand 18th-century designs, to a chair used at Charles IIs coronation and Peter Ghyczys futuristic Garden Egg, this museums collection of chairs covers a huge variety of design styles and manufacturing techniques. Many of these can be explored in the Dr Susan Weber Furniture Gallery.', '3D Image Gallery','string_4','string_5', 'string_6','string_7','string_8', 'string_9','string_10','string_11', 'string_12'); ". 
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (5, 'Description', 'string_1', 'string_2', 'string_3','Lounge chair X3D model','This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Type', 'Lounge chair', 'Materials', 'Lounge chairs can be made from a variety of materials, mainly a combination of leather and metal. This particular one consists of metal arms and a faux leather cover.', 'Origin and History of Lounge Chairs:', 'Lounge chairs in one form or another have been around for thousands of years, although for much of that time, they were playthings of the wealthy. The Lounge Chair as the term is understood today can trace its origins back to 1928, and were invented by Marcel Breuer, of Hungary. His original design was crafted from tubular steel, plated in chrome, and upholstered with leather.', 'Gallery location:109, D'); " .
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (6, 'string', 'string_1', 'string_2', 'string_3','Desk chair X3D model','string_5', 'Type','Desk chair / Cantilever chair','Materials', 'Typically a cantilever chair would be made with a wooden framework and an upholstered seat of some kind. In modern times, a steel bar was used as the framework. This particular one consists of a leather seat and back with a wooden base.','Origin and History of Cantilever Chairs:','A cantilever chair is a chair whose seating and framework are not supported by the typical arrangement of 4 legs, but instead is held erect and aloft by a single leg or legs that are attached to one end of a chairs seat and bent in an L shape, thus also serving as the chairs supporting base. Designed by Mart Stam in the 1920s', 'Gallery location:126, D'); " .
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (7, 'string', 'string_1', 'string_2', 'string_3','Childs chair X3D model','string_5', 'Type', 'Childrens modern plastic chair', 'Materials', 'This chair is made using metal legs with a bright green plastic body. The plastic chair is particularly good for children as it is easy to clean up any spills.', 'Origin and History of Childrens Chairs:', 'There are many different types of plastic chair, each one used for a different purpose. In this case the scoop of the seat makes it perfect for a child to use at dinner or whilst doing their homework.','Gallery Location:142, D'); ".
			"INSERT INTO Model_3D (Id, title, subtitle, modelDescription, galleryTitle, x3dModelTitle, x3dCreation, subtitleType, descriptionType, subtitleMaterials, descriptionMaterials, subtitleOrigin, descriptionOrigin, subtitleGallery) 
				VALUES (8, 'string', 'string_1', 'string_2', 'string_3','Dining chair X3D model','string_5', 'Type','Dining chair: Slat-back','Materials', 'Slat-back dining chairs typically feature a wooden frame with vertical slats that make up the back. Two common styles of slat-back chairs include the traditional Windsor design that features a fanned-out slatted back, and Mission or Shaker style chairs that feature clean, straight vertical slats framed by two horizontal slats.','Origin and History of slat-back Chairs:','The first Shaker slat-back chairs were probably made at the New Lebanon, New York, colony shortly after 1785. Between then and the beginning of the 19th Century, the management of this and other of their colonies in New England began to sell chairs to neighboring country stores.', 'Gallery Location:115, D'); ");
		

			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['title'] = $data['title']; // Not used in the view, instead using the fake dbGetBrand() function above
				$result[$i]['subtitle'] = $data['subtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$result[$i]['galleryTitle'] = $data['galleryTitle'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreation'] = $data['x3dCreation'];
				$result[$i]['subtitleType'] = $data['subtitleType'];
				$result[$i]['descriptionType'] = $data['descriptionType'];
				$result[$i]['subtitleMaterials'] = $data['subtitleMaterials'];
				$result[$i]['descriptionMaterials'] = $data['descriptionMaterials'];
				$result[$i]['subtitleOrigin'] = $data['subtitleOrigin'];
				$result[$i]['descriptionOrigin'] = $data['descriptionOrigin'];
				$result[$i]['subtitleGallery'] = $data['subtitleGallery'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

	public function dbGetJson()
	{
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['title'] = $data['title']; 
				$result[$i]['subtitle'] = $data['subtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$result[$i]['galleryTitle'] = $data['galleryTitle'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreation'] = $data['x3dCreation'];
				$result[$i]['subtitleType'] = $data['subtitleType'];
				$result[$i]['descriptionType'] = $data['descriptionType'];
				$result[$i]['subtitleMaterials'] = $data['subtitleMaterials'];
				$result[$i]['descriptionMaterials'] = $data['descriptionMaterials'];
				$result[$i]['subtitleOrigin'] = $data['subtitleOrigin'];
				$result[$i]['descriptionOrigin'] = $data['descriptionOrigin'];
				$result[$i]['subtitleGallery'] = $data['subtitleGallery'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		echo json_encode($result);
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data

		return array(
			'model_1' => 'Lounge chair 3D',
			'image3D_1' => 'loungechair',

			'model_2' => 'Desk chair 3D',
			'image3D_2' => 'deskchair',

			'model_3' => 'Child chair 3D',
			'image3D_3' => 'childschair',

			'model_4' => 'Dining chair 3D',
			'image3D_4' => 'diningchair',
		);
	}
}
?>