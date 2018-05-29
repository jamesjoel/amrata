<?php
include("include/db.php");
include("include/functions.php");
//http://viewum.com/
/*
Array ( [first_argu] => superadmin [second_argu] => test [third_argu] => test22 )
*/
// print_r($_GET);die;
if(empty($_GET))
{
	
	include('client/login.php');
}
else
	{
		
		$includer=$_GET['first_argu'];
		
			$second_argu="";
			if(isset($_GET['second_argu']))
			{
				$second_argu=$_GET['second_argu'];
				
			}
			switch($includer){
			
			case 'client':
				switch($second_argu){

						case '':
							include('client/login.php');
							break;
						case 'register':
							include('client/register.php');
							break;
						case 'login':
							include('client/login.php');
							break;
						case 'save_client':
							include('client/save_client.php');
							break;
						case 'confirmation':
							include('client/confirmation.php');
							break;
						case 'check_sub_domain_avl':
							include('client/check_sub_domain_avl.php');
							break;
						case 'check_email_avl':
							include('client/check_email_avl.php');
							break;
						case 'confirmation_token':
							include('client/confirmation_token.php');
							break;
						case 'dashboard':
							// echo "hello";die;
							include('client/dashboard.php');
							break;
						case 'auth':
							include('client/auth.php');
							break;
						case 'failed':
							include('client/login.php');
							break;
						case 'login':
							include('client/login.php');
							break;
						case 'recover_password':
							include('client/recover.php');
							break;
						case 'logout':
							include('client/logout.php');
							break;
						default :
							include('client/404.php');
						

						}
				break;
			case 'superadmin':
				switch($second_argu){
						
						case '':
							include('superadmin/login.php');
							break;
						case 'auth':
							include('superadmin/auth.php');
							break;
						case 'failed':
							include('superadmin/login.php');
							break;
						case 'dashboard':
							include('superadmin/dashboard.php');
							break;
						case 'add_employee':
							include('superadmin/add_employees.php');
							break;
						case 'save_employee':
							include('superadmin/save_employee.php');
							break;

						case 'view_employee':
							include('superadmin/view_employee.php');
							break;
						case 'change_employee_pass_by_admin':
							include('superadmin/change_employee_pass_by_admin.php');
							break;
						case 'get_employee_data':
							include('superadmin/get_employee_data.php');
							break;



						case 'add_account':
							include('superadmin/add_account.php');
							break;
						case 'save_client_by_admin':
							include('superadmin/save_client_by_admin.php');
							break;

						case 'change_pass_by_admin':
							include('superadmin/change_pass_by_admin.php');
							break;
						case 'view_account_active':
							include('superadmin/view_account_active.php');
							break;
						case 'view_account_inactive':
							include('superadmin/view_account_inactive.php');
							break;
						case 'change_status_active':
							include('superadmin/change_status_active.php');
							break;
						case 'change_status_inactive':
							include('superadmin/change_status_inactive.php');
							
							break;
						case 'view_account_suspand':
							include('superadmin/view_account_suspand.php');

							break;
						case 'change_status_suspand':
							include('superadmin/change_status_suspand.php');
							
							
							break;
							case 'billing_all':
							include('superadmin/billing_all.php');
							
							break;
							case 'billing_annual':
							include('superadmin/billing_annual.php');
							break;
							case 'billing_monthly':
							include('superadmin/billing_monthly.php');
							
							
														
							
							break;
							case 'change_password':
							include('superadmin/change_password.php');
							break;
						case 'logout':
							include('superadmin/logout.php');
							break;
						default :
							include('client/404.php');
						
					}
					break;		
					default :
						include('client/404.php');
			}
	}
?>
