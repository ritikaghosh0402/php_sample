<?php
include 'Database.php';
    
    function addUser($user_arr)
    {
        $n=$user_arr['txt'];
        $pa=$user['pass'];
        $e_pa=md5($pa);
        $e=$user_arr['email'];
        $p=$user_arr['numb'];
        $g=$user_arr['gen'];
        $d=$user_arr['depart'];
        $h=$user_arr['hobby'];
        $b=$user_arr['text'];
       
        $con=$GLOBALS['con'];
        $sql="insert into topstackusers values(null,?,?,?,?,?,?,?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("ssssssss",$n,$e_pa,$e,$p,$g,$d,$h,$b); 
        if($st->execute())
        {
           return 1;
            //echo "1";
            // echo "<br>"."Success";
        }
        else
        {
            //return 0;
            echo $con->error;
    }
}

function getUsers(){
    $con=$GLOBALS['con'];
    $sql="select * from topstackusers";
    $result=$con->query($sql);
    $users=array();
    if($result->num_rows>0){
    
        while ($row=$result->fetch_assoc())
        {
            //echo $row['Name']."<br>";
            $users[]=$row;
        }
    }
        return $users;
    
    
}
function dltuser($id)
{
    $con=$GLOBALS['con'];
    $sql="delete from topstackusers where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
       return true;
    }
    else{
        echo $con->error;
    }
    
}

function getUser($id)
{
    $con=$GLOBALS['con'];
    $sql="select * from topstackusers where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $result=$st->get_result();
        if($result->num_rows>0)
        {
            if($row=$result->fetch_assoc()){

            
                return $row;
         
            }
    }
}
   else{
      echo $con->error;
    }

}
function editUser($new_user)
{
    $id=$new_user['id'];
    $na=$new_user['txt'];
    $ma=$new_user['email'];
    $ph=$new_user['numb'];
    $gen=$new_user['gen'];
    $depart=$new_user['depart'];
    $hob=$new_user['hobby'];
    // $h=implode(",",$hobby);
    $bi=$new_user['text'];
    $con=$GLOBALS ['con'];
    $sql="update topstackusers set NAME=>?,MAIL=>?,PHONE=>?,DEPARTMENT=>?,GENDER=?,HOBBY=>?,BIO=>? where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("sssssssi",$na,$ma,$ph,$gen,$depart,$hob,$bi,$id);
    if($st->execute()){
        return true;
}
else{
    echo $con->error;
}
}

    function login($us){
        $con=$GLOBALS ['con'];
        $name=$us['NAME'];
        $pass=$us['pass'];
        $epass=md5($pass);
        $sql="select NAME,pass from topstackusers where NAME=? and pass=?";
        $st=$con->prepare($sql);
            $st->bind_param("ss",$name,$epass);
            if($st->execute()){
                $rs=$st->get_result();
                if($rs->num_rows>0){
                    
                        return true;
             }
            }
             else
             {
                    return false;
        
                }
           
        }

function uploadFile($name)
{
   
    $con=$GLOBALS['con'];
    $sql="insert into profile values(null,?)";
    $st=$con->prepare($sql);
    $st->bind_param("s",$name); 
    if($st->execute())
    {
        return 1;
      
    }
    else
    {
        return 0;
        
    }
}




?>