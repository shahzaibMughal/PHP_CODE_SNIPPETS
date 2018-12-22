<?php


  // isBlank('abcd')
  // * validate data presence
  // * uses trim() so empty spaces don't count
  // * uses === to avoid false positives
  // * better than empty() which considers "0" to be empty
  function isBlank($value) {
    return !isset($value) || trim($value) === '';
  }

  // hasPresence('abcd')
  // * validate data presence
  // * reverse of isBlank()
  // * more developer friendly name
  function hasPresence($value) {
    return !isBlank($value);
  }


   // has_valid_email_format('nobody@nowhere.com')
   // * validate correct format for email addresses
   // * format: [chars]@[chars].[2+ letters]
   // * preg_match is helpful, uses a regular expression
   //    returns 1 for a match, 0 for no match
   //    http://php.net/manual/en/function.preg-match.php
   function hasValidEmailFormat($email) {
     $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
     return preg_match($email_regex, $email) === 1;
   }

 ?>
