<?php
//Import all of our files
include("./interfaces/ReadWritable.php");
include("./classes/CourseManager.php");
include("./classes/Course.php");
include("./classes/IO/LocalReadWriter.php");
include("./classes/IO/RemoteReadWriter.php");

$courseApp = new CourseManager("john123", new LocalReadWriter());
$courseApp = new CourseManager("john123", new RemoteReadWriter());

echo $courseApp->getCourses();
echo $courseApp2->getCourses();



?>