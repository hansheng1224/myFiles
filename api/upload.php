<?php
if($_FILES['file_name']['error']==0){
    move_uploaded_file($_FILES['file_name']['tem_name'],"../upload/".$_FILES['file_name']['name']);
    header('location:../upload.php?upload=success');
}else{
    echo "上傳失敗，請檢查檔案是否正常，或網路是否連線或聯絡網路管理員";
}
?>