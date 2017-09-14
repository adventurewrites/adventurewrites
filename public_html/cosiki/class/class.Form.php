<?
//*******************************************************
//NIE MOZNA RUSZAC TYCH LINII!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//inicjalizacja konfiguracji
include '../php/conf.php';
//*******************************************************
include "../".$path_php.'funkcje.php';

class Formitable
{
/* these vars determine whether to use default form input type
   or alternate based on field size
   enum field default is select, alternate is radio
   set field default is multiselect, alternate is checkbox
   blob or text field default is textarea, alternate is text
*/
    var $enumField_toggle = 3;
    var $setField_toggle = 4;
    var $strField_toggle = 70;

/* these vars determine form input size attributes
*/
    var $textInputLength = 50;
    var $textareaRows = 4;
    var $textareaCols = 50;
    var $multiSelectSize = 4;
    var $licznik_bledow = 1;

/* *********************************************************
*/
    function Formitable(&$conn,$DB,$table)
      {
      	$this->conn = $conn;
        $this->DB = $DB;
        $this->formName = $this->table = $table;
        $this->fields = @mysql_list_fields($DB, $table, $conn)
                        or die("DB, Błąd połączenia");
        $this->columns = @mysql_num_fields($this->fields);
        $this->pkey = $pkey = "";
        $this->labelBreak = "<br>\n";
        $this->fieldBreak = "<br><br>\n\n";
      }

/* *********************************************************
*/
    function submitForm()
      {
      	$this->ilosc_bledow = 0;
      	if(isset($_POST['pkey']))
	     { foreach($_POST as $key=>$value)
	       {
                 if($key=="pkey" || $key=="submit") continue;
                 if(is_array($value)) $fields .= ",$key = '".implode(",",$_POST[$key])."'";
                 else $fields .= ",$key = '".$value."'";
               }
               $fields = substr($fields,1);
               $SQLquery = "UPDATE $this->table SET $fields WHERE $this->pkey = '".$_POST['pkey']."'";
               @mysql_select_db($this->DB,$this->conn);
               if(!@mysql_query($SQLquery,$this->conn))
                    echo "<center><label class=\"font\"><b>Wystąpił błąd!</b><br>Record nie został
		    zaktualizowany.</label></center>";
	     }
	    else
	     { foreach($_POST as $key=>$value)
	       {
                 if($key=="submit") continue;
                 $fields .= ",".$key;
                 if(is_array($value))	$values .= ",'".implode(",",$_POST[$key])."'";
		 else $values .= ",'".$value."'";
               }
               $fields = substr($fields,1);
               $values = substr($values,1);
// wykluczamy kod HTML - bardzo sprytny myk
	       $values = htmlentities($values);
// *******************
               $SQLquery = "INSERT INTO $this->table ($fields) VALUES ($values)";
               @mysql_select_db($this->DB,$this->conn);
               if( !@mysql_query($SQLquery,$this->conn) )
               echo "<center><label class=\"font\"><b>Wystąpił błąd!</b><br>Formularz nie został
	       zaktualizowany.</label></center>";
             }
        unset($_POST['submit']);
    }

/* *********************************************************
*/
    function _mysql_enum_values($tableName,$fieldName)
    {
        $result = @mysql_query("DESCRIBE $tableName");
        while($row = @mysql_fetch_array($result))
        {
            ereg('^([^ (]+)(\((.+)\))?([ ](.+))?$',$row['Type'],$fieldTypeSplit);
            $fieldType = $fieldTypeSplit[1];
            $fieldLen = $fieldTypeSplit[3];
            if (($fieldType=='enum' || $fieldType=='set') && ($row['Field']==$fieldName) )
            {
              $fieldOptions = split("','",substr($fieldLen,1,-1));
              return $fieldOptions;
            }
        }
        return FALSE;
    }

/* *********************************************************
*/

    function getRecord($id)
    {
      $SQLquery = "SELECT * FROM $this->table WHERE $this->pkey = '$id'";
      @mysql_select_db($this->DB,$this->conn);
      $result = @mysql_query($SQLquery,$this->conn);
      if( @mysql_num_rows($result) == 1 )
      {
        $this->pkeyID = $id;
        $this->record = @mysql_fetch_assoc($result);
        return true;
      }
      else return false;
    }

/* *********************************************************
*/

