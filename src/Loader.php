<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/20/14
 * Time: 12:26 AM
 */

namespace Json2Dto;


use Json2Dto\Exceptions\FileNotExistsException;
use Json2Dto\Exceptions\JsonDecodeProblemException;

class Loader
{
    /**
     * @var \SplFileObject
     */
    protected $file;

    /**
     * @var \stdClass
     */
    protected $json;

    /**
     * @var array
     */
    protected $objects;

    /**
     * @param string $fileName
     * @throws Exceptions\FileNotExistsException
     */
    public function __construct($fileName)
    {
        if (!file_exists($fileName)) {
            throw new FileNotExistsException("The file [{$fileName}] do not exists.");
        }

        $this->file = new \SplFileObject($fileName);
    }

    /**
     * Load json content and save classes format in memory
     *
     * @throws Exceptions\JsonDecodeProblemException
     */
    public function load()
    {
        $this->loadJson();
        if ($this->json == null) {
            throw new JsonDecodeProblemException(
                "It's not possible decode json content. Please, verify the json syntax and try again."
            );
        }

        $this->loadNode($this->json);
    }

    /**
     * Trigger a json node
     *
     * @param \stdClass $node
     */
    protected function loadNode(\stdClass $node)
    {
        $properties = get_object_vars($node);

        foreach ($properties as $property => $value) {
            var_dump($property);

            if ($property == '') {
                continue;
            }

            // is a object
            if ($this->isInternalType($property) && is_object($value)) {
                var_dump('*** Object');
                $this->loadNode($value);
            }

            // is a collection
            if ($this->isInternalType($property) && is_array($value)) {
                var_dump('*** Collection');
            }

            // is a property
            if ($this->isInternalType($property) && $this->isInternalType($value)) {
                var_dump('*** Property');
            }
        }
    }

    protected function isInternalType($property)
    {
        return (is_string($property) || is_int($property) || is_bool($property) || is_float($property));
    }

    /**
     * Load file content and decode the json
     */
    protected function loadJson()
    {
        $lines = '';
        while (!$this->file->eof()) {
            $lines .= $this->file->fgets();
        }

        $this->json = json_decode($lines);
    }
} 