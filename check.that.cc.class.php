 <?PHP 
/**
* @abstract ValidateCreditCardType
* @version 1.0
* @author https://github.com/davestj
* @category credit card types
* 
*/

/**
* @trait DefinedTypes
* @access public
* @example use DefinedTypes;
*/
trait DefinedTypes {
    public $disc   = 'Discover';
    public $amex   = 'American Express';
    public $visa   = 'Visa';
    public $mc     = 'Master Card';
    public $diners = 'Diners Club';
}

class ValidateCreditCardType {
    
    public $credit_card_number = '';
    public $length             = '';
    public $type               = '';
    use DefinedTypes;
/**
* @abstract get the credit card type
* @method GetType($cc);    
* @param mixed $cc;
*/
function GetType($cc){
 $this->length             = strlen( $cc );
 $this->credit_card_number = $cc;

 
/**
* @param $cc
* @return American Express    
*/
if(preg_match( '/^3[4|7]/', $this->credit_card_number ) && $this->length == 15 ){
        $this->type =  (string)$this->amex;
        return ($this->type);
/**
* @param $cc
* @return Visa    
*/
}else if(preg_match( '/^4/', $this->credit_card_number )  && ( $this->length == 13 || $this->length == 16 ) ){
        $this->type =  (string)$this->visa;
        return ($this->type);
/**
* @param $cc
* @return Master Card    
*/
}else if(preg_match( '/^5[1-5]/', $this->credit_card_number ) && $this->length == 16 ){
        $this->type =  (string)$this->mc; 
        return ($this->type);
/**
* @param $cc
* @return Discover    
*/
}else if(preg_match( '/^6011.{12}$/', $this->credit_card_number ) && $this->length == 16 ){
        $this->type =  (string)$this->disc;
       return ($this->type);

/**
* @param $cc
* @return Diners Club    
*/
}else if( preg_match( '/^30[0-5].{11}$|^3[68].{12}$/', $this->credit_card_number ) && $this->length == 14 ){
        $this->type =  (string)$this->diners;
        return ($this->type);
/**
*  @return FALSE    
*/
}else{
        return (FALSE);
}

}

}


/**
* test case usage
* 
* @var mixed
*/


$amx    = (string)'345810334649684';
$vis    = (string)'4485872411708231';
$vis13  = (string)'4539631506535';
$mc     = (string)'5212839188252484';
$dc     = (string)'36936402726148';
$disc   = (string)'6011340823715366';

$checkit = new ValidateCreditCardType();
//change var below to see compare card types
$type = $checkit->GetType($dc);
echo 'card type: '.$type.' ';




?> 

