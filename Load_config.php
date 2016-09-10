<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

  function load_config()
  {
    $CI =& get_instance();
    $website = $CI->db->get('pengaturan')->row_array();
    if(count($website)>0)
		{
      $CI->config->set_item("judul",$website['judul']);
      $CI->config->set_item("footer",$website['footer']);
      $CI->config->set_item("icon",$website['icon']);
      $CI->config->set_item("nama-kabupaten",$website['nama-kabupaten']);
      $CI->config->set_item("alamat",$website['alamat']);
      $CI->config->set_item("lat",$website['lat']);
      $CI->config->set_item("lng",$website['lng']);
      $CI->config->set_item("sambutan",$website['sambutan']);
		}
  }

?>
