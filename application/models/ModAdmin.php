<?php 

     class ModAdmin extends CI_Model{

     	public function chkAdmin($data){
	      $this->load->database();
	      $this->db;
	      return $this->db->get_where('tal_admin',$data)->result_array();
	    }
	    public function fetchallUser(){
	     $array = array('status' => '1');
         $query= $this->db->get_where('tbl_user',$array);
         /*$query= $this->db->get('tbl_user');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function fetchallUserRequest(){
       $array = array('status' => '0');
         $query= $this->db->get_where('tbl_user',$array);
         /*$query= $this->db->get('tbl_user');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function fetchallGuide(){
        $array = array('status' => '1');
         $query= $this->db->get_where('tbl_guide',$array);
        /* $query= $this->db->get('tbl_guide');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function fetchallPlace(){
         $array = array('status' => '0');
         $query= $this->db->get_where('tbl_place',$array);
        /* $query= $this->db->get('tbl_place');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function deleteUser($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_user');
      }
      public function deleteGuide($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_guide');
      }
       public function deletePlace($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_place');
      }
      public function updateStateForUR($data,$id){
         $this->db->where('id',$id);
         return $this->db->update('tbl_user',$data);
      }
      public function fetchallGuideRequest(){
       $array = array('status' => '0');
         $query= $this->db->get_where('tbl_guide',$array);
         /*$query= $this->db->get('tbl_user');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function updateStateForGR($data,$id){
         $this->db->where('id',$id);
         return $this->db->update('tbl_guide',$data);
      }
      public function chekPlaceById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_place',$array)->result_array();
      }
      public function chekPackageById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_package',$array)->result_array();
      }
      public function updatePlace($data,$category_id){
         $this->db->where('id',$category_id);
         return $this->db->update('tbl_place',$data);
      }
      public function updatePackage($data,$category_id){
         $this->db->where('id',$category_id);
         return $this->db->update('tbl_package',$data);
      }
    public function checkPackageExistence($data){
      $array = array('package_name' => $data['package_name']);
      return $this->db->get_where('tbl_package',$array);
    }
    public function addPackage($data){
      return $this->db->insert('tbl_package',$data);
    }
    public function fetchallPackage(){
      /* $array = array('status' => '0');
         $query= $this->db->get_where('tbl_guide',$array);*/
         $query= $this->db->get('tbl_package');
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function deletePackage($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_package');
      }
      public function chekUserById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_user',$array)->result_array();
      }
      public function checkUserBookingExistence($data){
      $array = array('user_id' => $data['user_id'],
                     'package_id' => $data['package_id']
    );
      return $this->db->get_where('bookpackage',$array);
    }
    public function addbookPackage($data){
      return $this->db->insert('bookpackage',$data);
    }
    public function checkptype_nameExistencs($data){
      $array = array('ptype_name' => $data['ptype_name']);
      return $this->db->get_where('tbl_placetype',$array);
    }
      public function addPlaceType($data){
      return $this->db->insert('tbl_placetype',$data);
    }
    public function fetchallPlaceType(){
         $query= $this->db->get('tbl_placetype');
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
    }
      public function chekPlaceTypeById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_placetype',$array)->result_array();
      }
      public function updatePlaceType($data,$category_id){
         $this->db->where('id',$category_id);
         return $this->db->update('tbl_placetype',$data);
      }
      public function deletePlaceType($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_placetype');
      }
      public function fetch_allPlaceType(){
      $this->db->order_by("id", "ASC");
      $query = $this->db->get("tbl_placetype");
      return $query->result();
    }
    public function checkPlaceExistence($data){
      $array = array('place_name' => $data['place_name']);
      return $this->db->get_where('tbl_place',$array);
    }
    public function addPlace($data){
      return $this->db->insert('tbl_place',$data);
    } 
    public function addAdmin($data){
      return $this->db->insert('tal_admin',$data);
    }
    public function addLocation($data){
      return $this->db->insert('tbl_location',$data);
    }
    public function fetchallLocation(){
         $query= $this->db->get('tbl_location');
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
    }
    public function chekLocationById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_location',$array)->result_array();
      }
    public function updateLocation($data,$category_id){
         $this->db->where('id',$category_id);
         return $this->db->update('tbl_location',$data);
      }
    public function deleteLocation($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_location');
      }
    public function fetchaAllLocation(){
         $query= $this->db->get('tbl_location');
        /* $query= $this->db->get('tbl_place');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
    public function chekGuideById($id){
         $array = array('id' => $id);
         return $this->db->get_where('tbl_guide',$array)->result_array();
      }
    public function updateGuide($data,$category_id){
         $this->db->where('id',$category_id);
         return $this->db->update('tbl_guide',$data);
      }
    public function fetchallGuideByName($name){
        $array = array('status' => '1',
                       'area'=>$name
      );
         $query= $this->db->get_where('tbl_guide',$array);
        /* $query= $this->db->get('tbl_guide');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
    public function fetchallBookedPackage(){
         $query= $this->db->get('bookpackage');
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
    public function updateBOState($data,$id){
         $this->db->where('id',$id);
         return $this->db->update('bookpackage',$data);
      }
    public function deleteBoPack($id){
         $this->db->where('id',$id);
         return $this->db->delete('bookpackage');
      }
    public function finishBoPackRunning($data,$id){
         $this->db->where('id',$id);
         return $this->db->update('bookpackage',$data);
      }
    public function bookedGuide(){
      
         $query= $this->db->get_where('tbl_guideBook');
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
     }
    public function numberOfCustomer(){
         
         return $this->db->get('tbl_user')->result_array();
      }
      public function numberOfGuide(){
         
         return $this->db->get('tbl_guide')->result_array();
      }
      public function numberOfPackage(){
         
         return $this->db->get('tbl_package')->result_array();
      }
      public function numberOfPlace(){
         
         return $this->db->get('tbl_place')->result_array();
      }
      public function fetchallAdmin(){
         $query= $this->db->get('tal_admin');
        /* $query= $this->db->get('tbl_guide');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function chekAdminById($id){
         $array = array('admin_id' => $id);
         return $this->db->get_where('tal_admin',$array)->result_array();
      }
       public function updateAdmin($data,$category_id){
         $this->db->where('admin_id',$category_id);
         return $this->db->update('tal_admin',$data);
      }
      public function deleteAdmin($id){
         $this->db->where('admin_id',$id);
         return $this->db->delete('tal_admin');
      }
      public function chkAdminForForgerPassword($data){
        $this->load->database();
        $this->db;
        return $this->db->get_where('tal_admin',$data)->result_array();
      }
       public function updateAdminPassword($data,$category_id){
         $this->db->where('admin_name',$category_id);
         return $this->db->update('tal_admin',$data);
      }
      public function fetchallMessage(){
       
         $query= $this->db->get('tbl_contact');
        /* $query= $this->db->get('tbl_guide');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function deleteMessage($id){
        $this->db->where('msg_id',$id);
         return $this->db->delete('tbl_contact');

      }
     
     	     
	  
     }




 ?>