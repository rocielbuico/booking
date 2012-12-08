    <?php phpinfo(); 
	
		$services = getenv("VCAP_SERVICES");
		$services_json = json_decode($services,true);
		$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
		echo $mysql_config["hostname"]; 
		echo $mysql_config["port"];
		echo $mysql_config["user"];
		echo $mysql_config["password"];
		echo $mysql_config["name"];

	?>
