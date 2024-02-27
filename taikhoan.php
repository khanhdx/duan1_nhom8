<?php
function  insert_taikhoan($user, $password, $email, $address, $phone)
{
    $sql = "INSERT INTO users(user,password,email,address,phone) VALUES('$user','$password','$email','$address', '$phone')";
    pdo_execute($sql);
}
function checkuser($user, $password)
{
    $sql = "SELECT * FROM users WHERE user='" . $user . "' AND  password='" . $password . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_users()
{
    $sql = "SELECT * FROM users ORDER BY id asc";
    $listusers = pdo_query($sql);
    return $listusers;
}
function loadone_users($id)
{
    $sql = "SELECT * FROM users WHERE id=" . $id;
    $suatk = pdo_query_one($sql);
    return $suatk;
}
function check_users($name, $email, $password){
    $sql = "SELECT * FROM users WHERE name_user='".$name."' AND email='".$email."' AND password='".$password."'";
    $check = pdo_query_one($sql);
    return $check;
}
function check_email_pass( $email){
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $check_email = pdo_query_one($sql);
    return $check_email;
}

function update_users_ad($id, $user, $email, $phone, $address, $password, $gender,$roles,$hinh)
{

    if($hinh != ""){
        $sql = "UPDATE users SET user ='" . $user . "', email ='" . $email . "', phone ='" . $phone . "', address ='" . $address . "', password ='" . $password . "', gender ='" . $gender . "', roles ='" . $roles . "',img ='" . $hinh . "' WHERE id=" . $id;
    }else{
        $sql = "UPDATE users SET user ='" . $user . "', email ='" . $email . "', phone ='" . $phone . "', address ='" . $address . "', password ='" . $password . "', gender ='" . $gender . "', roles ='" . $roles . "',img ='" . $hinh . "' WHERE id=" . $id;
    }
    pdo_execute($sql);
}

function delete_user($id){
        $sql = "DELETE FROM users WHERE id =" .$id;
        pdo_execute($sql);


}



function   update_taikhoan($id,$user, $password, $email, $phone, $address)
{  
        $sql = "UPDATE users SET user='" . $user . "', password='" . $password . "' ,email='" . $email . "',phone='" . $phone . "',address='" . $address . "' where id=" . $id;
        
    pdo_execute($sql);
}
?>

