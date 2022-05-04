<?php
include 'DataFetch.php';
if(isset($_POST['Submit']))
{
    $name=$_POST['txt'];
    $pass=$_POST['pass'];
    $mail=$_POST['email'];
    $phone=$_POST['numb'];
    $gender=$_POST['gen'];
    $department=$_POST['depart'];
    $hobby=$_POST['hobby'];
    $h=implode(",",$hobby);
    $bio=$_POST['text'];
    $users=array('txt'=>$name,'pass'=>$pass,'email'=>$mail,'numb'=>$phone,'gen'=>$gender,'depart'=>$department,'hobby'=>$h,'text'=>$bio);
    
    // $r=addUser($users);
    if(addUser($users)){
        session_start();
          //$_SESSION['e']=$email;
          $_SESSION['n']=$name;
        header("Location:welcome.php");
        }
        
        else{
            header("location:index.php");
    //echo "hi";
        
        }
        
}
$users=getUsers();


if(isset($_POST['dlt']))
{
    $id=$_POST['id'];
    $dlt=dltuser($id);
    if($dlt)
    {
        header("location:welcome.php");
    }
    else
    {
        header("location:index.php");
        // echo "not deleted";
    }
}

// if(isset($_POST['edt']))
// {
//     $id=$_POST['id'];
//     header("location:edit.php)?id=$id");
// }

if(isset($_POST['edit']))
{
    $id=$_POST['id'];
    $name=$_POST['txt'];
    $mail=$_POST['email'];
    $phone=$_POST['numb'];
    $gender=$_POST['gen'];
    $department=$_POST['depart'];
    $hobby=$_POST['hobby'];
    $h=implode(",",$hobby);
    $bio=$_POST['text'];
    $users=array('id'=>$id,'txt'=>$name,'email'=>$mail,'numb'=>$phone,'gen'=>$gender,'depart'=>$department,'hobby'=>$h,'text'=>$bio);
    
    // $r=addUser($users);
    if(editUser($u))
    {
        header("Location:welcome.php?id=$id");
    }
        
        else
        {
        header("location:edit.php?id=$id");
        //echo "hi";
        
        }
        
}




if(isset($_POST['login'])){
    $name=$_POST['txt'];
    $pass=$_POST['pass'];
    $us=array("NAME"=>$name,"pass"=>$pass);
    if(login($us)){
        session_start();
        $_SESSION['n']=$name;
      header("location:welcome.php");
     // echo "login";
  }
  else{
    session_start();
    $_SESSION['msg']="user credential is wrong!!!";
    header("location:login.php");
    // echo "Try again";
  
  }
  }
  if(isset($_POST['upload']) && $_FILES['profile']){
    //   echo "<pre>";
    //   print_r($)
    $file=$_FILES['profile'];
    $name=$file['name'];
    $type=$file['type'];
    $size=$file['size'];
    $error=$file['error'];
    $tmp_name=$file['tmp_name'];
    if($error==0)
    {
        echo "no error";
        if($size<12500000)
        {
            $ext=pathinfo($name,PATHINFO_EXTENSION);
            $ext_l=strtolower($ext);
            $n_name=uniqid("IMG-",true).".".$ext_l;
            echo $ext_l;
        
            if(uploadFile($n_name))
            {
                echo "insert";
                if(move_uploaded_file($tmp_name,"upload/".$n_name))
                {
                    header("location:login.php");
                }
                else
                {

                   // header("location:upload.php");
                }
            }
        }
        else
        {
            echo"it exist maximum file size";
        }
    }
    else
    {
        echo "something went wrong!!";
    }
}

?>