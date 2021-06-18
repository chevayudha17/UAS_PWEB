<?php 

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $data['username'] = $this->model('Login_model')->getUser();
        $this->view('templates/headerlogin', $data);
        $this->view('Login/index', $data);  
        $this->view('templates/footer'); 
    }

    public function masuk()
    {   
        $user= $_POST['username'];
        $pass= $_POST['password']
        $this->model('Login_model')->getUser($username,$password);
        if( isset($_POST['login']) ){
            if( $username == $user && $password == $pass ){
                echo""
                header("Location:". BASEURL .)
            }else:
                header("Location:". BASEURL ."/login/")
        }
    }
}