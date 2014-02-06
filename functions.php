<?
$input = $_GET["input"];
$input = strtolower($input);
$output;

if($input=="load" || $input=="reload") {
	$output = array(
		'type' => "text",
		'text' => "Welcome to Vishnu's site.<br/><br /> Type <bt>help</bt> at any time if you're lost",
	);
}

else if($input=="man" || $input=="help") {
	$output = array(
		'type' => "text",
		'text' => "<bt>
			whois<br/>
			pwd<br/>
			ls<br/>
			contact<br/>
			portfolio<br/>
			github<br/>
			twitter<br/>
			facebook</bt>");
}

else if($input=="whois" || $input=="whoami") {
	$output = array(
		'type' => "text",
		'text' => "Hey, I'm Vishnu Prem. I hack things.");
}

else if($input=="twitter") {
	$output = array(
		'type' => "url",
		'text' => "Getting you to Vishnu's twitter profile...(Input `c` to cancel)<br/>",
		'url' => "http://twitter.com/burnflare");
}

else if($input=="tweet") {
	$output = array(
		'type' => "url",
		'text' => "Send Vishnu a tweet!Input `c` to cancel)<br/>",
		'url' => "https://twitter.com/intent/tweet?screen_name=burnflare&text=Hey!");
}

else if($input=="facebook" || $input =="fb") {
	$output = array(
		'type' => "url",
		'text' => "Getting you to Vishnu's Facebook profile...(Input `c` to cancel)<br/>",
		'url' => "http://facebook.com/");
}

else if($input=="pwd") {
	$output = array(
		'type' => "text",
		'text' => "/etc/sudoes/make/me/sandwich");
}

else if($input=="ls") {
	$output = array(
		'type' => "text",
		'text' => "<high>Extensive experience in:</high>
		<br/>Objective-C
		<br/>PHP
		<br/>Java
		<br/>Git
		<br/>MySQL
		<br/><high>Familiar with:</high>
		<br/>C++
		<br/>Javascript
		<br/>HTML
		<br/>CSS
		<br/>PostgreSQL");
}

else if($input=="contact") {
	$output = array(
		'type' => "url",
		'text' => "Launching your mail client...(Input `c` to cancel)<br/>",
		'url' => "mailto:vishnu@vishnuprem.com?Subject=Contact%20Form&Body=Hey%20Vishnu%2C%0A%0A");

}


else if($input=="resume") {
	$output = array(
		'type' => "url",
		'text' => "Showing your my resume...(Input `c` to cancel)<br/>",
		'url' => "files/resume.pdf");

}

else {
	$output = "Command not found. <bt>help</bt> if you're lost";
}

if($output) {
	echo json_encode($output);
}
?>
