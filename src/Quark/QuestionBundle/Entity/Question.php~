<?php

namespace Quark\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /*
     * @ORM\Column(type="integer")
     */
    protected $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $body_html;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $views;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $interested_users;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $answer_count;

    /**
     * @ORM\ManyToMany(targetEntity="Tag")
     * @ORM\JoinTable(name="question_tag",
     *     joinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")}
     * )
     */
    protected $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body_html
     *
     * @param text $bodyHtml
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->body_html = $bodyHtml;
    }

    /**
     * Get body_html
     *
     * @return text 
     */
    public function getBodyHtml()
    {
        return $this->body_html;
    }

    /**
     * Set views
     *
     * @param integer $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set interested_users
     *
     * @param integer $interestedUsers
     */
    public function setInterestedUsers($interestedUsers)
    {
        $this->interested_users = $interestedUsers;
    }

    /**
     * Get interested_users
     *
     * @return integer 
     */
    public function getInterestedUsers()
    {
        return $this->interested_users;
    }

    /**
     * Set answer_count
     *
     * @param integer $answerCount
     */
    public function setAnswerCount($answerCount)
    {
        $this->answer_count = $answerCount;
    }

    /**
     * Get answer_count
     *
     * @return integer 
     */
    public function getAnswerCount()
    {
        return $this->answer_count;
    }

    /**
     * Add tags
     *
     * @param Quark\QuestionBundle\Entity\Tag $tags
     */
    public function addTags(\Quark\QuestionBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}