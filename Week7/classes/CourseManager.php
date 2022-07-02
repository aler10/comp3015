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
        arraypush($course);
        this->persister->addCourse($course);
    }

    public function deleteCourse($id){
        if (in_array($id, $array)) 
        {
            unset($array[array_search($id,$array)]);
        }        
        this->persister->deleteCourse($id);
    }

    public function completeCourse($id){
        if (in_array($id, $array)) 
        {
            return "course completed";
        }        
        this->persister->completeCourse($id);
    }
}
