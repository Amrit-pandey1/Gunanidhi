<?
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

     //Database connection
     $coon = new mysqli('localhost','root','','coding');
     if($coon->connect_error){
         die('Connection Failed : ' .$coon->connect_error);
     }else{
         $stmt = $conn->prepare("insert into my web(Name, Email, Message)values(?, ?, ?)");
         $stmt->blind_parama("sss"),$Name, $Email, $Message);
         $stmt->execute();
         echo"Thank You For Feedback";
         $stmt->close();
         $coon->close();
     }
?>