<?php 

class RemoteReadWriter implements IReadWritable{

    public function getCourses(){
        return "remote courses";
    }

    public function addCourse($course){
        arraypush($course);
        return "remote course added";
    }

    public function deleteCourse($id){
        if (in_array($id, $array)) 
        {
            unset($array[array_search($id,$array)]);
        }        return "remote course deleted";
    }

    public function completeCourse($id){
        if (in_array($id, $array)) 
        {
            return "course completed";
        }
    }
}