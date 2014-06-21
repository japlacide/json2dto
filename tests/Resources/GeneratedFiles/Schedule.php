<?php
/**
 * ================================================
 * DTO Generated by Json2Dto
 *
 * @author Tiago Butzke <tiago.butzke@gmail.com>
 * ================================================
 */
 namespace Json2Dto;

 

 class Schedule
 {
    
    /**
     * @var string
     */
     protected $id;
    
    /**
     * @var string
     */
     protected $date;
    
    /**
     * @var string
     */
     protected $time;
    
    /**
     * @var string
     */
     protected $timezone;
    
    
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
     
    /**
     * Get date
     *
     * @return string
     */
     public function getDate()
     {
        return $this->date;
     }
    
    /**
     * Set date
     *
     * @param string $date
     */
     public function setDate($date)
     {
        $this->date = $date;
     }
     
    /**
     * Get time
     *
     * @return string
     */
     public function getTime()
     {
        return $this->time;
     }
    
    /**
     * Set time
     *
     * @param string $time
     */
     public function setTime($time)
     {
        $this->time = $time;
     }
     
    /**
     * Get timezone
     *
     * @return string
     */
     public function getTimezone()
     {
        return $this->timezone;
     }
    
    /**
     * Set timezone
     *
     * @param string $timezone
     */
     public function setTimezone($timezone)
     {
        $this->timezone = $timezone;
     }
     
 }