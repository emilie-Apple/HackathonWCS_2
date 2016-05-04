<?php

namespace DefiBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * uploads
 */
class uploads
{
    /**
     * @var int
     */
    private $id;

    public $file;
    /**
     * @var string
     */
    public $uploads;


    protected function getUploadDir()
    {
        return 'uploads';
    }
    protected function getUploadRootDir()
    {
        return '/../../../web/uploads';
    }

    public function getWebPath()
    {
        return null === $this->uploads ? null : $this->getUploadDir().'/'.$this->uploads;
    }

    public function getAbsolutePath()
    {
        return null === $this->uploads ? null : $this->getUploadRootDir().'/'.$this->uploads;
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
        /**
         * Set photos
         *
         * @param string $photos
         * @return Uploads
         */
    }
    public function setuploads($uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }
    /**
     * Get photos
     *
     * @return string
     */
    public function getuploads()
    {
        return $this->uploads;
    }


    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->uploads = uniqid().'.'.$this->file->guessExtension();
    }

    }


    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->uploads);

        unset($this->file);
    }



    public function removeUpload()

    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

}
