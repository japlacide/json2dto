<?php
/**
 * ================================================
 * DTO Generated by Json2Dto
 *
 * @author Tiago Butzke <tiago.butzke@gmail.com>
 * ================================================
 */
 namespace Json2Dto;

 

 class SeatTypes
 {
    
    /**
     * @var string
     */
     protected $name;
    
    /**
     * @var string
     */
     protected $discount;
    
    /**
     * @var string
     */
     protected $id;
    
    
    /**
     * Get name
     *
     * @return string
     */
     public function getName()
     {
        return $this->name;
     }
    
    /**
     * Set name
     *
     * @param string $name
     */
     public function setName($name)
     {
        $this->name = $name;
     }
     
    /**
     * Get discount
     *
     * @return double
     */
     public function getDiscount()
     {
        return $this->discount;
     }
    
    /**
     * Set discount
     *
     * @param double $discount
     */
     public function setDiscount($discount)
     {
        $this->discount = $discount;
     }
     
    /**
     * Get id
     *
     * @return integer
     */
     public function getId()
     {
        return $this->id;
     }
    
    /**
     * Set id
     *
     * @param integer $id
     */
     public function setId($id)
     {
        $this->id = $id;
     }
     
 }
