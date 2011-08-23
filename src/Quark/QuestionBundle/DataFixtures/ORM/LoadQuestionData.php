<?php

namespace Quark\QuestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Quark\QuestionBundle\Entity\Question;

class LoadQuestionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        $question = new Question();
        $question->setTitle('Demo Question?');
        $question->setBody('This is a small demo question created using 
            fixtures');
        $question->setBodyHtml('<strong>This is a small demo question created using 
            fixtures</strong>');
        $question->setViews(14);
        $question->setInterestedUsers(1);
        $question->setAnswerCount(2);

        $manager->persist($question);
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}