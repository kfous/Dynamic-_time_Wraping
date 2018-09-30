<?PHP
if(!empty($_FILES['uploaded_file']))
{
  function countFolder($dir) {
   return (count(scandir($dir)) - 2);
 }
 
 $path = "uploads/"; // the upload destination
 $dir = "uploads/";


 $path = $path . basename( $_FILES['uploaded_file']['name']);
 if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
  echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
  " has been uploaded";
  //if the folder already has 2 uploads then move to the next page
  if(countFolder($dir)==2){
    header('Location: tables.html');
    exit;
  }
  else{
    //else stay at the same
    header('Location: uploadFiles.html');
    exit;
  }

} else{
  echo "There was an error uploading the file, please try again!";
}

}



?>