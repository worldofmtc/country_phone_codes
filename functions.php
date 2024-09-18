<?php 



//  $con pdo database  pdo veritabanı bağlantısı
function country_phone($id,$column,$eksql){
    global $con;

        if ($id != '') {
            $eksql .= " AND id = ".$id;
        }
        $sql = "SELECT ".$column." FROM country_phone_codes WHERE 1=1 " . $eksql;
        $query = $con->prepare($sql);
        $query->execute();
 
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return "0";
        } 
 }


 function delete_country_phone($id) {
    global $con;

    $sql = "DELETE FROM country_phone_codes WHERE id = :id";
    $query = $con->prepare($sql);
    $result = $query->execute(array(":id" => $id));

    if ($result) {
        return "1"; 
    } else {
        return "0"; 
    }
}


function insert_country_phone($code, $country) {
    global $con;

    $query = $con->prepare("INSERT INTO country_phone_codes (country_name, phone_code) VALUES (:country_name, :phone_code)");
    $result = $query->execute(array(':country_name' => $country, ':phone_code' => $code));

    if ($result) {
       return 1; 
    } else {
        return 0; 
    }
}


function update_country_phone($id, $new_country_name, $new_phone_code) {
    global $con;

    $sql = "UPDATE country_phone_codes 
            SET country_name = :country_name, phone_code = :phone_code 
            WHERE id = :id";
    
    $query = $con->prepare($sql);
    $result = $query->execute(array(
        ":id" => $id,
        ":country_name" => $new_country_name,
        ":phone_code" => $new_phone_code
    ));

    if ($result) {
        return "1"; 
    } else {
        return "0"; 
    }
}

?>