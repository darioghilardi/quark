<?php

namespace Quark\AnswerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="accept")
 */
class Accept
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Quark\AnswerBundle\Entity\Answer")
     * @ORM\JoinColumn(name="answer_id", referencedColumnName="id")
     */
    protected $answer_id;
    
    /**
     * @ORM\OneToOne(targetEntity="Quark\QuestionBundle\Entity\Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    protected $question_id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;

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
     * Set question_id
     *
     * @param Quark\QuestionBundle\Entity\Question $questionId
     */
    public function setQuestionId(\Quark\QuestionBundle\Entity\Question $questionId)
    {
        $this->question_id = $questionId;
    }

    /**
     * Get question_id
     *
     * @return Quark\QuestionBundle\Entity\Question 
     */
    public function getQuestionId()
    {
        return $this->question_id;
    }

    /**
     * Set answer_id
     *
     * @param Quark\AnswerBundle\Entity\Accept $answerId
     */
    public function setAnswerId(\Quark\AnswerBundle\Entity\Accept $answerId)
    {
        $this->answer_id = $answerId;
    }

    /**
     * Get answer_id
     *
     * @return Quark\AnswerBundle\Entity\Accept 
     */
    public function getAnswerId()
    {
        return $this->answer_id;
    }
}