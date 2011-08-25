<?php

namespace Quark\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(type="datetime")
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;

    /**
     * @ORM\ManyToMany(targetEntity="Tag")
     * @ORM\JoinTable(name="question_tag",
     *     joinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")}
     * )
     */
    protected $tags;    
    
    /**
     * @ORM\OneToMany(targetEntity="Quark\AnswerBundle\Entity\Answer", mappedBy="question")
     */
    protected $answers;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->answers = new ArrayCollection();
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

    /**
     * Add answers
     *
     * @param Quark\QuestionBundle\Entity\Answer $answers
     */
    public function addAnswers(\Quark\QuestionBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;
    }

    /**
     * Get answers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set accepted
     *
     * @param Quark\AnswerBundle\Entity\Accept $accepted
     */
    public function setAccepted(\Quark\AnswerBundle\Entity\Accept $accepted)
    {
        $this->accepted = $accepted;
    }

    /**
     * Get accepted
     *
     * @return Quark\AnswerBundle\Entity\Accept 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }
}