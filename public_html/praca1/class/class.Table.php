<?
/*
Functions:
	* Table($col)									- constructor of the class and accepts number
																	of columns for the table

	* AddRow($row, $property="")								- adds a single row to the table. accepts a string
																	separated by "^".
																	EXAMPLE:
																		AddRow("Junrey^Beduya^Programmer","class=level2");
																			- the above code adds "Junrey" on the first
																				column, then "Beduya" on the second and so forth

	* Process()										- this function is the main of this class.
																	It processes the table to be displayed.

	* Display()										- print the table

	* setColWidth($width)					- this funcion sets the width of every column
																	of the table

	* setHeaders($header)					-	sets the text to be displayed as headers of
																	the table

	* setProperties($property)		- sets the property of the table

	* setHeaderStyle($start, $end)- sets the style of the header such as bold or italic.
																	start and end means start tag and end tag
																	EXAMPLE:
																		setHeaderStyle("<font face=Verdana><b>", "</b></font>");

	* setHeaderProperty($property)-	sets the property of the header. Either you include
																	a class or whatever
																	EXAMPLE:
																		setHeaderProperty("bgcolor=green");
																		setHeaderProperty("class=brownish");

	* setColAlignment($alignment)		- this function sets the alignment of every column inside
																		the table the default alignment is left.

	* setSpacing($space)						- sets the spacing of the table

	* setBorder($border) 						- sets the border of the table

	* setPadding($pad)							- sets the padding of the table

	* getTable()										- returns the processed table
*/

class Table {
	var $columns;											// holds the number of columns
	var $width = array();							// holds the width of every column
	var $colProperties = array();			// holds the property of every column such as alignment

	var $rowCount;										// number of rows in the table
	var $row = array();								// holds the value of every row
	var $properties;									// holds the property of the table

	var $headerProperty;							// has the value of the header properties
	var $headerStyle = array();				// header style whether bold or whatever
	var $headers = array();						// holds the text to be displayed as header

	var $padding;											// table padding
	var $spacing;											// table spacing
	var $border;											// table border

	var $table;
	var $percent;

	function Table($col) {
		$this->columns=$col;
		$this->rowCount=0;
		$this->border=0;
		$this->padding=0;
		$this->spacing=0;
		$this->headerStyle["start"]="<center><b>";
		$this->headerStyle["end"]="<center><b>";
		$this->percent = false;
		for ($i=0;$i<$col-1; $i++){
			$this->colProperties[$i]["align"] = "align=left";

		}
	}

	function setColWidth($colWidth) {
		$temparr = split(",", trim($colWidth));
		for ($i=0; $i<count($temparr); $i++) {
			$this->width[$i]=(int)$temparr[$i];
		}
	}

	function setPercent($percent=true) {
		$this->percent = $percent;
	}

	function setHeaders($headers) {
		$temparr = split("\^", $headers);
		for ($i=0; $i<count($temparr); $i++) {
			$this->headers[$i]=$temparr[$i];
		}
	}

	function Process() {
		if ($this->columns<=0) {
			return "There is no table to display.";
		}
		$width = 0;
		for ($i=0; $i < $this->columns; $i++) {
			$width += (int)$this->width[$i];
		}
		$this->properties .= " width=" . $width;
		$this->properties .= ($this->percent==true)?"%":"";
		$temp = "<table cellspacing=" . $this->spacing . $this->properties;
		$temp .= " cellpadding=". $this->padding . " border=" . $this->border .">\n";
		$temp .= "\t<tr " . $this->headerProperty . ">\n";
		for ($y=0; $y < $this->columns; $y++) {
			$temp .= "\t\t<td width=" . $this->width[$y] . (($this->percent==true)?"%":"") . ">";
			$temp .= $this->headerStyle["start"] . $this->headers[$y] . $this->headerStyle["end"] . "</td>\n";
		}
		$temp .= "\t</tr>\n";
		for ($i=0; $i< $this->rowCount; $i++) {
			$temparr = split("\^", $this->row[$i]["fields"]);
			$temp .= "\t<tr " . $this->row[$i]["properties"] . ">\n";
			for ($y=0; $y < $this->columns; $y++) {
				$temp .= "\t\t<td valign=\"middle\" width=" . $this->width[$y] . (($this->percent==true)?"%":"") . " " . $this->colProperties[$y]["align"].">".$temparr[$y]."</td>\n";
			}
			$temp .= "\t</tr>\n";
		}
		$temp .= "</table>";
		$this->table = $temp;
	}

	function Display() {
		echo $this->table;
	}

	function getTable() {
		return $this->table;
	}

	function setProperties($property) {
		$this->properties=$property;
	}

	function setHeaderStyle($start, $end) {
		$this->headerStyle["start"]=$start;
		$this->headerStyle["end"]=$end;
	}

	function setHeaderProperty($property) {
		$this->headerProperty=$property;
	}

	function AddRow($row, $property="") {
		$count = $this->rowCount++;
		$this->row[$count]["fields"] = $row;
		$this->row[$count]["properties"] = $property;
	}

	function setPadding($pad) {
		$this->padding = $pad;
	}

	function setSpacing($space) {
		$this->spacing = $space;
	}

	function setBorder($border) {
		$this->border = $border;
	}

	function setColAlignment($alignment) {
		$temparr = split(",",$alignment);
		for ($i=0;$i<$this->columns;$i++) {
			$temp = trim($temparr[$i]);
			$this->colProperties[$i]["align"]= "align=" . ( ($temp=="")?"left":$temp );
		}
	}


}

?>