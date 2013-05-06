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
		require SITE_PATH. '/addons/plugin/Webim/webim/config.php';
		$this->assign($_IMC);
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
		  $file = fopen(SITE_PATH. '/addons/plugin/Webim/webim/config.php', "wb");

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
);
EOT;
            $data = str_replace('webimeot','$_IMC',$data);
		    fwrite($file,$data);  
		    @fclose($file);

		    $this->success('设置成功');
		  }
		}
	}

    public function scan_dir( $dir ) {
        $d = dir( $dir."/" );
        $dn = array();
        while ( false !== ( $f = $d->read() ) ) {
            if(is_dir($dir."/".$f) && $f!='.' && $f!='..') $dn[]=$f;
        }
        $d->close();
        return $dn;
    }

	public function skin() {
		require SITE_PATH. '/addons/plugin/Webim/webim/config.php';
        $path = SITE_PATH. '/addons/plugin/Webim/webim/static/themes';
        $files = scan_dir($path);
        $themes = array();
        foreach ($files as $k => $v){
            $t_path = $path.'/'.$v;
            if(is_dir($t_path) && is_file($t_path."/jquery.ui.theme.css")) {
                $cur = $v == $_IMC['theme'] ? " class='current'" : "";
                $url = '#'; #TODO: FIXME
                $themes[] = "<li$cur><h4><a href='$url'>$v</a></h4><p><a href='$url'><img width=100 height=134 src='$path/images/$v.png' alt='$v' title='$v'/></a></p></li>";
            }
        }
		#$this->assign('path', $path);
		$this->assign('themes', $themes);
	    $this->display('skin');
	}

	public function history() {
	    $this->display('history');
	}

}

