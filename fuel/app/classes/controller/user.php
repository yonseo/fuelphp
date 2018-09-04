<?php
/**
 * Users controller - basic user controller for handling authorization
 *
 * @package    FuelPHP
 * @version    1.8.1
 * @author     Yonseo
 * @copyright  Yonseo
 * @license    Closed
 */

class Controller_User extends Controller_Template
{

	public function action_index()
	{
		$data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('user/index', $data);
	}
    ##==================================================================== LOGIN
    public function action_login()
    {
        // Already logged in
		if( Auth::check() and Auth::member(100) )
        {
            //redirect to homepage
			Response::redirect();
        }
		elseif( Auth::check() and Auth::member(1) )
        {
			Response::redirect();
        }
            
        //add validation
        $val = Validation::forge();
		//$view = View::forge('user/login', array('val' => $val));
        
        // was the login form posted?
        if (Input::method() == 'POST' && Input::post('SUBMIT'))
        {
            $val->add_field('email', 'Your email', 'required|min_length[3]|max_length[50]');
		    $val->add_field('password', 'Your password', 'required|min_length[3]|max_length[50]');
            
            if ($val->run())
            {
                $auth = Auth::instance();
                if ($auth->login($val->validated('email'), $val->validated('password')))
                {
                    // Credentials ok, go right in.
                    $current_user = Model_User::find_by_username(Auth::get_screen_name());
                    View::set_global('current_user', $current_user);
                    View::set_global('logged_in', $current_user);
                    Session::set_flash('success', 'Welcome '.$current_user->username);
                    Response::redirect('/');
                }
                else
                {
                    // Oops, no soup for you. Try to login again. Set some values to
                    // repopulate the username field and give some error text back to the view.
                    Session::set_flash('error', 'Login Failure');
                    $data['email']    = Input::post('email');
                    $data['login_error'] = 'Wrong username/password combo. Try again';
                }
            }//end val
        }//end if POST
    
        // display the login page
        $data = [''];
        $this->template->title = 'Login Page';
        $this->template->content = View::forge('user/login', $data);
    }
    ##==================================================================== LOGOUT
    public function action_logout()
    {
        // remove the remember-me cookie, we logged-out on purpose
        \Auth::dont_remember_me();
    
        // logout
        \Auth::logout();
    
        // inform the user the logout was successful
        Session::set_flash('success', 'You have logged out');
    
        // and go back to where you came from (or the application
        // homepage if no previous page can be determined)
        \Response::redirect_back();
    }
    ##==================================================================== REGISTER
    public function action_register()
    {
        // is registration enabled?
        if ( ! \Config::get('application.user.registration', true))
        {
            // inform the user registration is not possible
            Session::set_flash('error', 'Unable to Register at this time');
    
            // and go back to the previous page (or the homepage)
            \Response::redirect_back('/');
        }
    
		$user_hash = Session::get('ninjauth.user');
		$authentication = Session::get('ninjauth.authentication');
	    
	    $val = Validation::forge();
	    $val->add_field('username', 'Your name', 'required|min_length[3]|max_length[50]');
	    //$val->add_field('lastname', 'Your last name', 'required|min_length[3]|max_length[50]');
	    $val->add_field('email', 'Your email', 'required|valid_email|max_length[255]');
	    $val->add_field('password', 'Your password', 'required|min_length[3]|max_length[255]');
	    $val->add_field('password_confirm', 'Confirm password', 'required|match_field[password]|min_length[3]|max_length[255]');
	    
		$view = View::forge('user/register', array('val' => $val));
		$view->user_hash = $user_hash;
		$view->authentication = $authentication;
	    
	    if ( $val->run() )
	    {
	        $create_user = Auth::instance()->create_user(
	                $val->validated('username'),
	                $val->validated('password'),
	                $val->validated('email'),
	                1,
	                array('username'=>$val->validated('username'))
	        );
	        if( $create_user )
	        {
	            Session::set_flash('success', 'User created.');           
				$auth = Auth::instance();
				if (Auth::check() or $auth->login($val->validated('email'), $val->validated('password')))
				{
					$current_user = Model_User::find_by_username(Auth::get_screen_name());
					View::set_global('current_user', $current_user);
					View::set_global('logged_in', $current_user);
                    	
					Session::set_flash('success', 'Welcome, '.$current_user->username);
					$view = View::forge('user/index', array('val' => $val));
				}	          	            
	        }
	        else
	        {
	            throw new Exception('An unexpected error occurred. Please try again.');
	        }
	    }
	    else
	    {
	        if( $_POST )
	        {
	           	$view->login_error = 'All fields are required.';
	        }
	    }
    
        // pass the fieldset to the form, and display the new user registration view
        $this->template->title = 'Login Page';
        $this->template->content = View::forge('user/register');
    }
}
