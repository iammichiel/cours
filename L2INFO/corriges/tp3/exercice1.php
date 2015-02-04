<?php

class Personne {

    private $firstName;
    private $lastName;
    private $gender;
    private $dateOfBirth;

    public function __construct($firstName, $lastName, $dateOfBirth, $gender)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->firstName = $firstName;
        $this->gender = $gender;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function getFullName()
    {
        return ($this->firstName . ' ' . $this->lastName);
    }

    public function getNextBirthdayDate()
    {
        $birthdayDate = DateTime::createFromFormat('Y-m-d', date('Y') . $this->getDateOfBirth()->format('-m-d'));
        if (new DateTime() > $birthdayDate) {
            $birthdayDate->add(new DateInterval('P1Y'));
        }

        return $birthdayDate;
    }

    public function getDaysBeforeNextBirthday()
    {
        $interval = $this->getNextBirthdayDate()->diff(new DateTime());

        return $interval->days;
    }
}

$tab = array(
    new Personne('toto', 't', DateTime::createFromFormat('Y-m-d', '2001-01-01'), 'Homme'),
    new Personne('titi', 't', DateTime::createFromFormat('Y-m-d', '1980-06-06'), 'Homme'),
    new Personne('tutu', 't', DateTime::createFromFormat('Y-m-d', '2010-02-10'), 'Homme')
);

foreach ($tab as $personne) {
    echo $personne->getFullName() . '<br/>';
    echo $personne->getDaysBeforeNextBirthday() . '<br/>';
}
