<?php
class WebimHooks extends Hooks
{

     //钩子
    public function public_head($param) {
        //头部钩子，预留接口，否则添加新钩子不会载入钩子，必须重装才有效
    }

    public function public_footer($param) {
        require SITE_PATH. '/addons/plugin/Webim/webim/config.php';
        echo '<script src="'. SITE_URL .'/addons/plugin/Webim/webim/custom.js.php"></script> ';
    }

	public function set(){
		require $this->path.'/webim/config.php';
		$handle  = opendir($this->path.'/webim/static/themes');
        
        while($f = readdir($handle)){
         if($f =='.' || $f =='..') continue;
            $path =  $this->path .'/webim/static/themes'.'/'.$f;  //如果只要子目录名, path = $f;
            if(is_dir($path)) {
                    $subdirs[] = $f;
            }
        } 
		$this->assign($_IMC);
		$this->assign('data',$subdirs);
		$this->display('set');
	}

	public function saveset(){
		if($_POST) {
		   $domain=$_POST['domain'];
           $apikey=$_POST['apikey'];
           $host=$_POST['host'];
           $port=$_POST['port'];
		   $base=$_POST['base'];
           $local=$_POST['local'];
           $opacity=$_POST['opacity'];
           $admin_uid=$_POST['admin_uid'];
           $admin_groupname=$_POST['admin_groupname'];
       
        if(!$domain || !$apikey || !$host || !$local || !$opacity || !$admin_uid || !$admin_groupname){
	
			$this->error('你有必要的项目没有填写');
			
	
	
	  }else{
		  $file = fopen($this->path. '/webim/config.php',"wb");

         $data=<<<EOT
 <?php
webimeot= array();
webimeot=array(
			'version'=>'3.3.0',
			'enable'=>true,
			'domain'=>'$domain',
			'apikey'=>'$apikey',
			'host'=>'$host',
			'port'=>'$port',
			'theme'=>'$base',
			'local'=>'$local',
			'show_realname'=>false,
			'disable_room'=>true,
			'disable_chatlink'=>false,
			'enable_shortcut'=>true,
			'emot'=>'default',
			'opacity'=>'$opacity',
			'disable_menu'=>false,
			'enable_login'=>false,
			'host_from_domain'=>false,
			'admin_uid'=>'$admin_uid',
			'admin_groupname'=>'$admin_groupname',
);
EOT;
            $data = str_replace('webimeot','$_IMC',$data);
		    fwrite($file,$data);  
		    @fclose($file);

		    $this->success('设置成功');
		  }
		}
	}

	public function skin() {
	    $this->display('skin');
	}

	public function skin() {
	    $this->display('history');
	}

}

