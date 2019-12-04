<?php if(!defined('_lib')) die("Error");

	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	$config_url=$_SERVER["SERVER_NAME"].'/phanminhcuong';

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'phanminhcuong';
	$config['database']['refix'] = 'table_';
	$_SESSION['ckfinder_baseUrl']=$config_url;
	$ip_host = '127.0.0.1';
	$mail_host = 'noreply@demo69.ninavietnam.com.vn';
	$pass_mail = '1234qwer!@';
	$config['salt']='dx8e*UM%Mk';
	$config['nobots']='noodp, NOINDEX, NOFOLLOW';
	$config['map']='10.8537915,106.6261557';
	$config['sitekey']='6LfvR5kUAAAAAAnZRf9Unj_aMfp2mZjMFDY031XO';
	$config['secretkey']='6LfvR5kUAAAAAEGmaWPCwd5asnCgPlpu3AaHZnYZ';
	$config['lang']=array(''=>'Tiếng Việt','en'=>'Tiếng Anh');
	$config['phi']=0;#1-Thành phố/2-Quận/huyện
	$config['author']['name'] = 'Phạm Quang Tuyên';
	$config['author']['email'] = 'phamtuyen.nina@gmail.com';
	$config['author']['timefinish'] = '11/11/2016';
	$fw_conf['firewall']='0'; //Bat tat firewall
	$fw_conf['max_lockcount']=10;//So lan toi da phat hien dau hieu DDOS va khoa IP do vinh vien
	$fw_conf['max_connect']=15;//So ket noi toi da dc gioi han boi $fw_conf['time_limit']
	$fw_conf['time_limit']=3;//Thoi gian dc thuc hien toi da $fw_conf['max_connect'] ket noi
	$fw_conf['time_wait']=5;//Thoi gian cho de dc mo khoa khi IP bi khoa tam thoi
	$fw_conf['email_admin']='nina@nina.vn';//Email lien lac voi Admin
	$fw_conf['htaccess']=".htaccess";//Duong dan toi file htaccess tren server
	$fw_conf['ip_allow']='127.0.0.1';
	$fw_conf['ip_deny']='';
	$config['login']['delay']=10;
	$config['login']['attempt']=5;
	$config['arrayDomainSSL']=array("");
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>