    function forceType($fieldName,$inputType)
    {
	    $this->forced[$fieldName] = $inputType;
    }

/* *********************************************************
*/
    function forceTypes($fieldNames,$inputTypes)
    {
      if( sizeof($fieldNames) != sizeof($inputTypes) ) return false;
      for($i=0;$i<sizeof($fieldNames);$i++)
      $this->forced[$fieldNames[$i]] = $inputTypes[$i];
      return true;
    }

/* *********************************************************
*/

    function hideField($fieldName)
    {
	    $this->hidden[$fieldName] = "hide";
    }


/* *********************************************************
*/

    function passField($fieldName)
    {
            $this->password[$fieldName] = "password";
    }


/* *********************************************************
*/

    function hideFields($fieldNames)
    {
       for($i=0;$i<sizeof($fieldNames);$i++)
       $this->hidden[$fieldNames[$i]] = "hide";
    }

/* *********************************************************
*/

    function labelField($fieldName,$fieldLabel)
    {
	    $this->labels[$fieldName] = $fieldLabel;
    }


/* *********************************************************
*/

    function labelFields($fieldNames,$fieldLabels)
    {
	    if( sizeof($fieldNames) != sizeof($fieldLabels) ) return 0;
	    for($i=0;$i<sizeof($fieldNames);$i++)
	       $this->labels[$fieldNames[$i]] = $fieldLabels[$i];
    }

/* *********************************************************
*/

    function setLabelBreak($HTML)
    {
	    $this->labelBreak = $HTML;
    }

/* *********************************************************
*/

    function setFieldBreak($HTML)
    {
	    $this->fieldBreak = $HTML;
    }

/* *********************************************************
*/

    function setPrimaryKey($pkey_name)
    {
	    $this->pkey = $pkey_name;
	    return $this->pkey;
    }

/* *********************************************************
*/

