<?php
class Annonces
{
    private $_id_annonce;
    private $_titre;
    private $_description;
    private $_photo;
    private $_prix;
    private $_annonce_date;
    private $_user_mail;
    private $_annonce_pdf;
    private $_j2;
    private $_j15;

    // ******************** CONSTRUCT *****************
    public function __construct(array $data)
    {
        $this->hydrate($data);

    }
    // ********************* HYDRATATION **************
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            //egale aux setter
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    // **************************  SETTER  *****************


    /**
     * Get the value of _id_annonce
     */ 
    public function get_id_annonce()
    {
        return $this->_id_annonce;
    }

    /**
     * Set the value of _id_annonce
     *
     * @return  self
     */ 
    public function set_id_annonce($id_annonce)
    {
        $id_annonce = (int) $id_annonce;
        if($id_annonce>0)
        {
            $this->_id_annonce = $id_annonce;
        }
    }

    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($titre)
    {
        if(is_string($titre)){
           $this->_titre = $titre; 
        }
    }


    /**
     * Get the value of _description
     */ 
    public function get_description()
    {
        return $this->_description;
    }

    /**
     * Set the value of _description
     *
     * @return  self
     */ 
    public function set_description($description)
    {
        if(is_string($description)){
            $this->_description = $description; 
         }
    }

    /**
     * Get the value of _photo
     */ 
    public function get_photo()
    {
        return $this->_photo;
    }

    /**
     * Set the value of _photo
     *
     * @return  self
     */ 
    public function set_photo($_photo)
    {
        $this->_photo = $_photo;

        return $this;
    }

    /**
     * Get the value of _prix
     */ 
    public function get_prix()
    {
        return $this->_prix;
    }

    /**
     * Set the value of _prix
     *
     * @return  self
     */ 
    public function set_prix($prix)
    {
        if(is_float($prix)){
            $this->_prix = $prix; 
         }
    }

    /**
     * Get the value of _annonce_date
     */ 
    public function get_annonce_date()
    {
        return $this->_annonce_date;
    }

    /**
     * Set the value of _annonce_date
     *
     * @return  self
     */ 
    public function set_annonce_date($annonce_date)
    {
        $this->_annonce_date = $annonce_date;

        return $this;
    }

    /**
     * Get the value of _user_mail
     */ 
    public function get_user_mail()
    {
        return $this->_user_mail;
    }

    /**
     * Set the value of _user_mail
     *
     * @return  self
     */ 
    public function set_user_mail($_user_mail)
    {
        $this->_user_mail = $_user_mail;

        return $this;
    }

    /**
     * Get the value of _annonce_pdf
     */ 
    public function get_annonce_pdf()
    {
        return $this->_annonce_pdf;
    }

    /**
     * Set the value of _annonce_pdf
     *
     * @return  self
     */ 
    public function set_annonce_pdf($_annonce_pdf)
    {
        $this->_annonce_pdf = $_annonce_pdf;

        return $this;
    }

    /**
     * Get the value of _j2
     */ 
    public function get_j2()
    {
        return $this->_j2;
    }

    /**
     * Set the value of _j2
     *
     * @return  self
     */ 
    public function set_j2($_j2)
    {
        $this->_j2 = $_j2;

        return $this;
    }

    /**
     * Get the value of _j15
     */ 
    public function get_j15()
    {
        return $this->_j15;
    }

    /**
     * Set the value of _j15
     *
     * @return  self
     */ 
    public function set_j15($_j15)
    {
        $this->_j15 = $_j15;

        return $this;
    }
}