<?php
namespace zendsite\model;
use Zend\Db\tableGateway\tableGateway;

class itemtable
{
  protected $tableGateway;

                    function __construct(tableGateway $tableGateway)
                    {
                      $this->tableGateway = $tableGateway ;
                    }
                  public function find_all()
                  {
                    return $this->tableGateway->select();
                  }

                  public function find_by_id($id=0){

                    $id = (int)$id;
                    $result = $this->tableGateway->select(array('id'=>$id));
                    $row = $this->tableGateway->current();

                          if($row){

                            return $row;
                          }
                          else {return null;;}
                        }




                        public function save(item $item ){

                          $data = array('item_name' => $item->item_name,
                                        'item_price'=> $item->item_price,
                                        'item_expireddate' => $item_expireddate,

                                        );
                            $id = (int)$pizza->id;
                            if($id == 0 ) {
                              //insert new record

                            }else {
                              update exsisting record
                              if($this->find_by_id($id)){
                                $this->tableGateway-update($date , array('id'=>$id))
                              }
                              else{
                                throw new \Exception("item couldnt be found");

                              }
                            }
                                }

                                public function delete($id=0){

                                  $this->tableGateway->delete(array('id'=>(int)$id));

                                }

}



 ?>
