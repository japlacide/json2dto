<?php
/**
 * ================================================
 * DTO Generated by Json2Dto
 *
 * @author Tiago Butzke <tiago.butzke@gmail.com>
 * ================================================
 */
 namespace Json2Dto;

 use Json2Dto\Current;
use Json2Dto\Default;


 class Station
 {
    
    /**
     * @var Current
     */
     protected $current;
    
    /**
     * @var Default
     */
     protected $default;
    
    
    /**
     * Get current
     *
     * @return Current
     */
     public function getCurrent()
     {
        return $this->current;
     }
    
    /**
     * Set current
     *
     * @param Current $current
     */
     public function setCurrent(Current $current)
     {
        $this->current = $current;
     }
    
    /**
     * Get default
     *
     * @return Default
     */
     public function getDefault()
     {
        return $this->default;
     }
    
    /**
     * Set default
     *
     * @param Default $default
     */
     public function setDefault(Default $default)
     {
        $this->default = $default;
     }
    
 }