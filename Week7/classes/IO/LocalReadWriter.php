<?php 

class LocalReadWriter implements IReadWritable{

    public function getCourses(){
        return "courses";
    }

    public function addCourse($course){
        arraypush($course);
        return "course added";
    }

    public function deleteCourse($id){
        if (in_array($id, $array)) 
            {
                unset($array[array_search($id,$array)]);
            }
        return "course deleted";
    }

    public function completeCourse($id){
        if (in_array($id, $array)) 
        {
            return "course completed";
        }   
     }
}