<?php

class tx_semasourcecode_evalhighlight {

	function returnFieldJS() {

		//return 'return value + " [added by JS]";';
		return 
<<< END
return value;
END;

	}

	function evaluateFieldValue($value, $is_in, &$set) {

		if (preg_match('/^[0-9,]+$/', $value)) {
			return $value;
		} else {
			return '';
		}

	}

}

?>