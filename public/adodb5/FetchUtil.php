<?php
	class FetchUtil { 
      
	    var $row; 
	    var $DB_type; 
	    var $DB;  
	    var $rows;
	    var $Error_Msg;
	    function FetchUtil($dsn){ 
	        $this->DB = NewADOConnection($dsn); 
	        if ( !$this->DB ) die("Conexion fallida - $dsn"); 
	        $this->DB->SetFetchMode(ADODB_FETCH_ASSOC); 
	    } 
	    function Execute_query($query='select now()'){ 	      
          if ($this->DB->Execute($query) === false) {
	           $this->Error_Msg = $this->DB->ErrorMsg().'<BR>';
	           return false;
          }else{
            //return 'error al insertar: '.$conn->ErrorMsg().'<BR>';
            return true;          
          }
	    } 
	    function Execute($query='select now()'){ 
	        $this->row  = $this->DB->Execute($query) or die ($this->DB->ErrorMsg()); 
	    } 
	    function FetchAll($query){ 
	         
	        $this->Execute($query); 
	        while(!$this->row->EOF){ 
	            $temp[] = $this->row->fields; 
	            $this->row->MoveNext(); 
	        }  
	        $this->row->Close();
	        return $temp;  
	    } 
	
	    function FetchAllArray($query,$key,$value) { 
        $this->Execute($query); 
	        while(!$this->row->EOF){ 
	            $temp[$this->row->fields[$key]] = $this->row->fields[$value]; 
	            $this->row->MoveNext(); 
	        }  
	        return $temp;  
	    } 
    	function qstr($string) { 
	        return $this->DB->qstr($string,get_magic_quotes_gpc()); 
	    } 
	    function Record_Count(){
	    	return $this->row->RecordCount();
	    }
	    function msgError(){
	      return $this->Error_Msg;
      }	
	}
?>