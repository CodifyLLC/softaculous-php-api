<?php
namespace CodifyLLC\softaculous;

class softaculousPost {
    public $softsubmit;
    public $softdomain;
    public $softdirectory;
    public $softdb;
    public $dbusername;
    public $dbuserpass;
    public $admin_username;
    public $admin_pass;
    public $admin_email;
    public $language;
    public $site_name;
    public $site_desc;
    public $noemail;

    /**
     * @return mixed
     */
    public function getSoftsubmit()
    {
        return $this->softsubmit;
    }

    /**
     * @param mixed $softsubmit
     */
    public function setSoftsubmit($softsubmit)
    {
        $this->softsubmit = $softsubmit;
    }

    /**
     * @return mixed
     */
    public function getSoftdomain()
    {
        return $this->softdomain;
    }

    /**
     * @param mixed $softdomain
     */
    public function setSoftdomain($softdomain)
    {
        $this->softdomain = $softdomain;
    }

    /**
     * @return mixed
     */
    public function getSoftdirectory()
    {
        return $this->softdirectory;
    }

    /**
     * @param mixed $softdirectory
     */
    public function setSoftdirectory($softdirectory)
    {
        $this->softdirectory = $softdirectory;
    }

    /**
     * @return mixed
     */
    public function getSoftdb()
    {
        return $this->softdb;
    }

    /**
     * @param mixed $softdb
     */
    public function setSoftdb($softdb)
    {
        $this->softdb = $softdb;
    }

    /**
     * @return mixed
     */
    public function getDbusername()
    {
        return $this->dbusername;
    }

    /**
     * @param mixed $dbusername
     */
    public function setDbusername($dbusername)
    {
        $this->dbusername = $dbusername;
    }

    /**
     * @return mixed
     */
    public function getDbuserpass()
    {
        return $this->dbuserpass;
    }

    /**
     * @param mixed $dbuserpass
     */
    public function setDbuserpass($dbuserpass)
    {
        $this->dbuserpass = $dbuserpass;
    }

    /**
     * @return mixed
     */
    public function getAdminUsername()
    {
        return $this->admin_username;
    }

    /**
     * @param mixed $admin_username
     */
    public function setAdminUsername($admin_username)
    {
        $this->admin_username = $admin_username;
    }

    /**
     * @return mixed
     */
    public function getAdminPass()
    {
        return $this->admin_pass;
    }

    /**
     * @param mixed $admin_pass
     */
    public function setAdminPass($admin_pass)
    {
        $this->admin_pass = $admin_pass;
    }

    /**
     * @return mixed
     */
    public function getAdminEmail()
    {
        return $this->admin_email;
    }

    /**
     * @param mixed $admin_email
     */
    public function setAdminEmail($admin_email)
    {
        $this->admin_email = $admin_email;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->site_name;
    }

    /**
     * @param mixed $site_name
     */
    public function setSiteName($site_name)
    {
        $this->site_name = $site_name;
    }

    /**
     * @return mixed
     */
    public function getSiteDesc()
    {
        return $this->site_desc;
    }

    /**
     * @param mixed $site_desc
     */
    public function setSiteDesc($site_desc)
    {
        $this->site_desc = $site_desc;
    }

    /**
     * @return mixed
     */
    public function getNoemail()
    {
        return $this->noemail;
    }

    /**
     * @param mixed $noemail
     */
    public function setNoemail($noemail)
    {
        $this->noemail = $noemail;
    }

    public function setKeyValue($key, $val)
    {
        $this->$key = $val;
    }
    
}