    function _putValue($fieldName,$fieldType="text",$fieldValue="")
    {
	    switch($fieldType)
	    {
              case "textarea":
	        if( $this->record[$fieldName] != "" )
	          return $this->record[$fieldName];
	        break;

	        case "text":
	        if( $this->record[$fieldName] != "" )
	          return " value=\"".$this->record[$fieldName]."\"";
	        else
	          return " value=\"".$_POST[$fieldName]."\"";
	        break;

	        case "select":
	        if( $this->record[$fieldName] == $fieldValue )
	          return " selected";
	        break;

	        case "multi":
	        if( strstr($this->record[$fieldName],$fieldValue) )
	          return " selected";
	        break;

	        case "radio":
	        if( $this->record[$fieldName] == $fieldValue )
	          return " checked";
	        break;

	        case "checkbox":
	        if( strstr($this->record[$fieldName],$fieldValue) )
	          return " checked";
	        break;

        }

    }

/* *********************************************************
*/
    function _putLabel($fieldName,$fieldLabel,$css="text",$focus=true)
    {
	    if($focus) $onclick = " onClick=\"forms['$this->formName'].$fieldName.select();\"";
	    echo "<label class=\"".$css."label\" for=\"$fieldName\"$onclick>".$fieldLabel."</label>$this->labelBreak";
    }


/* *********************************************************
*/
    function printForm()
    {
       echo "<form name=\"$this->formName\" action=\"".$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING']."&ilosc_bledow=1\" method=\"POST\" style=\"margin:0\">\n";
       for ($i=0; $i < $this->columns; $i++)
       {
          $byForce = false;
          $name = @mysql_field_name($this->fields,$i);
          $type = @mysql_field_type($this->fields,$i);
          $len  = @mysql_field_len($this->fields,$i);
          $flag = @mysql_field_flags($this->fields,$i);

          if( strstr($flag,"primary_key") ) $this->setPrimaryKey($name);
          if( isset($this->labels[$name]) ) $label = $this->labels[$name];
          else $label = $name;
          if( isset($this->forced[$name]) ) $byForce = $this->forced[$name];
          if( isset($this->hidden[$name]) ) $type = "skip";
          if( isset($this->password[$name]) ) $type = "password";

          switch($type)
          {
             case "real":
             case "int":
                $this->_putLabel($name,$label);
                if ($len<$this->textInputLength)
                    $length = $len;
                else
                    $length = $this->textInputLength;
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"$length\" MAXLENGTH=\"$len\" class=\"poleForm\"".$this->_putValue($name).">$this->fieldBreak";
             break;

             case "blob":
                $this->_putLabel($name,$label);
                if( ($len>$this->strField_toggle || $byForce == "textarea") && $byForce != "text" )
                     echo "<textarea name=\"$name\" id=\"$name\" rows=\"$this->textareaRows\" cols=\"$this->textareaCols\" class=\"textarea\">".$this->_putValue($name,"textarea")."</textarea>$this->fieldBreak";
                else echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"$this->textInputLength\" MAXLENGTH=\"$len\" class=\"poleForm\"".$this->_putValue($name).">$this->fieldBreak";
             break;

             case "string":

                if( strstr($flag,"enum") )
                {
                  $options = $this->_mysql_enum_values($this->table,$name);
                  if( ($len > $this->enumField_toggle || $byForce == "select") && $byForce != "radio")
                  {
	            $this->_putLabel($name,$label,"",false);
                    echo "<select name=\"$name\" id=\"$name\" size=\"1\" class=\"select\">\n";
                    foreach($options as $opt) echo "  <option value=\"$opt\"".$this->_putValue($name,"select",$opt).">$opt</option>\n";
                    echo "</select>$this->fieldBreak";
                }
                else
                {
	           $this->_putLabel($name,$label,"",false);
	           echo "<fieldset class=\"fieldset\">\n";
                   foreach($options as $opt){
                   echo "  <input type=\"radio\" name=\"$name\" id=\"{$name}_{$opt}\" value=\"$opt\" class=\"radio\"".$this->_putValue($name,"radio",$opt).">";
                   $this->_putLabel($name."_".$opt,$opt,"radio");
                }
                    echo "</fieldset><br>\n\n";
                 }
                }
                else if( strstr($flag,"set") ){
	              $options = $this->_mysql_enum_values($this->table,$name);
	              if( ($len > $this->enumField_toggle || $byForce == "multiselect") && $byForce != "checkbox" ){
		            $this->_putLabel($name,$label,"",false);
                    echo "<select name=\"".$name."[]\" id=\"$name\" size=\"$this->multiSelectSize\" multiple=\"multiple\" class=\"multiselect\">\n";
                    foreach($options as $opt) echo "  <option value=\"$opt\"".$this->_putValue($name,"multi",$opt).">$opt</option>\n";
                    echo "</select>$this->fieldBreak";
                  } else {
	                $this->_putLabel($name,$label,"",false);
	                echo "<fieldset class=\"fieldset\">\n";
	                $cb=0;
                    foreach($options as $opt){
	                   echo "  <input type=\"checkbox\" name=\"".$name."[]\" id=\"{$name}_{$cb}\" value=\"$opt\"".$this->_putValue($name,"checkbox",$opt).">";
	                   $this->_putLabel($name."_".$cb,$opt,"checkbox");
	                   $cb++;
                       }
                    echo "</fieldset><br>\n\n";
                  }
                }
                else{
	            $this->_putLabel($name,$label);
                if($len < $this->textInputLength) $length = $len; else $length=$this->textInputLength;
                if( ($len>$this->strField_toggle || $byForce == "textarea") && $byForce != "text" )
                  echo "<textarea name=\"$name\" id=\"$name\" rows=\"$this->textareaRows\" cols=\"$this->textareaCols\" class=\"textarea\">".$this->_putValue($name,"textarea")."</textarea>$this->fieldBreak";
                else echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"$length\" MAXLENGTH=\"$len\" class=\"poleForm\"".$this->_putValue($name).">$this->fieldBreak";
                }
             break;

             case "date":
                $this->_putLabel($name,$label);
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"0000-00-00\"");
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"10\" MAXLENGTH=\"10\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "datetime":
                $this->_putLabel($name,$label);
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"0000-00-00 00:00:00\"");
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"19\" MAXLENGTH=\"19\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "timestamp":
                for($ts=0;$ts<$len;$ts++) $zeroes .= "0";
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"$zeroes\"");
                $this->_putLabel($name,$label);
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"$len\" MAXLENGTH=\"$len\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "time":
                $this->_putLabel($name,$label);
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"00:00:00\"");
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"8\" MAXLENGTH=\"8\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "year":
                $this->_putLabel($name,$label);
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"0000\"");
                echo "<input type=\"text\" name=\"$name\" id=\"$name\" size=\"4\" MAXLENGTH=\"4\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "password":
                $this->_putLabel($name,$label);
                $value = ( isset($this->record) )?($this->_putValue($name)):("value=\"\"");
                echo "<input type=\"password\" name=\"$name\" id=\"$name\" size=\"8\" MAXLENGTH=\"8\" $value class=\"poleForm\">$this->fieldBreak";
             break;

             case "skip":
             break;

          } //end switch
        } //end for

        if( isset($this->record) ) echo "<input type=\"hidden\" name=\"pkey\" value=\"$this->pkeyID\">\n";
        echo "<input type=\"reset\" value=\"Anuluj\" class=\"button\"><input type=\"submit\" name=\"submit\" value=\"Zatwierdź\" class=\"button\"></form>\n";

    } //end function printForm

