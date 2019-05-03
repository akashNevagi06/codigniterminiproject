<?php
class Admin extends MY_Controller
{
 
    public function index()
    {
     $this->load->library('form_validation');
     $this->form_validation->set_rules('uname','User Name','required|alpha');

     $this->form_validation->set_rules('pass','Password','required');

     $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

     if($this->form_validation->run())
     {
        $uname=$this->input->post('uname');
        $pass=$this->input->post('pass');
       $this->load->model('Loginmodel');
       $id=$this->Loginmodel->isvalidate($uname,$pass);
       if ($id)
       {
            $this->session->set_userdata('id',$id);
            return redirect('Admin/welcome');
       }
       else
       {
            $this->session->set_flashdata('Login_failed','Invalid Username/Password');
            return redirect('Admin/index');
       }
     }
     else{
        $this->load->view('Admin/Login');
     }
        
    }

    public function register()
    {
         $this->load->view('admin/register');
    }

    public function sendemail()
    {
     
     $this->form_validation->set_rules('username','User Name','required|alpha');
     $this->form_validation->set_rules('password','Password','required|max_length[12]');
     $this->form_validation->set_rules('firstname','First Name','required|alpha');
     $this->form_validation->set_rules('lastname','last Name','required|alpha');
     $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
   $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
     if($this->form_validation->run())
     {
          $post=$this->input->post();
          $this->load->model('Loginmodel','user');
          if($this->user->add_user($post))
          {
                   $this->session->set_flashdata('user','User added successfully');
                   $this->session->set_flashdata('user_class','alert-success');
          }
          else {
               $this->session->set_flashdata('user','falied to add the user');
               $this->session->set_flashdata('user_class','alert-danger');
          }
          return redirect('admin/register');
//        $this->load->library('email');
     
//        $this->email->from(set_value('email'),set_value('firstname'));
//        $this->email->to("ajay.suneja1993@gmail.com");
//        $this->email->subject("Registratiion Greeting..");
//        $this->email->message("Thank  You for Registratiion");
//        $this->email->set_newline("\r\n");
//        $this->email->send();
//         if (!$this->email->send()) {
//        show_error($this->email->print_debugger()); }
//      else {
//        echo "Your e-mail has been sent!";
//      }
//      }
     }
      else
      {
       $this->load->view('Admin/register');
     
      }
    }
   

    public function welcome()
    {
     if(!$this->session->userdata('id'))
     return redirect('Admin/');
         $this->load->model('Loginmodel','ar');
         $this->load->library('pagination');

         $config=[
          'base_url'=>base_url('index.php/admin/welcome'),
          'per_page'=>2,
          'total_rows'=>$this->ar->num_rows(),
          'full_tag_open'=>"<ul class='pagination'>",
          'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"<li>",
        'cur_tag_open' =>"<li class='active'><a>",
        'cur_tag_close' =>"</a></li>"



     ];
     $this->pagination->initialize($config);

       $articles=$this->ar->articleList($config['per_page'],$this->uri->segment(3));
     $this->load->view('admin/dashboard',['articles'=>$articles]);
    }

    public function logout()
    {
     $this->session->unset_userdata('id');
     return redirect('Admin/index');
    }
    public function adduser()
    {
     $this->load->view('admin/add_article');
    }

    public function userValidation()
    {
         if($this->form_validation->run('add_article_rules'))
         {
              $post=$this->input->post();
              $this->load->model('Loginmodel','useradd');
              if($this->useradd->add_articles($post))
              {
                   $this->session->set_flashdata('msg','Article added successfully');
                   $this->session->set_flashdata('msg_class','alert-success');
              }
              else
              {
               $this->session->set_flashdata('msg','please try again');
               $this->session->set_flashdata('msg_class','alert-danger');
              }
              return redirect('admin/welcome');

         }
         else
         {
              $this->load->view('admin/add_article');

         }
    }

    public function delarticles()
    {
          $id=$this->input->post('id');
          $this->load->model('Loginmodel','delarticle');
              if($this->delarticle->del($id))
              {
                   $this->session->set_flashdata('msg','Article deleted successfully');
                   $this->session->set_flashdata('msg_class','alert-success');
              }
              else
              {
               $this->session->set_flashdata('msg','please try again');
               $this->session->set_flashdata('msg_class','alert-danger');
              }
              return redirect('admin/welcome');
    }

    public function edituser($id)
    {
     $this->load->model('loginmodel');
     $rt=$this->loginmodel->find_article($id);
     $this->load->view('admin/edit_article',['article'=>$rt]);
     
    }

    public function updatearticle($article_id)
    {
     if($this->form_validation->run('add_article_rules'))
         {
              $post=$this->input->post();
              //$articleid=$post['article_id'];
              $this->load->model('Loginmodel','useradd');
              if($this->useradd->update_article($article_id,$post))
              {
                   $this->session->set_flashdata('msg','Article updated successfully');
                   $this->session->set_flashdata('msg_class','alert-success');
              }
              else
              {
               $this->session->set_flashdata('msg','please try again');
               $this->session->set_flashdata('msg_class','alert-danger');
              }
              return redirect('admin/welcome');
          }
          else
          {
               $this->load->view('admin/edituser');
 
          }
          
    

     }

}
?>

