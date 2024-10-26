<?php
    include_once ('helper/connection.php');
    class Register{
        public $db;

        public function __constract()
        {
            $this->db = new Database();
        }

        public function addRegister($data, $file)
        {
            $date = date('m/d/Y h:i:s a', time());
            $name = $data['fullName'];
            $email = $data['userEmail'];
            $phone = $data['phoneNumber'];
            $password = '';
            if ($data['password'] == $data['confirmPassword']) {
                $password = $data['confirmPassword'];
            }else{
                return "Confirm Password Does not match!";
            }
            $permitted = array('jpg', 'jpeg', 'png');
            $file_name = $file['photo']['name'];
            $file_size = $file['photo']['size'];
            $file_temp = $file['photo']['tmp_name'];

            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'/'.$file_ext;
            $upload_image = "assets/images/".$unique_image;


            if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($file_name) ){
                return "Some filed is empty!";
            }elseif ($file_size > 1024*1024){
                return "Image Size Must be decrease than 1MB!";
            }elseif (in_array($file_ext, $permitted) == false){
                return "Please use 'jpg', 'jpeg', 'png' image";
            }else{
                $query = "INSERT INTO `user_registration`(`fullname`, `email`, `phone`, `image`, `password`, `date`) VALUES ('$name', '$email', '$phone', '$upload_image', '$password','$date') ";
                $result = $this->db->insert($query);
                if ($result){
                    move_uploaded_file($file_temp, $upload_image);
                    return "Register Successfully!";
                }else{
                    return "Something went wrong";
                }
            }
        }
    }
?>