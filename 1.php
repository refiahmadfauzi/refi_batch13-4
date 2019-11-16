<?php 
//method/function untuk me-return biodata
function biodata(){
    $name = "Refi Ahmad Fauzi";
    $age = 19;
	$address = "Weningsari RT 03 RW 02 Desa Winduraja Kec.Kawali Kab.Ciamis";
    $hobbies = ["Gamming","Ngoding","Design"] ;
    $is_married = false;
    $list_school = ["SMK Negeri 1 Kawali","2015","2018"];
    $skill =  ["js", "php", "java", "bootstrap","codeigniter"];
    $level = ["advance", "advance", "advance", "advance", "beginer"]; 
    $interst_in_coding = true;
	
    return array(
            "name" => $name,
			"age" => $age,
            "address" => $address,
            "hobbies" => $hobbies,
            "is_married" => $is_married,
            "list_school" => $list_school,
            "skill" => $skill,
            "level" => $level
    );
}
//memanggil function
$biodata = biodata();
$biodata_tojson = [
    "name"=> $biodata['name'],
	"age" => $biodata['age'],
    "address" => $biodata['address'],
    "hobbies"=> $biodata['hobbies'],
    "is_married"=> $biodata['is_married'],
    "list_school"=> $biodata['list_school'], 
    "skills"=> ["name"=> $biodata['skill'],
                    "level"=> $biodata['level']],
    ];
//Return value ke format JSON
$data = json_encode($biodata_tojson);
echo $data;
//telah diuji di https://www.onlinegdb.com/ by refi ahmad fauzi 