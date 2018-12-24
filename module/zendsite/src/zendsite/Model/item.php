
<?php
namespace item\Model;
use Zend\Inputfilter\InputFilter;
use Zend\Inputfilter\InputFilterInterface;
use Zend\Inputfilter\InputFilterAwareInterface;


namespace item\Model;
class item implements InputFilterAwareInterface

       {

        public $id;
        public $name;
        public $item_expireddate;
        public $item_price;

        protected $inputFilter;

        public function __construct (){

        }


        public function exchengeArray($data){

        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->name = (!empty($data['name'])) ? $data['name'] : null;
        $this->item_expireddate = (!empty($data['item_expireddate'])) ? $data['item_expireddate'] : null;
        $this->$item_price = (!empty($data['item_price'])) ? $data['item_price'] : null;
        }

        public function getArrayCopy(){

          return get_object_vars($this);

        }

        public function setinputFilter(inputFilter $inputfilter)
        {
          throw new \Exception("not used");
        }

        public function getInputFilter(){

          if(!$this->InputFilter){$inputfilter = new inputFilter();
            $inputFilter->add(array('name' => 'name',
            'required' => true,
            'filters'  => array(
            'name' => 'StringTrim',
            'name' => 'StripTags'),
            'validators' => 'StringLength',
            'options' => array (
            'encoding' => 'UTF-8',
            'min' => 5,
            'max'=> 30,
          )));
          $inputFilter->add(array('name' => 'item_price',
          'required' => true,
          'filters'  => array(
          'name' => 'StringTrim',
          'name' => 'StripTags'),
          'validators' => 'StringLength',
          'options' => array (
          'encoding' => 'UTF-8',
          'min' => 5,
          'max'=> 8,
        )));
        $inputFilter->add(array('name' => 'item_expireddate',
        'required' => true,
        'filters'  => array(
        'name' => 'StringTrim',
        'name' => 'StripTags'),
        'validators' => 'StringLength',
        'options' => array (
        'encoding' => 'UTF-8',
        'min' => 5,
        'max'=> 8,
        )));
        $this->inputFilter = $inputfilter ;
        }
          return $this->inputFilter;
        }


      }



 ?>
