<?php
class User{
    private $id;
    private $nom;
    private $prenom;
    private $mail;    
    private $mdp;    
    private $role;
    private $valid;
    
    function __construct($id, $nom, $prenom, $mail, $mdp, $role,$valid) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->role = $role;
        $this->valid = $valid;
    }

    public function __toString() {
        return "id=".$this->id.  "nom=".$this->nom. "prenom=".$this->prenom. "mail=".$this->mail. "mdp=".$this->mdp. "role=".$this->role. "valid=".$this->valid;
    } 
    
    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}
    
    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}   
    
    public function getMail(){return $this->mail;}
    public function setMail($mail){$this->mail = $mail;}    

    public function getMdp(){return $this->mdp;}
    public function setMdp($mdp){$this->mdp = $mdp;}        
    
    public function getRole(){return $this->role;}
    public function setRole($role){$this->role = $role;}    

    public function getValid(){return $this->valid;}
    public function setValid($valid){$this->valid = $valid;}      
}
?>