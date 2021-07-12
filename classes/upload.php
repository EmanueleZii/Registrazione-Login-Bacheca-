<?php


class ImageProfile {

   public $uploadokey =  true;
   public $dir = "";
   
   public function UploadImage() {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        @$this->dir = "uploads".DIRECTORY_SEPARATOR. $_FILES['fileToUpload']['name'];


        echo @$image = $this->dir . $_FILES['fileToUpload']['name'];
        echo "<br />";
        echo "-->". @$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
     
        if (isset($_POST['submit'])){
           echo "OK<br />";
            @$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
            echo "<br />";
            
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $this->dir)){
                header("Location: Viewprofile.php");
            }

           
            /*if (@$check !== false) {
                echo "<p>File is an Image".$check['mime']."</p>";
                $uploadokey = true;
                //header("Location: Viewprofile.php");
            }
            else {            
                echo "<p>Sorry Is Not image :(</p>";
                $uploadokey = false;
            }*/
        }
          
    }

   public function CheckSizeImage() {
        if (@$_FILES['fileToUpload']['size']> 50000){
           echo"<p>Sorry, your file is too large</p>";
           $uploadokey= false;
        }
    }

    public function LimitFile() {
        //$this->dir = "uploads".DIRECTORY_SEPARATOR. $_FILES['fileToUpload']['name'];
        $image = $this->dir . basename($_FILES['fileToUpload']['name']);
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        
        if (@$imageFileType != "jpg" && 
            @$imageFileType != "png" && 
            @$imageFileType != "jpeg"&& 
            @$imageFileType != "gif"  ) 
        {
            echo "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed</p>";
            @$uploadokey = false;
        }
        else {
            $uploadokey = true;
        }

    }

   public function ExistsFIle(){
        //@$dir = " C:\xampp\htdocs\Social network OOP\classes\uploads\ ". $_FILES['fileToUpload']['name'];
        @$image = $this->dir . basename($_FILES['fileToUpload']['name']);

        if (file_exists(@$image)){
            echo "<p>Immagine gia esistente </p>";
            @$uploadokey= false;
        }
    }

    public function PrintImage() {
        //@$dir = " C:\xampp\htdocs\Social network OOP\classes\uploads\ ". $_FILES['fileToUpload']['name'];
        @$image = $this->dir . $_FILES['fileToUpload']['name'];
        //@$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        echo "<img src='".$image."' ";
    }


}


$img= new ImageProfile();
//$img->CheckSizeImage();
//$img->LimitFile();
$img->UploadImage();