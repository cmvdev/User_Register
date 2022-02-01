<?php

/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 01.02.22
 * Time: 11:33
 */
class User
{
    private $vorname = "";
    private $nachname = "";
    private $strasse = "";
    private $postleitzahl = "";
    private $ort = "";
    private $telefon = "";
    private $email = "";
    private $beschreibung = "";


    /**
     * User constructor.
     * @param string $vorname
     * @param string $nachname
     * @param string $strasse
     * @param string $hausnummer
     * @param string $postleitzahl
     * @param string $ort
     * @param string $telefon
     * @param string $beschreibung
     */
    public function __construct($vorname, $nachname, $strasse, $postleitzahl, $ort, $email, $telefon, $beschreibung)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->strasse = $strasse;
        $this->postleitzahl = $postleitzahl;
        $this->ort = $ort;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->beschreibung = $beschreibung;
    }
    
    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * @param string $nachname
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }

    /**
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * @param string $strasse
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
    }
    

    /**
     * @return string
     */
    public function getPostleitzahl()
    {
        return $this->postleitzahl;
    }

    /**
     * @param string $postleitzahl
     */
    public function setPostleitzahl($postleitzahl)
    {
        $this->postleitzahl = $postleitzahl;
    }

    /**
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param string $ort
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * @param string $beschreibung
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }




    /**
     * @return boolean
     */
    public function checkEmail()
    {
        return preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[de |com |at]{2,3}$/", $this->email);
    }
    public function checkTel()
    {
        return preg_match("/^[0-9]+$/", $this->telefon);
    }

    public function checkBeschreibung()
    {
        return preg_match("/^[a-zA-Z0-9]{0,300}$/", $this->beschreibung);
    }

    public function checkStrasse()
    {
        return preg_match("/^[a-zA-Z]+(\s)[0-9]+$/", $this->strasse);
    }
    
}