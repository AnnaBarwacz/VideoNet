<?php
namespace Grupa\VideoNetBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Grupa\VideoNetBundle\Entity\ForumTopic as ForumTopic;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class ForumPost
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\Column(type="integer", name="post_author_id")
     */
    protected $author;

	/**
     * @ORM\ManyToOne(targetEntity="ForumTopic", inversedBy="posts")
     * @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     */
    protected $topic;
	
	/**
     * @ORM\Column(type="datetime", name="post_time")
     */
    protected $postTime;
	
	public function __construct()
	{
		$this->postTime = new \DateTime('now');
	}
	
	/**
     * @ORM\Column(type="string", length=1000, name="post_content")
     */
    protected $content;
	
	/**
     * @ORM\Column(type="integer", name="post_status")
     */
    protected $status;

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
     * Set author
     *
     * @param integer $author
     * @return ForumPost
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer 
     */
    public function getAuthor()
    {
        return $this->author;
    }

  
    /**
     * Set content
     *
     * @param string $content
     * @return ForumPost
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ForumPost
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set topic
     *
     * @param \Grupa\VideoNetBundle\Entity\ForumTopic $topic
     * @return ForumPost
     */
    public function setTopic(\Grupa\VideoNetBundle\Entity\ForumTopic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \Grupa\VideoNetBundle\Entity\ForumTopic 
     */
    public function getTopic()
    {
        return $this->topic;
    }
}
