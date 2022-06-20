<?php
class CourseManager {
    private string $username;
    private IReadWritable $persister;
    private array $course = [];

    public function __construct(string $username, IReadWritable $persister) {
        $this->username = $username;
        $this->persister = $persister;
    }

    public function getCourses(){
        this->persister->getCourses();
    }

    public function addCourse($course){
        //some logic to add that course to the file
        this->persister->addCourse($course);
    }

    public function deleteCourse($id){
        //lookup course in file by id and remove it
        this->persister->deleteCourse($id);
    }

    public function completeCourse($id){
        //lookup the course in the file by id and mark it as complete
        this->persister->completeCourse($id);
    }
}
