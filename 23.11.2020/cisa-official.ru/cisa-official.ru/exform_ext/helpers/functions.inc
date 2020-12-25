<?php # 03.07.2015

function get_list($list, $sel, $getitm=false){

 global $config;
 
 $rez = '';
 $fn = 'themes/'.$config->theme.'/dicts/'.$list.'.txt';

 if(file_exists($fn)){ 
  $f = file($fn);
  foreach($f as $k=>$v){ $v = trim($v); 
   if(!empty($v)){ 
    if($getitm && $sel == $k) return $v;
	$rez .= '<option value="'.$v .'" '. ($sel == $v ? ' selected="selected"' : '') .'>'. $v .'</option>'.PHP_EOL;
   }
  }
 }
 return $rez;
}

function get_formfield($fldName, $prms=array()){

 global $config, $field_value, $field_class; 
 
 $field_title = $fldName.'_title';
 $field_title = isset($config->$field_title) ? $config->$field_title : '';
 $field_require = 'require_'.$fldName;
 $field_require = isset($config->$field_require) && $config->$field_require == true ? ' *' : '';

 $field = '';
 
 if(isset($field_value[$fldName.'_err'])) 
  
  $field .= '<div class="err'. ($fldName=='file'?' file':'') .'"><img src="'. $_SESSION['mf_path'].'imgs/error.gif" title="'. $field_title .': '. $field_value[$fldName.'_err'] .'" /></div>';
  
  if($fldName == 'file'){
   $field .= '<label class="file">'.$field_title.'</label>';
   $field .= '<div class="progress crnrR10 brdrad7"><div></div></div>';
   $field .= '<input id="mf_fileUpload" type="file" name="mf_'. $fldName . '"';	
  }
  else{
   $field .= '<input type="text" name="mf_'. $fldName . '"' .
   (!isset($config->placeholder) || $config->placeholder == true ? 'placeholder="'. $field_title . $field_require. '"' : '' ) .
   (!empty($field_value[$fldName])? ' value="'. $field_value[$fldName] .'"' : ' ');
  }

  $field .= (!empty($field_class[$fldName]) ? ' class="'. $field_class[$fldName] .'"' : ' ');
  if(!empty($prms)) foreach($prms as $k=>$v) $field .= $k.'="'.$v.'"'; 

  $field .= ' />';

 return $field;	
}
?>