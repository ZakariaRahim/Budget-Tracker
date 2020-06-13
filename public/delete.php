<?php

require_once '../private/init.php';

if(trim($_GET['id']) != ''){
	
	Budget::deleteBudget(trim($_GET['id']));
	redirect_to(url_for('/dashboard.php'));

}else{
	redirect_to(url_for('/dashboard.php'));
}