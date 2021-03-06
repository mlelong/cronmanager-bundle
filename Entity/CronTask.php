<?php

/**
 *
 * @author Pierre Feyssaguet <pfeyssaguet@gmail.com>
 * @since 01/11/15 12:48
 */

namespace DspSofts\CronManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use DspSofts\CronManagerBundle\Validator\Constraints as DspCmAssert;

/**
 * @ORM\Entity(repositoryClass="DspSofts\CronManagerBundle\Entity\Repository\CronTaskRepository")
 * @UniqueEntity("name")
 */
class CronTask
{
    const TYPE_SYMFONY = 'SYMFONY';
    const TYPE_COMMAND = 'COMMAND';
    const TYPE_URL = 'URL';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_cron_task", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isUnique = true;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Gedmo\Slug(fields={"name"})
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $command;

    /**
     * @ORM\Column(type="string", length=255)
     * @DspCmAssert\Planification
     */
    private $planification;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $timeout;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @ORM\Column(type="boolean")
     */
    private $relaunch = false;

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
     * Set name
     *
     * @param string $name
     *
     * @return CronTask
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

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
     * Set lastrun
     *
     * @param \DateTime $lastRun
     *
     * @return CronTask
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return \DateTime
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set planification
     *
     * @param string $planification
     *
     * @return CronTask
     */
    public function setPlanification($planification)
    {
        $this->planification = $planification;

        return $this;
    }

    /**
     * Get planification
     *
     * @return string
     */
    public function getPlanification()
    {
        return $this->planification;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout
     *
     * @return CronTask
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return CronTask
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set command
     *
     * @param string $command
     *
     * @return CronTask
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CronTask
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return CronTask
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isUnique
     *
     * @param boolean $isUnique
     *
     * @return CronTask
     */
    public function setIsUnique($isUnique)
    {
        $this->isUnique = $isUnique;

        return $this;
    }

    /**
     * Get isUnique
     *
     * @return boolean
     */
    public function getIsUnique()
    {
        return $this->isUnique;
    }

    /**
     * @return boolean
     */
    public function getRelaunch()
    {
        return $this->relaunch;
    }

    /**
     * @param boolean $relaunch
     * @return CronTask
     */
    public function setRelaunch($relaunch)
    {
        $this->relaunch = $relaunch;

        return $this;
    }
}