/* *********************************************************
*/
// RS - 2003-04-03
// dla sklepu rozalia
// OD TEGO MOMENTU SĽ FUNKCJE DEDYKOWANE!!!
    function verifyvalue($value,$triger)
    {
      for ($i=0;$i<$this->columns;$i++)
      {
         if (array_key_exists($i,$triger)) {$this->$triger[$i]($value[$i]);}
      }
    }


/***********************************************/
/* !!!! TUTAJ TRIGERKI DLA WARTOSCI POL !!!!!! */


function nopusto($war)
// sprawdza czy pole jest wypelnione
{
  if (!valid_isNoempty($_GET[$war]) && !valid_isNoempty($_POST[$war]))
     { echo "<FONT color=red>Błąd! :: </FONT> Pole ".$war." musi być wypełnione<br>";
       $this->licznik_bledow++;
     }
}

function kod_pocz($war)
// sprawdza poprawnosc kodu pocztowego
{
  if (!valid_isZipCode($_GET[$war]) && !valid_isZipCode($_POST[$war]))
     { echo "<FONT color=red>Błąd! :: </FONT> Błędny format pola ".$war."<br>";
       $this->licznik_bledow++;
     }
}

function telefon($war)
// sprawdza poprawnosc numeru telefonu
{
  if (!valid_containsDigits($_GET[$war],7) && !valid_containsDigits($_POST[$war],7))
     { echo "<FONT color=red>Błąd! :: </FONT> Pole ".$war." musi zawierać conajmniej siedem cyfr!<br>";
       $this->licznik_bledow++;
     }
}

function email($war)
// sprawdza poprawnosc adresu email
{
  if (!valid_isEmail($_GET[$war]) && !valid_isEmail($_POST[$war]))
     { echo "<FONT color=red>Błąd! :: </FONT> Błędny format pola ".$war."<br>";
       $this->licznik_bledow++;
     }
}

function unikal($war)
// sprawdza unikalnosc rekordu dla danego pola
{
  if (array_key_exists($war,$_POST))
  {
    $sql="select * from ".$this->table." where ".$war."='".$_POST[$war]."'";
    @mysql_select_db($this->DB,$this->conn);
    $result = @mysql_query($sql);
    $il_w = @mysql_num_rows($result);
          if ($il_w>0)
          { echo "<FONT color=red>Błąd! :: </FONT> Pole: ".$war." - wartość ".$_POST[$war]." już istnieje!<br>";
            $this->licznik_bledow++;
          }
  }
  elseif (array_key_exists($war,$_GET))
  {
    $sql="select * from ".$this->table." where ".$war."='".$_GET[$war]."'";
    @mysql_select_db($this->DB,$this->conn);
    $result = @mysql_query($sql);
    $il_w = @mysql_num_rows($result);
          if ($il_w>0)
          { echo "<FONT color=red>Błąd! :: </FONT> Pole: ".$war." - wartość ".$_POST[$war]." już istnieje!<br>";
            $this->licznik_bledow++;
          }
  }
  else
  if ($_POST[$war]=='' & $_GET[$war]=='')
     { echo "<FONT color=red>Błąd! :: </FONT> Pole ".$war." musi być wypełnione<br>";
       $this->licznik_bledow++;
     }
}

function genpass($value)
{
	$pass = $value;
	return $pass;
}

/***********************************************/
} //end class

?>
